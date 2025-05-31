<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\Session;
use App\Models\kategori;

class ProdukController extends Controller
{
    // function index()
    // {

    //     return view('admin.produk', ['produk'=>Produk::all()]);
    // }

    // function create(Request $request)
    // {
    //     $file = $request->file('foto');
    //     $cover = $file->storeAs('save', $file->getClientOriginalName(), 'public');
    //     produk::create([
    //         'nama'=>$request->nama,
    //         'harga'=>$request->harga,
    //         'foto'=>$cover,
    //     ]);
    //     return redirect('/admin/produk');
    // }


    public function index(Request $request)
    {
        $produk = Produk::latest();

        if ($request->has('search1')) {
            $search1 = $request->search1;
            $produk->where(function ($query) use ($search1) {
                $query->where('nama', 'like', '%' . $search1 . '%')
                    ->orWhere('harga', 'like', '%' . $search1 . '%');
            });
        }

        // Ambil hasil dengan paginate
        $produk = $produk->paginate(5);

        return view('admin.produk', [
            'produk' => $produk,
            'form' => $request->query('form')
        ]);
    }

    function produktambah()
    {
        $kategori = kategori::All();
        return view('admin.produktambah', ['kategori' => $kategori,]);
        // return view('admin.produktambah');
    }

    function produkpost(Request $request)
    {
        $file = $request->file('foto');
        $cover = $file->storeAs('save', $file->getClientOriginalName(), 'public');
        // $produk = produk::All();
        
        produk::create([
            'kategori' => $request->kategori,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'foto' => $cover,
        ]);
        Session::flash('success', 'Data Berhasil Ditambahkan Ke Produk');
        return redirect('/admin/produk');
    }

    function produkedit($id)
    {
        $produk = produk::find($id);
        // $kategori = kategori::All();
        return view('admin.produkedit', ['produk' => $produk,]);
    }

    // function produkupdate(Request $request)
    // {
    //     $produk = produk::find($request->id);
    //     $produk->nama = $request->nama;
    //     $produk->harga = $request->harga;
    //     $produk->foto = $request->foto;
    //     $produk->save();
    //      $file = $request->file('foto');
    //     $cover = $file->storeAs('save', $file->getClientOriginalName(), 'public');
    //     'foto' => $cover,
    //     return redirect('/admin/produk');
    // }

    function produkupdate(Request $request)
    {
        $produk = produk::find($request->id);
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $cover = $file->storeAs('save', $file->getClientOriginalName(), 'public');
            $produk->foto = $cover;
        }

        $produk->save();
        return redirect('/admin/produk');
    }

    function produkdelete($id)
    {
        produk::find($id)->delete();
        $produk = produk::paginate(5); // Menggunakan paginate untuk mengambil data
        return redirect('/admin/produk')->with('success', 'Data Berhasil Dihapus');
    }
}
