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
    /*-------------------Beranda input museum------------------ */
    public function beranda(){
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
    /*-------------------Daftar Museum------------------ */
    public function daftar(){
        $title = "Daftar";
        $prod = Museum::all();
        return view ('daftar', ['lists' => $prod, 'title' => $title]);
    }

    public function daftarMuseum(){
        return Museum::find($id);
    }

    public function edit($id)
    {
        return view('editdaftar', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "daftar/$id",
            'data' => Museum::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $prod = Museum::find($id);
        $prod->id = $request->id;
        $prod->nama = $request->nama;
        $prod->alamat = $request->alamat;
        $prod->deskripsi = $request->deskripsi;
        $prod->jambuka = $request->jambuka;
        $prod->hargatiket = $request->hargatiket;
        $prod->katagori = $request->katagori;
        $prod->save();
        return redirect('/daftar')->with('msg', 'Data Museum Berhasil Diperbaharui');
    }

    public function destroy($id)
    {
        Museum::destroy($id);
        return redirect('/daftar')->with('msg', 'Data Museum Berhasil Dihapus');
    }

    /*-------------------Riwayat Pemesanan------------------ */
    public function riwayat(){
        $title = "Riwayat";
        return view ('riwayat', compact('title'));
    }
}
