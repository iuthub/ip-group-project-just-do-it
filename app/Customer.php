<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'phoneNumber', 'latitude', 'longitude', 'comment'];

    public function order(){
        return $this->hasOne('App\Order');
    }
}
