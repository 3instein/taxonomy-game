<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AuthenticationApiController extends Controller {
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'exists:users,email', 'max:255'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_message' => 'User not found!',
                'status_code' => 404
            ], 404);
        }

        $user = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (!Auth::attempt($user)) {
            return response()->json([
                'status_message' => 'Invalid Credentials',
                'status_code' => 401
            ], 401);
        }

        $user = User::where('email', $request->input('email'))->first();

        return response()->json([
            'user' => $user,
            'token' => auth()->user()->createToken('API Token')->plainTextToken,
            'status_code' => 200
        ]);
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'unique:users', 'max:40'],
            'email' => ['required', 'email:dns', 'unique:users', 'max:255'],
            'password' => ['required', Password::defaults()]
        ]);

        if ($validator->fails()) {
            return response()->json(([
                'status_message' => 'Username or Email already taken!',
                'status_code' => 422
            ]), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(([
            'token' => $user->createToken('tokens')->plainTextToken,
            'status_code' => 201
        ]), 201);
    }

    public function logout() {
        auth()->user()->tokens()->delete();

        return response()->json([
            'status_message' => 'Tokens Revoked',
            'status' => 200
        ]);
    }
}
