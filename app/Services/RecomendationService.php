<?php

namespace App\Services;

use App\Models\Course;
use App\Models\User;

class RecommendationService
{
    public function getRecommendedCourses(User $user)
    {
        $interestIds = $user->interests()->pluck('interests.id');

        if ($interestIds->isEmpty()) {
            return collect();
        }

        return Course::with(['teacher', 'interests'])
            ->whereHas('interests', function ($query) use ($interestIds) {
                $query->whereIn('interests.id', $interestIds);
            })
            ->get();
    }
}