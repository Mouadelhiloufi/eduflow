<?php

namespace App\Services;

use App\Models\Course;
use App\Repositories\Interfaces\CourseRepositoryInterface;

class CourseService
{
    public function __construct(
        protected CourseRepositoryInterface $courseRepository
    ) {}

    public function getAllCourses()
    {
        return $this->courseRepository->getAll();
    }

    public function getCourseById(int $id): ?Course
    {
        return $this->courseRepository->findById($id);
    }

    public function createCourse(array $data): Course
    {
        return $this->courseRepository->create($data);
    }

    public function updateCourse(Course $course, array $data): Course
    {
        return $this->courseRepository->update($course, $data);
    }

    public function deleteCourse(Course $course): bool
    {
        return $this->courseRepository->delete($course);
    }
}