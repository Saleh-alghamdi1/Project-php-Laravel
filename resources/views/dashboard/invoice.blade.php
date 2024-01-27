@extends('layouts.dashboard')

@section('content')
  
<div class="container">
  <div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row d-flex justify-content-center" style="font-size:medium;">
                <div class="col-sm-12">
                    <h4 class=" alert alert-success text-center" style="font-size:200%;" >  الفواتير </h4>

    <div class="container">
      <div class="row">
        <div class="col">
          <i class="bi bi-shop text-danger fa-6x float-start"></i>
        </div>
      </div>


      <div class="row">
        <div class="col">

          <ul class="list-unstyled float-end">
            <li style="font-size: 30px; color: red;">Store</li>
            <li>ALBAHA</li>
            <li>0533558762</li>
            <li>ssaalihh976@gmail.com</li>
          </ul>
        </div>
      </div>

      <div class="row text-center">
        <h3 class="text-uppercase text-center mt-3" style="font-size: 40px;">Invoice</h3>
        <p>65986547</p>
      </div>

      <div class="row ">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Description</th>
              <th scope="col">Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>iPhone 15 Pro Max</td>
              <td><i class=""> </i> 5.199</td>
            </tr>
            <tr>
              <td>PlayStation 5</td>
              <td><i class=""></i> 2.098</td>
            </tr>
            <tr>
              <td>Asus VivoBook laptop</td>
              <td><i class=""></i> 2.949</td>
            </tr>
            <tr>
              <td>Smart TV Samsung</td>
              <td><i class=""></i> 8.699</td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="row">
        <div class="col-xl-8">
          <ul class="list-unstyled float-end me-0">
            <li><span class="me-3 float-start">:Total Amount</span><i class=""></i> 18.848
            </li>
            <li> <span class="me-5">Discount:</span><i class=""></i> 500,00</li>
            <li><span class="float-start" style="margin-right: 35px;">:Shippment </span><i
                class=""></i> 100,00</li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-xl-8" style="margin-left:60px">
          <p class="float-end"
            style="font-size: 30px; color: red; font-weight: 400;font-family: Arial, Helvetica, sans-serif;">
            Total:
            <span><i class=""></i> 18.848,00</span></p>
        </div>

      </div>

      <div class="row mt-2 mb-5">
        <p class="fw-bold">Date: <span class="text-muted">23 June 2024</span></p>
        <p class="fw-bold mt-3">:Signature</p>
      </div>

    </div>



  </div>
  <div class="card-footer bg-black"></div>
</div>

@endsection