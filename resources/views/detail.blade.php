@extends('temp')
@section('Bagianisi')
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
          <h2 >{{$data->title}}</h2>
          <br>
          <h5 class="card-title"> Tema : {{$data->theme}}</h5>
          <h5 class="card-title" style="color:grey;"> Posting at : {{$data->datetime}}</h5>
          <img src="{{asset('storage/home/'.$data->gambar)}}" alt="">
          <br><br><br><br><br>
          <p class="card-text">{{$data->content}}</p>
          <br><br><br><br><br>
          <a href="{{route('home.index')}}" class="btn btn-danger" >Kembali </a>
        </div>
        
      </div>
    </div>
@endsection