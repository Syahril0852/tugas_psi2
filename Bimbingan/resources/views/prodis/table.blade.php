<div class="table-responsive">
    <table class="table" id="prodis-table">
        <thead>
            <tr>
                <th>Nama Prodi</th>
        <th>Jurusan Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prodis as $prodi)
            <tr>
                <td>{{ $prodi->nama_prodi }}</td>
            <td>{{ $prodi->jurusan->jurusan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['prodis.destroy', $prodi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prodis.show', [$prodi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('prodis.edit', [$prodi->id]) }}" class='btn btn-default btn-xs'>
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
