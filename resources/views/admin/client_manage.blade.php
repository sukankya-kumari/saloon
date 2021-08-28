@extends('common.nav')
@section('content')
<div class="container-fluid" style="margin-top: 100px;">
  <div class="row">
    <div class="col-lg-8">
    <h4 class="text-center">List of all applied customer</h4>
      <table class="table border">

        <tr>
          <th>Id</th>
          <th>name</th>
          <th>contact</th>
          <th>alt_contact</th>
          <th>email</th>
          <th>status</th>
          <th>Action</th>
        </tr>


        @foreach ($client as $img)
        <tr>
          <th>{{$img->id}}</th>
          <th>{{$img->name}}</th>
          <th>{{$img->contact}}</th>
          <th>{{$img->alt_contact}}</th>
          <th>{{$img->email}}</th>
          <th>
            <div class="btn-group">
              <a href="{{url('/done',$img->id)}}" class="btn btn-success">accept </a>
              <a href="{{url('/remove',$img->id)}}" class="btn btn-success">reject </a>
              <a href="{{url('/pending',$img->id)}}" class="btn btn-success">pending </a>
            </div>
          </th>



          <th><a href="" class="btn btn-danger">delete</a></th>
        </tr>
        @endforeach

      </table>

    </div>
    <div class="col-lg-4">


    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-7">
    <h4 class="text-center">List of pending customer</h4>

      <table class="table border">
     
      
      
        <tr>
          <th>id</th>
          <th>name</th>
          <th>contact</th>
          <th>alt_contact</th>
          <th>email</th>
          <th>status</th>
          <th>action</th>
        </tr>
        @foreach ($pending as $act)
       
      

        <tr>
          <th>{{$act->id}}</th>
          <th>{{$act->name}}</th>
          <th>{{$act->contact}}</th>
          <th>{{$act->alt_contact}}</th>
          <th>{{$act->email}}</th>
          <th> <a href="" class="btn btn-success">pending</a></th>
          <th>
          
            <div class="btn-group">
              <a href="{{url('/done',$act->id)}}" class="btn btn-success">accept </a>
              <a href="{{url('/remove',$act->id)}}" class="btn btn-success">reject </a>
            </div>
        
          </th>
          
        </tr>

   
        @endforeach

      </table>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-7">
    <h4 class="text-center">List of customer</h4>

      <table class="table border">
     
      
      
        <tr>
          <th>id</th>
          <th>name</th>
          <th>contact</th>
          <th>alt_contact</th>
          <th>email</th>
          <th>status</th>
        </tr>
        @foreach ($done as $dn)
        <?php $st = $dn->status ?>
        @if(!$st == 0)

        <tr>
          <th>{{$dn->id}}</th>
          <th>{{$dn->name}}</th>
          <th>{{$dn->contact}}</th>
          <th>{{$dn->alt_contact}}</th>
          <th>{{$dn->email}}</th>
          <th>
            <?php
            $clt = $dn->status;
            ?>
        
          @if($clt==1)
        
            <a href="{{"/date_time/".$dn['id']}}">
              <button class="btn btn-success rounded">accepted</button>
            </a>
         
          @elseif($clt==3)
        
            <a href="">
              <button class="btn btn-danger rounded">reject</button>
            </a>
        


          @endif
        
          </th>
          
        </tr>

        @endif
        @endforeach

      </table>
    </div>
  </div>
</div>







@endsection