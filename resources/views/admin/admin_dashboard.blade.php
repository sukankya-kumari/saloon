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
        <ul class="navbar-nav" style="margin-left: 56%">
            <li class="nav-item"><a href="" class="nav-link me-4 fw-bold" style="color:balck">Home</a></li>
            <li class="nav-item"><a href="" class="nav-link me-4 fw-bold" style="color: balck">Service</a></li>
            <li class="nav-item"><a href="" class="nav-link me-4 fw-bold" style="color:balck">Gallery</a></li>
            <li class="nav-item"><a href="" class="nav-link me-4 fw-bold" style="color:balck">Contact</a></li>

            <?php
            $a = $online->status1;

            ?>
            @if($a ==0)

            <li class="nav-item"><a href="{{url('/isOfline',$online->id)}}" class="btn btn-sm btn-danger">ofline</a></li>


            @else
            <li class="nav-item"><a href="{{url('/isOfline',$online->id)}}" class="btn btn-sm btn-success">online</a></li>

            @endif


        </ul>
    </nav>


</body>

</html>


<div class="container-fluid mt-5">
    <div class="row mt-5">
        <div class="col-lg-4 mt-5">
            <div class="list-group mt-3">
                <a href="/category/create" class="list-group-item list-group-item-action text-dark">Manage Category</a>
                <a href="/category/client_manage" class="list-group-item list-group-item-action">Manage Booking</a>
            </div>
        </div>
        <div class="col-lg-8 mt-5">
            <div class="row mt-2">
                <div class="col-lg-3">
                    <div class="card bg-success text-center ">
                        <h5 class="mt-2">Total no of service category</h5>
                        <div class="card-body">
                            <h4 class="text-center">{{$data}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card bg-danger text-center ">
                        <h5 class="mt-2">Total no of rejected client</h5>
                        <div class="card-body">
                            <h4 class="text-center">{{$client}}</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="card  bg-info">
                        <h5 class="mt-2 text-center">Total no of accept customer</h5>
                        <div class="card-body">
                            <h4 class="text-center">{{$at}}</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 ">
                    <div class="card bg-dark">
                        <h5 class="text-light text-center mt-2">Total no of pending customer</h5>
                        <div class="card-body">
                            <h4 class="text-center text-light">{{$pd}}</h4>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">

            </div>

        </div>
    </div>
</div>