<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Introduce;
use App\Models\Gallery;

class IntroduceController extends Controller
{
    public function all_introduce()
    {
        return view('admin.manage.introduce');
    }
    public function view_introduce()
    {
        $view_introduce = Introduce::where('introduce_id', '1')->first();
        return response()->json([
            'data' => $view_introduce,
        ]);
    }
    public function update_introduce(Request $request)
    {
        $data = $request->all();
        $introduce = Introduce::where('introduce_id', '1')->first();
        $introduce->introduce_desc = $data['introduce_desc'];
        $introduce->save();
    }
    //Gallery
    public function fetchdata()
    {
        $gallery = Gallery::orderby('gallery_location', 'asc')->get();
        return response()->json([
            'data' => $gallery,
        ]);
    }
    public function insert_gallery(Request $request)
    {
        $count = Gallery::all();
        $gallery_count = $count->count();
        if ($gallery_count < 3) {
            $get_image = $request->file('gallery_image');
            foreach ($get_image as $image) {
                $get_name_image = $image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/gallery', $new_image);
                $gallery = new Gallery();
                $gallery->gallery_image = $new_image;
                $gallery->save();
            }
            echo 1;
        } else {
            echo 2;
        }
    }
    public function delete_gallery(Request $request)
    {
        $gallery_id = $request->gallery_id;
        $gallery = Gallery::find($gallery_id);
        unlink('uploads/gallery/' . $gallery->gallery_image);
        $gallery->delete();
    }
    public function update_gallery(Request $request)
    {
        $get_image = $request->file('file');
        $gallery_id = $request->gallery_id;
        if ($get_image) {
            $gallery = Gallery::find($gallery_id);
            unlink('uploads/gallery/' . $gallery->gallery_image);
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/gallery', $new_image);
            $gallery->gallery_image = $new_image;
            $gallery->save();
        }
    }
    public function arrange_gallery(Request $request)
    {
        $data = $request->all();
        $gal_id = $data["page_id_array"];

        foreach ($gal_id as $key => $value) {
            $gallery = Gallery::find($value);
            $gallery->gallery_location = $key;
            $gallery->save();
        }
    }
}
