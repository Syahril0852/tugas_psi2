<div class="table-responsive">
    <table class="table" id="dataMahasiswas-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Nim</th>
        <th>Agama</th>
        <th>Jenis Kelamin</th>
        <th>Semester</th>
        <th>Prodi Id</th>
        <th>Jurusan Id</th>
        <th>No Telp</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dataMahasiswas as $dataMahasiswa)
            <tr>
                <td>{{ $dataMahasiswa->nama }}</td>
            <td>{{ $dataMahasiswa->nim }}</td>
            <td>{{ $dataMahasiswa->agama }}</td>
            <td>{{ $dataMahasiswa->jenis_kelamin }}</td>
            <td>{{ $dataMahasiswa->semester }}</td>
            <td>{{ $dataMahasiswa->prodi->nama_prodi }}</td>
            <td>{{ $dataMahasiswa->jurusan->jurusan }}</td>
            <td>{{ $dataMahasiswa->no_telp }}</td>
            <td>{{ $dataMahasiswa->email }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dataMahasiswas.destroy', $dataMahasiswa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dataMahasiswas.show', [$dataMahasiswa->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dataMahasiswas.edit', [$dataMahasiswa->id]) }}" class='btn btn-default btn-xs'>
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
