@extends('temp')
@section('Bagianisi')
      <div class="container mt-5">
        <form method="POST" action="{{route('home.update',$data->slug)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="name" value="{{$data->title}}" required = "required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tema</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="tema" value="{{$data->theme}}" required = "required">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Isi Artikel</label>
                <div class="col-sm-10 ml-auto ">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="content" required = "required">{{$data->content}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Masukkan Gambar</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" id="inputPassword3" name="gambar" accept = 'image/jpeg , image/jpg, image/png' >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" value="submit">UBAH</button>
                <a href="{{route('home.index')}}" class="btn btn-danger" >Kembali </a>
                </div>
            </div>
        </form>

      </div>
@endsection
