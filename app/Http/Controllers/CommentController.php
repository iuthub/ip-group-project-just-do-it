<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CommentController extends Controller
{
    public function create(array $data)
    {
        return Comment::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'comment' => $data['comment']
        ]);
    }


    public function postComment(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'comment'=>'required|string|min:10|max:750'
        ]);

        $data = $this->create($input)->toArray();

//        $data['token'] =Str::random(50).'_'.time();
//
        $comment = Comment::find($data['id']);
//        $book->token = $data['token'];
        $comment->save();

        Mail::send('mail.comment', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Feedback sent');
        });
        return redirect(route('pages.indexPage'))->with([
            'data'=>$data,
            'info'=>'Feedback email has been sent. Please check your email.'
        ]);
    }


    public function getAdminIndex()
    {
        $comments=Comment::orderBy('updated_at', 'desc')->paginate(3);
        return view('admin.comment', ['comments' => $comments,'i'=>1]);
    }

    public function getAdminDelete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('admin.comment')->with('info', 'Comment deleted!');
    }

    public function postSearchComment(Request $request)
    {

        $name=$request->input('name');
        $email=$request->input('email');
        $comment=$request->input('comment');
        $query=Comment::query();

        if(isset($name))
            $query->where('name','like','%'.$name.'%');
        if(isset($email))
            $query->where('email','like','%'.$email.'%');
        if(isset($comment))
            $query->where('comment','like','%'.$comment.'%');

        $results=$query->orderBy('updated_at', 'desc')->paginate(3);

        return view('admin.comment')->with(['comments'=>$results,'i'=>1]);
    }
}
