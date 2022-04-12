<?php

namespace App\Http\Controllers;
use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Auth;

class LoginController extends Controller
{
    public function index(){
        $title = "Login";
         return view ('login', compact('title'));
    }
    public function postlogin(Request $request){
        dd($request->all());
        /*
        if(Auth::attempt($request->only('name','password'))){
            return redirect('beranda');
        }*/
        //return redirect('login');
    }
}