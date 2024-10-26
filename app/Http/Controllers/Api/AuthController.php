<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email'     => 'required|string|max:255',
                'password'  => 'required|string'
            ],
            [
                'email.required'    => 'Email wajib diisi',
                'email.string'      => 'Email harus berupa string',
                'email.max'         => 'Email maksimal 255 karakter',
                'password.required' => 'Password wajib diisi',
                'password.string'   => 'Password harus berupa string'
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $credentials = $request->only('email', 'password');

        if (! Auth::attempt($credentials)) {
            return response()->json([
                'statusCode'    => 401,
                'message'       => 'User not found',
                'data'          => null,
            ], 401);
        }

        $user   = User::where('email', $request->email)->where('role', 'user')->first();
        $token  = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'statusCode'    => 200,
            'message'       => 'Login success',
            'data'          => [
                'user'          => $user,
                'access_token'  => $token,
                'token_type'    => 'Bearer'
            ]
        ], 200);
    }

    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required|string|max:255',
                'username'  => 'required|string|max:10|unique:users',
                'email'     => 'required|string|email|max:255|unique:users',
                'password'  => 'required|string|min:8',
                'phone'     => 'required|numeric'
            ],
            [
                'name.required'     => 'Nama wajib diisi',
                'name.string'       => 'Nama harus berupa string',
                'name.max'          => 'Nama maksimal 255 karakter',
                'username.required' => 'Username wajib diisi',
                'username.string'   => 'Username harus berupa string',
                'username.unique'   => 'Username sudah terdaftar',
                'username.max'      => 'Username maksimal 10 karakter',
                'email.required'    => 'Email wajib diisi',
                'email.string'      => 'Email harus berupa string',
                'email.email'       => 'Email harus berupa email',
                'email.max'         => 'Email maksimal 255 karakter',
                'email.unique'      => 'Email sudah terdaftar',
                'password.required' => 'Password wajib diisi',
                'password.string'   => 'Password harus berupa string',
                'password.min'      => 'Password minimal 8 karakter',
                'phone.required'    => 'Phone wajib diisi',
                'phone.numeric'     => 'Phone harus berupa angka'
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = new User();
        $user->name     = $request->name;
        $user->username = $request->username;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone    = $request->phone;
        $user->role     = 'user';
        $user->save();

        return response()->json([
            'statusCode' => 200,
            'message' => 'Register success',
            'data' => [
                'user' => $user,
                'access_token' => $user->createToken('auth_token')->plainTextToken,
                'token_type' => 'Bearer'
            ]
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'statusCode' => 200,
            'message' => 'Logout success',
            'data' => null
        ]);
    }

    public function user(Request $request)
    {
        $users = User::all();
        return response()->json([
            'statusCode' => 200,
            'message' => 'User data',
            'data' => $users
        ]);
    }
}
