<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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
    public function create(){
        $title = "Beranda";
        return view ('beranda', compact('title'));
    }
    public function store(Request $request){
        /*               
        Museum::create([
            'nama' => $request('nama'),
            'alamat' => $request('alamat'),
            'deskripsi' => $request('deskripsi'),
            'jambuka' => $request('jambuka'),
            'hargatiket' => $request('hargatiket'),
            'katagori' => $request('katagori')
        ]);     
            */
            $museum->nama = $request->nama;
            $museum->alamat = $request->alamat;
            $museum->deskripsi = $request->deskripsi;
            $museum->jambuka = $request->jambuka;
            $museum->hargatiket = $request->hargatiket;
            $museum->katagori = $request->katagori;
            $museum->save();
         
        //return redirect()->back();  
        return response()->json(['success' => true]);
    }

    public function daftar(){
        $title = "Daftar";
        return view ('daftar', compact('title'));
    }
}
