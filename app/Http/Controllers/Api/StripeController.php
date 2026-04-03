<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Services\EnrollmentService;
use App\Services\StripeService;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function __construct(
        protected StripeService $stripeService,
        protected EnrollmentService $enrollmentService
    ) {
    }

    public function createCheckoutSession(Request $request, int $courseId)
    {
        if ($request->user()->role !== 'student') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $course = Course::find($courseId);

        if (! $course) {
            return response()->json([
                'message' => 'Cours introuvable'
            ], 404);
        }

        $session = $this->stripeService->createCheckoutSession(
            $course,
            $request->user()->id
        );

        return response()->json([
            'checkout_url' => $session->url
        ]);
    }

    public function success(Request $request)
    {
        $sessionId = $request->query('session_id');

        if (! $sessionId) {
            return response()->json([
                'message' => 'session_id manquant'
            ], 400);
        }

        $session = $this->stripeService->retrieveSession($sessionId);

        if ($session->payment_status !== 'paid') {
            return response()->json([
                'message' => 'Paiement non confirmé'
            ], 400);
        }

        $studentId = (int) $session->metadata->student_id;
        $courseId = (int) $session->metadata->course_id;

        $enrollment = $this->enrollmentService->enroll(
            $studentId,
            $courseId,
            $session->id
        );

        if (! $enrollment) {
            return response()->json([
                'message' => 'Déjà inscrit à ce cours'
            ], 409);
        }

        // Charger les relations pour la réponse
        $enrollment->load(['course', 'group']);

        return response()->json([
            'message' => 'Paiement confirmé et inscription créée',
            'enrollment' => $enrollment
        ]);
    }

    public function cancel()
    {
        return response()->json([
            'message' => 'Paiement annulé'
        ]);
    }
}