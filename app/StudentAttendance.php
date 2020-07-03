<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id','class_id','status','satt_date'
    ];
}
