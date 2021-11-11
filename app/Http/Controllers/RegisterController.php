<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use App\Exports\RegisterExport;
use App\Imports\RegisterImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Carbon;

class RegisterController extends Controller
{
    public function all_register()
    {
        return view('admin.manage.register');
    }
    public function fetchdata()
    {
        $all_register = Register::all();
        return response()->json([
            "data" => $all_register,
        ]);
    }
    public function add_register(Request $request)
    {
        $data = $request->all();
        $register = new Register();
        $register->register_name = $data['register_name'];
        $register->register_phone = $data['register_phone'];
        $register->register_store = $data['register_store'];
        $register->register_address = $data['register_address'];
        $register->register_product = $data['register_product'];
        $check = Register::where('register_phone', $data['register_phone'])
            ->where('register_product', $data['register_product'])->first();
        if ($check) {
            echo 0;
        } else {
            $register->save();
            $id = $register->register_id;
            echo $id;
        }
    }
    public function update_register($register_id)
    {
        $register = Register::find($register_id);
        $register->register_status = '1';
        $history = new History();
        $history->history_admin = Auth::user()->admin_name;
        $history->history_register_name = $register->register_name;
        $history->history_register_phone = $register->register_phone;
        $history->history_type = '0';
        $history->save();
        $register->save();
    }
    public function delete_register($register_id)
    {
        $register = Register::find($register_id);
        $history = new History();
        $history->history_admin = Auth::user()->admin_name;
        $history->history_register_name = $register->register_name;
        $history->history_register_phone = $register->register_phone;
        $history->history_type = '1';
        $history->save();
        $register->delete();
    }
    public function export_excel()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        return Excel::download(new RegisterExport, 'Danh sách khách hàng - ' . $dt->toDateString() . '.xlsx');
    }
    public function import_excel(Request $request)
    {
        $check = $request->value;
        if ($check == '2') {
            Register::truncate();
        }
        $path = $request->file('file_excel')->getRealPath();
        Excel::import(new RegisterImport, $path);
    }
    public function fetchdata_history()
    {
        $all_history = History::orderby('history_id', 'desc')->get();
        return response()->json([
            "data" => $all_history,
        ]);
    }
    public function delete_history()
    {
        History::truncate();
    }
}
