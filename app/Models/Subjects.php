<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;

    protected $fillable=[
        'stage','teacherName','name','subject_id','faculty','group','department','nameStudents'
     ];


        //relation ship to user
        public function user_subjects(){
            return $this->belongsTo(User::class,'subject_id');
        }
}
