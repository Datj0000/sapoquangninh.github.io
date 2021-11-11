<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function all_Customer()
    {
        return view('admin.manage.customer');
    }
    public function fetchdata()
    {
        $all_customer = Customer::orderby('customer_location', 'asc')->get();
        return response()->json([
            "data" => $all_customer,
        ]);
    }
    public function add_customer(Request $request)
    {
        $data = $request->all();
        $customer = new Customer();
        $customer->customer_name = $data['customer_name'];
        $customer->customer_link = $data['customer_link'];
        $get_image = $request->file('customer_image');
        $check = Customer::where('customer_name', $data['customer_name'])->first();
        if ($check) {
            echo 0;
        } else {
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('uploads/logo', $new_image);
                $customer->customer_image = $new_image;
                $result = $customer->save();
                if ($result) {
                    echo 1;
                }
            }
        }
    }
    public function view_customer($customer_id)
    {
        $view_customer = Customer::where('customer_id', $customer_id)->first();
        return response()->json([
            'data' => $view_customer,
        ]);
    }
    public function update_customer(Request $request, $customer_id)
    {
        $data = $request->all();
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->customer_name = $data['customer_name'];
        $customer->customer_link = $data['customer_link'];
        $get_image = $request->file('customer_image');
        $check = Customer::where('customer_name', $data['customer_name'])
            ->where('customer_id', '!=', $customer_id)->first();
        if ($check) {
            echo 0;
        } else {
            if ($get_image) {
                if($customer->customer_image){
                    $destinationPath = 'uploads/logo/' . $customer->customer_image;
                    if (file_exists($destinationPath)) {
                        unlink($destinationPath);
                    }
                }
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('uploads/logo', $new_image);
                $customer->customer_image = $new_image;
                $result = $customer->save();
                if ($result) {
                    echo 1;
                }
            } else {
                $customer->customer_image = $customer->customer_image;
                $result = $customer->save();
                if ($result) {
                    echo 1;
                }
            }
        }
    }
    public function delete_customer($customer_id)
    {
        $customer = Customer::where('customer_id', $customer_id)->first();
        $destinationPath = 'uploads/logo/' . $customer->customer_image;
        if (file_exists($destinationPath)) {
            unlink($destinationPath);
        }
        $customer->delete();
    }
    public function arrange_customer(Request $request)
    {
        $data = $request->all();
        $cus_id = $data["page_id_array"];

        foreach($cus_id as $key => $value){
            $customer = Customer::find($value);
            $customer->customer_location = $key;
            $customer->save();
        }
    }
}
