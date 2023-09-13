@extends('layouts.app')
@section('content')	
	
	<style>

body{
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

		input , .select1 {
			border: 1px solid #ececec;
			width: 100%;
			margin-top: 1%;
			background: #f8f8f8;
			color: #98a2a9;
           height: 45px;
           padding: 12px 30px 12px 18px;
}


		input[type='checkbox']{
			width:10%;
			display: inline-block;
			height: 15px;
		}

		.row{
			width:90%;
			margin: auto;
		}
		.row>.col-md-6> img {
			width: 100%;
			height: auto;	
		}
		 .row h4>img{
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
				<div class="col-md-6 col-sm-12 ">
					<img src="https://th.bing.com/th/id/OIP.cYcEY-KVLpMMalnI_nhzaAHaHa?pid=ImgDet&rs=1" alt="Lung Carser">
				</div>
				<div class="col-md-6 col-sm-12 ">
					<h4>	
                       Lung Cancer</h4>
					<p>Lung cancer is a type of cancer that begins in the lungs. Your lungs are two spongy organs in your chest that take in oxygen when you inhale and release carbon dioxide when you exhale.
						 Lung cancer is the leading cause of cancer deaths worldwide. People who smoke have the greatest risk of lung cancer, though </p>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-sm-12 ms-1">
			<div class="col">
				<h3> Hava a Question ?</h3>
			</div>
			<div class="col">
				<form action="{{url('kidney')}}" method="POST">
			 	@csrf  
				<input type="text" name="fname" id="name" placeholder="Enter Your Full Name" value={{old('fname')}}>
				@error('fname')
				<p  class='text-danger'> {{$message}} </p>
				@enderror
			</div>
			<div class="col">
				<input type="email" name="mail" id="email" placeholder="Enter Your Email ID"  value={{old('mail')}}>
				@error('mail')
				<p  class='text-danger'> {{$message}} </p>
				@enderror
			</div>
			<div class="col">
				<input type="tel" name="num" id="mobnumb" placeholder="Enter Your Contact Number"  value={{old('num')}}>
				@error('num')
				<p  class='text-danger'> {{$message}} </p>
				@enderror
			</div>
			<div class="col">
				<select name="loc" class="select1" id="location" placeholder="Location"  value={{old('loc')}}>
					<option value="">Location</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Noida">Noida</option>
					<option value="Nagpur">Nagpur</option>
				</select>
				@error('loc')
				<p  class='text-danger'> {{$message}} </p>
				@enderror
			</div>
			<div class="col">
				<select name="hos" class="select1" id="hos-clinic" placeholder="Hospitals and Clinic"  value={{old('hos')}}>
					<option value="">Hospital</option>
					<option value="Hospital">Hospital</option>
					<option value="Clinic">Clinic</option>
				</select>
				@error('hos')
				<p  class='text-danger'> {{$message}} </p>
				@enderror
			</div>
			<!-- text Area -->
			<div class="col">
			<label for="exampleFormControlTextarea1" class="form-label">Ask Question</label>
            <textarea class="form-control" id="accept" rows="3" name="ask"></textarea>
			</div>
			<!-- check box -->
			<div class="col">
				<input type="checkbox" name="check" id="checkit" value="y"/>By Clicking Submit, I agree to have read & understood
				the Terms & Conditions and Privacy Policy of Future Health & give my consent to contact me.
				
			</div>

			<input type="submit" class="btn btn-primary mt-4 mb-4" id="forgot-password-set" disabled="disabled" value="Submit" name="submit">
		</form>
		</div>
         <!-- jquery link -->
		<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
		<!-- jquery script -->
      <script>
		$('#checkit').click(function(){
			if($('#forgot-password-set').is(':disabled')){
				$('#forgot-password-set').removeAttr('disabled');
			}else{
				$('#forgot-password-set').attr('disabled', 'disabled');
			}
		});
	  </script>

	</div>


	<div class="row">
		<p class=" m-atuo">Furture Health » Specialities » Lung Cancer</p>
	</div>


	<div class="row">


		<div class="col-xl-12 col-lg-12 col-sm-12">
			
			<h4>Lung Cancer</h4>
			
			

			<p>
				Lung cancer treatments include surgery, radiofrequency ablation, radiation therapy, chemotherapy, targeted drug therapy and immunotherapy. Surgery.</p>

			<p>What is lung cancer? Lung cancer originates from the tissues of the lung, usually from cells lining the air passages. </p>


			<p>At Future, a hospital for blood cancer treatment in India, we are highly committed to providing the
				best care and support to all the patients in the areas of:</p>
<ul>
			<li>Lymphoma (Hodgkin and non-Hodgkin)</li>
			<li>Chronic lymphocytic leukaemia and related disorders</li>
			<li>Chronic myeloid leukaemia and related disorders</li>
			<li>Acute lymphoblastic leukaemia</li>
			<li>Acute myeloid leukaemia and myelodysplastic syndrome</li>
			<li>Multiple myeloma</li>
</ul>
			<p>Owing to the reputation of the effective diagnosis, Future super-speciality hospital is regarded as the
				best blood cancer hospital in India</p>

			<h4>When to See a Hematologist-Oncologist?</h4>

			<p>No two cancers are the same, each has its variation of the disease and signs making it apparent for you
				to consult with the best blood cancer hospital in India.</p>

			<p>Symptoms of blood cancer can include:</p>

<ul>
			<li>Fever and chills</li>
			<li>Persistent coughing</li>
			<li>Pain in the chest</li>
			<li>High frequency of infectious illnesses</li>
			<li>Constant weakness, fatigue, or night sweats</li>
			<li>Shortness of breath</li>
			<li>Itchy skin or a rash</li>
			<li>Swollen yet painless lymph nodes in the groin, armpits, or neck</li>
			<li>Changes in appetite</li>
			<li>Nausea</li>
</ul>
			<p>If you are experiencing any of these symptoms, you should get yourself diagnosed right away. Diagnostic
				management includes undergoing blood screens, bone marrow examination, imaging tests to know if they are
				related to cancer and you need blood cancer treatment in India.</p> 

<h4>Diagnosis & Treatment</h4>

<p>These tests can include:</p>
<ul>
<li>PET and MRI scans to stage many lymphomas and myelomas</li>
<li>Immunophenotyping</li>
<li>Molecular tests to look for mutations</li>
<li>Cytogenetics to look for chromosomal changes in cancer cells</li>
<li>Histopathology to look at tissue biopsies at the microscopic level</li></ul>

<p></p>
<h6>Treatments</h6>

<p>The treatment will be guided by the doctors at our hospital for blood cancer treatment in India and it will be guided by our doctors and it will depend on the type of blood cancer, health condition of the patient at the time of the treatment, and how they wish to receive the treatments. Some need a single type of treatment and some may need several. Strong treatments are not for everyone, these tend to be taxing on the body and are not recommended unless absolutely necessary. Gentler treatment options appeal to many as it supports a good quality of life, even if it fails to cure blood cancer.</p>

<p>Everyone is different, so the treatment is classified in several sections that suits individual needs.</p>

<p><h6 style="display: inline-block;">Intensive treatment: </h6> Intensive treatments are strong treatments and require the use of strong drugs to stop the spread of cancer cells. Primary examples of intensive treatment are as follows:</p>
<ul>
<li>Heavy dose chemotherapy: In this procedure, heavy dosage of drugs are used to kill the cancer cells.</li>
<li>Standard chemotherapy dose: The use of cancer cell-killing drugs that stops the infected cells from multiplying.</li>
<li>Stem cell transplantation: High doses of cancer killing drug, chemo is used to kill the affected cells from the bone marrow or lymph nodes. Then new stem cells from a donor or from yourself are introduced to the body through a drip. The new stem cells will then be producing fresh blood cells.</li>
<li>Radiotherapy: It is the use of radioactive rays to kill cancer cells from a certain area of a body part. (Primary treatment for lymphoma).</li>
<li>Surgery: Surgery is a rare occurrence. Splenectomy, the removal of spleen is performed if required.</li></ul>

<p>Be it short or long term, all these treatments are linked with a number of side effects.</p>

<p><h6>Non intensive treatment:</h6> Lower dose chemotherapy is an example of non intensive treatment. Such treatments are much more gentle on the body and have fewer side effects. Such cases usually don't kill the cancer but may help in keeping the cells in remission and in maintaining physical stability for a certain length of time. Some examples of non intensive treatments are as follows:</p>

<ul>
<li>Lower dose chemotherapy: Lower dose of chemotherapy drugs are used to kill cancerous cells and to prevent them from multiplying.</li>
<li>Immunotherapy or bio therapy: Drugs that boost your immune system so that your body fights against the cancerous cells and keeps it in check.</li>
<li>Curative treatment: If the doctors feel that you may not be able to cope with strong treatments due to certain compatibility issues then you are given some low risk treatments that may not essentially kill all cancer cells, but can keep it in check for extended periods of time. Lower number of side effects and low risk are the pros of such a treatment.</li>
<li>Non curative treatments: Such treatments can be very strong or much gentle. It can maintain remission and manage your symptoms but it doesn't aim to cure cancer. It is more of a maintenance program.</li>
<li>Wait and watch: A certain treatment for people who have a very slowly developing cancer situation in their body is called 'wait and watch' or 'active surveillance'. Here, you will be having a number of tests from time to time to observe the symptoms of the slowly spreading cancer. Even when the treatment starts, it will start from a very low dose.</li>
<li>Supportive care: Supportive care along with non intensive or intensive care is a necessity. Such treatments don't directly fight the cancer cells, but helps in better management of symptoms and makes the experience a bit easier.</li>
<li>Palliative care: Such care can help you cope with symptoms. It helps you in maintaining a quality through all the adversities.</li>
<li>Follow up care: Here, signs of complications and relapse are observed. To make sure you have received the right treatment</li>
			</ul>
<p>A wider range of treatments are required for patients with lymphomas or myeloma, including</p>

		</div>
		
	</div>

	<!--  footer start  -->


@endsection