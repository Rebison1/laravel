<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\validateReqiured;



class apicontroller extends Controller
{
    public function register(request $request){
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'c_password'=>'reqiured|same:password'
        ]);
        if ($validator->fails()) {
            return response()->json(['message'=>'validation error'],400);
        }
        $data=$request->all();
        $data['password']=Hash::make($data['password']);
        $user=User::create($data);
        $response['token']=$user->createToken('app');
        $response['name']=$user->name;
        return response()->json($response,201);
    }

    public function login(request $request){
        if (Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])) {
            $user =Auth::user();
            $response['token']=$user->createToken('app');
            $response['name']=$user->name;
            return response()->json($response,201);
        }
        else{
            return response()->json(['message'=>'invalid'],400);

        }


    }
    public function details(){
        $user=Auth::user();
        $response['user'] =$user;
        return  response()->json($response,201);


    }



}
