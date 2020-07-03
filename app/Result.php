<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id','class_id','roll','subject_id','number','commants',
    ];
}
