<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    protected $table = 'credentials';
    public $timestamps = false;

    protected $fillable = ['seller_id', 'credential_name', 'institution_name'];

    // Link to the Person model (assuming Person model corresponds to a user)
    public function user()
    {
        return $this->belongsTo(Person::class, 'seller_id');
    }
}

