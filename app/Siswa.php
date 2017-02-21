<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswa';
    protected $fillable = [
      'nisn',
      'nama_siswa',
      'tanggal_lahir',
      'id_kelas',
      'jenis_kelamin'
    ];

    public function telepon(){
      return $this->hasOne('App\Telepon','id_siswa');
    }

    public function kelas(){
      return $this->belongsTo('App\Kelas','id_kelas');
    }

    public function hobi(){
      return $this->belongsToMany('App\Hobi','hobi_siswa','id_siswa','id_hobi');
    }
}
