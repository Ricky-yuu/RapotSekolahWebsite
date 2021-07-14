@extends('layout.v_template')
@section('title','Guru')



@section('content')
<br>
<br>

<div class="container">
    <a href="" class="btn btn-primary btn-sm">Add Konsumen</a>
    <br><br>
    </div>
        
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>nip</th>
            <th>Nama Guru</th>
            <th>username</th>
            <th>email</th>
            <th>telp</th>
            <th>Alamat</th>
            <th>Mapel</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?> 
        @foreach ($guru as $data) 
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nip }}</td>
                <td>{{ $data->nama_guru }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->password }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->nama_mapel }}</td>
                
                <td>
                    <a href="/dataguru/detail/{{ $data->nip }}" class="btn btn-sn. btn-success">Detail</a>
                    <a href="" class="btn btn-sn. btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                        Delete
                      </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
     
     

@endsection