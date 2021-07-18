@extends('layout.v_template')
@section('title','Admin')




@section('content')
<br><br>
<div class="container">

  <div class="row">
    @foreach ($dataMapel as $mapel)
        
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="card" style="width: 18rem;">
            <div class="col mb-4 cardss">
                <div class="card">
                    <a href="" class="text-color-a">
                        <img src="{{asset('images')}}/img1.png" class="card-img-top mx-auto d-block" alt="..." style="width:100%; height:100%;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mapel->nama_mapel }}</h5>
                        </div>
                    </a>
          </div>
        </div>
    </div>
</div>
@endforeach
  </div>
  


</div>
    <br>
    <br>
    @endsection