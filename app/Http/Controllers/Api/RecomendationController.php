<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\RecommendationService;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function __construct(protected RecommendationService $recommendationService)
    {
    }

    public function index(Request $request)
    {
        if ($request->user()->role !== 'student') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $courses = $this->recommendationService->getRecommendedCourses($request->user());

        return response()->json([
            'recommended_courses' => $courses
        ]);
    }
}