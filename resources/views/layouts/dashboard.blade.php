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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   <style>
    *{
      font-family: cairo;
    }
   </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body dir="rtl">
    <div id="app">
        <!-- navbar -->
          <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        
                        <a class="nav-link  text-white"  href="{{route('welcome')}}"> الرئيسية</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link  text-white"  href="{{route('itemgroup')}}">مجموعات العناصر</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('item')}}">العناصر</a>
                  </li>
                 
                </ul>
              </div>
             
             
              <div class="collapse navbar-collapse" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <h3 class= " text-white bi bi-bag-heart-fill" aria-current="page" href="#" style= " font-family:'Courier New', Courier, monospace">... Tuwaiq Programming BootCamp</h3>
                    </li>
                   
                    
                  </ul>
               
              </div>
             
             
              <div>
                @if(Auth::guest())
                <ul class="navbar-nav">

                    <li class="nav-item">
                      <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="{{route('register')}}">Register</a>
                    </li>    
                  </ul>
                  @else
                  <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active text-white" aria-current="page" href="{{route('logout')}}">Logout</a>
                      </ul>
                      @endif

                      
              </div>
            </div>
          </nav>

          <main class="py-0">
            <div class="">
                
                <div class="row">
                    <div class="col-sm-2 bg-dark">
                        <div class="container-fluid">
                            <div class="row flex-nowrap">
                                <div class="col-auto col-md-5 col-xl-4 px-sm-4 px-0 bg-dark">
                                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                        <a class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                            <span class="fs-3 d-none d-sm-inline">Menu</span>
                                        </a>
                                        
                                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-3" id="menu">
                                            <li class="nav-item" style="font-size:medium;">
                                                <a href="{{route('controlpanel')}}" class="nav-link align-middle px-0">
                                                <i class="bi bi-grid-3x3-gap-fill"  style="font-size:22px"></i> <span class="ms-1 d-none d-sm-inline text-white"><br>المنتجات</span>
                                                </a>
                                                <br>
                                            </li> 
                                            <li class="nav-item " style="font-size:medium;">
                                                <a href="{{route('addgritem')}}" class="nav-link align-middle px-0">
                                                <i class="bi bi-person-workspace"  style="font-size:22px"></i> <span class="ms-1 d-none d-sm-inline text-white">اضافة_مجموعة</span>
                                                </a>
                                            </li>
                                            <br>
                                            <li>               
                                                <a href="{{route('additem')}}" class="nav-link px-0 align-middle px-0 " style="font-size:medium;">
                                                <i class="bi bi-diagram-2"  style="font-size:22px"></i> <span class="ms-1 d-none d-sm-inline text-white">اضافة_عنصر</span></a>
                                            </li>
                                            <br>
                                            <li>
                                            <a href="{{route('invoice')}}" class="nav-link px-0 align-middle px-0" style="font-size:medium;">
                                                <i class="bi bi-cash "  style="font-size:22px"></i> <span class="ms-1 d-none d-sm-inline text-white"><br> الفواتير</span></a>
                                            </li>
                                            <br>
                                            <li>
                                               
                                            <li>
                                                <a href="#" class="nav-link px-0 align-middle" style="font-size:medium;">
                                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white"><br>العملاء</span> </a>
                                            </li>
                                        </ul>
                                        <hr>
                                       
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 mt-3 d-flex justify-content-center">
                        @yield('content')
                    </div>
                </div>
               
            </div>
          
          </main>
   
   
   
   
   
   
    </div>

   

</body>
</html>