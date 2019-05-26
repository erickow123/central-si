<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Organisasi-mhsController extends Controller
{
    
    public function edit(Organisasi $organisasi-mhs)
    {
        return view('backend.organisasi-mhs.edit', compact('organisasi-mhs'));
    }

    public function update(Request $request, Organisasi $organisasi-mhs)
    {
        $this->validate($request, $this->validation_rules);

        $organisasi-mhs->update($request->only(
            'mahasiswa_id',
            'organisasi',
            'jabatan_id',
            'tgl_mulai',
            'tgl_selesai'));

        $organisasi-mhs->user->update([
            'password' => bcrypt('secret'),
            'email' => request('email'),
            'status' => 1,
        ]);

        session()->flash('flash_success', 'Berhasil mengupdate data organisasi mahasiswa '.$organisasi-mhs->nama);
        return redirect()->route('admin.organisasi-mhs.show', [$organisasi-mhs->id]);
    }
    public function destroy(Organisasi $organisasi-mhs)
    {
        $user = User::find($organisasi-mhs->id);
        $organisasi-mhs->delete();
        optional($user)->delete();

        session()->flash('flash_success', "Berhasil menghapus organisasi mahasiswa ".$organisasi-mhs->nama);
        return redirect()->route('admin.organisasi-mhs.index');
    }
    
}
