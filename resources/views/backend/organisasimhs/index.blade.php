
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

                {{-- CARD HEADER--}}
                <div class="card-header">
                    <strong>List Organisasi Mahasiswa</strong>
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">

                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">

                        </div>
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                {{ $organisasimhss->links() }}
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">Organisasi</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">ID Mahasiswa</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($organisasimhss as $organisasimhs)
                            <tr>
                                <td class="text-center">{{ $organisasimhs->organisasi }}</td>
                                <td >{{ $organisasimhs->jabatan_id }}</td>
                                <td class="text-center">
                                    {!! cui_btn_view(route('admin.organisasimhs.show', [$organisasimhs->id])) !!}
                                    {!! cui_btn_edit(route('admin.organisasimhs.edit', [$organisasimhs->id])) !!}
                                    {!! cui_btn_delete(route('admin.organisasimhs.destroy', [$organisasimhs->id]), "Anda yakin akan menghapus data organisasi ini?") !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    Data organisasi belum ada
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">

                        </div>
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                {{ $organisasimhss->links() }}
                            </div>
                        </div>
                    </div>

                </div><!--card-body-->

                {{-- CARD FOOTER--}}
                <div class="card-footer">
                </div>

            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection
