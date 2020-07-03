<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherAttendance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'teacher_id','status',
    ];
}
