<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduce extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'introduce_desc'
    ];
    protected $primaryKey = 'introduce_id';
 	protected $table = 'tbl_introduce';
    use HasFactory;
}
