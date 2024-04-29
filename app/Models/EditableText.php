<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditableText extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['title', 'content', 'image_path'];
}

