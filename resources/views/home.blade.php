<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
                *,
        *::before,
        *::after{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html{
            font-family: 'Roboto', sans-serif;
            font-size: 10px;
        }

        header{
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            transition: background-color .5s ease;
            z-index: 1000;
        }

        .container{
            width: 100%;
            max-width: 120rem;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .welcome h2{
            font-size: 30px;
            color:white;
            position: absolute;
            top: 150px;
            left: 40%;

        }

        .welcome h1{
            font-size: 30px;
            color:#313131;
            position: absolute;
            top: 200px;
            left: 33%;

        }

        .welcome.myname {
            left: 20%;
            color: black;
        }

        .nav{
            width: 100%;
            height: 10rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid rgba(255,255,255,.05);
            transition: height .5s ease;
        }

        .nav a{
            text-decoration: none;
            color: #fff;
            font-size: 1.6rem;
        }

        .nav .logo{
            font-size: 3.5rem;
            font-weight: bold;
        }

        .nav-list{
            list-style: none;
            display: flex;
            margin-right: auto;
            margin-left: 4rem;
        }

        .nav-link{
            margin: 0 2rem;
            position: relative;
        }

        .nav-link::after{
            content: '';
            width: 100%;
            height: 2px;
            background-color: #fff;
            position: absolute;
            left: 0;
            bottom: -3px;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .5s ease;
        }

        .nav-link:hover::after{
            transform: scaleX(1);
        }

        #nav-cta{
            display: inline-block;
            background-color: #fff;
            color: #313131;
            padding: 1rem 2rem;
            border-radius: 2rem;
            transition: background-color .5s ease;
        }

        #nav-cta:hover{
            background-color: #d3d3d3;
        }


        /*Apply styles after scroll*/
        .scrolling-active{
            background-color: #fff;
            box-shadow: 0 3px 1rem rgba(0,0,0,.1);
        }

        .scrolling-active .nav{
            height: 6.6rem;
        }

        .scrolling-active .nav a{
            color: #313131;
        }

        .scrolling-active #nav-cta{
            background-color: #313131;
            color: #fff;
        }

        .scrolling-active #nav-cta:hover{
            background-color: #151515;
        }

        .scrolling-active .nav-link::after{
            background-color: #313131;
        }

        /*Apply styles after scroll end*/


        /* Hero Demo Content*/
        .hero{
            width: 100%;
            height: 100vh;
            background: url("https://i.pinimg.com/originals/dd/2f/90/dd2f905bf2b8b5156059fa935ea23b97.jpg") center no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero::after{
            content: '';
            width: inherit;
            height: inherit;
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(0,0,0,0);
        }

        .demo-content{
            width: 100%;
            height: 70vh;
            background-color: #fff;
        }
        /* Hero end*/
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav">
                <a href="index.html" class="logo">UTS FRAMEWORK</a>
                <a href="{{route('create')}}" id="nav-cta">Tambah Data</a>
            </nav>
        </div>
    </header>


    <section class="hero">
        <div class="welcome">
            <h2>SELAMAT DATANG</h2>
            <h1>MUHAMMAD AGUNG SANTOSO</h1>         
        </div>
    </section>
    <br><br><br>

    <div class="container">
        @if($data)
        @foreach($data as $d)
            <div class="card">
                <h5 class="card-header">{{$d->title}}</h5>
                <div class="card-body">
                    <h5 class="card-title">Dengan Tema : {{$d->theme}}</h5>
                    <p class="card-text">{!! Str::words($d->content,40, '...')!!}</p>
                    <a href="#" class="btn btn-info">Baca Selengkapnya</a>
                    <a href="{{route('home.edit',$d->slug)}}" class="btn btn-warning">Ubah</a>
                    <form style="display:inline-block" action="{{route('home.destroy',$d->slug)}}" method="POST"><input type="hidden" name="_method" value="delete">{{csrf_field()}}<button type="submit" class="btn btn-danger">Hapus</button></form>
                </div>
                
            </div>
            <br><br><br>
        @endforeach
        @else
        <h1>Data Kosong</h1>
        @endif
    </div>

<section class="demo-content"></section>
    <script>
        window.addEventListener('scroll', function () {
            let header = document.querySelector('header');
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('scrolling-active', windowPosition);
        })
    </script>
</body>
</html>