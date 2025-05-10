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
        return view('produk', ['produk'=>Produk::all()]);
    }
}
