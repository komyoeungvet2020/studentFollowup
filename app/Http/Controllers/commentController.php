<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Comment;
use Auth;
class commentController extends Controller
{
    public function showComment($id){
         $student = Student::find($id);
         return view('comment.viewComment',compact('student'));
    }
    public function addComment(Request $request,$id){
        $user = User::find(Auth::id());
        $student= Student::find($id);
        $comment = new Comment;
        $comment->comment = $request->get('comment');
        $comment->user_id = $user->id;
        $comment->student_id = $student->id;
        $comment->save();
        return view('student.detailStudent',compact('student'));
    }
    public function editComment($id){
        $comment = Comment::find($id);
        return view('comment.editComment', compact('comment'));
    }
    public function updateComment(Request $request,$id){
        $comment = Comment::find($id);
        $comment->comment = $request->get('comment');
        $comment->save();
        return redirect()->back();
    }
    function deleteComment($id){
           $comment = Comment::find($id);
           $comment->delete();
           return back();
    }
}
