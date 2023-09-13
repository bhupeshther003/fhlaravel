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

        .row>.col-md-6>img {
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
                        <img src="https://img.freepik.com/free-photo/side-view-specialist-doctor-tells-what-if-you-have-stomach-ache_179666-12088.jpg?size=626&ext=jpg&ga=GA1.2.1406591241.1684115342&semt=sph"
                            alt="Orthopadics" class="img-fluid w-100">
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                        <h4>Hernia</h4>
                        <p> A hernia occurs when part of your insides bulges through an opening or weakness in the muscle or
                            tissue that contains it.
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
                    <select name="loc" class='select1' id="location" placeholder="Location" value={{ old('loc') }}>
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
                    <select name="hos" class='select1' id="hos-clinic" placeholder="Hospitals and Clinic" value={{ old('hos') }}>
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
            <p class=" m-atuo">Furture Health » Specialities »Hernia</p>
        </div>


        <div class="row">


            <div class="col-xl-12 col-lg-12 col-sm-12">

                <h4>Hernia</h4>



                <p>
                    <strong> Definition and Overview: </strong>

                    Explain what a hernia is and the different types of hernias that can occur, such as inguinal hernias
                    (groin hernias), femoral hernias, umbilical hernias, incisional hernias, and hiatal hernias.
                </p>

                <p> Highlight that hernias can affect both men and women of all ages, but they are more common in men.</p>


                <p>
                    <strong> Symptoms:</strong>
                </p>
                <p>
                    scribe common symptoms associated with hernias, including a noticeable bulge or lump at the affected
                    site, pain or discomfort, especially during physical activity or lifting, and a feeling of pressure or
                    weakness in the abdomen or groin area.
                    Note that some hernias may be asymptomatic, causing no pain or discomfort, but can still require medical
                    attention.
                </p>

                <strong>Diagnosis:</strong>

                <p>Explain how hernias are diagnosed, typically through a physical examination performed by a healthcare professional.
                Mention that additional diagnostic tests, such as imaging studies like ultrasound or MRI, may be ordered to confirm the diagnosis and evaluate the extent of the hernia.
                Treatment Options:</p>
                
               <p> Discuss the different treatment approaches for hernias, including watchful waiting (monitoring the hernia without immediate intervention), lifestyle modifications (such as weight loss and avoiding activities that worsen symptoms), and surgical repair.
                Explain that hernia repair surgery is often recommended to prevent complications and relieve symptoms. It can be performed through traditional open surgery or minimally invasive laparoscopic techniques.</p>
               <strong> Recovery and Aftercare:</strong>
                
                <p>Provide information on what to expect during the recovery period following hernia repair surgery, including pain management, wound care, and activity restrictions.
                Emphasize the importance of following post-operative instructions, attending follow-up appointments, and engaging in proper rehabilitation exercises.
                Prevention:</p>
                
                <p>Offer tips on how to reduce the risk of developing a hernia, such as maintaining a healthy weight, avoiding heavy lifting, practicing proper lifting techniques, and treating conditions that can lead to chronic coughing.
                When to Seek Medical Help:</p>
                
                <p>Educate readers on the signs and symptoms that should prompt immediate medical attention, such as severe pain, vomiting, inability to pass gas or have a bowel movement, and a rapidly enlarging or tender hernia.</p>



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
                    <li>Lower dose chemotherapy: Lower dose of chemotherapy drugs are used to kill cancerous cells and to
                        prevent them from multiplying.</li>
                    <li>Immunotherapy or bio therapy: Drugs that boost your immune system so that your body fights against
                        the cancerous cells and keeps it in check.</li>
                    <li>Curative treatment: If the doctors feel that you may not be able to cope with strong treatments due
                        to certain compatibility issues then you are given some low risk treatments that may not essentially
                        kill all cancer cells, but can keep it in check for extended periods of time. Lower number of side
                        effects and low risk are the pros of such a treatment.</li>
                    <li>Non curative treatments: Such treatments can be very strong or much gentle. It can maintain
                        remission and manage your symptoms but it doesn't aim to cure cancer. It is more of a maintenance
                        program.</li>
                    <li>Wait and watch: A certain treatment for people who have a very slowly developing cancer situation in
                        their body is called 'wait and watch' or 'active surveillance'. Here, you will be having a number of
                        tests from time to time to observe the symptoms of the slowly spreading cancer. Even when the
                        treatment starts, it will start from a very low dose.</li>
                    <li>Supportive care: Supportive care along with non intensive or intensive care is a necessity. Such
                        treatments don't directly fight the cancer cells, but helps in better management of symptoms and
                        makes the experience a bit easier.</li>
                    <li>Palliative care: Such care can help you cope with symptoms. It helps you in maintaining a quality
                        through all the adversities.</li>
                    <li>Follow up care: Here, signs of complications and relapse are observed. To make sure you have
                        received the right treatment</li>
                </ul>
                <p>A wider range of treatments are required for patients with lymphomas or myeloma, including</p>

            </div>

        </div>
    @endsection
