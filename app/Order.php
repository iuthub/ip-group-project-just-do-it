<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customers_id', 'foods_id', 'value'];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }
}
