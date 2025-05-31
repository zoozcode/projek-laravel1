<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;
use Illuminate\Support\Facades\Session;

class StockController extends Controller
{
       public function index(Request $request)
{
    $stock = Stock::latest();

    if ($request->has('search3')) {
        $search3 = $request->search3;
        $stock->where(function ($query) use ($search3) {
            $query->where('nama', 'like', '%' . $search3 . '%')
                  ->orWhere('masuk', 'like', '%' . $search3 . '%')
                  ->orWhere('keluar', 'like', '%' . $search3 . '%');
        });
    }

    // Ambil hasil dengan paginate
    $stock = $stock->paginate(5);

    return view('admin.stock', [
        'stock' => $stock,
        'form' => $request->query('form')
    ]);
}


   function stocktambah(){
      return view('admin.stocktambah');
   }

   function stockpost(Request $request){
      stock::create([
         'nama'=>$request->nama,
         'masuk'=>$request->masuk,
         'keluar'=>$request->keluar,
      ]);
      Session::flash('success', 'Data Berhasil Ditambahkan Ke Stock Barang'); 
     return redirect('/admin/stock');
   }

   function stockedit($id){
      $stock=stock::find($id);
      return view('admin.stockedit', ['stock'=>$stock]);
   }

   function stockupdate(Request $request){
      $stock=stock::find($request->id);
      $stock->nama=$request->nama;
      $stock->masuk=$request->masuk;
      $stock->keluar=$request->keluar;
      $stock->save();
                  Session::flash('success', 'Data Berhasil Diedit'); 
      return redirect('/admin/stock');
   }

   function stockdelete($id)
{
    stock::find($id)->delete();
    $stock = stock::paginate(5); // Menggunakan paginate untuk mengambil data
   return redirect('/admin/stock')->with('success', 'Data Berhasil Dihapus');
}
}
