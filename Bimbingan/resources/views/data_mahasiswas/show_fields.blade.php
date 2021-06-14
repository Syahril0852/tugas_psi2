<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $dataMahasiswa->nama }}</p>
</div>

<!-- Nim Field -->
<div class="col-sm-12">
    {!! Form::label('nim', 'Nim:') !!}
    <p>{{ $dataMahasiswa->nim }}</p>
</div>

<!-- Agama Field -->
<div class="col-sm-12">
    {!! Form::label('agama', 'Agama:') !!}
    <p>{{ $dataMahasiswa->agama }}</p>
</div>

<!-- Jenis Kelamin Field -->
<div class="col-sm-12">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    <p>{{ $dataMahasiswa->jenis_kelamin }}</p>
</div>

<!-- Semester Field -->
<div class="col-sm-12">
    {!! Form::label('semester', 'Semester:') !!}
    <p>{{ $dataMahasiswa->semester }}</p>
</div>

<!-- Prodi Id Field -->
<div class="col-sm-12">
    {!! Form::label('prodi_id', 'Prodi Id:') !!}
    <p>{{ $dataMahasiswa->prodi->nama_prodi }}</p>
</div>

<!-- Jurusan Id Field -->
<div class="col-sm-12">
    {!! Form::label('jurusan_id', 'Jurusan Id:') !!}
    <p>{{ $dataMahasiswa->jurusan->jurusan }}</p>
</div>

<!-- No Telp Field -->
<div class="col-sm-12">
    {!! Form::label('no_telp', 'No Telp:') !!}
    <p>{{ $dataMahasiswa->no_telp }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $dataMahasiswa->email }}</p>
</div>

