<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Person extends Authenticatable
{
    protected $table = 'persons';

    public $timestamps = false;
    protected $fillable = ['first_name', 'last_name', 'email', 'type', 'password'];

    public function services()
    {
        return $this->hasMany(Service::class, 'seller_id');
    }

    public function credentials()
{
    return $this->hasMany(Credential::class, 'seller_id');
}

}