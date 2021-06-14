<!-- Nama Prodi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_prodi', 'Nama Prodi:') !!}
    {!! Form::text('nama_prodi', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Jurusan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jurusan_id', 'Jurusan Id:') !!}
    {!! Form::select('jurusan_id', $Jurusan, null, ["class"=>"form-control","required"]) !!}
</div>