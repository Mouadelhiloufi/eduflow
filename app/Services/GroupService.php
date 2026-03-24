<?php

namespace App\Services;

use App\Models\CourseGroup;

class GroupService
{
    public function assignStudentToGroup(int $courseId): CourseGroup
    {
        $lastGroup = CourseGroup::where('course_id', $courseId)
            ->orderByDesc('sequence')
            ->first();

        if (! $lastGroup) {
            return CourseGroup::create([
                'course_id' => $courseId,
                'name' => 'Groupe 1',
                'max_size' => 25,
                'sequence' => 1,
            ]);
        }

        $studentsCount = $lastGroup->enrollments()->count();

        if ($studentsCount >= $lastGroup->max_size) {
            $nextSequence = $lastGroup->sequence + 1;

            return CourseGroup::create([
                'course_id' => $courseId,
                'name' => 'Groupe ' . $nextSequence,
                'max_size' => 25,
                'sequence' => $nextSequence,
            ]);
        }

        return $lastGroup;
    }
}