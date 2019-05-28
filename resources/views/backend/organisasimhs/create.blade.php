@extends('backend.layouts.app')

@section('breadcrumb')
    {!! cui_breadcrumb([
        'Home' => route('admin.home'),
        'Organisasimhs' => route('admin.organisasimhs.index'),
        'Edit' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui_toolbar_btn(route('admin.organisasimhs.index'), 'icon-list', 'List Organisasimhs') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                {{ Form::open(['route' => 'admin.organisasimhs.store', 'method' => 'post','files'=>'true']) }}

                {{-- CARD HEADER --}}
                <div class="card-header">
                    Tambah Organisasi mahasiswa
                </div>

                {{-- CARD BODY --}}
                <div class="card-body">
                    @include('backend.organisasimhs._form')
                </div>

                {{-- CARD FOOTER --}}
                <div class="card-footer">
                    <input type="submit" value="Simpan" class="btn btn-primary"/>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
