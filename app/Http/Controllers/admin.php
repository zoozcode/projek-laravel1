<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;


class admin extends Controller
{
   function index(Request $request){
      $siswa=siswa::All();
    return view('admin.siswa', ['siswa'=>$siswa, 'form'=>$request->query('form')]);
   }

   function siswaForm(){
      return view('admin.siswa-form');
   }

   function siswapost(Request $request){
      siswa::create([
         'nis'=>$request->nis,
         'nama'=>$request->nama,
         'kelas'=>$request->kelas,
      ]);
      $siswa=siswa::All();
      return view('admin.siswa', ['siswa'=>$siswa]);
   }

   function siswaedit($id){
      $siswa=siswa::find($id);
      return view('admin.siswaedit', ['siswa'=>$siswa]);
   }

   function siswaupdate(Request $request){
      $siswa=siswa::find($request->id);
      $siswa->nis=$request->nis;
      $siswa->nama=$request->nama;
      $siswa->kelas=$request->kelas;
      $siswa->save();
      return redirect('/admin/siswa');
   }

   function siswadelete($id){
      siswa::find($id)->delete();
      $siswa=siswa::All();
      return view('admin.siswa', ['siswa'=>$siswa]);
   }
};