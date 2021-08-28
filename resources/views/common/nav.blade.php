<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

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


</body>

</html>
@yield('content')