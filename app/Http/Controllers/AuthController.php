<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:student,teacher',
        ]);

        return response()->json(
            $this->authService->register($data),
            201
        );
    }

    public function login(Request $request)
    {
        $result = $this->authService->login(
            $request->only('email', 'password')
        );

        if (!$result) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        return response()->json($result);
    }

    public function logout()
    {
        $this->authService->logout();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function getUser()
    {
        return response()->json(
            $this->authService->getUser()
        );
    }

    public function updateUser(Request $request)
    {
        return response()->json(
            $this->authService->updateUser(
                $request->only(['name', 'email', 'password'])
            )
        );
    }
}
