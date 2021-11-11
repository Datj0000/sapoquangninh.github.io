<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'register_time', 'register_status', 'register_name', 'register_phone','register_store','register_address','register_product'
    ];
    protected $primaryKey = 'register_id';
 	protected $table = 'tbl_register';
    use HasFactory;
}
