<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'student_id',
        'course_id',
        'course_group_id',
        'payment_status',
        'stripe_session_id',
        'enrolled_at',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }   

    public function group()
    {
        return $this->belongsTo(CourseGroup::class, 'course_group_id');
    }
}
