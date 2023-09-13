@extends('layouts.app')
@section('content')
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

      
        .carousel-inner {
            height: 400px;
        }

        .carousel-caption {
            position: absolute;
            bottom: 55%;
        }

        .col {

            margin: 1%;
        }

        input,
        .select1 {
            border: 1px solid #ececec;
            width: 100%;
            margin-top: 1%;
            background: #f8f8f8;
            color: #98a2a9;
            height: 45px;
            padding: 12px 30px 12px 18px;
        }


        input[type='checkbox'] {
            width: 10%;
            display: inline-block;
            height: 15px;
        }

        .row {
            width: 90%;
            margin: auto;
        }

        .row>.col-md-6> img {
            width: 100%;
            height: auto;
        }

        .row h4>img {
            width: 50px;
        }
    </style>
    </head>

    <body>

        @if (Session::has('success'))
            <script>     
                    alert(' {{ Session::get('success') }}');
            </script>
        @endif

        <div class="container-fluid text-center">

        </div>
        <div class="row position-relative">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 p-5  ">
                <!-- <img class='text-center' src="./image/10.jpg" alt=""> -->

                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12">
                        <img src="https://img.freepik.com/free-photo/3d-medical-showing-brain-with-tumor-growing_1048-10836.jpg?size=626&ext=jpg&ga=GA1.2.1406591241.1684115342&semt=ais"
                            alt="Orthopadics" class="img-fluid w-100">
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                        <h4>Brain Tumour</h4>
                        <p> A brain tumor is a growth of cells in the brain or near it. Brain tumors can happen in the brain tissue. Brain tumors also can happen near the brain tissue.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 ms-1">
                <div class="col">
                    <h3> Hava a Question ?</h3>
                </div>
                <div class="col">
                    <form action="{{ url('kidney') }}" method="POST">
                        @csrf
                        <input type="text" name="fname" id="name" placeholder="Enter Your Full Name"
                            value={{ old('fname') }}>
                        @error('fname')
                            <p class='text-danger'> {{ $message }} </p>
                        @enderror
                </div>
                <div class="col">
                    <input type="email" name="mail" id="email" placeholder="Enter Your Email ID"
                        value={{ old('mail') }}>
                    @error('mail')
                        <p class='text-danger'> {{ $message }} </p>
                    @enderror
                </div>
                <div class="col">
                    <input type="tel" name="num" id="mobnumb" placeholder="Enter Your Contact Number"
                        value={{ old('num') }}>
                    @error('num')
                        <p class='text-danger'> {{ $message }} </p>
                    @enderror
                </div>
                <div class="col">
                    <select name="loc" class="select1" id="location" placeholder="Location" value={{ old('loc') }}>
                        <option value="">Location</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Noida">Noida</option>
                        <option value="Nagpur">Nagpur</option>
                    </select>
                    @error('loc')
                        <p class='text-danger'> {{ $message }} </p>
                    @enderror
                </div>
                <div class="col">
                    <select name="hos" class="select1" id="hos-clinic" placeholder="Hospitals and Clinic" value={{ old('hos') }}>
                        <option value="">Hospital</option>
                        <option value="Hospital">Hospital</option>
                        <option value="Clinic">Clinic</option>
                    </select>
                    @error('hos')
                        <p class='text-danger'> {{ $message }} </p>
                    @enderror
                </div>
                <!-- text Area -->
                <div class="col">
                    <label for="exampleFormControlTextarea1" class="form-label">Ask Question</label>
                    <textarea class="form-control" id="accept" rows="3" name="ask"></textarea>
                </div>
                <!-- check box -->
                <div class="col">
                    <input type="checkbox" name="check" id="checkit" value="y" />By Clicking Submit, I agree to
                    have read & understood
                    the Terms & Conditions and Privacy Policy of Future Health & give my consent to contact me.

                </div>

                <input type="submit" class="btn btn-primary mt-4 mb-4" id="forgot-password-set" disabled="disabled"
                    value="Submit" name="submit">
                </form>
            </div>
            <!-- jquery link -->
            <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
                crossorigin="anonymous"></script>
            <!-- jquery script -->
            <script>
                $('#checkit').click(function() {
                    if ($('#forgot-password-set').is(':disabled')) {
                        $('#forgot-password-set').removeAttr('disabled');
                    } else {
                        $('#forgot-password-set').attr('disabled', 'disabled');
                    }
                });
            </script>

        </div>


        </div>


        <div class="row">
            <p class=" m-atuo">Furture Health » Specialities »Brain Tumour</p>
        </div>


        <div class="row">


            <div class="col-xl-12 col-lg-12 col-sm-12">

                <h4>Brain Tumour</h4>

                <p>A brain tumor is an abnormal growth of cells in the brain. It can originate from the brain tissue itself (primary brain tumor) or spread to the brain from other parts of the body (metastatic brain tumor). Brain tumors can be benign (non-cancerous) or malignant (cancerous).</p>
                <p><strong>Types of Brain Tumors:</strong></p>
                <p>There are various types of brain tumors, including:</p>
                <ul>
                  <li>Gliomas: These tumors arise from glial cells, which provide support and protection to nerve cells. Gliomas can be further classified into astrocytomas, oligodendrogliomas, and ependymomas.</li>
                  <li>Meningiomas: These tumors develop in the meninges, the protective membranes surrounding the brain and spinal cord.</li>
                  <li>Medulloblastomas: These tumors mainly occur in children and originate in the lower back part of the brain, called the cerebellum.</li>
                  <li>Pituitary adenomas: These tumors form in the pituitary gland, which is located at the base of the brain and regulates hormone production.</li>
                </ul>
                <p><strong>Symptoms and Diagnosis:</strong></p>
                <p>The symptoms of a brain tumor can vary depending on its size and location. Common signs and symptoms may include:</p>
                <ul>
                  <li>Headaches</li>
                  <li>Seizures</li>
                  <li>Changes in vision, hearing, or speech</li>
                  <li>Balance and coordination problems</li>
                  <li>Cognitive and memory difficulties</li>
                  <li>Personality changes</li>
                </ul>
                <p>Diagnosis of a brain tumor involves a combination of medical history evaluation, neurological examination, imaging tests (such as MRI or CT scans), and sometimes a biopsy.</p>
                <p><strong>Treatment Options:</strong></p>
                <p>The treatment for a brain tumor depends on several factors, including the type, size, location, and grade of the tumor, as well as the patient's overall health. Treatment options may include:</p>
                <ul>
                  <li>Surgery: Surgical removal of the tumor is often the first line of treatment, when feasible.</li>
                  <li>Radiation therapy: High-energy beams are used to destroy cancer cells or shrink the tumor.</li>
                  <li>Chemotherapy: Anti-cancer drugs are administered to kill cancer cells or inhibit their growth.</li>
                  <li>Targeted therapy: Drugs are used to specifically target and attack certain molecular features of the tumor cells.</li>
                </ul>
                <p><strong>Prognosis and Follow-up:</strong></p>
                <p>The prognosis for brain tumors can vary widely depending on the type, grade, and stage of the tumor, as well as individual factors. Regular follow-up appointments, imaging scans, and other tests are often necessary to monitor the tumor's response to treatment and detect any recurrence or new growth.</p>


                <p>
                <h6 style="display: inline-block;">Intensive treatment: </h6> Intensive treatments are strong treatments and
                require the use of strong drugs to stop the spread of cancer cells. Primary examples of intensive treatment
                are as follows:</p>
                <ul>
                    <li>Heavy dose chemotherapy: In this procedure, heavy dosage of drugs are used to kill the cancer cells.
                    </li>
                    <li>Standard chemotherapy dose: The use of cancer cell-killing drugs that stops the infected cells from
                        multiplying.</li>
                    <li>Stem cell transplantation: High doses of cancer killing drug, chemo is used to kill the affected
                        cells from the bone marrow or lymph nodes. Then new stem cells from a donor or from yourself are
                        introduced to the body through a drip. The new stem cells will then be producing fresh blood cells.
                    </li>
                    <li>Radiotherapy: It is the use of radioactive rays to kill cancer cells from a certain area of a body
                        part. (Primary treatment for lymphoma).</li>
                    <li>Surgery: Surgery is a rare occurrence. Splenectomy, the removal of spleen is performed if required.
                    </li>
                </ul>

                <p>Be it short or long term, all these treatments are linked with a number of side effects.</p>

                <p>
                <h6>Non intensive treatment:</h6> Lower dose chemotherapy is an example of non intensive treatment. Such
                treatments are much more gentle on the body and have fewer side effects. Such cases usually don't kill the
                cancer but may help in keeping the cells in remission and in maintaining physical stability for a certain
                length of time. Some examples of non intensive treatments are as follows:</p>

                <ul>
                   
                    <li>Immunotherapy or bio therapy: Drugs that boost your immune system so that your body fights against
                        the cancerous cells and keeps it in check.</li>
                    <li>Curative treatment: If the doctors feel that you may not be able to cope with strong treatments due
                        to certain compatibility issues then you are given some low risk treatments that may not essentially
                        kill all cancer cells, but can keep it in check for extended periods of time. Lower number of side
                        effects and low risk are the pros of such a treatment.</li>
                    <li>Non curative treatments: Such treatments can be very strong or much gentle. It can maintain
                        remission and manage your symptoms but it doesn't aim to cure cancer. It is more of a maintenance
                        program.</li>
                    <

            </div>

        </div>
    @endsection
