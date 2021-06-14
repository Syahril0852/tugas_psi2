<div class="table-responsive">
    <table class="table" id="dataKonsultasis-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Nim</th>
        <th>Tgk Konsultasi</th>
        <th>Hasil Konsultasi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dataKonsultasis as $dataKonsultasi)
            <tr>
                <td>{{ $dataKonsultasi->nama }}</td>
            <td>{{ $dataKonsultasi->nim }}</td>
            <td>{{ $dataKonsultasi->tgk_konsultasi }}</td>
            <td>{{ $dataKonsultasi->hasil_konsultasi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dataKonsultasis.destroy', $dataKonsultasi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dataKonsultasis.show', [$dataKonsultasi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dataKonsultasis.edit', [$dataKonsultasi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
