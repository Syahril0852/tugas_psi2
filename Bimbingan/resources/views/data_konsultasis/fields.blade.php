<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Nim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nim', 'Nim:') !!}
    {!! Form::text('nim', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Tgk Konsultasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgk_konsultasi', 'Tgk Konsultasi:') !!}
    {!! Form::text('tgk_konsultasi', null, ['class' => 'form-control','id'=>'tgk_konsultasi']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgk_konsultasi').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Hasil Konsultasi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('hasil_konsultasi', 'Hasil Konsultasi:') !!}
    {!! Form::textarea('hasil_konsultasi', null, ['class' => 'form-control']) !!}
</div>