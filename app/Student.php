<?php

namespace App;
use App\User;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user(){
       return $this->belongsTo(User::class);
    }
    public function users(){
       return $this->belongsToMany(Student::class)->withPivot('comment');
    }
}
