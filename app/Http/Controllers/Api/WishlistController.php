<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\WishlistService;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function __construct(protected WishlistService $wishlistService)
    {
    }

    public function index(Request $request)
    {
        if ($request->user()->role !== 'student') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $wishlists = $this->wishlistService->getStudentWishlist($request->user()->id);

        return response()->json($wishlists);
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

        $wishlistItem = $this->wishlistService->addToWishlist(
            $request->user()->id,
            $validated['course_id']
        );

        return response()->json([
            'message' => 'Cours ajouté aux favoris',
            'wishlist' => $wishlistItem
        ], 201);
    }

    public function destroy(Request $request, int $courseId)
    {
        if ($request->user()->role !== 'student') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $deleted = $this->wishlistService->removeFromWishlist(
            $request->user()->id,
            $courseId
        );

        if (! $deleted) {
            return response()->json([
                'message' => 'Favori introuvable'
            ], 404);
        }

        return response()->json([
            'message' => 'Favori supprimé avec succès'
        ]);


        
    }
}