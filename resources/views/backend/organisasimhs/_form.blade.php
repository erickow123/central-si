<div class="form-group">
    <label for="mahasiswa_id">Nama</label>
    {{ Form::text('mahasiswa_id', null, ['class' => 'form-control', 'id' => 'mahasiswa_id', 'placeholder' => 'Nama Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="organisasi">NIM</label>
    {{ Form::text('organisasi', null, ['class' => 'form-control', 'id' => 'organisasi', 'placeholder' => 'NIM Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="jabatan_id">Angkatan</label>
    {{ Form::text('jabatan_id', null, ['class' => 'form-control', 'id' => 'jabatan_id', 'placeholder' => 'Angkatan Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="tgl_mulai">Tempat Lahir</label>
    {{ Form::text('tgl_mulai', null, ['class' => 'form-control', 'id' => 'tgl_mulai', 'placeholder' => 'Tempat Lahir Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="tanggal_selesai">Tanggal Lahir</label>
    {{ Form::input('date', 'tanggal_selesai', null, ['class' => 'form-control', 'id' => 'tanggal_selesai', 'placeholder' => 'Tanggal Lahir Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="file_bukti">email</label>
    {{ Form::text('file_bukti', null, ['class' => 'form-control', 'id' => 'file_bukti', 'placeholder' => 'Email Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="created_at">No. HP</label>
    {{ Form::text('created_at', null, ['class' => 'form-control', 'id' => 'created_at', 'placeholder' => 'No. HP Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="update_at">No. HP</label>
    {{ Form::text('update_at', null, ['class' => 'form-control', 'id' => 'update_at', 'placeholder' => 'No. HP Mahasiswa']) }}
</div>
