<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaOrganisasi extends Model
{
    protected $table = 'mahasiswa_organisasi';
    protected $guarded = [];

    // Tambahkan Kode yang diperlukan dibawah ini
    public function anggotas()
    {
        return $this->hasMany(OrganisasimhsUser::class);
    }

    public function jabatan_organisasi()
    {
        return $this->belongsTo(RefJabatanOrganisasi::class, 'mahasiswa_organisasi_id');
    }

}
