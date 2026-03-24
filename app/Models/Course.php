<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{


    protected $fillable = [
        'title',
        'description',
        'teacher_id',
        'price'
    ];



    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function interests()
    {
        return $this->belongsToMany(Interest::class, 'course_interest');
    }

    public function groups()
    {
        return $this->hasMany(CourseGroup::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

}
