<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Setting;
use App\Models\Infomation;
use App\Models\Register;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class MailController extends Controller
{
    public function recover(Request $request)
    {
        $data = $request->all();
        $admin = Admin::where('admin_email', $data['admin_email'])->first();
        if ($admin) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function send_token(Request $request)
    {
        $data = $request->all();
        $title_mail = "Lấy lại mật khẩu Sapo Quảng Ninh";
        $admin = Admin::where('admin_email', $data['admin_email'])->first();
        $token_random = Str::random();
        $admin->admin_token = $token_random;
        $admin->save();
        $infomation = Infomation::find(1);
        $logo = $infomation->infomation_logo;
        $data = array("name" => $title_mail, "body" => $token_random, 'email' => $data['admin_email'], 'logo' => $logo); //body of mail.blade.php

        Mail::send('mail.emailforgotpass', ['data' => $data], function ($message) use ($title_mail, $data) {
            $message->to($data['email'])->subject($title_mail); //send this mail with subject
            $message->from($data['email'], $title_mail); //send from this mail
        });
    }
    public function view_email()
    {
        $all_setting = Setting::find(1);
        return response()->json([
            "data" => $all_setting,
        ]);
    }
    public function update_email(Request $request)
    {
        $data = $request->all();
        $setting = Setting::find(1);
        $setting->setting_email = $data['setting_email'];
        $result = $setting->save();
        if ($result) {
            echo 1;
        }
    }
    public function send_info_cus($register_id)
    {
        $customer = Register::where('register_id', $register_id)->first();
        $title_mail = "Thông tin khách hàng Sapo Quảng Ninh";
        $setting = Setting::find(1);
        $customer = array(
            'name' => $customer->register_name,
            'phone' => $customer->register_phone,
            'store' => $customer->register_store,
            'address' => $customer->register_address,
            'product' => $customer->register_product,
        );
        $data = array("name" => $title_mail, 'email' => $setting->setting_email);
        Mail::send('mail.emailnotifications',  ['data' => $data, 'customer' => $customer], function ($message) use ($title_mail, $data) {
            $message->to($data['email'])->subject($title_mail); //send this mail with subject
            $message->from($data['email'], $title_mail); //send from this mail
        });
    }
}
