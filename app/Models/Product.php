<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
        'product_image', 'product_name', 'product_desc'
    ];
    protected $primaryKey = 'product_id';
    protected $table = 'tbl_product';
    use HasFactory;
}
