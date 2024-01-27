@extends('layouts.app')

@section('content')


<div class="container">

@foreach($data as $row)

<div class="mt-4">
    <div class="card border-secondary mb-3">
        <div class="row ">
            <div class="col-sm-3">
            <img src="/image/{{$row->image}}" width="240" height="250">
            </div>
            <div class="col-sm-9 text-start">
           <h1 class="alert alert-info text-dark ">{{$row->itemname}}</h1>
           <br>
           <h5 >  {{$row->description}}</h5><br>
           <h5 class="badge rounded-pill bg-secondary" style="font-size:95%;"> Color :{{$row->color}}</h5> <br>
           <h5 class="badge rounded-pill bg-warning text-dark" style="font-size: 95%;"> Price :{{$row->price}}</h5>
           
           

           <div class="row">
            <div class="col text-center">
                <a href="{{route('addtocart',['id'=>$row->id])}}" class="btn btn-success">Add To Card</a>

            </div>
           </div>
            </div>
        </div>
    </div>
</div>

@endforeach
  
   </div>





@endsection