<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'comment_image', 'comment_name', 'comment_role','comment_desc'
    ];
    protected $primaryKey = 'comment_id';
 	protected $table = 'tbl_comment';
    use HasFactory;
}
