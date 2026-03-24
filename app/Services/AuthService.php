<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthService
{
    public function register($data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);

        $token = JWTAuth::fromUser($user);

        return [
            'user' => $user,
            'token' => $token
        ];
    }

    public function login($credentials)
    {
        if (!$token = JWTAuth::attempt($credentials)) {
            return null;
        }

        return [
            'user' => Auth::user(),
            'token' => $token
        ];
    }

    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
    }

    public function getUser()
    {
        return Auth::user();
    }

    public function updateUser($data)
    {
        $user = Auth::user();

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']); // 🔥 FIX IMPORTANT
        }

        $user->update($data);

        return $user;
    }
}
