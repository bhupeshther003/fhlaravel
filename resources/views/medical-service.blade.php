@extends('layouts.app')
<head>
      <link rel="icon" href="{{'/image/logmain.png'}}" type="image/x-icon">
   <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: white;
    }


    img {
        cursor: pointer;
    }

    background-image {
        opacity: 10%;
    }

    .text-info {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 500;
    }
  </style>
</head>

<body>
    @section('content')
        @if (Session::has('success'))
            <script>
                    alert(' {{ Session::get('success') }}');
            </script>
        @endif

        <div class="card-header text-center pt-5"
            style="border: none;">
            <h4 style="font-weight: 700;"> Search Medical Service</h4>
            <p class="text-primary" style="font-weight: 400;"> Browse through our list of Medical Services or search by the
                speciality and procedure name to narrow down the list</p>
        </div>

        <div style="background-color: rgb(126, 118, 118);">
            <div class="container mt-2 ">
                <div class="p-4 text-center">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    id="myInput" onkeyup="myFunction()">
                                {{-- <button class="btn btn-outline-success" type="submit"   >Search</button> --}}
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-center m-auto  ">
                            <a href="tel:+9197-6763-1826" target="_blank" class="float-start"><span
                                    class="fa fa-phone "></span> +91 97-6763-1826 </a> <span class="float-start ms-1"> for
                                Book Appointment </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class="container mt-5 ">
            <nav>
                <ol class="breadcrumb">
                    <li class="text">Home>></li>
                    <li class="  text">Medical Services</li>
                </ol>
            </nav>
        </div>




        <!-- Our Services -->

        <div class="container justify-content-center mb-5 " id="myUL">
            <!-- style="border:1px solid red" -->
            <h3 class="text-center  m-2 mt-md-5">Specialities</h3>

            <div class="row mt-5 text-info justify-content-center  ">
                <div class="col-lg-3  col-md-6 col-sm-12  service_page_hover fw-bold specility">
                    <a href="{{ url('kidney') }}"> Adult Kidney Transplant</a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12  service_page_hover fw-bold specility">
                    <a href="{{ url('hernia') }}"> Hernia</a>
                </div>
                <div class="col-lg-3  col-md-6  col-sm-12 service_page_hover fw-bold specility">
                    <a href="{{ url('Ortho') }}"> Ortho-Oncology</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service_page_hover fw-bold specility">
                    <a href="{{ url('brain') }}">Brain Tumour</a>
                </div>

            </div>


            <!-- second row  -->


            <div class="row mt-4 text-info  justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href="{{ url('cadiology') }}">Cadiology</a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href="{{ url('lung') }}">Lung Cancer</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility ">
                    <a href="{{ url('Orthopa') }}"> Orthopaedics</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href="{{ url('Neurosurgery') }}"> Neurosurgery</a>
                </div>

            </div>
            <div class="row mt-4 text-info justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6  service_page_hover fw-bold specility">
                    <a href="{{ url('nephro') }}"> Nephrology</a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href="{{ url('urinary') }}"> Urinary Problem</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href=""> Bone Marrow Transplant(Stem Cell Transplant)</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href="{{ url('heart') }}"> Heart Attack</a>
                </div>

            </div>

            <div class="row mt-4 text-info justify-content-center ">
                <div class="col-lg-3 col-md-4 col-sm-6  service_page_hover fw-bold specility">
                    <a href="{{ url('live') }}"> Live Cancer</a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href=""> Breast Cancer</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href="{{ url('nephro') }}"> Nephrology</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href="{{ url('Neurology') }}">Neurology</a>
                </div>

            </div>

            <div class="row mt-4 text-info justify-content-center ">
                <div class="col-lg-3 col-md-4 col-sm-6  service_page_hover fw-bold specility">
                    <a href=""> psychiatry & Clinical Psychology</a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href="{{ url('Neurosurgery') }}"> Neurosurgery</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href=""> Interventional Radiology</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href="{{ url('Physicial_medici') }}">Physical & Rehabilitation</a>
                </div>

            </div>


            <div class="row mt-4 text-info justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6  service_page_hover fw-bold specility">
                    <a href=""> Critical Care</a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href=""> Internal Mediacine</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">

                    <a href=""> Integrative Oncology</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href=""> Critical Care</a>
                </div>

            </div>



            <div class="row mt-4 text-info justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6  service_page_hover fw-bold specility">
                    <a href=""> Cardiac Surgery-Adult</a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href=""> Infectious Diseases</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href=""> Plastic Sergury</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service_page_hover fw-bold specility">
                    <a href=""> Clinical Nutrition & Dietetics </a>
                </div>

            </div>

        </div>
@endsection


    </body>

    <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByClassName("specility");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>


