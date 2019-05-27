<?php

namespace App\Http\Controllers;

use App\MahasiswaOrganisasi;
use App\RefJabatanOrganisasi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class OrganisasimhsController extends Controller
{
  
    public function edit(Organisasimhs $organisasimhs)
    {
        $organisasi_mahasiswa = RefJabatanOrganisasi::all()->pluck('jabatan', 'id');
      
        return view('backend.organisasimhs.edit', compact('mahasiswa_organisasi', 'jabatan_organisasi'));
    }

    public function update(Request $request, Organisasimhs $organisasimhs)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'organisasi' => 'required',
            'jabatan_id' => 'required',
            'tgl_mulai' => 'date_format',
            'tgl_selesai' => 'date_format',
            'file_bukti' => 'file|mimes:pdf'
        ]);

        $organisasimhs->mahasiswa_id = $request->input('mahasiswa_id');
        $organisasimhs->organisasi = $request->input('organisasi');
        $organisasimhs->jabatan_id = $request->input('jabatan_id');
        $organisasimhs->tgl_mulai = $request->input('tgl_mulai');
        $organisasimhs->tgl_selesai= $request->input('tgl_selesai');
        //Simpan file upload
        if($request->file('file_bukti')->isValid())
        {
            //Hapus file, jika sebelumnya sudah ada
            if(Storage::exists($organisasimhs->file_bukti))
            {
                Storage::delete($organisasimhs->file_bukti);
            }
            //Simpan file yang diupload
            $filename = uniqid('bukti-');
            $fileext = $request->file('file_bukti')->extension();
            $filenameext = $filename.'.'.$fileext;

            $filepath = $request->file_bukti->storeAs('public/organisasimhs_bukti', $filenameext);
            $organisasimhs->file_bukti = $filepath;
        }
        if($organisasimhs->save())
        {
            session()->flash('flash_success', 'Berhasil memperbaharui data organisasi mahasiswa');
            //Redirect ke halaman detail
            return redirect()->route('admin.organisasimhs.show', [$organisasimhs->id]);
        }
        return redirect()->back()->withErrors();

    }

    public function destroy(Request $request, Organisasimhs $organisasimhs)
    {
        //Hapus organisasi
        foreach($organisasimhs->anggotas as $anggota){
                $anggota->delete();
        }
        if($organisasimhs->delete()) {
            session()->flash('flash_success', 'Berhasil menghapus data organisasi mahasiswa');
            return redirect()->route('admin.organisasimhs.index');
        }
    }
}
