@extends('layouts.app')
@section('content')

    <style>
        a {
            text-decoration: none;
        }

        .row>.col-lg-6>p>a {
            text-decoration: none;
        }
    </style>


    <div class="container">

        <div class="row">

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2>Specialities & Procedures </h2>

                <div class="row ">

                    <div class="col m-auto col-md-6  col-sm-6 col-xs-12">

                        <h3> Specialities</h3>

                        <div class="row m-2 ">
                            <div class="col "><img src="./image/cancer care oncology.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-9 m-auto "><span class=" m-auto p-auto fw-bold "> Cancer Care /
                                    Oncology</span></div>

                        </div>
                        <div class="row m-2 ">
                            <div class="col "><img src="./image/The Da Vinci Xi Robotic Surgery.svg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 m-auto "><span class=" m-auto p-auto fw-bold ">
                                    Robotic Surgery</span></div>

                        </div>
                        <div class="row m-2 ">
                            <div class="col "><img src="./image/Valvular Heart Surgery.svg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 m-auto "><span class=" my-auto  fw-bold"> Orthopaedics &amp; Joint
                                    Replacement</span></div>

                        </div>
                        <div class="row m-2 ">
                            <div class="col "><img src="./image/Liver Transplant and bs.svg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 m-auto "><span class=" my-auto fw-bold "> Cardiac Sciences</span></div>

                        </div>
                        <div class="row m-2 ">
                            <div class="col "><img src="./image/Orthopaedics.svg" class="img-fluid" alt=""></div>
                            <div class="col-9 m-auto ">
                                <span class="m-auto  fw-bold">Orthopaedics &amp; Joint Replacement</span>
                            </div>

                        </div>
                    </div>

                    <div class="col m-auto col-lg-6 col-md-6  col-xs-12">

                        <h3> Procedures</h3>

                        <div class="row m-2 ">
                            <div class="col "><img src="./image/Valvular Heart Surgery.svg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 m-auto ">
                                <span class="m-auto  fw-bold">
                                    Aortic Valve Surgery</span>
                            </div>

                        </div>
                        <div class="row m-2 ">
                            <div class="col "><img src="./image/Knee Replacement Surgery.svg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 m-auto ">
                                <span class="m-auto  fw-bold">Knee Replacement Surgery</span>
                            </div>

                        </div>
                        <div class="row m-2 ">
                            <div class="col "><img src="./image/The Da Vinci Xi Robotic Surgery.svg" class="img-fluid"
                                    alt=""></div>
                            <div class="col-9 m-auto ">
                                <span class="m-auto  fw-bold">Da Vinci Robotic Surgery</span>
                            </div>

                        </div>
                        <div class="row m-2 ">
                            <div class="col "><img src="./image/Bone Marrow Transplant .svg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-9 m-auto ">
                                <span class="m-auto fw-bold">Bone Marrow Transplant (BMT)</span>
                            </div>

                        </div>
                        <div class="row m-2">
                            <div class="col"><img src="./image/Lung Transplant.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-9 m-auto ">
                                <span class="m-auto  fw-bold">
                                    Lung Transplant </span>
                            </div>

                        </div>

                    </div>
                </div>

                <p class=" btn btn-outline-info mt-5"> <a href="./medical-service.html">view all</a> </p>
            </div>





            <div class=" col-md-6 col-sm-12 col-xs-12 position-relative ">

                <img src="./image/doctor-consult-illustration.svg" class="img-fluid" alt="">
                <p class="   position-absolute top-0 start-0 " style="padding-top:7rem; ">
                    <button class="btn btn-outline-info text-dark"> <a href="./BookAppointment.html">Book
                            Appointment</a></button>
                </p>

            </div>

        </div>


    </div>


    <div class="container mt-4">

        <p class="text-center fs-4 fw-bold card-header"> Cooming Soon Technologies to win you trust and help to give you
            more facilities .</p>
        <div class="row mt-4">
            <div class="col">


                <strong> New AI Applications and Concerns of the Medical Community</strong>


                <p class="mt-3">One of the fastest growing trends in health information technology: Recent years have seen
                    the rapid development of artificial intelligence (AI) technology, and the trend will continue in 2023.
                    Standing among many industries that benefit from AI, medicine mainly applies it to profound diagnostics
                    and detection of diseases, but it’s not limited to them. For example, IBM Watson is one of the AI
                    platforms already available for business and healthcare (including custom medical software solutions).
                </p>

                <p>Let’s see what support AI can offer healthcare and associated industries and how it could become the
                    major healthtech trend in the future.</p>

                <strong> Computed Tomography Scan Analysis</strong>
                <p class="mt-3">
                    Since the COVID-19 pandemic has stricken the planet’s population, the strain put upon computed
                    diagnostic specialists (radiologists) has dramatically increased. </p>

                <p>A system driven by AI could be a solution. AI algorithms can swiftly process computed tomography scans of
                    thousands of patients, detecting pneumonia patterns caused by COVID-19 and reporting these to
                    clinicians. That would compensate for a shortage of skilled human resources in this field. </p>


                <button class="btn btn-outline-secondary">Read More </button>

            </div>
            <div class="col ">
                <img src="./image/1224-400.png" class="img-fluid mt-5" alt="">
                <img src="./image/2-mr-smartspeed.webp" class="img-fluid mt-5 " alt="">
                <!-- <video src="./image/index.webm.crdownload" controls></video> -->
            </div>


        </div>



    </div>
@endsection