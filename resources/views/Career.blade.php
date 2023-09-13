@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .item {
            height: 400px;

        }

        .item img {
            background-position: cover;
        }


        .owl-dots>.dot {
            color: blue;
            ;
            font-size: large;
        }

        .row>.col-8>.card {
            background-color: rgb(24, 212, 102);
        }

        .row>.col-8>.card+.card {
            background-color: rgb(97, 152, 184);
        }
    
		.item>img{
	width: 98%;
  height: 100%;
  object-fit: cover;
  background-size:contain;
  /* border:1px solid rgb(34, 27, 27); */
			}

            .item{
                height: 500px;
            }
		</style>



    </head>

    <body>





        <div class="owl-carousel owl-theme " style="height: 550px">
            <div class="item"><img src="./image/carrier1.jpg"  alt=""></div>
            <div class="item"><img src="https://img.freepik.com/free-vector/surgeons-preparing-surgery-concept-illustration_114360-17749.jpg?size=626&ext=jpg&ga=GA1.2.1406591241.1684115342&semt=sph" alt=""></div>
            <div class="item"><img src="./image/carrier2.jpg " alt=""></div>
            <div class="item"><img src="https://img.freepik.com/free-photo/presenting-hospital-career-arm-absence_1134-1058.jpg?size=626&ext=jpg&ga=GA1.1.1406591241.1684115342&semt=sph" alt=""></div>
            <div class="item"><img src="https://img.freepik.com/free-vector/flat-hand-drawn-hospital-reception-scene_52683-54613.jpg?size=626&ext=jpg&ga=GA1.1.1406591241.1684115342&semt=sph" alt=""></div>
            <div class="item"><img src="https://img.freepik.com/premium-photo/doctor-operating-room_901153-492.jpg?size=626&ext=jpg&ga=GA1.2.1406591241.1684115342&semt=sph " alt=""></div>

        </div>




        <div class="container mt-3 mb-5">
            <div class="card-header text-center fs-3 fw-bold">Future Health Careers</div>

            <p>Apply for Current Opening </p>



            <div class="row  rows">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 m-auto  card text-center" style="width:18rem">

                    <img src="./image/ASAP work.jpeg" class="img-fluid " style="width:100%" alt="">
                    <div class="card-body ">

                        <div class="card-title fw-bold fs-3"> Your Flexible Hours</div>
                        <div class="card-text fw-bolder p-0">
                            <p> Full time and part time Hospital Management to start with ASAP </p>
                        </div>

                        <a href="{{ url('login') }}" class="btn btn-primary   ">Apply Now</a>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 m-auto card text-center" style="width:17rem;">

                    <img src="./image/admistrator.png" class="img-fluid" style="width:100%" alt="">
                    <div class="card-body ">

                        <div class="card-title fw-bold fs-3">Administrative Assistant </div>
                        <div class="card-text fw-bolder p-1">
                            <p> The ideal candidate will exhibit high standards, excellent communication skills... </p>
                        </div>

                        <a href="{{ url('login') }}" class="btn btn-primary">Apply Now</a>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 m-auto card text-center" style="width:17rem;">

                    <img src="./image/learning.png" class="img-fluid" style="width:100%" alt="">
                    <div class="card-body ">

                        <div class="card-title fw-bold fs-3">Learning & Leadership </div>
                        <div class="card-text fw-bolder p-1">
                            <p> Learning and Leadership is an opportunity to be a Learning Partner </p>
                        </div>

                        <a href="{{ url('login') }}" class="btn btn-primary ">Apply Now</a>
                    </div>
                </div>

            </div>



        </div>




        <div class="container rows ">

            <div class="card-header bg-warning mb-2 m-auto position-relative">
                <p class="fs-4  fw-bolder m-1">
                    Current position
                </p>
                <p class="d-inline position-absolute end-0 top-50 border border-dark translate-middle-y me-2 p-2"><a
                        href="{{ url('login') }}">>Apply Now</a></p>
                <p>25 Opening Jobs</p>

            </div>
        </div>

        <div class="container mt-5 rows ">
            <div class="card-header  bg-info mb-5 position-relative ">
                <p class="fs-4  fw-bolder m-1">
                    Learning @Future Health....
                </p>
                <p class=" d-inline  position-absolute end-0 top-50 border border-dark translate-middle-y me-2 p-2"><a
                        href="{{ url('login') }}">>Apply Now</a></p>
                <p>Our Student Programs</p>

            </div>

        </div>

        <div class="container mt-5 rows">

            <div class="row">
                <p class="fw-bold fs-5">Looking for job opportunities in the healthcare industry? Look no further! We have
                    exciting part-time and full-time positions available at our hospital, and we're seeking talented
                    individuals like you to join our team.Whether you're an experienced healthcare professional or just
                    starting your career, we have the perfect job for you.</p>

                <p class="fw-bold fs-4">Why choose us?</p>

                <p>Cutting-Edge Healthcare: Join a hospital that is at the forefront of medical advancements. We provide
                    state-of-the-art facilities and equipment, ensuring that you can deliver the best care to our patients.
                    Stay updated with the latest technologies and contribute to the advancement of healthcare.</p>

                <p>Diverse Specializations: Our hospital offers a wide range of specializations, including cardiology,
                    pediatrics, oncology, neurology, emergency medicine, and more. Whatever your area of expertise or
                    interest, we have opportunities available to suit your skills and passion.</p>

                <p>Collaborative Environment: Join a team of dedicated healthcare professionals who work together to provide
                    exceptional care. We value collaboration, teamwork, and open communication. You'll have the opportunity
                    to learn from experienced professionals and contribute to a supportive work environment.</p>

                <p>Flexible Schedules: We understand that work-life balance is important. That's why we offer both part-time
                    and full-time positions to accommodate your schedule. Whether you're seeking a few shifts per week or a
                    consistent full-time role, we have options available to meet your needs.</p>

            </div>


            <!--  part time jobs  -->
            <div class="row rows ">
                <div class="col-8">
                    <div class=" fs-3 fw-bold card text-center card-header"> Jobs </div>

                    <div class="card  mt-2 mb-2 m-auto position-relative">
                        <p class="fs-5 fw-bolder m-1">
                            Full time and part time learning to start ASAP in 411042
                        </p>
                        <p
                            class="d-inline btn btn-outline-warning position-absolute end-0 top-50 me-2  border border-dark translate-middle-y text-light">
                            <a href="{{ url('login') }}">>Apply Now</a>
                        </p>
                        <small class="ps-2">Flexible hours. Great earnings. Make 20-30R/hr. Be the first to apply!</small>
                    </div>

                    <div class="card   mt-2   mb-2 m-auto position-relative">
                        <p class="fs-5 fw-bolder m-1">
                            Learning Jobs: ₹1000-₹5000/Hr. Multiple Positions</p>
                        <p class="fs-5 fw-bolder m-1">
                            Hiring Immediately, Training Provided!
                        </p>
                        <p
                            class="d-inline btn btn-outline-warning position-absolute end-0 top-50 me-2  border border-dark translate-middle-y text-light">
                            <a href="{{ url('login') }}">>Apply Now</a>
                        </p>
                        <small class="ps-2">Hiring Immediately! Multiple Learning Positions Available.
                            ₹1000-₹5000/Hr.</small>
                    </div>

                    <div class="card  mt-2   mb-2 m-auto position-relative">
                        <p class="fs-5 fw-bolder m-1">
                            New learning jobs in 411012 Just Added
                        </p>
                        <p
                            class="d-inline btn btn-outline-warning position-absolute end-0 top-50 me-2  border border-dark translate-middle-y text-light">
                            <a href="{{ url('login') }}">>Apply Now</a>
                        </p>
                        <small class="ps-2">411012 Jobs. New learning Open Job Listings Added Every Day. Apply
                            Online</small>
                    </div>

                    <div class="card   mt-2   mb-2 m-auto position-relative">
                        <p class="fs-5 fw-bolder m-1">
                            Linux Administrator for an MNC for their New
                        </p>
                        <p
                            class="d-inline btn btn-outline-warning position-absolute end-0 top-50 me-2  border border-dark translate-middle-y text-light">
                            <a href="{{ url('login') }}">>Apply Now</a>
                        </p>
                        <small class="ps-2">Our client, a Singapore based Technology Company, provides Information
                            and</small>
                    </div>


                    <div class="card   mt-2   mb-2 m-auto position-relative">
                        <p class="fs-5 fw-bolder m-1">
                            Chassis CAS_MBD_Sr. Technical Lead - Engineering
                        </p>
                        <p
                            class="d-inline btn btn-outline-warning position-absolute end-0 top-50 me-2  border border-dark translate-middle-y text-light">
                            <a href="{{ url('login') }}">>Apply Now</a>
                        </p>
                        <small class="ps-2">Role description Job Description & Job Specification Department &
                            Sub-function</small>
                    </div>

                    <div class="card   mt-2   mb-2 m-auto position-relative">
                        <p class="fs-5 fw-bolder m-1">
                            New learning jobs in 400024 Just Added
                        </p>
                        <p
                            class="d-inline btn btn-outline-warning position-absolute end-0 top-50 me-2  border border-dark translate-middle-y text-light">
                            <a href="{{ url('login') }}">>Apply Now</a>
                        </p>
                        <small class="ps-2">411024 Jobs. New learning Open Job Listings Added Every Day. Apply
                            Online</small>
                    </div>

                    <div class="card   mt-2   mb-2 m-auto position-relative">
                        <p class="fs-5 fw-bolder m-1">
                            Learning Service Specialist</p>

                        <p
                            class="d-inline btn btn-outline-warning position-absolute end-0 top-50 me-2  border border-dark translate-middle-y text-light">
                            <a href="{{ url('login') }}">>Apply Now</a>
                        </p>
                        <small class="ps-2">Hiring Immediately! Multiple Learning Positions Available.
                            ₹1000-₹5000/Hr.</small>
                    </div>

                    <div class="card   mt-2   mb-2 m-auto position-relative">
                        <p class="fs-5 fw-bolder m-1">
                            L4 - Technical Executive - Vehicle Sub-systems</p>

                        <p
                            class="d-inline btn btn-outline-warning position-absolute end-0 top-50 me-2  border border-dark translate-middle-y text-light ">
                            <a href="{{ url('login') }}">>Apply Now</a>
                        </p>
                        <small class="ps-2">DivisionR&DDepartmentDesign 2WH Level / GradeL4Functional <br>
                            AreaHorizontal1Job TitleTechnical Executive R & D2Reporting Function </small>
                    </div>



                </div>
                <div class="col-4 rows ">

                    <img src="./image/work1.jpeg" class="img-fluid" alt="">
                    <img src="./image/work2.jpeg" class="img-fluid" alt="">
                </div>
            </div>
        </div>


     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Include Owl Carousel JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <script>
            // Initialize Owl Carousel
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({

                    loop: false,
                    margin: 10,

                    responsive: {
                        0: {
                            items: 1,
                            loop: true,
                            nav: false,
                            dots: true
                        },
                        500: {
                            items: 1,
                            loop: true,
                            nav: false,
                            dots: true
                        },
                        800: {
                            items: 1,
                            loop: true,
                            nav: false,
                            dots: true
                        },
                        1045: {
                            items: 1,
                            loop: true,
                            nav: false,
                            dots: true,
                            mouseDrag: true,
                        }
                    }
                });
            });
        </script>
    @endsection
