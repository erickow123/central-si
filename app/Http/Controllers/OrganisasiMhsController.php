<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganisasiMhsController extends Controller
{
    //
    public function create()
    {


        $jabatan_id = RefJabatanID::all()->pluck('mahasiswa_id','organisasi');

        return view('backend.organisasimhs.create', compact('jabatan_id'));
    }


    public function store(Request $request, $filename)
    {

        $request->validate([
            'mahasiswa_id'      =>'required',
            'jabatan_id'        =>'digits:1',
            'tanggal_mulai'     =>'strtotime',
            'tanggal_selesai'   =>'strtotime',
            'file_bukti'        =>'file|mimes:pdf',
            'created_at'        =>'strtotime',
            'update_at'         =>'strtotime'
        ]);

     $organisasimhs = new Orgnisasimhs();

     $organisasimhs->mahasiswa_id = $request->input('mahasiswa_id');\

     $organisasimhs->organisasi = $request->input('organisasi');

     $organisasimhs->jabatan_id = $request->input('jabatan_id');

     $organisasimhs->tanggal_mulai = $request->input('tanggal_mulai');

     $organisasimhs->tanggal_selesai = $request->input('tanggal_selesai');

     if($request->file('file_bukti')->isValid())
     {
        $filename = uniqid('bukti-');
        $fileext =$request->file('file_bukti')->extension();
        $filenameext = $filename.'.'.$fileext;

        $filepath = $request->file_bukti->storeAs('bukti_organisasi',$filenameext);
        $organisasimhs->file_bukti = $filepath;
     }

     $organisasimhs->created_at = $request->input('created_at');

     $organisasimhs->update_at = $request->input('update_at');

     $organisasimhs->save();

     return redirect()->('admin.organisasimhs.show',[$organisasimhs]);

    }


    public function show(Organisasimhs_$organisasimhs_)
    {

    }

}
