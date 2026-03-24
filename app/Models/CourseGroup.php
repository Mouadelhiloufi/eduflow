<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseGroup extends Model
{
    
    protected $fillable = [
        'course_id',
        'name',
        'max_size',
        'sequence',
    ];




    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'group_id');
    }   
}
