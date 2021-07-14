@extends('layout.v_template')
@section('title','Guru')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DetaiGuru</title>
</head>
<body>

    <div class="container">
        <br><br><br>
    <table class="table">
        <tr>
            <th width="150px">NIP</th>
            <th width="30px">:</th>
            <th>{{ $guru->nip }}</th>
        </tr>
        <tr>
            <th width="150px">Nama Guru</th>
            <th width="30px">:</th>
            <th>{{ $guru->nama_guru }}</th>
        </tr>
        <tr>
            <th width="150px">Username</th>
            <th width="30px">:</th>
            <th>{{ $guru->username }}</th>
        </tr>
        <tr>
            <th width="150px">Password</th>
            <th width="30px">:</th>
            <th>{{ $guru->password }}</th>
        </tr>
        <tr>
            <th width="150px">Email</th>
            <th width="30px">:</th>
            <th>{{ $guru->email }}</th>
        </tr>
        <tr>
            <th width="150px">Alamat</th>
            <th width="30px">:</th>
            <th>{{ $guru->alamat }}</th>
        </tr>
        <tr>
            <th width="150px">Mapel</th>
            <th width="30px">:</th>
            <th>{{ $guru->nama_mapel }}</th>
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