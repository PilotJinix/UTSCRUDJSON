@extends('temp')
@section('Bagianisi')
    <div class="container">
                @if($data)
                @foreach($data as $d)
                <div class="card-deck p-3 row " style="width: 30rem; display:inline-block">
                    <div class="card" >
                        <img  src="{{asset('storage/home/'.$d->gambar)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h4 class="card-title">{!! Str::words($d->title,5, '...')!!}</h4>
                        <h5 class="card-text" style="color: gray;">Diposting {{$d->datetime}}</h5>
                        <p class="card-text">{!! Str::words($d->content,9, '...')!!}</p>
                        <br><br>
                        <a href="{{route('home.show',$d->slug)}}" class="btn btn-primary" >Baca Selengkapnya</a>
                        <a href="{{route('home.edit',$d->slug)}}" class="btn btn-warning">Ubah</a>
                        <form style="display:inline-block" action="{{route('home.destroy',$d->slug)}}" method="POST"><input type="hidden" name="_method" value="delete">{{csrf_field()}}<button type="submit" class="btn btn-danger">Hapus</button></form>
                        </div>
                    </div>
                    
                </div>
                @endforeach
                @else
                <h1>Data Kosong</h1>
                @endif
            </div>
        </div>
    </div>
@endsection