@extends('backend.layouts.app')

@section('breadcrumb')
    {!! cui_breadcrumb([
        'Home' => route('admin.home'),
        'OrganisasiMhs' => route('admin.organisasimhs.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui_toolbar_btn(route('admin.organisasimhs.create'), 'icon-plus', 'Tambah Organisasi') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    Form Pencarian
                </div>

                
            </div>

            <div class="card">

                {{-- CARD HEADER--}}
                <div class="card-header">
                    Mahasiswa
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Organisasi</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($org as $organisasi)
                            <tr>
                                <td>{{ $organisasi->mahasiswa_id }}</td>
                                <td class="text-center">{{ $organisasi->organisasi }}</td>
                                <td class="text-center">{{ $organisasi->jabatan }}</td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">

                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
