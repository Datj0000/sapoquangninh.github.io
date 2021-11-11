<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infomation;
use App\Models\Customer;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Introduce;
use App\Models\Setting;
class HomeController extends Controller
{
    public function index(Request $request)
    {
        $meta = Setting::find(1);
        $meta_title = $meta->meta_title;
        $meta_desc = $meta->meta_desc;
        $meta_keywords = $meta->meta_keywords;
        $url_canonical = $request->url();
        $introduce = Introduce::all();
        $gallery = Gallery::orderby('gallery_location', 'asc')->get();;
        $product = Product::orderby('product_location', 'asc')->get();
        $customer = Customer::orderby('customer_location', 'asc')->limit(12)->get();
        $comment = Comment::orderby('comment_location', 'asc')->get();
        $infomation = Infomation::all();
        return view('userlayout')
            ->with('introduce', $introduce)
            ->with('gallery', $gallery)
            ->with('product', $product)
            ->with('customer', $customer)
            ->with('comment', $comment)
            ->with('infomation', $infomation)
            ->with('meta_desc', $meta_desc)
            ->with('meta_keywords', $meta_keywords)
            ->with('meta_title', $meta_title)
            ->with('url_canonical', $url_canonical);
    }
}
