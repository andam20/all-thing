<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){

        //create user
        $formField=$request->validate([
            'email'=>'required|string',
            'password'=>'required|string', 
        ]);


        //check email
        $user=User::where('email',$formField['email'])->first();
        //check password
        if(!$user||!Hash::check($formField['password'],$user->password)){
            return  response([
                'message'=>'bad creds'
            ],401);
        }
       
            //create token
            $token=$user->createToken('myapptoken')->plainTextToken;
            $response=[
                'user'=>$user,
                'token'=>$token
            ];
            return Response($response,201);
    }





    public function Register(Request $request){
        //create user
        $formField=$request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|confirmed|min:3',
        ]);
        $user=User::create(
            [
            'name'=>$formField['name'],
            'email'=>$formField['email'],
            'password'=>bcrypt($formField['password']),
            ]);
            //create token
            $token=$user->createToken('myapptoken')->plainTextToken;
            $response=[
                'user'=>$user,
                'token'=>$token
            ];

            return Response($response,201);
    }



    

    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return [
            'message'=>'token deleted,logged out'
        ];
    }


}
