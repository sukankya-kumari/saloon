
@extends('common.nav')
@section('content')
<div class="container" style="margin-top: 120px;">
    <div class="row">
        <div class="col-lg-6 ">
            <div class="crad rounded"style="background-image: url('../footer/img.jpg');background-color: rgba(0,0,0,0.7);background-blend-mode: darken;">
                 
                <div class="card-body p-4" >
             <form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-2">
                            <label for="" class="text-light">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                       
                        <div class="mb-2">
                            <label for="" class="text-light">contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="text-light">alt_contact</label>
                            <input type="text" name="alt_contact" class="form-control">
                        </div>
                        <div class="mb-2 text-light">
                            <label for="">email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label class="text-light">Cat_id</label>
                            <select name="cat_id" class="form-control">
                                @foreach($categories as $cat):
                                    <option value="<?= $cat['id'];?>"><?= $cat['cat_name'];?>,(<?= $cat['id'];?>)</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="mb-2">
                            <input type="submit" class="btn btn-success form-control">
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
        <a href="details">
               <button class="btn  px-5 py-3 rounded text-light" style="background-color: #c44569;border:1px solid white">Check Your Details</button>
               </a> 
        </div>   
       
    </div>
</div>
@endsection
