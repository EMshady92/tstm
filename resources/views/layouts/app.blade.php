<!doctype html>
<html lang="es" style="height: 100%;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/4e957e572c.js"></script>
    <script src="https://kit.fontawesome.com/48aa4aa0c4.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+ES+Deco:wght@100..400&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=ABeeZee&family=Comfortaa&family=Dongle&family=Montserrat:wght@500;600&family=Rubik:wght@300&display=swap');
    .text-border{
    text-shadow: 2px 0 #172c3d, -2px 0 #172c3d, 0 2px #172c3d, 0 -2px #172c3d,
    1px 1px #172c3d, -1px -1px #172c3d, 1px -1px #172c3d, -1px 1px #172c3d;
    }

.font-roboto{
    font-family: 'ABeeZee', sans-serif;
}

.font-Playwrite> {
  font-family: "Playwrite ES Deco", cursive;
  font-optical-sizing: auto;
  font-weight:10px;
  font-style: normal;
}

.zoom {
  transition: transform .2s; /* Animation */
}

.zoom:hover {
  transform: scale(1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #011629;
  border-radius: 0.5rem;
  border:solid 2px #011629;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 0.5rem;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.custom-img {
    background-image: url("{{ asset('images/back_new.jpeg') }}");"
    width: 100% !important;
    height: 100% !important;
}

    .typewriter{
        color: #fff;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .12em; /* Adjust as needed */
  animation:
    typing 3.5s steps(30, end),
    blink-caret .5s step-end infinite;
}

.typewriter_des{
        color: #fff;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .12em; /* Adjust as needed */
  animation:
    typing 3.5s steps(20, end),
    blink-caret 5s infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}

@keyframes float {
	0% {
		box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
	50% {
		box-shadow: 0 25px 15px 0px rgba(0,0,0,0.2);
		transform: translatey(-20px);
	}
	100% {
		box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
}

  .floating {
    animation: float 6s ease-in-out infinite;
  }

  @keyframes giro {
  0% {transform: rotate(12deg);}
  50% {transform: rotate(0deg);}
  100% {transform: rotate(12deg);}
}

.girar{
    animation-name: giro;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}

.covera {
  /*efecto parallax*/
  width: 100%;
  height: 100%;
  padding-bottom: 0px;
  position: absolute;
  left: 0;
  right: 0;
  min-height: 500px;
  background-repeat: no-repeat;
}

.covera.parallaxa {
  background-attachment: fixed;
  background-image: url('{{ asset('images/petc_imgs/portada_petc.png') }}');
  position: relative;
  margin-top: -25px;
}

.covera P {
    border-radius: 0.375rem;
    font-family: 'ABeeZee', sans-serif;
  letter-spacing: 5px;
  padding: 10px 15px;
  font-weight: bold;
  /*fuente en negritas*/
  text-transform: uppercase;
  /*mayusculas*/
  font-size: 2em;
  /*tamaño de la fuente*/
  position: absolute;
  /**/
  width: auto;
  /*ancho automatico*/
  bottom: 0;
  /**/
  left: 1px0;
  /*alienado a la izq*/
  z-index: 10;
  /*para que aparezca arriba de la imagen*/
  text-align: center;
  /**/
  color:#172c3dcc;
  /*para opaquisidad*/
  background-color: #67788acc;
  /*color oscuro con 0.8 de transparencia*/
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  display: block;
  /*para que aparezca en una linea o renglon*/
  width: 100%;
  /*para que abarque toda la imagen*/
  right: 0px;
  text-align: right;
}

.covera P span {
    font-family: 'ABeeZee', sans-serif;
  display: block;
  font-size: 0.5em;
  font-weight: 200;
  margin-top: 6px;
}

    .animated-hr {
            border: 0;
            height: 2px;
            background: linear-gradient(to right, #f06, #67788a);
            animation: slide 2s infinite;
        }

        @keyframes slide {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }

.redes{
    color:#ffff;
}

.redes:hover{
    color:#ec1c24;
}
</style>
<body>
    <div id="app">
        {{-- <nav class="w-full flex">
            <div class="flex justify-beetwen w-full">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}


            <div class="grid w-full h-full">
                <div  class="h-full flex flex-col flex-1 w-full">
                    <main class="h-screen  bg-[#172c3d] shadow-2xl z-30">
                        <div class=" h-screen">
                            @yield('content')
                        </div>
                    </main>
                </div>
            </div>

    </div>
    <script>
    </script>
</body>
</html>
