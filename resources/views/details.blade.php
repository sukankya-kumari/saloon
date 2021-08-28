@extends('common.nav')
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-8 mt-5">
            <table class="table border">

                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>contact</th>
                    <th>alt_contact</th>
                    <th>email</th>
                    <th>status</th>
                    <th>date and time</th>
                </tr>
                @foreach ($clients as $img)
                <tr>
                    <th>{{$img->id}}</th>
                    <th>{{$img->name}}</th>
                    <th>{{$img->contact}}</th>
                    <th>{{$img->alt_contact}}</th>
                    <th>{{$img->email}}</th>

                    <?php
                    $clt = $img->status;
                    ?>

                    @if($clt==2||$clt==0)
                    <th>
                        <a href="">
                            <button class="btn btn-primary rounded">pendding</button>
                        </a>
                    </th>

                    @elseif($clt==1)
                    <th>
                        <a href="">
                            <button class="btn btn-success rounded">accepted</button>
                        </a>
                    </th>
                    
                    @elseif($clt==3)
                    <th>
                        <a href="">
                            <button class="btn btn-danger rounded">reject</button>
                        </a>
                    </th>
                    
                    @endif
                    @if($clt==1)
                    <th>
                        <p>{{$img->date_time}}</p>
                    </th>
                    @elseif($clt==3)
                    <th>
                        <p>sorry your appointment is cancelled</p>
                    </th>

                    @else
                    <th>
                        <p>{{$img->date_time}}</p>
                    </th>
                    @endif
                   
                </tr>

                    @endforeach


            </table>

        </div>
    </div>
</div>
@endsection