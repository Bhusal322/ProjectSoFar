<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['seller_id', 'job_title', 'company_name', 'description'];

    // You might want to define the relationship to the Seller/User
    public function seller()
    {
        return $this->belongsTo(Person::class, 'seller_id');
    }
}