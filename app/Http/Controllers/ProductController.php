<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function all_product()
    {
        return view('admin.manage.product');
    }
    public function fetchdata()
    {
        $all_product = Product::orderby('product_location', 'asc')->get();
        return response()->json([
            "data" => $all_product,
        ]);
    }
    public function add_product(Request $request)
    {
        $data = $request->all();
        $product = new product();
        $product->product_name = $data['product_name'];
        $product->product_desc = $data['product_desc'];
        $get_image = $request->file('product_image');
        $check = Product::where('product_name', $data['product_name'])->first();
        if ($check) {
            echo 0;
        } else {
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('uploads/product/', $new_image);
                $product->product_image = $new_image;
                $result = $product->save();
                if ($result) {
                    echo 1;
                }
            }
        }
    }
    public function view_product($product_id)
    {
        $view_product = Product::where('product_id', $product_id)->first();
        return response()->json([
            'data' => $view_product,
        ]);
    }
    public function update_product(Request $request, $product_id)
    {
        $data = $request->all();
        $product = Product::where('product_id', $product_id)->first();
        $product->product_name = $data['product_name'];
        $product->product_desc = $data['product_desc'];
        $get_image = $request->file('product_image');
        $check = Product::where('product_name', $data['product_name'])
            ->where('product_id', '!=', $product_id)->first();
        if ($check) {
            echo 0;
        } else {
            if ($get_image) {
                if ($product->product_image) {
                    $destinationPath = 'uploads/product/' . $product->product_image;
                    if (file_exists($destinationPath)) {
                        unlink($destinationPath);
                    }
                }
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('uploads/product', $new_image);
                $product->product_image = $new_image;
                $result = $product->save();
                if ($result) {
                    echo 1;
                }
            } else {
                $product->product_image = $product->product_image;
                $result = $product->save();
                if ($result) {
                    echo 1;
                }
            }
        }
    }
    public function delete_product($product_id)
    {
        $product = Product::where('product_id', $product_id)->first();
        $destinationPath = 'uploads/product/' . $product->product_image;
        if (file_exists($destinationPath)) {
            unlink($destinationPath);
        }
        $product->delete();
    }
    public function arrange_product(Request $request)
    {
        $data = $request->all();
        $pro_id = $data["page_id_array"];

        foreach($pro_id as $key => $value){
            $product = Product::find($value);
            $product->product_location = $key;
            $product->save();
        }
    }
}
