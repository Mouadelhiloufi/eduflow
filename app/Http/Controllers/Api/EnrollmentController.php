<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\EnrollmentService;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function __construct(protected EnrollmentService $enrollmentService)
    {
    }

    public function index(Request $request)
    {
        if ($request->user()->role !== 'student') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $enrollments = $this->enrollmentService->getStudentEnrollments($request->user()->id);

        return response()->json($enrollments);
    }

    public function store(Request $request)
    {
        if ($request->user()->role !== 'student') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $validated = $request->validate([
            'course_id' => ['required', 'integer', 'exists:courses,id'],
        ]);

        $enrollment = $this->enrollmentService->enroll(
            $request->user()->id,
            $validated['course_id']
        );

        if (! $enrollment) {
            return response()->json([
                'message' => 'Vous êtes déjà inscrit à ce cours'
            ], 409);
        }

        return response()->json([
            'message' => 'Inscription réussie',
            'enrollment' => $enrollment
        ], 201);
    }

    public function destroy(Request $request, int $courseId)
    {
        if ($request->user()->role !== 'student') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $deleted = $this->enrollmentService->withdraw(
            $request->user()->id,
            $courseId
        );

        if (! $deleted) {
            return response()->json([
                'message' => 'Inscription introuvable'
            ], 404);
        }

        return response()->json([
            'message' => 'Retrait du cours effectué avec succès'
        ]);
    }
}