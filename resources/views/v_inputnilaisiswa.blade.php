@extends('layout.v_template')
@section('title','Admin')


@section('content')

<div class="container">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>nis</th>
            <th>Nama siswa</th>
            <th>input Nilai </th>
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
                <td><input type="number" ></td>
               
                
                <td>
                    <a href="/dataguru" class="btn btn-sn. btn-success">Simpan</a>
                    <a href="/dataguru" class="btn btn-sn. btn-warning">Kembali</a>
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