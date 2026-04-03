<?php

namespace App\Services;

use App\Models\Course;
use Stripe\StripeClient;

class StripeService
{
    protected StripeClient $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
    }

    public function createCheckoutSession(Course $course, int $studentId)
    {
        return $this->stripe->checkout->sessions->create([
            'mode' => 'payment',
            'success_url' => url('/payment/success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => url('/payment/cancel'),
            'metadata' => [
                'student_id' => $studentId,
                'course_id' => $course->id,
            ],
            'line_items' => [[
                'quantity' => 1,
                'price_data' => [
                    'currency' => 'usd',
                    'unit_amount' => (int) ($course->price * 100),
                    'product_data' => [
                        'name' => $course->title,
                    ],
                ],
            ]],
        ]);
    }

    public function retrieveSession(string $sessionId)
    {
        return $this->stripe->checkout->sessions->retrieve($sessionId);
    }
}