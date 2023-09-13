@extends('layouts.app')
@section('content')
    <style>
        .position-relative>.position-absolute>h1 {
            color: rgb(20, 0, 0);
            border-radius: 10px;
            /* background: linear-gradient(to left, red 30%, green 40%, blue 100%); */

        }


        .col-md-4>ul>li {
            list-style: none;
            color: transparent;
            background-color: rgba(186, 187, 187, 0.4);
            border-width: 0px 0px 1px 0px;
            border-style: solid;
            border-color: aliceblue;
            font-size: large;
            text-transform: capitalize;
        }

        .col-md-4>ul>li a {
            color: black;
            text-decoration: none;
        }

        .col-md-4>ul>li>a:hover::before {
            content: ">>";
        }



        .para p {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 125%;

        }

        .page {
            display: flex;
            /* border:1px solid red; */
            width: 90%;
            margin: auto;
        }

        .para {
            width: 87%;
            margin: 2%;
            padding: 5px;
        }

        .para h1 {
            margin-top: 3%;
            margin-bottom: 1%;
        }
    </style>
</head>



    <div class=" position-relative">
        <img src="./image/back5.jpg" alt="" class="img-fluid" style="height: 450px;width:100%;">
        <div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
            <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:15%;"  alt="">
           
            <h1 class="">About Future Hospital</h1>
        </div>

    </div>

    <span>
        <h1 class="text-center text-capitalize">about us</h1>
    </span>

    <div class="container  mt-5">
        <div class="row ">


            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12  col-xs-12 ms-2 ">
                <ul>
                    <li><a href="#lagacy">Lagacy</a></li>
                    <li><a href="#mission"> vision misson</a></li>
                    <li><a href="#quality"> accreditation and quality</a></li>
                    <li><a href="#facility">infrastructure and facility</a></li>
                    <li><a href="#services">community services</a></li>
                    <li><a href="#privacy">priavacy policy</a></li>
                </ul>
            </div>

            <div class=" col-xl-8 col-lg-7 col-md-7 col-sm-12 ms-sm-2">

                <h1 id="legancy">Lagacy</h1>
                <p>More than fifteen years ago, four doctors worked together to make their unique vision a reality, a
                    hospital that would do more than care for the physical needs of their patients. It was their
                    intention to provide a healing atmosphere that would encompass all the aspects of health and
                    well-being. These dedicated doctors were laying the foundation for future Hospital - a hospital that
                    would not only care for the medical needs of their patients but also create world class medical
                    facilities for the not so privileged class of the society in a patient friendly environment.</p>
                <h1 id="mission">VISION</h1>
                <p>To evolve as the most preferred destination for quality healthcare that provides a comprehensive
                    range of services and is trusted for personalized care with compassion.
                </p>
                <p>Our vision is to revolutionize the way people find and secure employment. We envision a futur where job searching is simplified, efficient, and tailored to individual needs. By leveraging advanced technologies and data-driven insights, we aim to provide personalized job recommendations,
                    streamline the hiring process, and foster strong connections between candidates and companies.
                </p>

                <p> We aspire to be the go-to platform for both job seekers and employers, driving positive change in
                    the job market and shaping the future of work.
                </p>
                <h1>MISSION</h1>
                <p>Committed to deliver quality & personalized care to improve the well-being of patients and
                    communities we serve.</p>
                <p>At our company, our mission is to connect talented individuals with meaningful employment
                    opportunities. We strive to create a platform where job seekers can find fulfilling careers and
                    employers can discover top talent. </p>
                <p> Through our commitment to excellence and innovation, we aim to transform the job market and empower
                    individuals to achieve their professional aspirations.</p>
                <h1>QUALITY </h1>
                <p>QUALITY POLICY
                    To constantly upgrade ourselves to keep pace with what is new in the field to deliver healthcare,
                    recruit highly qualified doctors and further improve clinical outcomes, patient safety & patient
                    satisfaction.</p>

                <h1 id="quality">ACCREDITATION & QUALITY</h1>
                <p>Set on a spacious campus, the hospitals have been built on the foundation of Trust, Talent,
                    Technology, Service and Infrastructure.</p>

                <p>With the belief that healthcare requires utmost care and responsibility, Future Hospitals have
                    brought together a team of medical specialists -doctors and para medical staff, who represent and
                    uphold the Group’s philosophy of transparency, dedication and honesty. The medical professionals are
                    highly qualified from the best medical institutes and have vast experience in their fields.</p>
                <p>FUTURE HEALTH Speciality Hospital Greater Noida and Noida have also been accredited by National
                    Accreditation Board for Hospitals and Healthcare Providers for its processes and high quality
                    patient care.</p>

                <h1 id="facility">infrastructure & facility</h1>

                <p> Our hospitals are equipped with machines and devices with sophisticated technology. Our hospitals
                    are designed to assist our practitioners in providing timely, efficient and quality healthcare. All
                    our hospitals in the Delhi NCR region are accredited by the NABH. In addition, we also equip our
                    hospitals with advanced medical technology and equipment and diagnostic instruments with the aim of
                    providing our patients with accurate diagnoses and effective treatments. We continuously strive to
                    introduce cutting-edge medical technology and state-of-the-art equipment and facilities across each
                    aspect of our healthcare services, from out-patient to in-patient. </p>
                <p>All our critical care units are equipped with high-end patient monitoring devices, ventilators and
                    dedicated isolation rooms. Facilities for haemodialysis, sustained low-efficiency dialysis,
                    endoscopy and bronchoscopy are available 24x7 by the bedside.</p>

                <h1>Community Services</h1>
                <p> Healthcare should reach masses. Future Hospitals play a big role in ensuring that best of the
                    medical care is offered to masses. In line with our consistent efforts, we organize regular health
                    awareness and check up camps for the general public, students, and underprivileged section of
                    society.</p>

                <p>Free health lectures are conducted regularly for students of schools, colleges to create awareness on
                    hygiene (oral/dental/general), importance of sports and exercise, healthy eating habits etc.</p>
                <p>
                    Awareness sessions and checks are also organized for employees of cooperates for occupational safety
                    and health standards, ergonomics workplace assessments and injury prevention.</p>

                <h1>Privacy Policy</h1>


                <p>Important:</p>

                <p>The terms and conditions contained herein along with the Privacy Policy form an Agreement regulating
                    our relationship with regard to the payment for hospital services provided by Future Hospital and
                    Medical Research Centre to you.</p>
                <p>You are advised to read this Agreement carefully and if you are not agreeable to any terms and
                    conditions, you should not use this service.</p>
                <p>If you accept this agreement, it will be a legally binding agreement between you and Future Hospital
                    and Medical Research Centre (herein after referred to as "Future Hospital").</p>

                <h1>Applicable Governing Law and Jurisdiction: -</h1>
                <p>This agreement is governed and construed in accordance with the Laws of Union of India.</p>
                <p>You hereby irrevocably consent to the exclusive jurisdiction and venue of courts in Noida, UP, India,
                    in all disputes arising out of or relating to the use of the www.futurehospitals.com sites and
                    services offered by www.futurehospitals.com.</p>
                <p>www.futurehospitals.com’s performance of this agreement is subject to existing laws and legal
                    process, and nothing contained in this agreement is in derogation of www.futurehospitals.com right
                    to comply with governmental, court and law enforcement requests or requirements relating to your use
                    of the www.futurehospitals.com sites and services offered by www.futurehospitals.com.</p>

                <h1>Definitions: -</h1>
                <p>"Agreement" means the terms and conditions of the Bill Payment Service as detailed herein including
                    all privacy policy, and will include the references to this Agreement as amended, novated,
                    supplemented, varied or replaced from time to time.</p>
                <p>"User" shall mean the person or any legal entity who accepts the services offered by future Hospital
                    on this website.</p>

                <h1>Eligibility : -</h1>

                <p>You represent and warrant that you are competent and eligible to enter into legally binding agreement
                    and have the requisite authority to bind the other party to this Agreement.</p>
                <p>You shall not use this site if you are not competent to contract under the applicable laws, rules and
                    regulations.</p>



                <h1 id="services">Term of Agreement/Service : -</h1>

                <p>This Agreement shall continue to be in full force and effect for so long as you are using the
                    services provided by future Hospital.</p>
                <p>future Hospital provides the online payment service for bills/deposits wherein you can pay for
                    hospital services.</p>
                <p>By authorizing the required details you are agreeing to use the Services in a manner consistent with
                    and abide by the terms and conditions of this Agreement, our Privacy Policy, and with all applicable
                    laws and regulations.</p>
                <p>Either you or future Hospital may terminate the service at any time, with or without cause.</p>
                <h1>Modification of Terms and conditions of Service : -</h1>
                <p>future Hospital may at any time modify the terms and conditions ("Terms") of the Service without any
                    prior notification to you.</p>
                <p>You can access the latest version of the Terms at any given time. You should regularly review the
                    Terms.</p>
                <p>In the event the modified Terms are not acceptable to you, you should discontinue using the service.
                    However, if you continue to use the service you agree to accept and abide by the modified Terms.</p>


                <h1 id="privacy">Privacy Policy : -</h1>

                <p>future Hospital and Medical Research Centre has created this Privacy Policy in order to demonstrate
                    our firm commitment to privacy and to disclose our practices in gathering, using and disclosing
                    personal information in connection with your payment details through the hospital web site unless
                    required by law, regulation or court order.</p>
                <p>Although there are links from this site to other web sites, this Privacy Policy applies only to this
                    site and not to Web sites operated by others For example, if you click on a link to another web
                    site, the click takes you out of our site. We are not responsible for the content or privacy
                    practices of other web sites.</p>
                <p>We reserve the right to change or update these policies at any time upon reasonable notice, effective
                    immediately upon posting to this site.</p>
                <h1>Security practices & controls : -</h1>
                <p>The payment area for hospital bills of our web site is secure and it is protected by state-of-the-art
                    encryption technology.
                <p>We comply with the security safeguards detailed in our computer security policies and procedures, and
                    routinely monitor that compliance.</p>
                <p>When credit card or other financial information is transmitted over the Internet we use industry
                    standard, SSL (secure socket layer) encryption to protect that information.</p>
                <p>We protect the personal information we have collected from this site by using industry standard
                    security precautions against loss and unauthorized access, destruction, use, modification or
                    disclosure of that information.</p>
                <h1>Terms & Conditions for Payment Service : -</h1>
                <p>Electronic Communication</p>
                <p>You agree, understand and confirm that the credit card details provided by you for availing of
                    services on www.futurehospitals.com will be correct and accurate and you shall not use the credit
                    card which is not lawfully owned by you.</p>
                <p>You further agree and undertake to provide the correct and valid credit card details to
                    www.futurehospitals.com.</p>
                <p>The said information will not be utilized and shared by www.futurehospitals.com with any of the third
                    parties unless required by law, regulation or court order.</p>
                <h1>Suspension due to non-compliance with Agreement</h1>
                <p>future Hospital will use its best efforts to make all your payments properly. However, the future
                    Hospital shall not incur any liability and any service guarantee shall be void because of the
                    existence of any one or more of the following circumstances:</p>

                <p>If, you have not provided the hospital with correct UHID Number, Reservation Number, patient’s name,
                    address, telephone number, mobile number, date of Admission, Service Type Payment Account
                    information, or the Account information for the payee.</p>
                <p>If, through no fault of the hospital, your Payment Account does not contain sufficient funds to
                    complete the transaction or the transaction would exceed the credit limit of your overdraft amount.
                    The payment processing center is not working properly and you know or have been advised by the
                    hospital about the malfunction before you execute the transaction.</p>
                <p>Circumstances beyond control of the hospital (Such as, but not limited to, fire, flood, or
                    interference from the outside force) prevent the proper execution of the transaction and the
                    hospital has taken reasonable precautions to avoid those circumstances and/or,</p>
                <p>In case of payment through Credit Card, if the details provided by user are inaccurate, incorrect or
                    entered fraudulently.</p>
                <p>If the user is in breach of any of the terms and conditions of this Agreement and/or the Terms and
                    conditions of the usage of the www.futurehospitals.com.</p>
                <h4>Stop Payment Requests</h4>
                <p>future Hospital can not assist with a stop payment request for any Bill Payment scheduled using a
                    Payment Account through credit card, in any such case; you must contact your credit card company
                    directly.</p>

                <h5>Notification</h5>
                <p>future Hospital will use its best efforts to present all of your electronic bills promptly. In
                    addition to notification & acknowledgement after completion of transaction, details will be
                    communicated to you.</p>
            </div>
        </div>
    </div>
@endsection




