<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $table = 'telepon';
    protected $fillable = [
      'id_siswa',
      'nomor_telepon'
    ];
    protected $primaryKey ='id_siswa';
    public $incrementing = false;
    
    public function siswa(){
      return $this->belongsTo('App\Siswa','id_siswa');// id_siswa adalah kolom yang ada di telpon
    }
}
