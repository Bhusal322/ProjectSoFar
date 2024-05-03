<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'timelines', 'buyer_id'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
