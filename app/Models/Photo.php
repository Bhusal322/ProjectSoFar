<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // Set the table associated with the model.
    protected $table = 'photo';


    public $timestamps = false;

    // List of columns that are fillable.
    protected $fillable = ['name','size'];
}


