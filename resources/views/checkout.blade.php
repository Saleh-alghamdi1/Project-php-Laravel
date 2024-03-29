@extends('layouts.app')
@section('content')


<section class="vh-100" style="background-color: #F0F8FF;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <p><span class="h2">Shopping Cart </span><span class="h4">( item in your cart)</span></p>

        <div class="card mb-4">
          <div class="card-body p-4">

            <div class="row align-items-center">
              <div class="col-md-2">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_Bwjddozj73CkXmlXe5kWTwE2zTlHH0lrFKqG_fjfkkNOmFfTehoALujQ1Io3kLSW4HU&usqp=CAU"
                  class="img-fluid" alt="Generic placeholder image">
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Name</p>
                  <p class="lead fw-normal mb-0">Iphone</p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Color</p>
                  <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2" style="color: #000000;"></i>
                    black</p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Quantity</p>
                  <p class="lead fw-normal mb-0">3</p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">  
                <div>
                  <p class="small text-muted mb-4 pb-2">Price</p>
                  <p class="lead fw-normal mb-0"> SR 2,999  </p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2"> Taxation %15 </p>
                  <p class="lead fw-normal mb-0"> SR 449,85</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="card mb-5">
          <div class="card-body p-4">

            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2"> Order total: </span> <span 
                  class="lead fw-normal" >SR 3,448.85 </span>
              </p>
            </div>

          </div>
        </div>

        <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>
          <button type="button" class="btn btn-primary btn-lg">Add to cart</button>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection