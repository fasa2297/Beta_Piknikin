<?php

namespace App\Http\Controllers;
use App\Models\Museum;
use Illuminate\Http\Request;

class MuseumApiController extends Controller
{
    //referensi : https://www.youtube.com/watch?v=G2oentJ5NVE
    public function index()
    {
        $museums = Museum::all();
        return response()->json(['message' => 'Success', 'data' => $museums]);
    }

    public function show($id){
        $museums = Museum::find($id);
        return response()->json(['message' => 'Success', 'data' => $museums]);
    }

    public function showKatagori($katagori){
        $museums = Museum::find($katagori);
        return response()->json(['message' => 'Success', 'data' => $museums]);
    }
    
    public function store(Request $request){
        $product = Product::create($request-all());
        return response()->json(['message' => 'Success: --data inserted','data' => $museums]);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product = update($request->all());
        return response()->json(['message' => 'Success: --data updated','data' => $museums]);
    }
}
