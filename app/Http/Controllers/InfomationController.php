<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infomation;

class InfomationController extends Controller
{
    public function all_infomation()
    {
        return view('admin.manage.infomation');
    }
    public function view_infomation()
    {
        $view_infomation = Infomation::where('infomation_id', '1')->first();
        return response()->json([
            'data' => $view_infomation,
        ]);
    }
    public function update_infomation(Request $request)
    {
        $data = $request->all();
        $infomation = Infomation::where('infomation_id', '1')->first();
        $infomation->infomation_contact = $data['infomation_contact'];
        $infomation->infomation_facebook = $data['infomation_facebook'];
        $infomation->infomation_youtube = $data['infomation_youtube'];
        $infomation->infomation_zalo = $data['infomation_zalo'];
        $get_image = $request->file('infomation_logo');
        if ($get_image) {
            $destinationPath = 'uploads/logo/' . $infomation->infomation_logo;
            if (file_exists($destinationPath)) {
                unlink($destinationPath);
            }
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/logo', $new_image);
            $infomation->infomation_logo = $new_image;
            $result = $infomation->save();
            if ($result) {
                echo 1;
            }
        } else {
            $infomation->infomation_logo = $infomation->infomation_logo;
            $result = $infomation->save();
            if ($result) {
                echo 1;
            }
        }
    }
}
