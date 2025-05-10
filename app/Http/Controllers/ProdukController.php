<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    function index()
    {

        return view('admin.produk', ['produk'=>Produk::all()]);
    }

    function create(Request $request)
    {
        $file = $request->file('foto');
        $cover = $file->storeAs('save', $file->getClientOriginalName(), 'public');
        Produk::create([
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'foto'=>$cover,
        ]);
        return redirect('/admin/produk');
    }
}
