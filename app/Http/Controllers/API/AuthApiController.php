<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthApiController extends Controller
{
    public function register(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        return response()->json([
            'success' => true,
            'token' => $user->createToken($user->email)->accessToken
        ]);
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if(!$user){
            return response()->json([
                'success' => false,
                'massage' => 'Invalid email'
            ], 401);
        }
        if(Auth::attempt($credentials)){
            return response()->json([
                'success' => true,
                'massage' => $user->createToken($user->email)->accessToken
            ], 200);
        }

         return response()->json([
            'success' => false,
            'massage' => 'Invalid email or password'
        ], 401);
    }

}
