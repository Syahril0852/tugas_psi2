<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $dataDosen->nama }}</p>
</div>

<!-- Jenis Kelamin Field -->
<div class="col-sm-12">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    <p>{{ $dataDosen->jenis_kelamin }}</p>
</div>

<!-- Agama Field -->
<div class="col-sm-12">
    {!! Form::label('agama', 'Agama:') !!}
    <p>{{ $dataDosen->agama }}</p>
</div>

<!-- Prodi Id Field -->
<div class="col-sm-12">
    {!! Form::label('prodi_id', 'Prodi Id:') !!}
    <p>{{ $dataDosen->prodi->nama_prodi }}</p>
</div>

<!-- Jurusan Id Field -->
<div class="col-sm-12">
    {!! Form::label('jurusan_id', 'Jurusan Id:') !!}
    <p>{{ $dataDosen->jurusan->jurusan }}</p>
</div>

<!-- No Telp Field -->
<div class="col-sm-12">
    {!! Form::label('no_telp', 'No Telp:') !!}
    <p>{{ $dataDosen->no_telp }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $dataDosen->email }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $dataDosen->status }}</p>
</div>

