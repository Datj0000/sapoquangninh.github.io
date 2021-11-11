<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infomation extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'infomation_logo', 'infomation_contact', 'infomation_facebook', 'infomation_youtube', 'infomation_zalo'
    ];
    protected $primaryKey = 'infomation_id';
 	protected $table = 'tbl_infomation';
    use HasFactory;
}
