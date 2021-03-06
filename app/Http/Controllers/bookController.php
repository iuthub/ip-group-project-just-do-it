<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;


class BookController extends Controller
{

    public function create(array $data)
    {
        return Book::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'toDate' => $data['toDate'],
            'numOfPeople' => $data['numOfPeople'],
            'numOfTable' => $data['numOfTable'],
        ]);
    }

    public function getBook()
    {
        $books=Book::orderBy('numOfTable', 'asc')->get();
        $alltable=[];
        foreach($books as $book)
        {
            array_push($alltable,$book->numOfTable);
        }
        $tables=[];
        for($i=1;$i<=30;$i++)
        {
            if(in_array($i,$alltable)) $tables[$i]=1; else $tables[$i]=0;
        }
        return view('pages.book', ['tables' => $tables]);
    }

    public function postBook(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required|regex:/^\+998[0-9]{9}$/'
        ]);

        $data = $this->create($input)->toArray();

        $data['token'] =Str::random(50).'_'.time();

        $book = Book::find($data['id']);
        $book->token = $data['token'];
        $book->save();

        Mail::send('mail.confirmation', $data, function ($message) use ($data){
            $message->to($data['email']);
            $message->subject('Booking completed');
        });
        return redirect(route('pages.indexPage'))->with([
            'data'=>$data,
            'info'=>'Confirmation email has been sent. Please check your email.'
        ]);
//        }
//       return $validator;
//        return redirect(route('pages.book'))->with('info',$validator->errors()->getMessages());
    }

    public function confirmation($token)
    {
        $book=Book::where('token',$token)->first();

        if(!is_null($book)){
            $book->confirmed=1;
            $book->token=null;
            $book->save();
            return redirect(route('pages.indexPage'))->with('info','Your activation is completed.');
        }
        return redirect(route('pages.indexPage'))->with('info','Something went wrong.');
    }

    public function getAdminIndex()
    {
        $books=Book::orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.index', ['books' => $books,'i'=>1]);
    }

    public function getAdminDelete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('admin.index')->with('info', 'Booking deleted!');
    }

    public function postSearchBook(Request $request)
    {

        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $toDate=$request->input('toDate');
        $query=Book::query();

        if(isset($name))
            $query->where('name','like','%'.$name.'%');
        if(isset($email))
            $query->where('email','like','%'.$email.'%');
        if(isset($phone))
            $query->where('phone','like','%'.$phone.'%');
        if(isset($toDate))
            $query->where('toDate','like','%'.$toDate.'%');

        $results=$query->orderBy('updated_at', 'desc')->paginate(10);

        return view('admin.index')->with(['books'=>$results,'i'=>1]);
    }

}
