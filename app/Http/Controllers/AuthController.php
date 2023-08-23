<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register(StoreUserRequest $request)
    {

        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->username,
                'password' => $request->password,
            ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password,
            ]);
        }

        $accessToken = $user->createToken('accessToken');

        return response()->json([
            'status' => 201,
            'message' => 'Create User successfully!',
            'user' => $user,
            'accessToken' => $accessToken->plainTextToken
        ]);
    }

    public function login(ShowUserRequest $request)
    {
//         Check if the username is email
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $user = User::query()->where('email', $request->username)->first();
        } else {
            $user = User::query()->where('username', $request->username)->first();
        }

        if (!$user) {
            return back()->withErrors([
                'username' => 'Username not exits!',
            ]);
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'Password not correct!'
            ]);
        }

        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }

    public function logout(User $user)
    {
        $user->tokens()->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Logout successfully!',
        ]);
    }

    public function profile(User $user)
    {
        return response()->json([
            'status' => 200,
            'message' => 'Get profile successfully!',
            'user' => $user,
        ]);
    }
}
