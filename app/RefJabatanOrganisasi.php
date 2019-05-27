<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefJabatanOrganisasi extends Model
{
    protected $table = 'ref_jabatan_organisasi';
    protected $guarded = [];

    // Tambahkan Kode yang diperlukan dibawah ini
    public function mahasiswaOrganisasi(){
    	return $this-> belongsTo('App\RefJabatanOrganisasi','jabatan_id');
    }
}
