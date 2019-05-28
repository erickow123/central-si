<div class="form-group">
    <label for="nama">Nama</label>
    {{ Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama', 'placeholder' => 'Nama Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="organisasi">ORGANISASI</label>
    {{ Form::text('organisasi', null, ['class' => 'form-control', 'id' => 'nim', 'placeholder' => 'Organisasi Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="jabatan">Jabatan</label>
    {{ Form::text('jabatan', null, ['class' => 'form-control', 'id' => 'angkatan', 'placeholder' => 'Angkatan Mahasiswa']) }}
</div>
