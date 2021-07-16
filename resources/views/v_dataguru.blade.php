@extends('layout.v_template')
@section('title','Guru')



@section('content')
<br>
<br>

<div class="container">
    <a href="/dataguru/add" class="btn btn-primary btn-sm">Add Guru</a>
    <br><br>
    </div>
        
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>nip</th>
            <th>Nama Guru</th>
            <th>username</th>
            <th>password</th>
            <th>email</th>
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
                    <a href="/dataguru/edit/{{ $data->nip }}" class="btn btn-sn. btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->nip }}">
                        Delete
                      </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@foreach ($guru as $data) 

<div class="modal modal-danger fade" id="delete{{ $data->nip }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ $data->nama_guru }}</h4>
                </div>
                <div class="modal-body">
                    <p>Apakan anda yakin ingin menghapus data ini...?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="/dataguru/delete/{{ $data->nip }}" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach
    
</div>

     
     

@endsection