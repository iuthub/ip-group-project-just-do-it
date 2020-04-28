<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['table', 'date', 'time'];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }
}
