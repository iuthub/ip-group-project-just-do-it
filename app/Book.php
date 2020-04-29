<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
>>>>>>> b2500df78f792ce3ce1eb503ee7dba9785e66913
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
<<<<<<< HEAD

    protected $fillable=['name','email','phone','toDate','numOfPeople','numOfTable','confirmed'];

    protected $hidden=['remember_token'];


=======
    protected $fillable = ['table', 'date', 'time'];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }
>>>>>>> b2500df78f792ce3ce1eb503ee7dba9785e66913
}
