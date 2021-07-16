@extends('layout.v_template')
@section('title','Siswa')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DetaiSiswa</title>
</head>
<body>

    <div class="container">
        <br><br><br>
    <table class="table">
        <tr>
            <th width="150px">NIS</th>
            <th width="30px">:</th>
            <th>{{ $siswa->nis }}</th>
        </tr>
        <tr>
            <th width="150px">Nama Siswa</th>
            <th width="30px">:</th>
            <th>{{ $siswa->nama_siswa }}</th>
        </tr>
        <tr>
            <th width="150px">Username</th>
            <th width="30px">:</th>
            <th>{{ $siswa->username }}</th>
        </tr>
        <tr>
            <th width="150px">Password</th>
            <th width="30px">:</th>
            <th>{{ $siswa->password }}</th>
        </tr>
        <tr>
            <th width="150px">Email</th>
            <th width="30px">:</th>
            <th>{{ $siswa->email }}</th>
        </tr>
        <tr>
            <th width="150px">Alamat</th>
            <th width="30px">:</th>
            <th>{{ $siswa->alamat }}</th>
        </tr>
        <tr>
            <th width="150px">Kelas</th>
            <th width="30px">:</th>
            <th>{{ $siswa->kelas }}</th>
        </tr>
        <tr>
            <th>
                <a href="/dataguru" class="btn btn-success btn-sm">Kembali</a>
            </th>
        </tr>

    </table>
        

    </div>

</body>
</html>
@endsection