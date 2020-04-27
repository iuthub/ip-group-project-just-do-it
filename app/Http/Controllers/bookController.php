<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Book;

class bookController extends Controller
{
    public function getBook(){
        return view("pages.book");
    }

    public function postBook(Request $req){
        
        /*if (Customer::where('email', '=', $req->input('email'))->exists()) {
            return "data dublicating";
        }*/

        if(Book::where([['table', '=', $req->input('table')],['date','=', $req->input('date')]])->exists()){
            return "table already booked";
        }

        $customer = new Customer([
            'fullName' => $req->input('name'),
            'phoneNumber' => $req->input('tel'),
            'email' => $req->input('email')
        ]);
        $customer->save();
        
        $book = new Book([
            'table' => $req->input('table'),
            'date' => $req->input('date'),
            'time' => $req->input('time')
        ]);
        $customer -> book()->save($book);
        
        $bookingRequest = array();
        array_push($bookingRequest, $customer->fullName,  $customer->email,  $customer->phoneNumber);
        array_push($bookingRequest, $book->table, $book->date, $book->time);
        
        return $bookingRequest;
    }
}
