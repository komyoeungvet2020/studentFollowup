<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use Auth;
class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        $user = User::all();
        return view('student.viewStudent',compact('student'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.viewStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $user = User::find(Auth::id());
        $student = new\App\Student;
        $student->firstname = $request->get('first');
        $student->activeFollowup =1;
        $student->lastname = $request->get('last');
        $student->class = $request->get('class');
        $student->description = $request->get('descript');
        $student->user_id = $user->id;
        $student->user->firstname = $request->get('tutor');
        if ($request->hasfile('picture')){
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). ".".$extension;
            $file->move('img/', $filename);
            $student->picture = $filename;
            $student->save();
        }
        $student->save();
        return redirect('student');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.detailStudent',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.updateStudent',compact('student'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find(Auth::id());
        $student = new\App\Student;
        $student->firstname = $request->get('first');
        $student->lastname = $request->get('last');
        $student->class = $request->get('class');
        $student->description = $request->get('descript');
        $student->activeFollowup = 1;
        $student->user_id = $user->id;
        if ($request->hasfile('picture')){
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). ".".$extension;
            $file->move('img/', $filename);
            $student->picture = $filename;
            $student->save();
        }
        $student->save();
        return redirect('student');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function outfollowup($id)
    {
        $student = Student::find($id);
        $student->activeFollowup = 0;
        $student->save();
        return redirect('/outFollowupView');
    }
    public function studentfollowup($id)
    {
        $student = Student::find($id);
        $student->activeFollowup = 1;
        $student->save();
        return redirect('student');
    }

    public function outFollowupView(){
        $student = Student::all();
        return view('student.outfollowup', compact('student'));
    }

}
