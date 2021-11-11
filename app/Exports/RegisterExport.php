<?php

namespace App\Exports;

use App\Models\Register;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class RegisterExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Register::all();
    }
    public function headings(): array
    {
        return ["STT", "Thời gian","Trạng thái" , "Họ tên", "Số điện thoại", "Cửa hàng", "Địa chỉ", "Sản phẩm"];
    }
}
