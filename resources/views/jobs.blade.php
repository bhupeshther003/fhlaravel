@extends('layouts.app')

@section('content')
   


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner" style="height: 450px;">
            <div class="carousel-item position-relative active">
                <img src="{{ url('https://www.highspot.com/wp-content/uploads/Seamless-Pitching-Provides-Best-in-Class-Online-Sales-Presentations_Blog-Banner-Image_1200x734px.png') }}"
                    class="d-block w-100" alt="...">
                    <div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
                        <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:20%; "  alt="">
                    </div>
            </div>
            <div class="carousel-item position-relative">
                <img src="https://www.rfhospital.org/media/1132/values_banners01.jpg" class="d-block w-100" alt="...">
                <div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
                    <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:20%; "  alt="">
                
                </div>
            </div>
            <div class="carousel-item position-relative">
                <img src="https://images.carriercms.com/image/upload/h_200,c_lfill,q_auto,f_auto/v1548598432/carrier/commercial-hvac-asia/people/call-center-personnel-B.jpg"
                    class="d-block w-100" alt="...">
                    <div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
                        <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:20%; "  alt="">
                    </div>
            </div>
            <div class="carousel-item position-relative">
                <img src="https://cdn.apollohospitals.com/dev-apollohospitals/2020/12/banner-Careers.jpg"
                    class="d-block w-100" alt="...">
                    <div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
                        <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:20%; "  alt="">
                    </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- columns -->
    <div class="container-fluid m-auto mb-5 ">
        <div class="row   m-auto">
            <div class=" col-lg-3 col-md-4 col-sm-12 m-auto  mt-4 p-0 bg-white ">
                <div class="card">


                    <img src="{{ url('https://th.bing.com/th/id/R.2ac47b0aa3a883c3ea55b2c1e9e15a2a?rik=%2f90%2b%2fmjYPUdTBw&riu=http%3a%2f%2f2.bp.blogspot.com%2f-JqFuuK04ar8%2fTfTADsQZglI%2fAAAAAAAAABo%2f3HoX_NF3DRU%2fs1600%2fBiomedical-Engineer.jpg&ehk=uZDFEUH85loc%2fYJElAa15XGypXjjvkdh5bhndJfDGBY%3d&risl=&pid=ImgRaw&r=0') }}"
                        alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Biomedical Engineer - Wockhardt Hospitals Ltd, Mira Road</h5>
                        <p class="card-text">

                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Mumbai (All Areas)
                        </p>
                        <a href="https://in.linkedin.com/jobs" class=" btn btn-primary" target="_blank"
                            rel="noopener noreferrer">Apply</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 m-auto  bg-white m-auto  mt-4  p-0">
                <div class="card">
                    <img src="https://www.roberthalf.co.uk/sites/roberthalf.co.uk/files/2019-08/shutterstock_1430177474-min.jpg"
                        class="card-img-top" alt="...">

                    <div class="card-body  text-center">
                        <h5 class="card-title">Receptionist- job post
                            KOLEKAR HOSPITAL & ICCU
                        </h5>
                        <p class="card-text">

                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Chembur 2Nd & 3Rd Floor Omprakash Arcade
                        </p>
                        <a href="https://in.linkedin.com/jobs" class=" btn btn-primary" target="_blank"
                            rel="noopener noreferrer">Apply</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3  col-sm-12  m-auto bg-white m-auto  mt-4  p-0">
                <div class="card">
                    <img src="https://static.wixstatic.com/media/e9bc78_ad6806a1224e404ca64078fdc6b5c965~mv2.jpg/v1/fill/w_390,h_260,al_c,q_80,usm_0.66_1.00_0.01/e9bc78_ad6806a1224e404ca64078fdc6b5c965~mv2.jpg"
                        class="card-img-top" alt="...">

                    <div class="card-body text-center">
                        <h5 class="card-title ">Patient Guide
                            SHUSHRUSHA CITIZENS' CO-OPERATIVE HOSPITAL LTD </h5>
                        <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i>Mumbai, Maharashtra
                        </p>
                        <a href="https://in.linkedin.com/jobs" class="btn btn-primary">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid m-auto mb-5 ">
        <div class="row  m-auto">
            <div class=" col-lg-3 col-md-4 col-sm-12 m-auto  mt-4 p-0 bg-white ">
                <div class="card">
                    <img src="https://uvethc.com/wp-content/uploads/receptionist.jpg" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Senior Receptionist- job post
                            Chavan Hospital</h5>
                        <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Mumbai, Maharashtra</p>
                        <a href="https://in.linkedin.com/jobs" class=" btn btn-primary" target="_blank"
                            rel="noopener noreferrer">Apply</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 m-auto  bg-white m-auto  mt-4  p-0">
                <div class="card">
                    <img src="https://www.geetanjalihospital.co.in/images/opd-01.jpg" class="card-img-top img-fluid"
                        alt="...">

                    <div class="card-body  text-center">
                        <h5 class="card-title">Patient Experience Executive -IPD /OPD- job post
                        </h5>
                        <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Mumbai, Maharashtra
                        </p>
                        <a href="https://in.linkedin.com/jobs" class=" btn btn-primary" target="_blank"
                            rel="noopener noreferrer">Apply</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 m-auto  bg-white m-auto  mt-4  p-0">
                <div class="card">
                    <img src="https://www.uab.edu/dentistry/home/images/images/patients/37-dentistry-inline-h-800x640.jpg"
                        class="card-img-top img-fluid" alt="...">
                    <div class="card-body  text-center">
                        <h5 class="card-title">Consultant Dentist
                            Surana Hospital & Research Centre</h5>
                        <p class="card-text">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Mumbai, Maharashtra
                        </p>
                        <a href="https://in.linkedin.com/jobs" class=" btn btn-primary" target="_blank"
                            rel="noopener noreferrer">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid m-auto mb-5 ">
        <div class="row  m-auto ">
            <div class=" col-lg-5 col-md-4 col-sm-12 m-auto  mt-4 p-0 bg-white   ">
                <div class="card">
                    <marquee direction="up" class="border border-light">
                        <p class="text-danger ms-2"> X-ray technician National average salary: ₹37,864 per month</p>
                        <p class="text-danger ms-2"> Pharmacist National average salary: ₹21,500 per month </p>
                        <p class="text-danger ms-2"> Occupational therapist National average salary: ₹45,882 per month
                        </p>
                        <p class="text-danger ms-2"> Medical technologist National average salary: ₹25,500 per month
                        </p>
                        <p class="text-danger ms-2"> Mental Health Nurses ₹25,40,700 - ₹34,58,000 a year</p>
                        <p class="text-danger ms-2"> Physician assistant - ₹25,200 per month</p>
                        <p class="text-danger ms-2"> Surgeon - ₹2,50,000 per month</p>
                        <p class="text-danger ms-2"> Information technology specialist ₹1,41,666 per month</p>
                        <p class="text-danger ms-2"> Respiratory therapist ₹51,500 per month</p>
                        <p class="text-danger ms-2"> Respiratory therapist ₹51,500 per month</p>
                        <p class="text-danger ms-2"> Senior Receptionist Chavan Hospital ₹12,000 - ₹18,000 a month</p>
                        <p class="text-danger ms-2"> Information technology specialist ₹1,41,666 per month</p>
                    </marquee>
                </div>
            </div>


            <div class="col-md-3 col-sm-12 m-auto  bg-white m-auto  mt-4  p-0">
                <div class="card">
                    <img src="https://insync.com.au/wp-content/uploads/173730166-scaled.jpg" class="card-img-top"
                        alt="...">

                    <div class="card-body  text-center">
                        <h5 class="card-title">Patient Experience Executive -IPD /OPD- job post
                            Sir H. N. Reliance Foundation Hospital and Research Centre</h5>
                        <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Mumbai, Maharashtra
                        </p>
                        <a href="https://in.linkedin.com/jobs" class=" btn btn-primary" target="_blank"
                            rel="noopener noreferrer">Apply</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 m-auto  bg-white m-auto  mt-4  p-0">
                <div class="card">
                    <img src="https://cdn.wallpapersafari.com/23/86/kDgxu5.jpg" class="card-img-top" alt="...">
                    <div class="card-body  text-center">
                        <h5 class="card-title">Cardiology Department
                            Surana Hospital & Research Centre</h5>
                        <p class="card-text">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Mumbai, Maharashtra
                        </p>
                        <a href="https://in.linkedin.com/jobs" class=" btn btn-primary" target="_blank"
                            rel="noopener noreferrer">Apply</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid m-auto mb-5 ">
            <div class="row  rows m-auto ">

                <div class=" col-lg-3 col-md-4 col-sm-12 m-auto  mt-4 p-0 bg-white">

                </div>
            </div>
        </div>
@endsection

