<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class RiwayatController extends Controller
{
    public function index()
    {
        $prods = Tiket::get();
        return view('riwayat.index', ['list' => $prods]);
    }
    public function show($id)
    {
        return Tiket::find($id);
    }
    public function edit($id)
    {
        return view('riwayat.edit', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "riwayat/$id",
            'data' => Tiket::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $prod = Tiket::find($id);
        $prod->id = $request->id;
        $prod->namapemesan = $request->namapemesan;
        $prod->namamuseum = $request->namamuseum;
        $prod->tanggal = $request->tanggal;
        $prod->notelp = $request->notelp;
        $prod->jumlahtiket = $request->jumlahtiket;
        $prod->totalHrgtiket = $request->totalHrgtiket;
        $prod->save();
        return redirect('/riwayat')->with('msg', 'Data Pemesanan Tiket Berhasil Diperbaharui');
    }
    public function destroy($id)
    {
        Tiket::destroy($id);
        return redirect('/riwayat')->with('msg', 'Data Pemesanan Tiket Berhasil Dihapus');
    }

    public function riwayat(){
        $title = "Riwayat";
        return view ('riwayat', compact('title'));
    }
}
