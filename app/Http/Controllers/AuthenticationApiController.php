<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserStat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AuthenticationApiController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'exists:students,email', 'max:255'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_message' => 'User tidak ditemukan!',
                'status_code' => 404
            ], 404);
        }

        $user = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (!Auth::attempt($user)) {
            return response()->json([
                'status_message' => 'Kredensial tidak valid!',
                'status_code' => 401
            ], 401);
        }

        $user = User::with('stat')
            ->where('email', $request->input('email'))
            ->first();

        $user->stat->power = (int) $user->stat->power;
        $user->stat->evo = (int) $user->stat->evo;

        return response()->json([
            'user' => $user,
            'token' => auth()->user()->createToken('API Token')->plainTextToken,
            'status_code' => 200
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email:dns', 'unique:students', 'max:255'],
            'password' => ['required', Password::defaults()],
            'username' => ['required', 'unique:students', 'max:40'],
            'name' => ['required', 'string', 'max:255'],
            'school' => ['required'],
            'city' => ['required'],
            'birthyear' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json(([
                'status_message' => 'Username atau Email telah diambil!',
                'status_code' => 422
            ]), 422);
        }

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'name' => $request->name,
            'school' => $request->school,
            'city' => $request->city,
            'birthyear' => $request->birthyear
        ]);

        UserStat::create([
            'student_id' => $user->id
        ]);

        $user = User::with('stat')
            ->where('email', $request->email)
            ->first();

        $user->stat->power = (int) $user->stat->power;
        $user->stat->evo = (int) $user->stat->evo;

        return response()->json(([
            'user' => $user,
            'status_code' => 201
        ]), 201);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'status_message' => 'Tokens Revoked',
            'status' => 200
        ]);
    }
}
