<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index()
    {
        $interests = Interest::all();
        return response()->json($interests);
    }

    public function saveMyInterests(Request $request)
    {
        if ($request->user()->role !== 'student') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $validated = $request->validate([
            'interest_ids' => ['required', 'array'],
            'interest_ids.*' => ['integer', 'exists:interests,id'],
        ]);

        $request->user()->interests()->sync($validated['interest_ids']);

        return response()->json([
            'message' => 'Intérêts enregistrés avec succès',
            'interests' => $request->user()->load('interests')->interests
        ]);
    }
}
