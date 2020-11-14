<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS FRAMEWORK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <!-- Bootstrap core CSS -->
    <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

      <!-- Custom styles for this templ ate -->
    <link href="{{asset('asset/css/clean-blog.min.css')}}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <a href="{{route('home.index')}}" class="logo">UTS FRAMEWORK</a>
                <a href="{{route('create')}}" id="nav-cta">Tambah Data</a>
            </nav>
        </div>
    </header>

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="https://www.pictureeuropa.com/wp-content/uploads/2019/09/4k-nature-wallpapers-ultra-hd-64.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="https://www.radeq.com/wp-content/uploads/Best-4k-Ultra-Hd-Nature-Wallpaper-1366x768.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cutewallpaper.org/21/wallpaper-nature-night/71+-Night-Ocean-Wallpapers-on-WallpaperPlay.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br><br><br>


    <!-- Isi ya-->
    @yield('Bagianisi')

    <!-- Batas Isi ya-->

    <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://twitter.com/AgungSantoso321">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://web.facebook.com/agung.santoso.3998">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/PilotJinix">
                <span class="fa-stack fa-lg" >
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse" ></i>
                </span>
              </a>
            </li>
          </ul>
          <br>
          <p class="copyright text-muted">Copyright &copy;by MUHAMMAD AGUNG SANTOSO</p>
        </div>
      </div>
    </div>
  </footer>

  
    <script>
        window.addEventListener('scroll', function () {
            let header = document.querySelector('header');
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('scrolling-active', windowPosition);
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <!-- Bootstrap core JavaScript -->
    <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Custom scripts for this template -->
    <script src="{{asset('assetjs/clean-blog.min.js')}}"></script>

</body>
</html> 