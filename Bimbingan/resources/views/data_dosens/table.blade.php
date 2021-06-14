<div class="table-responsive">
    <table class="table" id="dataDosens-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Prodi Id</th>
        <th>Jurusan Id</th>
        <th>No Telp</th>
        <th>Email</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dataDosens as $dataDosen)
            <tr>
                <td>{{ $dataDosen->nama }}</td>
            <td>{{ $dataDosen->jenis_kelamin }}</td>
            <td>{{ $dataDosen->agama }}</td>
            <td>{{ $dataDosen->prodi->nama_prodi }}</td>
            <td>{{ $dataDosen->jurusan->jurusan }}</td>
            <td>{{ $dataDosen->no_telp }}</td>
            <td>{{ $dataDosen->email }}</td>
            <td>{{ $dataDosen->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dataDosens.destroy', $dataDosen->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dataDosens.show', [$dataDosen->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dataDosens.edit', [$dataDosen->id]) }}" class='btn btn-default btn-xs'>
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
