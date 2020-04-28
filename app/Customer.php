<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['fullName', 'phoneNumber', 'email'];

    public function book(){
        return $this->hasMany('App\Book');
    }
}
