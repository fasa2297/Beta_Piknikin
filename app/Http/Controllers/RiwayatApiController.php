<?php

namespace App\Http\Controllers;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatApiController extends Controller
{
    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'namapemesan'     => 'required',
            'namamuseum'   => 'required',
            'tanggal'     => 'required',
            'notelp'   => 'required',
            'jumlahtiket'     => 'required',
            'totalHrgtiket'   => 'required',
        ],
            [
                'namapemesan.required'     => 'Masukan nama pemesanan!',
                'namamuseum.required'   => 'Masukan nama museum!',
                'tanggal.required'     => 'Masukan tanggal!',
                'notelp.required'   => 'Masukan no telepon!',
                'jumlahtiket.required'     => 'Masukan jumlah tiket!',
                'totalHrgtiket.required'   => 'Masukan harga tiket!',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],401);

        } else {

            //$product = Product::create($request-all());
            
            $tikets = Tiket::create([
                'namapemesan'  => $request->input('namapemesan'),
                'namamuseum'   => $request->input('namamuseum'),
                'tanggal'      => $request->input('tanggal'),
                'notelp'       => $request->input('notelp'),
                'jumlahtiket'  => $request->input('jumlahtiket'),
                'totalHrgtiket'=> $request->input('totalHrgtiket'),
            ]);

            if ($tikets) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post tiket Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post tiket Gagal Disimpan!',
                ], 401);
            }
        }
    }
}
