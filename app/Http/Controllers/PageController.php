<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa as Siswa;
use App\Telepon as Telepon;
class PageController extends Controller
{
    public function index(){
      return view('hal.start');
    }
    public function store(Request $request){
      $siswa = $request->all();
      $jalan = Siswa::create($siswa);
      $telepon = new Telepon;
      $telepon->nomor_telepon = $request->input('nomor_telepon');
      $jalan->telepon()->save($telepon);

      $jalan->hobi()->attach($request->input('hobi'));
      return redirect('siswa');

    }
    public function update(Request $request,$id){
      $updates = Siswa::find($id);
      $siswa = $request->all();
      $updates->update($siswa);
      $telepon = $updates->telepon;
      $telepon->nomor_telepon = $request->input('nomor_telepon');
      $updates->telepon()->save($telepon);
      $updates->hobi()->sync($request->input('hobi',[]));
      return redirect('siswa');
    }
    public function delete(Request $request,$id){
      $deletes = Siswa::findOrFail($id);
      $deletes->delete();
      return redirect('siswa');
    }
}
