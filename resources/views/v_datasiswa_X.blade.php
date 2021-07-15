@extends('layout.v_template')
@section('title','dt_siswa')



@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>nis</th>
            <th>Nama Siswa</th>
            <th>username</th>
            <th>email</th>
            <th>telp</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?> 
        @foreach ($siswa as $data) 
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->nama_siswa }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->password }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->kelas }}</td>
                
                <td>
                    <a href="" class="btn btn-sn. btn-success">Detail</a>
                    <a href="" class="btn btn-sn. btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                        Delete
                      </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
     

@endsection