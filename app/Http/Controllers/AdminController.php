<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
       $title = "Login";
       return view ('login', compact('title')); //Compact method
       //return view ('login')->with('title', $title); //With method
    }
    public function beranda(){
        $title = "Beranda";
        return view ('beranda', compact('title'));
    }
    public function daftar(){
        $title = "Daftar";
        return view ('daftar', compact('title'));
    }
}

/*
Notes:
public function index(){
       //Array
       $data = [
           'ItemsOne' => 'ImageA',
           'ItemTwo' => ImageB
       ];
    }
access with
@foreach($data as $item)
    <p>
        {{ $item }}
    </p.
@endforeach
*/