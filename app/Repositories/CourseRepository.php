<?php

namespace App\Repositories;

use App\Models\Course;
use App\Repositories\Interfaces\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    public function getAll()
    {
        return Course::with(['teacher', 'enrollments.student', 'enrollments.group'])->get();
    }

    public function findById(int $id): ?Course
    {
        return Course::with(['teacher', 'interests', 'enrollments.student', 'enrollments.group'])->find($id);
    }

    public function create(array $data): Course
    {
        return Course::create($data);
    }

    public function update(Course $course, array $data): Course
    {
        $course->update($data);
        return $course->fresh();
    }

    public function delete(Course $course): bool
    {
        return $course->delete();
    }
}