<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Infomation;

class AdminController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Auth::id();
        if ($admin_id) {
            return Redirect::to('admin');
        } else {
            return Redirect::to('login-admin')->send();
        }
    }
    public function login_admin()
    {
        $admin_id = Auth::id();
        if ($admin_id) {
            return Redirect::to('admin')->send();
        } else {
            $infomation = Infomation::get();
            return view('adminlogin')->with('infomation', $infomation);
        }
    }
    public function show_admin()
    {
        $this->AuthLogin();
        $infomation = Infomation::get();
        return view('admin.dashboard')->with('infomation', $infomation);
    }
    public function dashboard(Request $request)
    {
        if (Auth::attempt(['admin_email' => $request->admin_email, 'admin_password' => $request->admin_password])) {
            Session::put('language', 'vi');
            Session::save();
            echo 1;
        } else {
            echo 0;
        }
    }
    public function add_staff(Request $request)
    {
        $data = $request->all();
        $admin = new Admin();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_role = $data['admin_role'];
        $admin->admin_password = md5($data['admin_password']);
        $check = $admin::where('admin_email', $data['admin_email'])->first();
        if ($check) {
            echo 0;
        } else {
            $admin->save();
            echo 1;
        }
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/admin');
    }
    public function all_staff()
    {
        return view('admin.manage.user');
    }
    public function fetchdata()
    {
        $all_user = Admin::all();
        return response()->json([
            "data" => $all_user,
        ]);
    }
    public function view_role($admin_id)
    {
        $edit_admin = Admin::where('admin_id', $admin_id)->first();
        return response()->json([
            'data' => $edit_admin,
        ]);
    }
    public function update_staff(Request $request, $admin_id)
    {
        $data = $request->all();
        $you_id = Auth::id();
        $admin = Admin::where('admin_id', $admin_id)->first();
        $count_admin_role = Admin::where('admin_role', 1)->get();
        $count_admin_role = $count_admin_role->count();
        if ($count_admin_role == 1 && $you_id == $admin_id) {
            echo 0;
        } else if ($data['admin_role'] == 0 && $you_id == $admin_id) {
            $admin->admin_role = $data['admin_role'];
            $result = $admin->save();
            if ($result) {
                echo 2;
            }
        } else {
            $admin->admin_role = $data['admin_role'];
            $result = $admin->save();
            if ($result) {
                echo 1;
            }
        }
    }
    public function delete_staff($admin_id)
    {
        $admin = Admin::where('admin_id', $admin_id)->first();
        $you_id = Auth::id();
        if ($you_id == $admin_id) {
            echo 2;
        } else if ($admin->admin_role == '1') {
            echo 0;
        } else {
            $admin->delete();
            echo 1;
        }
    }
    public function reset_pass(Request $request)
    {
        $data = $request->all();
        $token_random = Str::random();
        $admin = Admin::where('admin_email', $data['admin_email'])->where('admin_token', $data['admin_token'])->get();
        $count = $admin->count();
        if ($count > 0) {
            $admin_id = $admin->admin_id;
            $reset = Admin::find($admin_id);
            $reset->admin_password = md5($data['admin_password']);
            $reset->admin_token = $token_random;
            $reset->save();
            echo 1;
        } else {
            echo 0;
        }
    }
    public function change_pass()
    {
        return view('admin.account.change_pass');
    }
    public function change_new_pass(Request $request)
    {
        $data = $request->all();
        $admin_id = Auth::id();
        $admin = Admin::where('admin_id', $admin_id)->first();
        if ($admin->admin_password == md5($data['admin_old_password'])) {
            $admin->admin_password = md5($data['admin_password']);
            $admin->save();
            echo 1;
        } else {
            echo 0;
        }
    }
    public function profile()
    {
        return view('admin.account.profile');
    }
    public function view_profile()
    {
        $admin_id = Auth::id();
        $profile_admin = Admin::where('admin_id', $admin_id)->first();
        return response()->json([
            'data' => $profile_admin,
        ]);
    }
    public function update_profile(Request $request)
    {
        $data = $request->all();
        $admin_id = Auth::id();
        $admin = Admin::where('admin_id', $admin_id)->first();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_email = $data['admin_email'];
        $get_image = $request->file('admin_image');
        $check_email = Admin::where('admin_email', $data['admin_email'])->where('admin_id', '!=', $admin_id)->first();
        if ($check_email) {
            echo 0;
        } else if ($get_image) {
            if ($admin->admin_image) {
                $destinationPath = 'uploads/avatar/' . $admin->admin_image;
                if (file_exists($destinationPath)) {
                    unlink($destinationPath);
                }
            }
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/avatar', $new_image);
            $admin->admin_image = $new_image;
            $result = $admin->save();
            if ($result) {
                echo 1;
            }
        } else {
            $admin->admin_image = $admin->admin_image;
            $result = $admin->save();
            if ($result) {
                echo 1;
            }
        }
    }
    public function change_language($language)
    {
        Session::put('language', $language);
        Session::save();
    }
}
