<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'gallery_image', 'gallery_location'
    ];
    protected $primaryKey = 'gallery_id';
 	protected $table = 'tbl_gallery';
}
