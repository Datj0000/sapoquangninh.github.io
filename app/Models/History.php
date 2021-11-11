<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'history_time', 'history_admin', 'history_register_name', 'history_register_phone', 'history_register_type'
    ];
    protected $primaryKey = 'history_id';
 	protected $table = 'tbl_history';
}
