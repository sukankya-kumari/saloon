<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light shadow " style="background-color:#f7f1e3;">
      <a class="navbar-brand ms-5" href="#"><img src="{{asset('image/logo.png')}}" alt="" height="60px"></a>
        <ul class="navbar-nav" style="margin-left: 60%">
          <li class="nav-item"><a href="" class="nav-link me-4 fw-bold" style="color:balck">Home</a></li>
          <li class="nav-item"><a href="" class="nav-link me-4 fw-bold" style="color: balck">Service</a></li>
          <li class="nav-item"><a href="" class="nav-link me-4 fw-bold" style="color:balck">Gallery</a></li>
          <li class="nav-item"><a href="" class="nav-link me-4 fw-bold" style="color:balck">Contact</a></li>
        </ul>
    </nav>

  <section class="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 85px;">
      <div class="carousel-controls">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" style="background-image: url('../image/img2.jpg')"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" style="background-image: url('../image/img3.jpg')"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" style="background-image: url('../image/slider4.jpg')"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" style="background-image: url('../image/slider2.jpg')"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" style="background-image: url('../image/img1.jpg')"></li>
        </ol>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('image/img2.jpg')}}" alt="" width="100%" height="550px">

          <div class="container">
            <h2 class="text-dark">CITY STYLE PARLOUR</h2>

            <p class="text-dark">WE MAKE YOU MORE BEAUTYFULL</p>
          </div>
        </div>

        <div class="carousel-item ">
          <img src="{{asset('image/img3.jpg')}}" alt="" width="100%" height="550px">

          <div class="container">
            <h2>Make an appointment in just a click!</h2>
          
            
                <?php
                $b = $user->status1;
             

                ?>
                @if($b==0)
                <a href=""><button class="btn  px-5 py-3 rounded text-light disabled" style="background-color: #c44569;border:1px solid white">Get Appointment </button>
             
                </a>
                <p class="text-danger"> sorry we are offline</p>
                @else
                <a href="insert"><button class="btn  px-5 py-3 rounded text-light" style="background-color: #c44569;border:1px solid white">Get Appointment </button>
                </a>
                @endif
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{asset('image/slider4.jpg')}}" alt="" width="100%" height="550px">

          <div class="container">
            <h2>NEWEST HAIRCUTS</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('image/slider2.jpg')}}" alt="" width="100%" height="550px">

          <div class="container">
            <h2>Pedicure and manicure</h2>
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{asset('image/img1.jpg')}}" alt="" width="100%" height="550px">
        </div>
      </div>

    </div>

  </section>

 


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
@yield('content')


