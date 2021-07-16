@extends('layout.v_template')
@section('title','dt_siswa')



@section('content')
<br><br>

<div class="container">
    <a href="/datasiswa/add" class="btn btn-primary btn-sm">Add Siswa</a>
    <br><br>
</div>
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
                    <a href="/datasiswa/siswa_kelas_X/{{ $data->nis }}" class="btn btn-sn. btn-success">Detail</a>
                    <a href="" class="btn btn-sn. btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->nis }}">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($siswa as $data) 

<div class="modal modal-danger fade" id="delete{{ $data->nis }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ $data->nama_siswa }}</h4>
                </div>
                <div class="modal-body">
                    <p>Apakan anda yakin ingin menghapus data ini...?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                    <a href="/datasiswa/delete/{{ $data->nis }}" class="btn btn-outline">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach
    
</div>
    
    
    @endsection