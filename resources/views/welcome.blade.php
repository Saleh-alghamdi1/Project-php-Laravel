@extends('layouts.app')
@section('content')

<?php $c = 0; ?>

<div class="container">
    <h1 class="alert alert-dark text-center">! Welcome To Website </h1>

    @while($c < $count)
         
    <div class="row text-center d-flex align-items-center justify-content-center">
        <div class="col-sm-4 text-center">
        <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
            <div class="card m-2">
                <div class="card-body">
                    <h4 class="text-dark">{{$data[$c]->Itemgroupsname}}</h4>
                    <h3><i class="bi bi-pc-display-horizontal" style="font-size: larger;"></i></h3>
                    
                    
                </div>
            </div>
        </a>
        </div>

        <?php $c++;?>
        @if($c < $count)
        <div class="col-sm-4 text-center">
        <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-dark ">{{$data[$c]->Itemgroupsname}}</h4>
                    <h3><i class="bi bi-phone"></i></h3>
                </div>
            </div>
        </a>
        </div>
        <?php $c++;?>
        @endif

      
        
        
    </div>

    @endwhile
</div>

@endsection