<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    public $timestamps = false;

    protected $fillable = ['seller_id', 'name', 'description'];

    // Link to the Person model (assuming Person model corresponds to a user)
    public function user()
    {
        return $this->belongsTo(Person::class, 'seller_id');
    }
}

