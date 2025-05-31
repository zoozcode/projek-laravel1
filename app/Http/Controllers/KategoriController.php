<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use Illuminate\Support\Facades\Session;


class KategoriController extends Controller
{
  public function index(Request $request)
{
   $kategori = Kategori::latest();

// Jika ada pencarian
if ($request->has('search2')) {
    $search2 = $request->search2;
    $kategori = $kategori->where(function ($query) use ($search2) {
        $query->where('uraian', 'like', '%' . $search2 . '%');
    });
}

// Panggil paginate terakhir, lalu withQueryString agar pagination menyimpan query pencarian
$kategori = $kategori->paginate(5)->withQueryString();


    return view('admin.kategori', [
        'kategori' => $kategori,
        'form' => $request->query('form'),
    ]);
}


   function kategoritambah(){
      return view('admin.kategoritambah');
   }

   function kategoripost(Request $request){
    
    kategori::create([
        'uraian' => $request->uraian,
    ]);
      Session::flash('success', 'Data Berhasil Ditambahkan Ke Kategori'); 
return redirect('/admin/kategori');

   }

   function kategoriedit($id){
      $kategori=kategori::find($id);
      return view('admin.kategoriedit', ['kategori'=>$kategori]);
   }

   function kategoriupdate(Request $request){
      $kategori=kategori::find($request->id);
      $kategori->uraian=$request->uraian;
      $kategori->save();
            Session::flash('success', 'Data Berhasil Diedit'); 
      return redirect('/admin/kategori');
   }

   function kategoridelete($id)
{
    kategori::find($id)->delete();
    $kategori = kategori::paginate(5); // Menggunakan paginate untuk mengambil data
   return redirect('/admin/kategori')->with('success', 'Data Berhasil Dihapus');
}
}