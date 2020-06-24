<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\User;
use App\Position;
class Comment extends Model
{
    protected $fillable = [
        'comment', 'user_id','student_id'
    ];
    public function user(){
        return $this->belongsTo (User::class);
    }
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function position(){
        return $this->belongsTo(Position::class);
    }
}
