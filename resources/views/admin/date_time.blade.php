@extends('common.nav')
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-4 mt-5">
            <div class="crad rounded" style="background-image: url('../footer/img.jpg');background-color: rgba(0,0,0,0.7);background-blend-mode: darken;">

                <div class="card-body p-4">
                    <form action="/date_time" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{$data['id']}}">

                        <div class="mb-2">
                            <label for="" class="text-light">Date and Time</label>
                            <input type="text" name="date_time" value="{{$data['date_time']}}" class="form-control">
                        </div>

                        </div>
                        <div class="mb-2">
                            <input type="submit" class="btn btn-success form-control" value="update">
                        </div>

                    </form>
                </div>
            </div>

      
    </div>
</div>
</div>
@endsection