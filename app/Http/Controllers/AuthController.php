<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Helpers\Helper;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class AuthController extends Controller
{
    //
    public function login(LoginRequest $request){

        $credentials = $request->only('email', 'password');       
        if (! $token = JWTAuth::attempt($credentials)) {
            Helper::sendError('Email or password invalid!');
        }        
 	
 		//Token created, return with success response and jwt token
        return response()->json([
            'success' => true,
            'token' => $token,
        ]);
    }

}
