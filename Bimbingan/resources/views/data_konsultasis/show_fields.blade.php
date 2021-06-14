<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $dataKonsultasi->nama }}</p>
</div>

<!-- Nim Field -->
<div class="col-sm-12">
    {!! Form::label('nim', 'Nim:') !!}
    <p>{{ $dataKonsultasi->nim }}</p>
</div>

<!-- Tgk Konsultasi Field -->
<div class="col-sm-12">
    {!! Form::label('tgk_konsultasi', 'Tgk Konsultasi:') !!}
    <p>{{ $dataKonsultasi->tgk_konsultasi }}</p>
</div>

<!-- Hasil Konsultasi Field -->
<div class="col-sm-12">
    {!! Form::label('hasil_konsultasi', 'Hasil Konsultasi:') !!}
    <p>{{ $dataKonsultasi->hasil_konsultasi }}</p>
</div>

