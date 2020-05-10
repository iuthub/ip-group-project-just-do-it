<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['name','email','phone','toDate','numOfPeople','numOfTable','confirmed'];

    protected $hidden=['remember_token'];
}
