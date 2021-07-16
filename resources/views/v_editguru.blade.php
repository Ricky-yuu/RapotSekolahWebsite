@extends('layout.v_template')
@section('title','edit')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Guru</title>
</head>
<body>

    <div class="container">
        <form action="/dataguru/update/{{$nip->nip}}" method="post" enctype="multipart/form-data">
            @csrf
            <br>
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label >Nip</label>
                                <input type="text" name="nip" class="form-control" placeholder="nip guru" value="{{$nip->nip}}"readonly>
                                <div class="text-denger">
                                    @error('nip')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>   

                    <div class="form-group">
                        <label >Nama Guru</label>
                            <input type="text" name="nama_guru" class="form-control" placeholder="nama_guru" value="{{$nip->nama_guru}}">
                            <div class="text-denger">
                                @error('nama_guru')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                       
                    <div class="form-group">
                        <label >Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" value="{{$nip->username}}">
                        <div class="text-denger">
                            @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >password</label>
                        <input type="text" name="password" class="form-control " placeholder="password" value="{{$nip->password}}">
                        <div class="text-denger">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="text" name="email" class="form-control " placeholder="email" value="{{$nip->email}}">
                        <div class="text-denger">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Alamat</label>
                            <input type="text" name="alamat" class="form-control " placeholder="alamat" value="{{$nip->alamat}}">
                            <div class="text-denger">
                                @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Mapel</label>
                        <input type="text" name="nama_mapel" class="form-control " placeholder="Mapel" value="{{$nip->nama_mapel}}">
                        <div class="text-denger">
                            @error('nama_mapel')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                   
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>
                
            </div>
        </div>
        </form>
    </div>


</body>
</html>
@endsection