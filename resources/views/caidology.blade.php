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

		input , .select1{
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
		.row>.col-md-6>img {
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

			<div class="row">
				<div class="col-md-6 col-sm-12">
					<img src="https://www.rumcsi.org/wp-content/uploads/2020/09/Cardiology-scaled.jpg" class="img-fluid" alt="Cadiology">
				</div>
				<div class="col-md-6 col-sm-12  ">
					<h4>Cadiology</h4>
					<p>Cardiology is the branch of medicine which deals with the problems regarding heart and area of heart. This field indulges medical diagnosis and treatment for heart defect.
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
				<select name="hos-clini" class="select1"  id="hos-clinic" placeholder="Hospitals and Clinic">
					<option value="">Hospital</option>
					<option value="">Clinic</option>
				</select>
			</div>
			<div class="col">
				<input type="checkbox" name="check" id="checkit">By Clicking Submit, I agree to have read & understood
				the Terms & Conditions and Privacy Policy of Future Health & give my consent to contact me.
				
			</div>

			<button value="submit">Submit</button>

		</div>


	</div>


	<div class="row">
		<p class=" m-atuo">Furture Health » Specialities » Cadiology</p>
	</div>


	<div class="row">


		<div class="col-xl-12 col-lg-12 col-sm-12">
			
			<h4>Cadiology</h4>
			
			

			<p>
				The blood consists of four components- white blood cells, red blood cells, platelets, and plasma. They
				together help to transfer oxygen to the organs and tissues acting as an agent to protect the body
				against infections and form clots to stop bleeding. But they also have abnormal invaders that act as a
				cancer-causing agent. There is when you need hematology-oncology comes into action</p>

			<p>Cadiology, or Cadiology, is the medicinal branch that deals with blood related diseases. The cause of
				such diseases are studied, it is then followed by the prognosis, the treatment and prevention of such
				diseases. And Oncology is the branch of medicine which deals with the diagnosis, treatment and
				prevention of forms of cancer. The person who deals with it is an Oncologist. Haemato Oncology is
				related to all kinds of blood cancers that amount upto one tenth of global cancers. The person who deals
				with such cases is known as a Haemato Oncologist. Diseases like leukemia, hemophilia, anemia, lymphomas,
				thalassemias and cancer of other organs come under Haemato Oncology. The abbreviated term for it is
				hem-onc.</p>

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

	@endsection