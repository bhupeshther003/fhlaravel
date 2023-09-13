@extends('layouts.app')
<head>
      <link rel="icon" href="{{'/image/logmain.png'}}" type="image/x-icon">

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;

    }


    .row {
        justify-content: space-between;
    }

    .row>.col-4> img {
        width: 100%;
        /* border:1px solid red */
    }

    label {
        display: block;
    }

    .select1 {
        border: 1px solid #ececec;
        width: 100%;
        margin-top: 1%;
        background: #f8f8f8;
        color: #98a2a9;
        height: 45px;
        padding: 12px 30px 12px 18px;
    }

    div h3 {
        color: rgb(45, 137, 230);
    }

    .doc {
        display: flex;
    }
</style>
</head>

<body>

    @section('content')
        <div class="container-fluid">
            <div class="col-xl-12 text-center">
                <h1>Find A Doctor</h1>
                <h5>Find the right health specialist from our list of doctors. You can also search by their name to
                    narrow down the list.
                </h5>
            </div>
        </div>

        <div class="container  mt-3">
            <div class="row">
                <div class=" col-xl-6 col-lg-6 col-md-6">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="myInput"
                            onkeyup="myFunction()">
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    </form>
                </div>

                <div class="col-xl-6 col-lg-5 col-md-6  ">
                    <span style="color: rgb(57, 161, 196);"> <a href="tel:+9197-6763-1826" target="_blank">📞Call Now
                        </a></span>for Book Appointment
                </div>
            </div>
        </div>


        <div class="container  mt-5 ">
            <form action=" ">
                <div class="row">

                    <div class="col-xl-5 col-lg-5 col-md-4 col-sm-12  position-relative "
                        style="border-right: 1px solid rgb(206, 230, 230);">
                        <p>
                            <span for="filter" class="mt-1 ms-1">Filter</span>

                        </p>
                        <label for="loc">Location</label>
                        <select class="select1" name="locat" id="location" onchange="mycity()">
                            <option value="default">Select</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Jodhpur">Jodhpur</option>
                            <option value="Nagpur">Nagpur</option>
                            <option value="Noida">Noida</option>
                            <option value="Noida">Pune</option>
                            <option value="Noida">Thane</option>
                            <option value="Noida">Manmad</option>
                        </select>


                        <label for="">Hospital & Clinics</label>
                        <select class="select1" name="hos&cli" id="hos_name" onchange="myhospital()">
                            <option default>Select</option>
                            <option>Future Health Hospital, Mumbai</option>
                            <option>Future Health Clinic Noida</option>
                            <option>Future Health Hospital,Nagpur</option>
                            <option>Future Health Hospital,Jodhpur</option>
                            <option>Future Health Hospital,Pune</option>
                            <option>Future Health Hospital,Thane</option>
                            <option>Future Health Hospital,Manmad</option>
                        </select>


                        <label for="">Speciality</label>
                        <select class="select1" name="speci" id="speciliti" onchange="specility()">
                            <option defualt>Select</option>
                            <option>Radiology</option>
                            <option>Nephrology</option>
                            <option>Heart Specialist</option>
                            <option>Ophthalmologists Specialist</option>
                            <option>Psychiatry Specialist</option>
                            <option>Dermatology Specialist</option>
                            <option>Anesthesiology Specialist</option>
                        </select>

                        <p></p>

                    </div>
            </form>
            <div class="col-xl-7 col-lg-7  col-md-8 col-sm-12 " id="myUL">


                <div class="row doc border " style="display: flex;">
                    <div class="col-4    ">
                        <img class="rounded-circle img-responsive  mt-5 mb-5 " width="195"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5za_3l7K2TivGlO_frd-cPX4H7sVZ7Z-sQKbNY5Ew3_ZeZUxekBz9b1BRu71geXLp5_Y&usqp=CAU"
                            alt="">
                    </div>

                    <div class="col-8   ">
                        <h3>Dr. Aabha Gupta</h3>
                        <p>Visiting Consultant - Radiology</p>
                        <p>MS</p>

                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <h5>SPECIALITY</h5>
                                <p>Dermatology</p>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <h5>HOSPITAL</h5>
                                <span>Jodhpur </span>

                            </div>
                            <h6>Future Health Hospital,Jodhpur</h6>
                        </div>
                        <div class="row ">
                            <div class="col-8 col-md-12   col-xs-12   m-auto">
                                <p class="text-secondry ">📞 080-67506484</p> <a href="tel:+9180-67506834"
                                    target="_blank"></a>
                                <button class="btn btn-outline-info border-dark"> <a href="{{ url('') }}/query"> >>
                                        MAKE AN ENQUIRY</button></a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row doc border " style="display: flex;">
                    <div class="col-4    ">
                        <img class="rounded-circle img-responsive  mt-5 mb-5 " width="195"
                            src="https://medical-clinic.cmsmasters.net/wp-content/uploads/2016/01/1-2-500x500.jpg"
                            alt="">
                    </div>

                    <div class="col-8   ">
                        <h3>Dr. Vijay Pathak</h3>
                        <p>Visiting Consultant - Radiology</p>
                        <p>MS</p>

                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <h5>SPECIALITY</h5>
                                <p>Ophthalmologists</p>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <h5>HOSPITAL</h5>
                                <span>Manmad</span>

                            </div>
                            <h6>Future Health Hospital,Manmad</h6>
                        </div>
                        <div class="row ">
                            <div class="col-8 col-md-12   col-xs-12   m-auto">
                                <p class="text-secondry ">📞 080-32454576</p> <a href="tel:+9180-67506834"
                                    target="_blank"></a>
                                <button class="btn btn-outline-info border-dark"> <a href="{{ url('') }}/query"> >>
                                        MAKE AN ENQUIRY</button></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row doc border " style="display: flex;">
                    <div class="col-4    ">
                        <img class="rounded-circle img-responsive  mt-5 mb-5 " width="195"
                            src="https://www.norvichospital.com/uploads/doctor/thumbs-medium/5e6f44b92517d.jpg"
                            alt="">
                    </div>

                    <div class="col-8   ">
                        <h3>Dr. Runali Pal</h3>
                        <p>Visiting Consultant - Radiology</p>
                        <p>MS</p>

                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <h5>SPECIALITY</h5>
                                <p>Radiology</p>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <h5>HOSPITAL</h5>
                                <span>Pune</span>

                            </div>
                            <h6>Future Health Hospital,Pune</h6>
                        </div>
                        <div class="row ">
                            <div class="col-8 col-md-12   col-xs-12   m-auto">
                                <p class="text-secondry ">📞 080-67506484</p> <a href="tel:+9180-67506834"
                                    target="_blank"></a>
                                <button class="btn btn-outline-info border-dark"> <a href="{{ url('') }}/query"> >>
                                        MAKE AN ENQUIRY</button></a>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="row doc border" style="display: flex;;">
                    <div class="col-4">
                        <img class="rounded-circle img-responsive  mt-5 mb-5  " width="195"
                            src="https://www.valiantclinic.com/wp-content/uploads/2022/09/Dr-Mazen-Optimised.jpg"
                            alt="">
                    </div>
                    <div class="col-8">
                        <h3>Dr.Vishal Diddi</h3>
                        <p>Visiting Consultant - Heart Specialist</p>
                        <p>MS</p>

                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <h5>SPECIALITY</h5>
                                <p>Surgeon Specialist</p>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <h5>HOSPITAL</h5>
                                <span> Mumbai</span>
                                <p>
                                <h6>Future Health Hospital,Mumbai</h6>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-md-12   col-xs-12  m-auto">
                                <p class="text-secondry"> 📞 080-44857464</p>
                                <button class="btn btn-outline-info border-dark"> <a href="{{ url('') }}/query"> >>
                                        MAKE AN ENQUIRY</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <hr style="color: rgb(151, 180, 180);"> -->

                <div class="row doc  border" style="display: flex;">
                    <div class="col-4  ">
                        <img class="rounded-circle img-responsive  mt-5 mb-5  " width="195"
                            src="https://thumbs.dreamstime.com/b/young-brunette-female-doctor-sitting-table-working-hospital-office-health-care-insurance-help-concept-physician-ready-102019246.jpg"
                            alt="">
                    </div>
                    <div class="col-8 ">
                        <h3>Dr. Anshika Patil</h3>
                        <p>Visiting Consultant - Obstetrics & Gynaecology</p>
                        <p>MS (OBG)</p>

                        <div class="row ">
                            <div class="col-xl-12 col-md-6">
                                <h5>SPECIALITY</h5>
                                <p>Obstetrics & Gynaecology</p>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <h5>HOSPITAL</h5>
                                <span> Noida </span>
                                <p>
                                <h6>Future Health Clinic Noida</h6>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-md-12   col-xs-12  m-auto">
                                <p class="text-secondry ">📞 080-67506834</p><a href="tel:+9180-14124055"
                                    target="_blank"></a>
                                <button class="btn btn-outline-info border-dark"> <a href="{{ url('') }}/query"> >>
                                        MAKE AN ENQUIRY</button></a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- <hr style="color: rgb(151, 180, 180);"> -->


                <div class="row doc border" style="display: flex;;">
                    <div class="col-4">
                        <img class="rounded-circle img-responsive  mt-5 mb-5  " width="195"
                            src="https://www.physicianonfire.com/wp-content/uploads/2022/05/cropped-working-part-time-making-you-a-better-doctor-1.png"
                            alt="">
                    </div>
                    <div class="col-8">
                        <h3>Dr.Rani Roy</h3>
                        <p>Visiting Consultant - Heart Specialist</p>
                        <p>MS</p>

                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <h5>SPECIALITY</h5>
                                <p>Heart Specialist</p>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <h5>HOSPITAL</h5>
                                <span> Mumbai </span>
                                <p>
                                <h6>Future Health Hospital, Mumbai</h6>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-md-12   col-xs-12  m-auto">
                                <p class="text-secondry"> 📞 080-35684544</p>
                                <button class="btn btn-outline-info border-dark"> <a href="{{ url('') }}/query"> >>
                                        MAKE AN ENQUIRY</button></a>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="row doc border" style="display: flex;;">
                    <div class="col-4">
                        <img class="rounded-circle img-responsive  mt-5 mb-5  " width="195" src="image/doc-8.jpg"
                            alt="">
                    </div>
                    <div class="col-8">
                        <h3>Dr.Rohit Mahera</h3>
                        <p>Visiting Consultant - Heart Specialist</p>
                        <p>MS</p>

                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <h5>SPECIALITY</h5>
                                <p>Anesthesiology Specialist</p>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <h5>HOSPITAL</h5>
                                <span> Pune</span>
                                <p>
                                <h6>Future Health Hospital, Pune</h6>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-md-12   col-xs-12  m-auto">
                                <p class="text-secondry"> 📞 080-45869452</p>
                                <button class="btn btn-outline-info border-dark"> <a href="{{ url('') }}/query"> >>
                                        MAKE AN ENQUIRY</button></a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row  doc border" style="display: flex;">
                    <div class="col-4  ">
                        <img class="rounded-circle img-responsive  mt-5 mb-5  " width="195"
                            src="https://th.bing.com/th/id/R.e1b2275961a1ba8510b67d22094d8add?rik=H1IYCmo7rsw0kw&riu=http%3a%2f%2fwww.averilpower.ie%2fwp-content%2fuploads%2f2010%2f03%2fDoctor-pic-dreamstime.jpg&ehk=HnUWlqsjZ4azmWbII1WPqlo4TK2i2T8C8nbeUH1RjOE%3d&risl=&pid=ImgRaw&r=0"
                            alt="">
                    </div>
                    <div class="col-8 ">
                        <h3>Dr.Amit Patil</h3>
                        <p>Visiting Consultant - Nephrology</p>
                        <p>MS</p>

                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <h5>SPECIALITY</h5>
                                <p>Nephrology</p>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <h5>HOSPITAL</h5>
                                <span> Nagpur</span>
                                <p>Future Health Hospital,Nagpur</p>
                            </div>
                        </div>
                        <div class="col-8 col-md-12   col-xs-12  m-auto ">
                            <p class="">080-67506834</p>
                            <button class="btn btn-outline-info border border-dark"><a href="doceequery.html"> >> MAKE AN
                                    ENQUIRY</a></button>
                        </div>
                    </div>
                </div>
                <div class="row  doc border" style="display: flex;">
                    <div class="col-4  ">
                        <img class="rounded-circle img-responsive  mt-5 mb-5  " width="195"
                            src="https://www.kauveryhospital.com/doctorimage/recent/Dr-Mahmood-Sulaiman2022-09-12-12:22:33pm.jpg"
                            alt="">
                    </div>
                    <div class="col-8   ">
                        <h3>Dr. Rajesh Shetty</h3>
                        <p>Visiting Consultant - Radiology</p>
                        <p>MS</p>

                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <h5>SPECIALITY</h5>
                                <p>Radiology</p>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <h5>HOSPITAL</h5>
                                <span>Thane </span>

                            </div>
                            <h6>Future Health Hospital,Thane</h6>
                        </div>
                        <div class="row ">
                            <div class="col-8 col-md-12   col-xs-12   m-auto">
                                <p class="text-secondry">📞 080-67465667</p> <a href="tel:+9180-67506834"
                                    target="_blank"></a>
                                <button class="btn btn-outline-info border-dark"> <a href="{{ url('') }}/query"> >>
                                        MAKE AN ENQUIRY</button></a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        </div>
    @endsection


    <script>
        // search bar  coding 
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByClassName("doc");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("h3")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }





        // filter for the cities 

        function mycity() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("location");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByClassName("doc");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("span")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }




        function myhospital() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("hos_name");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByClassName("doc");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("h6")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }

        function specility() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("speciliti");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByClassName("doc");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("p")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>




    </html>
