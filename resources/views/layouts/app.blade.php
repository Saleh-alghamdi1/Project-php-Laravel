<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  *{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
</style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body dir="rtl" >
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('welcome')}}">الرئيسية </a>
                      </li>

                      <!-----
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('itemgroup')}}">مجموعات العناصر</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('item')}}">العناصر</a>
                  </li>
                 ----->
                 
                </ul>
              </div>
             
             
              <div class="collapse navbar-collapse" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <h3 class= " text-white bi bi-bag-heart-fill" aria-current="page" href="#" style= "font-family:'Courier New', Courier, monospace">... Tuwaiq Programming BootCamp</h3>
                    </li>
                   
                   
                  </ul>
               
              </div>
            
             
              <div>
                
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="{{route('checkout')}}">
                      <i  class="fa-solid fa-cart-shopping text-white p-"></i> <span class="badge bg-danger">{{Session::get('countitem')}} </span>
                    </a>
                   
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Login</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link text-white" href="{{route('register')}}">Register</a>
                      
                    </li>
                    
                  </ul>
               
              </div>
            </div>
          </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <br><br>
      <footer class="bg-body-tertiary text-center mt-5">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
            data-mdb-ripple-init
              class="btn text-white btn-floating m-1"
              style="background-color: #3b5998;"
              href="#!"
              role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              data-mdb-ripple-init
              class="btn text-white btn-floating m-1"
              style="background-color: #55acee;"
              href="#!"
              role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a
              data-mdb-ripple-init
              class="btn text-white btn-floating m-1"
              style="background-color: #dd4b39;"
              href="#!"
              role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a
              data-mdb-ripple-init
              class="btn text-white btn-floating m-1"
              style="background-color: #ac2bac;"
              href="#!"
              role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a
              data-mdb-ripple-init
              class="btn text-white btn-floating m-1"
              style="background-color: #0082ca;"
              href="#!"
              role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <!-- Github -->
            <a
              data-mdb-ripple-init
              class="btn text-white btn-floating m-1"
              style="background-color: #333333;"
              href="#!"
              role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2024 Copyright:
          <a class="text-body" href="#">Tuwaiq Programming BootCamp</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>
