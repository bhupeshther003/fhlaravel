@extends('layouts.app')

@section('content')
    <style>
        .addreses>a {
            text-decoration: none;

        }

        .addreses>a:hover {
            text-decoration: underline;
            color: rgb(4, 240, 248);
        }
		.contact{
			box-shadow:1ch 2ch 3ch  black;
		}
    </style>


@section('content')
@if (Session::has('success'))
	<script>
			alert(' {{ Session::get('success') }}');
	</script>
@endif


    <div class=" position-relative">
        <img src="./image/11.jpg" alt="" class="img-fluid" style="height: 450px;width:100%;object-fit:cover;">
        <div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
            <img src="{{ asset('./image/logoes2.jpeg') }}" style=" width:25%;mix-blend-mode:multiply;top:20%; " alt="">
            <h1 class="">Contact our Community </h1>
        </div>

    </div>


    <h1 class="mt-3">FUTURE HEALTH GROUP LTD.</h1>

    <div class="container " style="width:80%">
        <div class="row m-auto  ms-4 me-4">

            <div class="col">
                <!-- == address-1 ================ -->
                <div class="addreses">
                    <h4>Global Headquarters</h4>
                    <span class="d-block">320,India Gate, Mumbai</span>
                    <span class="d-block">Future Health Organization </span>
                    <span class="d-block">Phone no. 542-658-356</span>
                    <span class="d-block">Phone no. 552-778-653</span>
                </div>


                <!--   address-2 ================ -->
                <div class="addreses">
                    <h4>Consumer Products and Support:</h4>
                    <span class="d-block">Phone no. 542-758-9756</span>
                    <a class="d-block text-primary"
                        href="mailto:customerservice@fhealth.com">customerservice@fhealth.com</a>
                    <span class="d-block">Istitutional product and support </span>
                    <a class="d-block text-primary" href="mailto:contactproduct@fhealth.com">fcontactproduct@fhealth.com</a>
                    <span class="d-block"> For technical Support:</span>
                    <a class="d-block text-primary" href="mailto:fheathsupport@fhealth.com">fheathsupport@fhealth.com</a>
                </div>

                <!--   address-3 ================ -->

                <div class="addreses">
                    <h4>Australia Brittannica (Sydney) </h4>
                    <span class="d-block">Australia,New Zeland APAC</span>
                    <span class="d-block"> </span>
                    <span class="d-block">Genral site<span class="text-primary">:https// www.fhealth.com</span></span>
                    <a class="d-block text-primary" href="mailto:helpaus@fhealth.com">helpaus@fhealth.com</a>
                    <span class="d-block">Phone no. 224-856-9568</span>
                    <span class="d-block">customer support(Aust. only)</span>
                    <a class="d-block text-primary"
                        href="mailto:customersupportaus@fhealth.com">customersupportaus@fhealth.com</a>
                    <span class="d-block"> For technical Support(Aust. only):</span>
                    <a class="d-block text-primary"
                        href="mailto:fheathsupportaus@fhealth.com">fheathsupportaus@fhealth.com</a>
                </div>

                <!--   address-4 ================ -->
                <div class="addreses">
                    <h4>UK Brintannica(London) </h4>
                    <span class="d-block">Serviing Europe, middle East and Africa</span>
                    <span class="d-block"> </span>
                    <span class="d-block  text-primary">Genral site:<span>https// www.fhealth.com</span></span>
                    <a class="d-block text-primary" href="mailto:helpuk@fhealth.com">helpuk@fhealth.com</a>
                    <span class="d-block">Phone no. 542-251-6253</span>
                    <span class="d-block  text-primary">customer support(UK only)</span>
                    <a class="d-block text-primary"
                        href="mailto:customersupportuk@fhealth.com">customersupportuk@fhealth.com</a>
                    <span class="d-block"> For technical Support(UK only):</span>
                    <a class="d-block text-primary"
                        href="mailto:fheathsupportuk@fhealth.com">fheathsupportuk@fhealth.com</a>
                </div>


                <!--   address-5 ================ -->

                <div class="addreses">
                    <h4>Nagpur </h4>
                    <span class="d-block">Rajiv Gandhi main Road building no.40, 440001</span>
                    <span class="d-block"> </span>
                    <span class="d-block  text-primary">Genral site:<span>https// www.fhealth.com</span></span>
                    <a class="d-block text-primary" href="mailto:help@fhealth.com">Genral contact:help@fhealth.com</a>
                    <span class="d-block">customer support</span>
                    <a class="d-block text-primary"
                        href="mailto:customersupport@fhealth.com">customersupport@fhealth.com</a>
                    <span class="d-block"> For technical Support:</span>
                    <a class="d-block text-primary" href="mailto:fheathsupport@fhealth.com">fheathsupport@fhealth.com</a>
                </div>

            </div>
            <div class="col">

                <!--   address-6 ================ -->
                <div class="addreses">
                    <h4>Delhi </h4>
                    <span class="d-block">Gandhi Chowk building no.31 , 110999</span>
                    <span class="d-block"> </span>
                    <span class="d-block  text-primary">Genral site:<span>https// www.fhealth.com</span></span>
                    <span class="d-block">Phone no. 865-856-6593</span>
                    <a class="d-block text-primary" href="mailto:help@fhealth.com">Genral contact:help@fhealth.com</a>
                    <span class="d-block">customer support</span>
                    <a class="d-block text-primary"
                        href="mailto:customersupport@fhealth.com">customersupport@fhealth.com</a>
                    <span class="d-block "> For technical Support:</span>
                    <a class="d-block text-primary" href="mailto:fheathsupport@fhealth.com">fheathsupport@fhealth.com</a>


                </div>


                <!--   address-7 ================ -->
                <div class="addreses">
                    <h4>Surat </h4>
                    <span class="d-block"> Ring Road 395002</span>
                    <span class="d-block">Future Health Hospital </span>
                    <span class="d-block  text-primary">Genral site:<span>https// www.fhealth.com</span></span>
                    <span class="d-block">Phone no. +91-737-856-6593</span>
                    <a class="d-block text-primary" href="mailto: >Genral contact:help@fhealth.com<">Genral
                        contact:help@fhealth.com</a>
                    <span class="d-block">customer support</span>
                    <a class="d-block text-primary"
                        href="mailto: customersupport@fhealth.com">customersupport@fhealth.com</a>
                    <span class="d-block"> For technical Support:</span>
                    <a class="d-block text-primary" href="mailto: fheathsupport@fhealth.com">fheathsupport@fhealth.com</a>


                    <form action="/contact" method="post">
                        @csrf
                        <div class="card contact mt-3 p-1">
                            <h4>Contact Us </h4>
                            <div class="row ">
                                <div class="col-6">
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Name"
                                        name="name" aria-label="Name">
                                    @error('name')
                                        <p class='text-danger'> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                        aria-label="Email">
                                    @error('email')
                                        <p class='text-danger'> {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="Subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Subject">
                                @error('subject')
                                    <p class='text-danger'> {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="Message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                @error('message')
                                    <p class='text-danger'> {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                    </form>


                </div>

            </div>
        </div>



        <section class="container">

            <div class="col-lg-12 col-md-12 col-12 ps-lg-auto mt-md-5">
                <div class="about-text">
                    <p>The world perceives us as a low-cost Indian healthcare service provider; what we are engaged in is a
                        passionate journey to establish ourselves as the lowest-cost, high-quality healthcare service
                        provider in the world.</p>
                    <p>At Future Health, we are convinced that 'quality' and 'lowest cost' are not mutually exclusive when
                        it comes to healthcare delivery. In fact, we are well on our way to demonstrate that we are not
                        running our institution as just another number-only business, but are attractively placed to create
                        an affordable, globally-benchmarked quality-driven healthcare services model.</p>
                    <p>At Future Health, we will continue to trust what has worked for us in the past. We will keep our
                        model predominantly asset-light; we will reinvest our accruals; we will engage with governments for
                        land and help them achieve affordable healthcare promises made to their constituencies; we will rent
                        premises from private owners and create small-to-large clinics within existing hospitals.</p>
                    <p>As a result of this flexible approach, we will commission hospitals, medical facilities, and clinics
                        across the breadth of this country, getting closer to patients and taking the promise of quality
                        affordable healthcare to the doorstep of the country's millions.
                        It is this exciting prospect that stokes my motivation to do bigger and better for the glory of the
                        country that is mine.</p>

                </div>
            </div>

            <hr>

            <div class="col-lg-12 col-md-12 col-12 ps-lg-auto mt-md-5">
                <div class="about-text">

                    <h2 class="text-primary">Contact Future Health in Mumbai</h2>

                    <h4 class="text-primary mt-5">Mumbai, Future Hospital, HSR Layout</h4>
                    <p>Basant Health Centre Building, No-1 , 18th main (Opp.HSR Club), Sector 3, HSR Layout , Mumbai, -
                        400022</p>


                    <div class="container mt-5 mb-2">
                        <div class="row align-items-start">
                            <div class="col">
                                <p>Email</p>
                                <p class="text-primary ">info.msr@Futurehealth.org</p>
                            </div>
                            <div class="col">
                                <p>Helpline</p>
                                <p class="text-primary ">180 0201 201</p>
                            </div>
                            <div class="col">
                                <p>Emergency</p>
                                <p class="text-primary ">+91 97676 38594</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </div>
    </div>
    </section>


@endsection

</html>
