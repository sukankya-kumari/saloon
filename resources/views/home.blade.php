@extends('common.footer')
@extends('common.side')
@section('content')
<div class="container mt-4">
    <div class="row">
        <h3 class="text-center">Category</h3>
        <hr>
        @foreach($categories as $item)
        <div class="col-lg-2 mb-0">
            <div class="card border-0 p-5">
                <img src="{{asset('cat_img/'.$item->cat_img)}}" alt="" height="70px">
                <div class="card-body p-0 mt-3">
                    <p class="text-truncate text-center">{{$item->cat_name}}</p>
                    <p class="text-center">Rs.{{$item->price}}</p>
                    <hr>

                </div>
            </div>
        </div>
        @endforeach
        <div class="row mb-4">
            <div class="col-5"></div>
            <div class="col-4">


               
                <?php
                $b = $user->status1;
             

                ?>
                @if($b==0)
                <a href=""><button class="btn  px-5 py-3 rounded text-light disabled" style="background-color: #c44569;border:1px solid white">Get Appointment </button>
                </a>
                <p class="text-danger" style="margin-left: 38px"> sorry we are offline</p>
                @else
                <a href="insert"><button class="btn  px-5 py-3 rounded text-light" style="background-color: #c44569;border:1px solid white">Get Appointment </button>
                </a>
                @endif
            </div>

        </div>

    </div>
</div>

@endsection