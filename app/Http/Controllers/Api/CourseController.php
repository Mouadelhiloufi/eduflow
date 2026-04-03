<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct(
        protected CourseService $courseService
    ) {}

    public function index()
    {
        $courses = $this->courseService->getAllCourses();

        return response()->json($courses);
    }

    public function show(int $id)
    {
        $course = $this->courseService->getCourseById($id);

        if (! $course) {
            return response()->json([
                'message' => 'Cours introuvable'
            ], 404);
        }

        return response()->json($course);
    }

    public function store(Request $request)
    {
        if ($request->user()->role !== 'teacher') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'image' => ['nullable', 'string'],
        ]);

        $course = $this->courseService->createCourse([
            'teacher_id' => $request->user()->id,
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'price' => $validated['price'],
            'image' => $validated['image'] ?? null,
        ]);
        
        return response()->json([
            'message' => 'Cours créé avec succès',
            'course' => $course
        ], 201);
    }

    public function update(Request $request, int $id)
    {
        if ($request->user()->role !== 'teacher') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $course = $this->courseService->getCourseById($id);

        if (! $course) {
            return response()->json([
                'message' => 'Cours introuvable'
            ], 404);
        }

        if ($course->teacher_id !== $request->user()->id) {
            return response()->json([
                'message' => 'Vous ne pouvez modifier que vos propres cours'
            ], 403);
        }

        $validated = $request->validate([
            'title' => ['sometimes', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['sometimes', 'numeric', 'min:0'],
            'image' => ['nullable', 'string'],
        ]);

        $updatedCourse = $this->courseService->updateCourse($course, $validated);

        return response()->json([
            'message' => 'Cours mis à jour avec succès',
            'course' => $updatedCourse
        ]);
    }

    public function destroy(Request $request, int $id)
    {
        if ($request->user()->role !== 'teacher') {
            return response()->json([
                'message' => 'Accès refusé'
            ], 403);
        }

        $course = $this->courseService->getCourseById($id);

        if (! $course) {
            return response()->json([
                'message' => 'Cours introuvable'
            ], 404);
        }

        if ($course->teacher_id !== $request->user()->id) {
            return response()->json([
                'message' => 'Vous ne pouvez supprimer que vos propres cours'
            ], 403);
        }

        $this->courseService->deleteCourse($course);

        return response()->json([
            'message' => 'Cours supprimé avec succès'
        ]);
    }
}