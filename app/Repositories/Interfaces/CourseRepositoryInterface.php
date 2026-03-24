<?php

namespace App\Repositories\Interfaces;

use App\Models\Course;

interface CourseRepositoryInterface
{
    public function getAll();
    public function findById(int $id): ?Course;
    public function create(array $data): Course;
    public function update(Course $course, array $data): Course;
    public function delete(Course $course): bool;
}