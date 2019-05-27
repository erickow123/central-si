<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaOrganisasi extends Model
{
    protected $table = 'mahasiswa_organisasi';
    protected $guarded = [];

    // Tambahkan Kode yang diperlukan dibawah ini

    public function refJabatanOrganisasi(){
    	return $this-> hasMany('App\refJabatanOrganisasi','jabatan_id');
    }
    public function mahasiswa(){
    	return $this->hasMany('App\mahasiswa','mahasiswa_id');
    }

}
