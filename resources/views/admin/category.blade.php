@extends('common.nav')
@section('content')
<div class="container" style="margin-top: 120px;">
    <div class="row">
        <div class="col-lg-4">
            <div class="crad">
                <div class="card body p-4">
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-2">
                            <label for="">Cat_Name</label>
                            <input type="text" name="cat_name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Cat_img</label>
                            <input type="file" name="cat_img" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Cat_decription</label>
                            <input type="text" name="cat_discription" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="submit" class="btn btn-success form-control">
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-8">
            <table class="table border">
           
                <tr>
                    <th>cat Id</th>
                    <th>cat name</th>
                    <th>cat description</th>
                    <th>action</th>
                </tr>
                @foreach ($categories as $img)
                <tr>
                    <th>{{$img->id}}</th>
                    <th>{{$img->cat_name}}</th>
                    <th>{{$img->cat_discription}}</th>
                    <th><a href="" class="btn btn-danger">delete</a></th>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection