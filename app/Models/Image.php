<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

   protected $table = 'images';
    protected $fillable = ['title', 'file_path'];
    public $timestamps = false;
}
