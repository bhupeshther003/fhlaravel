@extends('layouts.app')
@section('content')
	


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
		integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
		crossorigin="anonymous" referrerpolicy="no-referrer">
	</script>
		
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
		integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
		crossorigin="anonymous" referrerpolicy="no-referrer">
	</script>

		{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"	integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script> --}}

<style>
	.row {
		width: 90%;
		margin: auto;
	}
	html{
		scroll-behavior: smooth;
	}

	a{
		text-decoration: none;
	}
	.img-fluid {
			width: 100%;
			height: auto;
		}

		.carousel-inner {
			height: 400px;
		}
</style>

<body>

	<!-- auto  image scroller  -->

	<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="1500">
				<img src="./image/back1.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Caring for You, Every Step of the Way:</h5>
					<p> Future Health - Your trusted partner in health and well-being</p>
				</div>
			</div>
			<div class="carousel-item" data-bs-interval="2500">
				<img src="./image/back3.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Empowering Lives through Advanced Medicine:</h5>
					<p> Join us at Future Health for innovative treatments and exceptional outcomes</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="./image/back4.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>


	<div class="container-fluid mt-4 text-center">
		<div class="card  m-2  ">
			<p class="fs-3 fw-bold" id="first" >Enviorment of Our Hospital</p>
		</div>


		<div class="container-fluid ps-0 pe-0 ">

			<div class="row g-0 m-auto ">
				<div class="row" >

					<div class="col-lg-7 col-sm-12 ">
						<div class="card fs-4">
							Smile is Best Medician Always
						</div>

						<div class=" mt-2 col-md-10 ">
							<video src="./image/026157248_main_xxl.mp4" class="p-auto m-auto" style="width:80%"  controls></video>
						</div>

						<p> At <strong> Future Health </strong> , we believe in the power of a smile. We understand that
							healthcare extends beyond medical treatments and procedures. That's why we prioritize
							creating a warm and welcoming environment for our patients, their families, and our
							dedicated staff. We firmly believe that a smile is the best medicine.</p>

					</div>


					<div class=" col-xl-5 col-lg-5 col-sm-12  m-auto">
						<img src="./image/smile1.jpeg" alt="">
						<img src="./image/smile2.jpeg" alt="">
					</div>
				</div>
				<div class="row col-12">
					<p id="second-box">A smile has an incredible impact on our overall well-being and can make a significant difference
						in the healing process. When you walk through our doors, you will be greeted with friendly faces
						and genuine smiles from our compassionate team. We understand that a simple smile can provide
						comfort, alleviate anxiety, and promote a sense of trust and security
					</p>

				</div>


			</div>



			<!--  second box  -->

			<div class="row g-0 m-auto" >
				<div class="row ">



					<div class="col-lg-7 col-sm-12 ">
						<div class="card fs-4">
							<p class="text-capitalize"> newborn child is the biggest god gift to parent</p>
						</div>

						<div class=" mt-2 col-md-10  mx-auto me-2 ">
							<video src="https://www.shutterstock.com/shutterstock/videos/1023629896/preview/stock-footage-in-the-hospital-midwife-gives-newborn-baby-to-a-mother-to-hold-supportive-father-lovingly-hugging.webm"  class="p-auto m-auto" style="width:80%" controls></video>
						</div>

						<p> Welcome to<strong> Future Health</strong>, where we believe in celebrating the most
							precious gift of all: the arrival of a newborn child. We understand that becoming a
							parent is an extraordinary and life-altering experience, filled with boundless joy,
							love, and wonder. At our hospital, we are honored to be a part of this incredible
							journey, as we recognize that a newborn child is the biggest gift bestowed upon parents.
						</p>
					</div>


					<div class="col  col-xl-3 col-lg-5 col-sm-12  m-auto d-lg-block d-md-flex d-sm-flex ">
						<img src="./image/pregant-3.jpg" class="img-fluid " alt="">
						<img src="./image/pregnant-1.jpg" alt="img-fluid">
					</div>


				</div>



				<div class="row  col-12">
					<p id="third-box">Our skilled medical professionals are committed to providing the highest standard of care
						to ensure the health and well-being of both the newborn and the parent. We offer
						state-of-the-art facilities, advanced medical technology, and a nurturing environment
						that prioritizes the safety and comfort of your little one.
					</p>


				</div>


			</div>


			<!--     third box -->

			<div class="row g-0 m-auto" >
				<div class="row">

					<div class="col-lg-7 col-sm-12">
						<div class="card fs-4 text-capitalize">
							Child is gods gift
						</div>

						<div class=" mt-2 col-md-10 ">
							<video src="https://www.shutterstock.com/shutterstock/videos/1044436999/preview/stock-footage-male-pediatrician-hold-stethoscope-exam-cute-little-child-girl-patient-visit-doctor-with-mom.webm" class="p-auto m-auto" style="width:80%" controls></video>
						</div>

						<p> Welcome to Future Health, where we believe that children are truly a gift from God. We
							understand the profound joy and wonder that children bring into our lives. At our
							hospital, we celebrate the blessings of childhood and are dedicated to providing
							exceptional care for our youngest patients.</p>

						<p>We recognize that each child is unique and precious, with their own set of dreams,
							talents, and potential. </p>

					</div>


					<div class=" col-xl-3 col-lg-5 col-sm-12  m-auto">
						<img src="./image/child-1.png" class="img-fluid" alt="">
						<img src="./image/child-2.png" class="img-fluid" alt="">
					</div>

				</div>
				<div class="row col-12">
					<p id="fourth-box">At Future Health, we are committed to creating an environment that nurtures and protects the
						well-being of every child who walks through our doors. Our team of highly skilled healthcare
						professionals is dedicated to providing compassionate and specialized care tailored to the
						unique needs of children.
					</p>

				</div>

			</div>
		</div>
	</div>



	<!-- forth box  -->



	<div class="row g-0 m-auto" >
		<div class="row ">
			<div class="  col-xl-3 col-lg-5 col-sm-12  m-auto ">
				<img src="./image/whilechair-1.png" class="img-fluid " alt="">
				<img src="./image/whilechair-2.png" class="img-fluid " alt="">
			</div>



			<div class="col-lg-7 col-sm-12 ">
				<div class="card fs-4">
					<p class="text-capitalize text-center"> trust and belive is the biggest power of human</p>
				</div>

				<div class=" mt-2 col-md-10  mx-auto me-2 ">
					<video src="https://www.shutterstock.com/shutterstock/videos/1039338371/preview/stock-footage-young-woman-nurse-caregiver-talk-help-disabled-handicapped-old-grandma-patient-sit-on-wheelchair-at.webm"class="p-auto m-auto" style="width:80%" controls></video>
				</div>

				<p> Welcome to [Hospital Name], where we believe that trust and belief are the pillars of human
					strength. We understand that in times of illness or injury, placing your trust in healthcare
					professionals and believing in the power of healing are essential for your well-being.
					Trust is the foundation of our relationship with our patients, and we are honored to be
					entrusted with your care. We strive to earn your trust by providing exceptional medical
					expertise, compassionate care, and a commitment to your overall well-being. From the moment you
					step through our doors, we work diligently to create an environment where you feel safe,
					supported, and confident in the care you receive.
				</p>

			</div>
			<div class="row col-12">
				<p id="fifth-box">Belief is a powerful force that can inspire hope, foster resilience, and drive positive outcomes.
					We firmly believe in the potential for healing and recovery, and we encourage our patients to
					embrace a positive mindset along their healthcare journey. By instilling belief in our patients
					and their families, we empower them to actively participate in their own healing process.
				</p>


			</div>

		</div>
	</div>

	<!--  fifth box  -->


	<!--     fifth  box -->
	<div class="row g-0 m-auto " >
		<div class="row">

			<div class="col-lg-7 col-sm-12">
				<div class="card fs-4 text-capitalize">
					odage know like a newborn baby
				</div>

				<div class=" mt-2 col-md-10  m-auto ">
					<video src="./image/026157248_main_xxl.mp4" width="400" controls></video>
				</div>

				<p> Welcome to [Hospital Name], where we understand that old age is akin to being a newborn baby
					once again. We recognize the unique needs and challenges that come with the golden years of
					life. Just as newborns require gentle care, support, and attention, so do our elderly
					patients who deserve the utmost respect, compassion, and specialized care.</p>


				<p>We understand that aging can bring about a variety of physical, emotional, and cognitive
					changes. Our goal is to enhance the quality of life for our elderly patients by addressing
					their individual needs, promoting independence, and supporting their overall well-being.
					Through personalized care plans, we strive to optimize health, manage chronic conditions,
					and enhance the overall comfort and happiness of our older patients.</p>
			</div>


			<div class="  col-xl-3 col-lg-5 col-sm-12  m-auto">
				<img src="./image/oldage2.png" class="img-fluid" alt="">
				<img src="./image/oldage1.png" class="img-fluid" alt="">
			</div>

		</div>
		<div class="row col-12" id="blog">
			<p id="blog1">Just like newborns, older adults require extra care and attention to ensure their well-being. Our
				team of dedicated healthcare professionals, including geriatric specialists, nurses, and support
				staff, is well-versed in providing holistic care that focuses on the unique requirements of our
				older patients.
			</p>

		</div>

	</div>
	</div>
	</div>

	<!-- end environment content  -->

	<!-- start with blog  -->


	<div class="container-fluid mt-3" >


		<h1 class="card text-uppercase text-center container fs-5 p-2">future health blog's</h1>
		<!-- blog one -->
		<div class="row">
			<div class="row">
				<div class=" col-md-6 col-sm-12 p-3">
					<div class="card p-2 mt-3  "><strong> ESOPHAGEAL CANCER: CAUSES, SYMPTOMS, AND TREATMENT OPTIONS FOR
							A CANCER OF THE ESOPHAGUS</strong>
						<small class="text-center"> creating by <strong>Future Health</strong> | 29 may 2023 </small>
					</div>
					<img src="./image/Esophageal-cancer.jpeg " class="img-fluid mt-5" style="width:70%;" alt="Esophageal-cancer.jpeg">



				</div>

				<div class="col-md-6 col-sm-12">

					<strong class="text-dark"> Quick Link __________________</strong>
					<a class="d-block  mt-1" href="./BookAppointment.html">Book Appointment</a>
					<a class="d-block " href="./doceequery.html">Feedback</a>
					<a class="d-block " href="./find_mydoc.html">Find My Doctor</a>
					<a class="d-block " href="./doceequery.html">Enquiry</a>

					<p> Esophageal cancer is a serious condition that affects the esophagus, the muscular tube that
						carries
						food from the throat to the stomach. It is a relatively uncommon form of cancer but has a high
						mortality rate. Understanding the causes, recognizing the symptoms, and exploring the available
						treatment options are crucial for early detection and effective management of esophageal cancer.
					</p>
					<p>
						Causes:
						The exact causes of esophageal cancer are not fully understood. However, several risk factors
						have
						been identified, including:

						Chronic Gastroesophageal Reflux Disease (GERD): Frequent and prolonged acid reflux can lead to a
						condition called Barrett's esophagus, which increases the risk of developing esophageal cancer.

						Tobacco and Alcohol Use: Smoking and excessive alcohol consumption are significant risk factors
						for
						esophageal cancer. The combination of both habits significantly raises the risk.
					</p>
				</div>
			</div>
			<div class="row">

				<p>
					<strong> Symptoms:</strong>
					Esophageal cancer often presents symptoms in the later stages when it becomes more difficult to
					treat.
					Some common signs and symptoms include:

					Difficulty Swallowing (Dysphagia): This is one of the most common symptoms of esophageal cancer. It
					may
					start with difficulty swallowing solid foods and progress to difficulty swallowing liquids as the
					disease advances.

				<p> 1)Unexplained Weight Loss: Significant weight loss without any apparent cause may be a sign of
					esophageal cancer.</p>

				<p> 2)Chest Pain or Burning Sensation: Persistent chest pain or discomfort, often resembling heartburn,
					can
					occur.</p>

				<p  id="blog2">3) Chronic Cough: A persistent cough, sometimes accompanied by blood in the sputum, may indicate
					esophageal cancer.</p>
				</p>
			</div>
		</div>
		<!-- blog on is ended  -->
		<!-- blog sencond -->

		<div class="row">
			<div class="row">
				<div class="col p-3">
					<div class="card p-2 mt-3  "> <strong> BEYOND THE BEAT: A COMPREHENSIVE GUIDE TO UNDERSTANDING,
							DIAGNOSING, AND MANAGING HEART PALPITATIONS</strong>
						<small class="text-center"> creating by <strong>Future Health</strong> | 28 apr 2023 </small>
					</div>
					<img src="./image/Heart-palpitations.jpeg" class="img-fluid mt-5" style="width:70%;" alt="Esophageal-cancer.jpeg">

					<p class="mt-5">
						<strong>
							Overview
						</strong>
						Heart palpitation is a prevalent condition affecting millions worldwide. A fluttering or
						hammering sensation in the chest that is characteristic of them is occasionally accompanied by
						dizziness, shortness of breath, or chest pain.
					</p>

				</div>

				<div class="col">

					<strong class="text-dark"> Quick Link __________________</strong>
					<a class="d-block  mt-1" href="./BookAppointment.html">Book Appointment</a>
					<a class="d-block " href="./doceequery.html">Feedback</a>
					<a class="d-block " href="./find_mydoc.html">Find My Doctor</a>
					<a class="d-block " href="./doceequery.html">Enquiry</a>

					<p>Heart palpitations can be a frightening experience, causing anxiety and concern for many
						individuals. While often harmless, understanding the causes, recognizing the symptoms, and
						learning about management techniques are essential for peace of mind and overall cardiovascular
						health. In this article, we will delve into the world of heart palpitations, providing you with
						a comprehensive guide to help you better understand, diagnose, and manage this common
						phenomenon.
					</p>
					<p>
						<strong> Understanding Heart Palpitations:</strong>
						Heart palpitations refer to the awareness of one's own heartbeat, which may feel rapid,
						pounding, irregular, or fluttering.

					<p>1) Anxiety and Stress: Emotional stress, anxiety, and panic attacks can trigger heart
						palpitations.</p>

					<p>2) Caffeine and Stimulants: Excessive consumption of caffeine, energy drinks, or certain
						medications containing stimulants can lead to palpitations.</p>

					<p >3) Physical Exertion: Intense exercise or activities that cause an adrenaline rush can
						temporarily increase heart rate and lead to palpitations.</p>
					</p>
				</div>
			</div>
			<div class="row">

				<p>
					<strong>
						Symptoms of Heart Palpitations
					</strong>
				<p> A fluttering or pounding sensation in the chest is the main sign of heart palpitations.</p>

				Other signs can include:

				<span id="blog3"> 1) Unsteadiness or faintness</span>
				<span> 2) Shortness of breath</span>
				<span> 3) Chest pain or discomfort</span>
				<span> 4) Sweating</span>
				<span> 5) Fainting or near-fainting</span>
				</p>
			</div>
		</div>

		<!-- second bog is ended  -->
		<!-- Third blog  -->

		<div class="row">
			<div class="row">
				<div class="col p-3  ">
					<div class="card p-2 mt-3  "> <strong> GASTROENTERITIS DEMYSTIFIED – SYMPTOMS, SIGNS, CAUSES AND
							TREATMENT OPTIONS</strong>
						<small class="text-center"> creating by <strong>Future Health</strong> | 2 feb 2023 </small>
					</div>
					<img src="./image/Gastroenteritis-Demystified.jpeg" style="width:70%;" class="img-fluid mt-5"
						alt="Esophageal-cancer.jpeg">

					<p class="mt-5">
						<strong>
							Overview
						</strong>
						Gastroenteritis or stomach flu is a common illness affecting the digestive system. It is usually
						caused by viral or bacterial infections, with certain types of food, such as processed or
						undercooked food contributing to the development of the illness. Unfortunately, millions of
						people worldwide experience this extremely contagious virus each year.
					</p>

				</div>

				<div class="col">

					<strong class="text-dark"> Quick Link __________________</strong>
					<a class="d-block  mt-1" href="./BookAppointment.html">Book Appointment</a>
					<a class="d-block " href="./doceequery.html">Feedback</a>
					<a class="d-block " href="./find_mydoc.html">Find My Doctor</a>
					<a class="d-block " href="./doceequery.html">Enquiry</a>

					<p mt-1>Gastroenteritis, commonly known as the stomach flu, is a prevalent condition that affects
						millions of people worldwide. It is characterized by inflammation of the gastrointestinal tract,
						leading to symptoms such as diarrhea, vomiting, and abdominal pain. In this article, we will
						demystify gastroenteritis by exploring its symptoms, signs, causes, and available treatment
						options, helping you better understand and manage this often uncomfortable condition.
					</p>
					<p>
						<strong>
							Understanding Gastroenteritis:
						</strong>
						Gastroenteritis refers to the inflammation of the stomach and intestines, usually caused by an
						infection. It can be caused by various viruses, bacteria, or parasites. The most common culprits
						include norovirus, rotavirus, salmonella, and E. coli. Gastroenteritis can be highly contagious
						and spreads through contaminated food, water, or contact with infected individuals.
					</p>
				</div>
			</div>
			<div class="row">

				<p>
					<strong>
						Symptoms and Signs:
					</strong>
					The symptoms of gastroenteritis can vary in severity, but they typically manifest within one to
					three days after exposure to the causative agent. Common signs and symptoms include:

					<span class="d-block">1) Diarrhea: Loose, watery stools that may be accompanied by mucus or
						blood.</span>

					<span class="d-block">2) Nausea and Vomiting: The feeling of queasiness and the urge to vomit, which
						can provide
						temporary relief.</span>

					<span class="d-block">3) Abdominal Pain and Cramping: Sharp or cramp-like pain in the abdominal
						region.</span>

					<span class="d-block" id="blog4">4) Fever and Chills: A mild to moderate fever, often accompanied by chills and
						body
						aches.</span>

					<span class="d-block">5) Dehydration: Excessive fluid loss from diarrhea and vomiting can lead to
						dehydration.</span>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="row">
				<div class="col p-3  ">
					<div class="card p-2 mt-3  "> <strong> GASTROENTERITIS DEMYSTIFIED – SYMPTOMS, SIGNS, CAUSES AND
							TREATMENT OPTIONS</strong>
						<small class="text-center"> creating by <strong>Future Health</strong> | 2 feb 2023 </small>
					</div>
					<img src="./image/Hydrocephalus.jpeg" class="img-fluid mt-5" style="width:70%;" alt="Esophageal-cancer.jpeg">

					<p class="mt-5">
						<strong>
							Overview
						</strong>
						Hydrocephalus is a neurological disorder in which the build-up of cerebrospinal fluid flow in
						the ventricles of the Brain increases than the normal scale. As a result, it pressurises the
						Brain’s ventricles, causing multiple other brain disorders. The brain disorder is usually
						observed in infants or people above 60 years of age group.
					</p>

				</div>

				<div class="col">

					<strong class="text-dark"> Quick Link __________________</strong>
					<a class="d-block  mt-1" href="./BookAppointment.html">Book Appointment</a>
					<a class="d-block " href="./doceequery.html">Feedback</a>
					<a class="d-block " href="./find_mydoc.html">Find My Doctor</a>
					<a class="d-block " href="./doceequery.html">Enquiry</a>

					<p mt-1>
						Hydrocephalus is a neurological condition characterized by the accumulation of cerebrospinal
						fluid (CSF) within the brain. This buildup of fluid can lead to increased pressure and swelling,
						potentially causing various symptoms and complications. In this article, we will explore the
						different types of hydrocephalus, its symptoms and signs, possible causes, and available
						treatment options to provide a better understanding of this condition.
					</p>
					<p>
						<strong>
							Types of Hydrocephalus:
						</strong>
						There are several types of hydrocephalus, each classified based on its underlying cause and
						location within the brain:

						Congenital Hydrocephalus: This type is present at birth and often results from abnormalities in
						brain development or genetic factors.

						Acquired Hydrocephalus: Acquired hydrocephalus can develop later in life due to various factors
						such as head trauma, brain tumors, infections, or bleeding in the brain.

						Normal Pressure Hydrocephalus (NPH): NPH is primarily seen in older adults and is characterized
						by enlarged ventricles in the brain without significant increase in pressure. It often presents
						with symptoms such as difficulty walking, urinary incontinence, and cognitive decline.
					</p>
				</div>
			</div>
			<div class="row">

				<p>
					<strong>
						Symptoms and Signs:
					</strong>
					The symptoms and signs of hydrocephalus can vary depending on the age of onset and the rate of fluid
					accumulation. Common symptoms include:
					<span class="d-block">
						1) Enlarged Head: In infants, an abnormally large head size (macrocephaly) may be
						noticeable.</span>
					<span class="d-block">
						2) Headache: Individuals with hydrocephalus may experience persistent headaches, often worsening
						in the morning or with changes in position.</span>
					<span class="d-block">
						3) Nausea and Vomiting: Nausea and vomiting, particularly in the morning, can be indicative of
						increased intracranial pressure.</span>
					<span class="d-block" id="news">
						4) Vision Problems: Blurred or double vision, as well as difficulty focusing, can occur due to
						optic nerve compression.</span>
				</p>
			</div>
		</div>


	</div>

	<!-- forth blog ended  -->

	<!-- news and social media -->
	<div class="container" >
		<div class="  owl-carousel owl-theme">



			<div class=" item card m-auto" style="width:13rem;">
				<div class="card" style="width: 18rem;">
					<img src="./image/Dissolvablle stent_C9.jpeg" class="card-img-top " alt="...">
					<div class="card-body">
						<h5 class="card-title"> FH INNEWS Dissolvable stent used first time in CG</h5>
						<a href="./image/Dissolvablle stent_C9.jpeg" class="btn btn-primary mt-4">Read More</a>
					</div>
				</div>
			</div>


			<div class=" item card m-auto" style="width:13rem;">
				<div class="card" style="width: 18rem;">
					<img src="./image/Bone & Joint  day_2022_Dr Rajesh Singh_BNMH.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"> FH INNEWS 66-year-old patient gets new lease of life through TAVI </h5>
						<a href="./image/Bone & Joint  day_2022_Dr Rajesh Singh_BNMH.jpg" class="btn btn-primary ">Read
							More</a>
					</div>
				</div>
			</div>

			<div class=" item card m-auto" style="width:13rem;">
				<div class="card" style="width: 18rem;">
					<img src="./image/Nov_24_ Bureau Sandesh_pg 02_ Jaipur.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"> FH INNEWS Bone and Joint day 2022</h5>
						<a href="./image/Nov_24_ Bureau Sandesh_pg 02_ Jaipur.jpg" class="btn btn-primary mt-3">Read
							More</a>
					</div>
				</div>
			</div>

			<div class=" item card m-auto" style="width:13rem;">
				<div class="card" style="width: 18rem;">
					<img src="./image/PepperyLateAmurminnow-size_restricted.gif" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"> FH INNEWS ठंड के मौसम में क्यों बढ़ता है हार्ट अटैक का खतरा ? कैसे रखें
							अपना ख्याल</h5>
						<a href="./image/Authored article _Dr Devendra Shrimal_0.jpeg" class="btn btn-primary">Read
							More</a>
					</div>
				</div>
			</div>
			<div class=" item card m-auto" style="width:13rem;">
				<div class="card" style="width: 18rem;">
					<img src="./image/Prabhat Khabar-17.3.23-Pg_03.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"> FH INNEWSMCR Report of RTIICS heart Tranplant The Echo of India-22.3.23
						</h5>
						<a href="./image/Prabhat Khabar-17.3.23-Pg_03.jpg" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>


			<div class=" item card m-auto" style="width:13rem;">
				<div class="card" style="width: 18rem;">
					<img src="./image/news5.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"> FH INNEWS WHD Prabhat Khabar 08.04.2023</h5>

						<a href="./image/news5.png" class="btn btn-primary mt-3">Read More</a>
					</div>
				</div>
			</div>

			<div class=" item card m-auto" style="width:13rem;">
				<div class="card" style="width: 18rem;">
					<img src="./image/news6.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">FH INNEWS Performs Eastern India's first Mitraclip Procedure - Sambad
							Prabaha</h5>
						<a href="./image/news6.png" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>

			<div class=" item card m-auto" style="width:13rem;">
				<div class="card" style="width: 18rem;">
					<img src="./image/news7.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">FH INNEWS Performs Eastern India's first Mitraclip Procedure - Arthik
							Lipi</h5>

						<a href="./image/news7.png" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class=" item card m-auto" style="width:13rem;">
				<div class="card" style="width: 18rem;">
					<img src="./image/news8.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"> FH INNEWS The doctors at Rabindranath Tagore Institute give a gentleman
							a new lease on life</h5>

						<a href="./image/news8.png" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>

		</div>
	</div>


<script>
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	})
</script>


@endsection