<!-- Nama Prodi Field -->
<div class="col-sm-12">
    {!! Form::label('nama_prodi', 'Nama Prodi:') !!}
    <p>{{ $prodi->nama_prodi }}</p>
</div>

<!-- Jurusan Id Field -->
<div class="col-sm-12">
    {!! Form::label('jurusan_id', 'Jurusan Id:') !!}
    <p>{{ $prodi->jurusan->jurusan }}</p>
</div>

