<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('title', 'Inst Señora del Carmen') }}</title>

    <link rel="stylesheet" href="./datatables/dataTables.bootstrap4.min.css">
  
    <script type="text/javascript" charset="utf8" src="./datatables/jquery.dataTables.js"></script>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="./datatables/jquery/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="fontawesome-free/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
</head>
<body>
    <div id="app">
<nav class="navbar navbar-dark sticky-top bg-white flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2" style="color: black;" href="{{ url('/') }}"><img src="img/escudo_0.png" width="250"></i></a>
  {{-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> --}}
  <ul class="navbar-nav px-3">
    @guest
        <li class="nav-item text-nowrap">
            <a class="nav-item text-dark btn btn-light" data-toggle="modal" data-target=".bd-example-modal-lg" href="{{ route('login') }}">LOGIN <i class="fas fa-user"></i></a>
        </li>
         {{-- @if (Route::has('register'))
                 <li class="nav-item">
                       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
             @endif --}}
    @else
         <li class="nav-item dropdown">
             <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               {{ Auth::user()->name }} <span class="caret"><i class="fas fa-user-lock"></i></span>
             </a>

            <div class="dropdown-menu" >
	             <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
	                 Cerrar sesión <i class="fas fa-sign-out-alt"></i>
	             </a>

	            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                  @csrf
	            </form>
             </div>
        </li>
    @endguest
    </li>
  </ul>
</nav>

        <main class="py-4">
            @yield('content')
        </main>
   </div>

   {{--  <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script> --}}

{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 --}}

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-success text-white">
         <h4 class="modal-title" id="myModalLabel"><img src="img/escudo_0.png" width="300" height="100"></h4>
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true" style="color: white;">×</span>
                 <span class="sr-only">Close</span>
            </button>
                
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 20px;">
                <div class="card-header bg-primary text-white"><center>INSTITUCION EDUCATIVA NUESTRA SEÑORA DEL CARMEN</center></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>El Correo o la contraseña Son invalidos</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Contraseña incorrecta</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Entrar
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
          
      </div>  
      <!-- Modal Footer -->
      <div class="modal-footer">
           <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar <i class="fas fa-times-circle"></i></button>
           <button type="submit" class="btn btn-outline-primary submitBtn" onclick="submitContactForm()">Entrar <i class="fas fa-sign-in-alt"></i></button>
      </div>

    </form>

    </div>


<script src="./datatables/jquery.dataTables.min.js"></script>
<script src="./datatables/dataTables.bootstrap4.min.js"></script>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>


{{-- <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./bootstrap/js/jquery.min.js"></script> --}}
