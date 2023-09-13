<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="icon" href="{{'/image/logmain.png'}}" type="image/x-icon">
 
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
       <link rel="dns-prefetch" href="//fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

      <style>
        #loader {
            width: 100%;
            height: 100vh;
            background: #fff url('https://i.pinimg.com/originals/0c/28/08/0c28087b5cedf7276ee6c8d81e28d328.gif') no-repeat center;
            z-index: 9999;
            position: fixed;}


        footer {
            background-color: rgb(212, 212, 212);}

        .bottom {
            background-color: rgb(180, 180, 182);}

        footer a {
            text-decoration: none;
            color: #2b2727;}

        footer a:hover {
            text-decoration: underline;
            color: blue;
        }
      </style>

    <!-- Scripts -->
       @vite(['resources/sass/app.scss', 'resources/js/app.js'])
       <div id="app">
        <script src="{{ 'js/javascript.js' }}"></script>
        <link rel="stylesheet" href="{{ 'css/main.css' }}">
        <script src="{{('http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate')}}"></script>
        <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

    </head>

<body onload="myload()">
    <div id="loader"> </div>

    <script>
        function myload() {
            setTimeout(() => {
                document.querySelector('#loader').remove();
            }, 1200)
        }

        function toggleMode() {
	var body = document.body;
	var modeIcon = document.getElementById("toggleModeButton");

	body.classList.toggle("dark-mode");

	if (body.classList.contains("dark-mode")) {
	  modeIcon.src="{{ asset('moon.png') }}"
	} else {
	  modeIcon.src="{{ asset('sun.png') }}";
	}
  }

    </script>
{{-- scroller bottom to top  --}}
<button id="scrollToTopButton" onclick="scrollToTop()" class="fa fa-arrow-circle-o-up text-center" style="font-size:36px"></button>

{{--  navbar   --}}
    <nav class="navbar navbar-expand-md  header  shadow-sm">
        <div class="container-fluid">
            <img src="{{ asset('./image/logo.png') }}" class="navbar-brand" style="width: 10%;" alt="logo">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                     
                <ul class="navbar-nav me-auto">
                
                  
                </ul>
               
                <!-- Right Side Of Navbar -->
                <img id="toggleModeButton" onclick="toggleMode()" class=" nav-item  " style="width:2rem " src="{{ asset('js\sun.png') }}">
                
                <ul class="navbar-nav float-end  ">
                   
                       
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ '/' }} ">
                            <i class="fa fa-home fa-1px" aria-hidden="true"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ url('find_doc') }}"><i
                                class="fa fa-user-md fa-1px" aria-hidden="true"></i>Find a Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('medical-service') }}"><i class="fa fa-heartbeat fa-1px"
                                aria-hidden="true"></i> Medical Services</a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fa fa-calendar fa-1px" aria-hidden="true"></i>
                            Appointment
                        </a>
                        <ul class="dropdown-menu navbar-back">
                            <li><a class="dropdown-item " href="{{ url('appointment') }}">Book
                                    Appointment</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item " href="{{ url('appointment_status') }}">Check
                                    Appointment Status</a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}"><i class="fa fa-phone-square fa-1px"
                                aria-hidden="true"></i> Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('carrier') }}"> <i class="fa fa-graduation-cap fa-1x"
                                aria-hidden="true"></i>
                            Career</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{ url('about') }}"> <i
                                class="fa fa-info-circle fa-1x" aria-hidden="true"></i> About Us </a>
                    </li>


                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"> {{ __('Login ') }}<i
                                        class="fa fa-user fa-1x"></i></a>

                            </li>
                        @endif

                        {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}<i class="fa fa-user fa-1x"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
    </nav>

    <main class="py-4">
        @yield('content')

    </main>

    <footer>
        <!--  footer start  -->
        <div class="container-fluid  mt-5  ">
            <div class=" container row pt-4  m-auto">
                <div class="col-xl-3 col-md-3 col-sm-3 footer  ">
                    <div class=" fs-6 fw-bold  mb-2">Quick Link</div>

                    <p><a href="{{ url('find_doc') }}"> Find A Doctor</a></p>
                    <p><a href="{{ url('appointment') }}">Book an Appointment</a> </p>
                    <p><a href="{{ url('query') }}">Make an Enquiry</a></p>
                    <p><a href="{{ url('query') }}">Feedback</a></p>
                    <p><a href="{{ url('enviorment_#blog') }}">Blog's</a></p>
                    <p><a href="{{ url('carrier') }}">Career</a> </p>
                </div>

                <div class="col-xl-3 col-md-3 col-sm-3 footer ">
                    <div class="fs-6 fw-bold  mb-2">FH CARE </div>
                    <p><a href="{{ url('hernia') }}">Hernia</a></p>
                    <p><a href="{{ url('lung') }}">Lung Cancer</a></p>
                    <p><a href="{{ url('brain') }}">Brain Tumour</a> </p>
                    <p><a href="{{ url('live') }}">Live Cancer</a></p>
                    <p><a href="{{ url('heart') }}">Heart Attack</a> </p>
                    <p><a href="{{ url('urinary') }}">Urinary Problem</a></p>
                    <p><a href="{{ url('kidney') }}">Kidney Transplant</a></p>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-3 footer ">
                    <div class="fs-6 fw-bold mb-2 ">Excellence Center</div>
                    <p><a href="{{ url('cadiology') }}">Cadiology</a></p>
                    <p><a href="{{ url('cardiac') }}">Cardiac Surgery</a></p>
                    <p><a href="{{ url('Neurology') }}">Neurology</a></p>
                    <p><a href="{{ url('Neurosurgery') }}">Neurosurgery</a></p>
                    <p><a href="{{ url('Ortho') }}">Orthopadics</a></p>
                    <p><a href="{{ url('nephro') }}">Nephrology</a></p>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-3  footer">
                    <div class="fs-6 fw-bold  mb-2"> Medical Profession</div>
                    <p><a href="{{ url('about') }}">About</a></p>
                    <p><a href="{{ url('contact') }}">Contact us</a></p>
                    <p><a href="{{ url('/about#mission') }}">Our Mission</a></p>
                    <p id="google_element"></p> 

                </div>
            </div>
            <div class=" bottom p-4">
                <a href="{{ url('about#rights') }}" class="p-2 fw-bold "> <span class="text-primary fw-bold fs-4">©
                    </span> Future Hopital Ltd |All Rights Reserve </a>
                <span class="float-end">
                    <a href="{{ url('about#terms') }}" class="p-2 fw-bold"> Term & Conditions</a>
                    <a href="{{ url('about#policy') }}" class="p-2 fw-bold"> Privacy Policy</a>
                </span>
            </div>
        </div>

    </footer>

    <!-- contacting social meadia logo and link  -->
    <div class="contact  position-relative">
        <span class="position-absolute position-fixed top-50 start-0 translate-middle-y">

            <a href="http://www.youtube.com" target="_blank" rel="noopener noreferrer" data-toggle="tooltip"
                data-placement="right" title="You Tube">
                <p class="fa fa-youtube mt-2 mb-2 d-block"></p>
            </a>

            <a href="http://www.facebook.com" target="_blank" rel="noopener noreferrer" data-toggle="tooltip"
                data-placement="right" title="Facebook">
                <p class="fa fa-facebook mt-2 mb-2 d-block"></p>
            </a>

            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" data-toggle="tooltip"
                data-placement="right" title="Instagram">
                <p class="fa fa-instagram mt-2 mb-2 d-block"></p>
            </a>

            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" data-toggle="tooltip"
                data-placement="right" title="Twitter">
                <p class="fa fa-twitter mt-2 mb-2 d-block"></p>
            </a>
        </span>
    </div>

    <div class=" contact position-relative">
        <span class="position-absolute  position-fixed top-50 end-0 translate-middle end-5">
            <a href="https://api.whatsapp.com/send/?phone=%2B919767631826&text=welcome%27to+Future+Health+consultancy+Always+ready+for+your+help&type=phone_number&app_absent=0"
                target="_blank">
                <p class="fa fa-whatsapp mt-2 mb-2 d-block"></p>
            </a>
            <a href="tel:+9197-6763-1826" target="_blank">
                <p class="fa fa-phone mt-2 mb-2 d-block"></p>
            </a>
        </span>
    </div>



    </div>

</body>

</html>
