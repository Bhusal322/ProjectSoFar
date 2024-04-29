<?php

namespace App\Models;


//use Illuminate\Database\Eloquent\Model;


/*
class Person extends Model
{
 
    public $timestamps = false;
    protected $fillable = ['first_name', 'last_name', 'email', 'type', 'password'];
  


}

*/

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Person extends Authenticatable
{
    protected $table = 'users';

    public $timestamps = false;
    protected $fillable = ['first_name', 'last_name', 'email', 'type', 'password'];

}