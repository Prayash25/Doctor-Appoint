<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Authcontroller extends Controller
{
    public function rules($data){
        $message=[
            'email.exists'=>'such Email exist',
            'email.required'=>'Please enter Email',
            'email.email'=>'enter a valid Email',
            'password.required'=>'Please enter Email',
            'password.min'=>'must be more than 5'
        ];
        $validator= Validator::make($data,[
            'email'=>'required|email|exists:users',
            'password'=>'required'],$message);
    }
    public function savedoc(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'name'=>'required|string|regex:/^[a-zA-Z],{3,16}/i',
        //     'email'=>'required|unique:users|regex:/(.+)@(.+)\.(.+)/i',
        //     'password'=>'required|min:6|confirmed',
        //     'password'=>'sometimes|required_with:password'
        // ]);
        $users = new User([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>Hash::make($request->get('password')),
            'user_type'=>'doctor'
        ]);
        $users->save();
        return redirect()->intended('/doctor/dashboard');
    }
   
    public function logindoc(Request $request){
        $valid=$this->rules($request->all());
        // if($valid->fail()){
        //     return redirect()->back();
        // }
        
            $email= $request->get('email');
            $password= $request->get('password');
            if(Auth::attempt(['email'=>$email, 'password'=>$password,'user_type'=>'doctor'])){
                return redirect()->intended('/doctor/dashboard');
            }
            else{
                return redirect()->back();
            }
        
    }
}
