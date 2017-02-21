<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('siswa', 'SiswaController@index');
Route::get('siswa/create', 'PageController@index');
Route::post('siswa/create', 'PageController@store');
Route::put('siswa/{id}', 'PageController@update')->where('id','[0-9]+');
Route::delete('siswa/{id}', 'PageController@delete')->where('id','[0-9]+');
Auth::routes();
Route::get('/home', 'HomeController@index');
// Route::get('sampledata',function(){
//   DB::table('siswa')->insert([
//     [
//       'nisn'          => '1001',
//       'nama_siswa'    => 'Agus Yulianto',
//       'tanggal_lahir' => '1990-02-12',
//       'jenis_kelamin' => 'L',
//       'created_at'    => '2016-03-10 19:10:15',
//       'updated_at'    => '2016-03-10 19:10:15'
//     ],
//     [
//       'nisn'          => '1002',
//       'nama_siswa'    => 'Agustina Anggraeni',
//       'tanggal_lahir' => '1990-03-01',
//       'jenis_kelamin' => 'P',
//       'created_at'    => '2016-03-10 19:10:15',
//       'updated_at'    => '2016-03-10 19:10:15'
//     ],
//     [
//       'nisn'          => '1003',
//       'nama_siswa'    => 'Bayu Firmansyah',
//       'tanggal_lahir' => '1990-06-17',
//       'jenis_kelamin' => 'L',
//       'created_at'    => '2016-03-10 19:10:15',
//       'updated_at'    => '2016-03-10 19:10:15'
//     ],
//     [
//       'nisn'          => '1004',
//       'nama_siswa'    => 'Citra Rahmawati',
//       'tanggal_lahir' => '1991-12-12',
//       'jenis_kelamin' => 'P',
//       'created_at'    => '2016-03-10 19:10:15',
//       'updated_at'    => '2016-03-10 19:10:15'
//     ],
//     [
//       'nisn'          => '1005',
//       'nama_siswa'    => 'Dirgantara Laksana',
//       'tanggal_lahir' => '1990-10-10',
//       'jenis_kelamin' => 'L',
//       'created_at'    => '2016-03-10 19:10:15',
//       'updated_at'    => '2016-03-10 19:10:15'
//     ],
//     [
//       'nisn'          => '1006',
//       'nama_siswa'    => 'Eko Satrio',
//       'tanggal_lahir' => '1990-03-01',
//       'jenis_kelamin' => 'P',
//       'created_at'    => '2016-03-10 19:10:15',
//       'updated_at'    => '2016-03-10 19:10:15'
//     ]
//   ]);
// });
