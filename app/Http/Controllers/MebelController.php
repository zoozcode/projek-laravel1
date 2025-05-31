<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class MebelController extends Controller
{
    function home(){
        return view('home');
    }
    function produk(){
     $produk = Produk::latest();

    if (request('search')) {
        $produk->where(function($query) {
            $search = request('search');
            $query->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('harga', 'like', '%' . $search . '%');
        });
    }

    // Ambil hasil query dengan get()
    return view('produk', ['produk' => $produk->paginate(10)]);
    }

    function pesanbayar(){
        return view('pesanbayar');
    }
    function contact(){
        return view('contact');
    }
    function faq(){
        return view('faq');
    }
    function profile(){
        return view('profile');
    }
}
