@extends('backend.layouts.app')

@section('breadcrumb')
    {!! cui_breadcrumb([
        'Home' => route('admin.home'),
        'Organisasi Mahasiswa' => route('admin.organisasimhs.index'),
        'Edit' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui_toolbar_btn(route('admin.organisasimhs.create'), 'icon-plus', 'Tambah Organisasi') !!}
    {!! cui_toolbar_btn(route('admin.organisasimhs.index'), 'icon-list', 'List Organisasi Mahasiswa') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                {{ Form::model($organisasimhs, ['route' => ['admin.organisasimhs.update', $organisasimhs->id], 'method' => 'patch']) }}

                {{--CARD HEADER --}}
                <div class="card-header">
                    Edit Organisasi Mahasiswa
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">
                    @include('backend.organisasimhs._form')
                </div>

                {{-- CARD FOOTER--}}
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Simpan"/>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
