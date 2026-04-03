<?php

namespace App\Services;

use App\Models\Enrollment;
USE App\Services\GroupService;

class EnrollmentService
{

public function __construct(protected GroupService $groupService)
    {
    }

    public function getStudentEnrollments(int $studentId)
    {
        return Enrollment::with(['course.teacher', 'group'])
            ->where('student_id', $studentId)
            ->orderBy('enrolled_at', 'desc')
            ->get();
    }





    



     public function enroll(int $studentId, int $courseId, ?string $stripeSessionId = null)
{
    $existing = Enrollment::where('student_id', $studentId)
        ->where('course_id', $courseId)
        ->first();

    if ($existing) {
        return null;
    }

    $group = $this->groupService->assignStudentToGroup($courseId);

    return Enrollment::create([
        'student_id' => $studentId,
        'course_id' => $courseId,
        'course_group_id' => $group->id,
        'payment_status' => 'paid',
        'stripe_session_id' => $stripeSessionId,
        'enrolled_at' => now(),
    ]);
}

    public function withdraw(int $studentId, int $courseId): bool
    {
        $enrollment = Enrollment::where('student_id', $studentId)
            ->where('course_id', $courseId)
            ->first();

        if (! $enrollment) {
            return false;
        }

        return $enrollment->delete();
    }
}