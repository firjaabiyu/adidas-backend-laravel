<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // check if email ada di database
        $user = User::where('email', $request->email)->first();

        // kalau email ga ada d database
        if(!$user){
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        // kalau password salah
        if(!Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'Wrong password'
            ], 404);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user
        ], 200);
    }

    public function logout(Request $request)
    {
        // delete token, bukan delete user
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout success'
        ], 200);
    }

    // public function getUser(Request $request)
    // {
    //     try {
    //         // Validate user ID from request
    //         $request->validate([
    //             'user_id' => 'required|integer|exists:users,id',
    //         ]);

    //         // Fetch the user data based on user_id
    //         $user = User::find($request->user_id);

    //         // Return success response with user data
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'User data retrieved successfully.',
    //             'data' => $user,
    //         ], 200);
    //     } catch (\Exception $e) {
    //         // Handle errors and return error response
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Failed to retrieve user data.',
    //             'error' => $e->getMessage(),
    //         ], 500);
    //     }
    // }

    public function getuser()
    {
        $user = User::all();
        return response()->json([
            'user' => $user
        ]);
    }
}
