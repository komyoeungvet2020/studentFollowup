<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class commentController extends Controller
{
    public function showComment($id){
         $student = Student::find($id);
         return view('comment.addComment',compact('student'));
    }
}
