<?php

namespace App\Services;

use App\Models\Wishlist;

class WishlistService
{
    public function getStudentWishlist(int $userId)
    {
        return Wishlist::with(['course.teacher'])
            ->where('student_id', $userId)
            ->get();
    }

    public function addToWishlist(int $userId, int $courseId)
    {
        $existing = Wishlist::where('student_id', $userId)
            ->where('course_id', $courseId)
            ->first();

        if ($existing) {
            return $existing;
        }

        return Wishlist::create([
            'student_id' => $userId,
            'course_id' => $courseId,
        ]);
    }

    public function removeFromWishlist(int $userId, int $courseId): bool
    {
        $wishlistItem = Wishlist::where('student_id', $userId)
            ->where('course_id', $courseId)
            ->first();

        if (! $wishlistItem) {
            return false;
        }

        return $wishlistItem->delete();
    }
}