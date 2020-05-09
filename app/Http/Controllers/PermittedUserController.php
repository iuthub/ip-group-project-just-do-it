<?php

namespace App\Http\Controllers;

use App\Comment;
use App\PermittedUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PermittedUserController extends Controller
{
    public function create(array $data)
    {
        return PermittedUser::create([
            'email' => $data['email']
        ]);
    }


    public function postEmail(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email'=>'required|email|max:255',
        ]);

        $data = $this->create($input)->toArray();

        $email = PermittedUser::find($data['id']);
        $email->save();

//        Mail::send('mail.comment', $data, function ($message) use ($data) {
//            $message->to($data['email']);
//            $message->subject('Feedback sent');
//        });
        return redirect(route('admin.permitteduser'))->with([
//            'data'=>$data,
            'info'=>'New permitted email has been added'
        ]);
    }


    public function getAdminIndex()
    {
        $email=PermittedUser::orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.permitteduser', ['emails' => $email,'i'=>1]);
    }

    public function getAdminDelete($id)
    {
        $email = PermittedUser::find($id);
        $email->delete();
        return redirect()->route('admin.permitteduser')->with('info', 'Permitted email deleted!');
    }

    public function postSearchEmail(Request $request)
    {

        $email=$request->input('email');
        $query=PermittedUser::query();

        if(isset($email))
            $query->where('email','like','%'.$email.'%');

        $results=$query->orderBy('updated_at', 'desc')->paginate(10);

        return view('admin.permitteduser')->with(['emails'=>$results,'i'=>1]);
    }
}
