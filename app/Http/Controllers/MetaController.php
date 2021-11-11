<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class MetaController extends Controller
{
    public function all_meta()
    {
        return view('admin.manage.meta');
    }
    public function view_meta()
    {
        $view_setting = Setting::where('setting_id', '1')->first();
        return response()->json([
            'data' => $view_setting,
        ]);
    }
    public function update_meta(Request $request)
    {
        $data = $request->all();
        $setting = Setting::where('setting_id', '1')->first();
        $setting->meta_title = $data['meta_title'];
        $setting->meta_keywords = $data['meta_keywords'];
        $setting->meta_desc = $data['meta_desc'];
        $setting->save();
    }
}
