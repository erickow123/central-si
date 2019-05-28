<div class="form-group">
    <label for="mahasiswa_id">NIM Mahasiswa</label>
    {{ Form::text('mahasiswa_id', null, ['class' => 'form-control', 'id' => 'mahasiswa_id', 'placeholder' => 'NIM Mahasiswa']) }}
</div>

<div class="form-group">
    <label for="organisasi">Nama Organisasi</label>
    {{ Form::text('organisasi', null, ['class' => 'form-control', 'id' => 'organisasi', 'placeholder' => 'Nama Organisasi']) }}
</div>

<div class="form-group">
    <label for="jabatan_id">Jabatan</label>
    {{ Form::select('jabatan_id', null, ['class' => 'form-control', 'id' => 'jabatan_id', 'placeholder' => 'Jabatan']) }}
</div>

<div class="form-group">
    <label for="tanggal_mulai">Tanggal Mulai</label>
    {{ Form::text('tgl_mulai', null, ['class' => 'form-control', 'id' => 'tanggal_mulai', 'placeholder' => 'Tanggal Mulai']) }}
</div>

<div class="form-group">
    <label for="tanggal_selesai">Tanggal Selesai</label>
    {{ Form::input('date', 'tanggal_selesai', null, ['class' => 'form-control', 'id' => 'tanggal_selesai', 'placeholder' => 'Tanggal Selesai']) }}
</div>

<div class="form-group">
    <label for="file_bukti">File Bukti (PDF)</label>
    {{ Form::file('file_bukti', null, ['class' => 'form-control', 'id' => 'file_bukti', 'placeholder' => 'File Bukti']) }}
</div>

<div class="form-group">
    <label for="created_at">Created at</label>
    {{ Form::text('created_at', null, ['class' => 'form-control', 'id' => 'created_at']) }}
</div>

<div class="form-group">
    <label for="update_at">Update at</label>
    {{ Form::text('update_at', null, ['class' => 'form-control', 'id' => 'update_at']) }}
</div>
