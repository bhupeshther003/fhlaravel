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

       .row>.col-md-6> img
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

                <div class="row ">
                    <div class="col-md-6 col-sm-12">
                        <img src="https://img.freepik.com/premium-photo/asian-women-wearing-headscarf-disease-with-pink-ribbon-hand-checking-lumps-her-breast-signs-breast-mammary-cancer-isolated-window-bedroom-house-healthcare-medicine_29332-3334.jpg?size=626&ext=jpg&ga=GA1.1.1406591241.1684115342&semt=ais"
                            alt="Live Cancer">
                    </div>
                    <div class="col-md-6 col-sm-12  ">
                        <h4> Live Cancer</h4>
                        <p>Liver cancer is cancer that begins in the cells of your liver. Your liver is a football-sized
                            organ that sits in the upper right portion of your abdomen, beneath your diaphragm and above
                            your stomach.



                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 ms-1">
                <div class="col">
                    <h3> Hava a Question ?</h3>
                </div>
                <div class="col">
                    <input type="text" name="fname" id="name" placeholder="Enter Your Full Name">
                </div>
                <div class="col">
                    <input type="email" name="mail" id="email" placeholder="Enter Your Email ID">
                </div>
                <div class="col">
                    <input type="tel" name="num" id="mobnumb" placeholder="Enter Your Contact Number">
                </div>
                <div class="col">
                    <select name="loc" class="select1" id="location" placeholder="Location">
                        <option value="">Location</option>
                        <option value="">Mumbai</option>
                        <option value="">Noida</option>
                        <option value="">Nagpur</option>
                    </select>
                </div>
                <div class="col">
                    <select name="hos-clini" class="select1" id="hos-clinic" placeholder="Hospitals and Clinic">
                        <option value="">Hospital</option>
                        <option value="">Clinic</option>
                    </select>
                </div>
                <div class="col">
                    <input type="checkbox" name="check" id="checkit">By Clicking Submit, I agree to have read &
                    understood
                    the Terms & Conditions and Privacy Policy of Future Health & give my consent to contact me.

                </div>

                <button value="submit">Submit</button>

            </div>


        </div>


        <div class="row">
            <p class=" m-atuo">Furture Health » Specialities » Cardiac Surgery</p>
        </div>


        <div class="row">


            <div class="col-xl-12 col-lg-12 col-sm-12">

                <h4>Live Cancer</h4>



                <p>A liver cancer, also known as hepatocellular carcinoma (HCC), is a type of cancer that originates in the
                    cells of the liver. It is the most common form of primary liver cancer.</p>
                <p><strong>Types of Liver Cancer:</strong></p>
                <p>There are different types of liver cancer, including:</p>
                <ul>
                    <li>Hepatocellular carcinoma (HCC): This is the most common type of liver cancer and starts in the main
                        type of liver cells called hepatocytes.</li>
                    <li>Intrahepatic cholangiocarcinoma: This cancer starts in the bile ducts within the liver.</li>
                    <li>Hepatoblastoma: This is a rare type of liver cancer that primarily affects children.</li>
                </ul>
                <p><strong>Risk Factors:</strong></p>
                <p>Several factors may increase the risk of developing liver cancer:</p>
                <ul>
                    <li>Hepatitis B or C infection</li>
                    <li>Cirrhosis (scarring of the liver)</li>
                    <li>Alcohol abuse</li>
                    <li>Non-alcoholic fatty liver disease</li>
                    <li>Obesity</li>
                    <li>Exposure to certain chemicals or toxins</li>
                </ul>
                <p><strong>Symptoms and Diagnosis:</strong></p>
                <p>Early-stage liver cancer often does not cause noticeable symptoms. However, as the tumor grows, common
                    symptoms may include:</p>
                <ul>
                    <li>Abdominal pain or discomfort</li>
                    <li>Jaundice (yellowing of the skin and eyes)</li>
                    <li>Unexplained weight loss</li>
                    <li>Loss of appetite</li>
                    <li>Swelling in the abdomen</li>
                </ul>
                <p>Diagnosis of liver cancer may involve:</p>
                <ul>
                    <li>Physical examination and medical history evaluation</li>
                    <li>Blood tests to assess liver function</li>
                    <li>Imaging tests such as ultrasound, CT scan, or MRI</li>
                    <li>Biopsy to confirm the presence of cancer cells</li>
                </ul>
                <p><strong>Treatment Options:</strong></p>
                <p>The choice of treatment for liver cancer depends on the stage of the cancer, the extent of liver damage,
                    and the patient's overall health. Treatment options may include:</p>
                <ul>
                    <li>Surgery: Surgical options include tumor resection, liver transplant, or liver-directed therapies.
                    </li>
                    <li>Localized treatments: These include ablation therapy, embolization, and radiation therapy.</li>
                    <li>Systemic therapies: This includes chemotherapy, targeted therapy, and immunotherapy.</li>
                </ul>
                <p><strong>Prognosis and Follow-up:</strong></p>
                <p>The prognosis for liver cancer varies based on factors such as the stage of the cancer, the extent of
                    liver damage, and the patient's response to treatment. Regular follow-up visits, imaging scans, and
                    blood tests are important for monitoring the cancer's progression, detecting any recurrence, and
                    managing potential side effects of treatment.</p>


            </div>

        </div>
    @endsection
