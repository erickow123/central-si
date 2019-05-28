<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaOrganisasi;
use Illuminate\Support\Facades\Storage;
use App\RefJabatanOrganisasi;

class OrganisasiMhsCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $organisasimhss = MahasiswaOrganisasi::paginate(25);
        return view('backend.organisasimhs.index', compact('organisasimhss'));
    }

       public function show(MahasiswaOrganisasi $organisasimhs)
    {
        $organisasimhss = MahasiswaOrganisasi::all();
        $file_bukti_url = Storage::url($organisasimhs->file_bukti);
        return view('backend.organisasimhs.show', compact('organisasimhs', 'file_bukti_url', 'organisasimhss'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
