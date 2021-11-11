<?php

namespace App\Imports;

use App\Models\Register;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class RegisterImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Register([
            'register_time' => $row['register_time'] ?? $row['thoi_gian'],
            'register_status' => $row['register_status'] ?? $row['trang_thai'],
            'register_name' => $row['register_name'] ?? $row['ho_ten'],
            'register_phone' => $row['register_phone'] ?? $row['so_dien_thoai'],
            'register_store' => $row['register_store'] ?? $row['cua_hang'],
            'register_address' => $row['register_address'] ?? $row['dia_chi'],
            'register_product' => $row['register_product'] ?? $row['san_pham'],
        ]);
    }
}
