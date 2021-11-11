<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'setting_email', 'meta_title', 'meta_keywords', 'meta_desc'
    ];
    protected $primaryKey = 'setting_id';
 	protected $table = 'tbl_setting';
    use HasFactory;
}
