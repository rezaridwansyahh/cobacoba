<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa as Siswa;
use App\Kelas as Kelas;
class SiswaController extends Controller
{
    public function index(){
      $siswa_list = Siswa::paginate(3);
      $list_kelas = Kelas::all();
      //return $siswa_list;
      return view('hal.index',compact('siswa_list','list_kelas'));
    }
}
