<?php

namespace App\Http\Controllers;

use App\Models\Museum;
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

       $museum = new Museum;
       $museum->nama = $request->input('nama');
       $museum->alamat = $request->input('alamat');
       $museum->deskripsi = $request->input('deskripsi');
       $museum->jambuka = $request->input('jambuka');
       $museum->hargatiket = $request->input('hargatiket');
       $museum->katagori = $request->input('katagori');
       
       //$museum->namafoto = $request->input('namafoto');
       if($request->hasFile('namafoto')) {
            $file = $request->file('namafoto');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/dataImage', $filename);
            $museum->namafoto = $filename;
        }
        $museum->save();
        
        return json_encode(array(
            "statusCode"=>200
        ));
    }

    public function daftar(){
        $title = "Daftar";
        return view ('daftar', compact('title'));
    }

    public function riwayat(){
        $title = "Riwayat";
        return view ('riwayat', compact('title'));
    }
}
