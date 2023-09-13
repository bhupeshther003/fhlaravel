
@extends('layouts.app')
	
@section('content')
 
<style>
	a {
			text-decoration: none;
			color: black;
		}

		.navbar-brand {
			width: 10%;
		}

		.navbar a:hover {
			border-width: 0px 0px 1px 0px;
			border-color: aqua;
		}

		.carousel-caption {
			position: absolute;
			bottom: 0px;
		}

		.col {
			margin: 1%;
		}

		.row {
			width: 90%;
			margin: auto;
		}

		.container >.row> .col> .card {
			border: 1px solid rgb(194, 192, 192);

		}

		.col-md-4 {
			margin-top: auto;
			margin-bottom: auto;
		}

		.img-fluid {
			width: 100%;
			height: auto;
		}

		.envir {
			border-radius: 60px;
			border: 1px solid rgb(122, 118, 118);
			margin-top: 5%;
		}

		.envir>.col-lg-4>img {
			border-radius: 30px;
			border: 2px solid rgb(212, 212, 212);
		}


		.blog {
			border-radius: 20px;

		}

		a {
			text-decoration: none;
			color: black;
		}

		.rows { 
	opacity: 0; /* use for the scrolling effect*/ 
	transform: translate(0, 39vh);
	transition: all 2s;
}

.active {
	opacity: 1;
	transform: translate(0);
}
	</style>




	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
				aria-label="Slide 4"></button>
		</div>
		
		<div class="carousel-inner" style="height:500px">
			<div class="carousel-item position-absolute active ">
				<img src="{{ asset('./image/scoll2.jpeg') }}"   alt="...">
				<div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
                    <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:20%; "  alt="">
                </div>
			
			</div>
			<div class="carousel-item position-absolute">
				<img src="{{ asset('./image/sroll.jpeg') }}"   alt="...">
				<div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
                    <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:20%; "  alt="">
                </div>
			</div>
			<div class="carousel-item position-absolute">
				<img src="{{ asset('./image/scoll1.jpeg') }}"   alt="...">
				<div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
                    <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:20%; "  alt="">
                </div>
			</div>
			<div class="carousel-item position-absolute">
				<img src="./image/scroll4.jpg"  alt="..." >
				<div class="position-absolute bottom-0 start-0 ps-md-5 ps-sm-3 pb-md-5 pb-sm-1">
                    <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:20%; "  alt="">
                </div>
			</div>

		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>



	<!-- columns -->
	<div class="container-fluid m-auto mb-5  ">
		<div class="row   m-auto">
			<div class=" col-lg-3 col-md-4 col-sm-12 m-auto  mt-4 p-0 bg-white ">
				<div class="card">


					<img src=" {{ asset('image/child-2.jpeg') }}" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Neonatal Care  </h5>
						<p class="card-text">
							The best of care your
							child deserves</p>
						<a href="{{url('child')}}" class=" btn btn-primary" target="_blank"
							rel="noopener noreferrer">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 m-auto  bg-white m-auto  mt-4  p-0">
				<div class="card">
					<img src=" {{ asset('image/speci-main.jpg') }}" class="card-img-top" alt="...">

					<div class="card-body  text-center">
						<h5 class="card-title">Speciality & Procedure</h5>
						<p class="card-text">
							Our Special Team Always available for you</p>
						<a href="{{url('specility')}}" class=" btn btn-primary" target="_blank"
							rel="noopener noreferrer">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-3  col-sm-12  m-auto bg-white m-auto  mt-4  p-0">
				<div class="card">
					<img src="./image/scroll2.png" class="card-img-top" alt="...">

					<div class="card-body text-center">
						<h5 class="card-title ">Carrier with Future Health </h5>
						<p class="card-text">
							At Future Hospitals our care
							doesn’t just stop here</p>
						<a href="{{url('carrier')}}" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>






	<!--  health care  of the future health  -->

	<div class="container mt-auto ">
		<p class="text-center  card-header fw-bold fs-2 mb-5">
			FH Health care
		</p>
		<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">

			<div class="carousel-inner" style="height:200px;">

				<div class="carousel-item active ">
					<div class="row  ">
						<div class="col">
							<div class="row envir" style="max-width: 540px;">
								<div class="col-lg-4 p-2 m-auto ">
									<img src="{{ asset('./image/smile1.jpeg') }}" class="img-fluid    " alt="...">
								</div>
								<div class="col-lg-8 envir_info">
									<div class="card-body">
										<a href="{{url('/enviorment#first')}}" target="_blank" rel="noopener noreferrer">
											<h5 class="card-title text-center text  "> Your Smile Encourage our Team</h5>
											<p class="card-text d-md-block d-none text ">This is a wider card with supporting
												text below.</p>
										</a>
									</div>
								</div>

							</div>

						</div>
						<div class="col">
							<div class="row  envir" style="max-width: 540px;">
								<div class="col-lg-4   p-2 m-auto">
									<img src="./image/pregant-3.webp" class="img-fluid " alt="...">
								</div>
								<div class="col-lg-8  envir_info">
									<div class="card-body">
										<a href="{{url('enviorment#second-box')}}" target="_blank" rel="noopener noreferrer">
											<h5 class="card-title text-center p-1 text ">God's Gift</h5>
											<p class="card-text  d-md-block d-none m-1 p-1 text ">New born Bady is the gods
												gives
												amazing gift to his parent's.
											</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<div class="row  ">
						<div class="col">
							<div class="row envir" style="max-width: 540px;">
								<div class="col-lg-4 p-2 m-auto ">
									<img src="./image/child-3.jpeg" class="img-fluid    " alt="...">
								</div>
								<div class="col-lg-8 envir_info">
									<div class="card-body">
										<a href="{{url('enviorment#third-box')}}" target="_blank" rel="noopener noreferrer">
											<h5 class="card-title text-center text-capitalize p-1 text "> child age is
												beautiful
												travel</h5>
											<p class="card-text d-md-block d-none p-1 text ">child age is one of the beautiful
												part of our life.</p>
										</a>
									</div>
								</div>

							</div>

						</div>
						<div class="col">
							<div class="row envir" style="max-width: 540px;">
								<div class="col-lg-4   p-2 m-auto">
									<img src="./image/whilechair-2.png" class="img-fluid " alt="...">
								</div>
								<div class="col-lg-8  envir_info">
									<div class="card-body">
										<a href="{{url('enviorment#fourth-box')}}" target="_blank" rel="noopener noreferrer">
											<h5 class="card-title text-center text  ">Belive and trust </h5>
											<p class="card-text  d-md-block d-none text  "> Human's best power is there trust
												, belive and self-confidence. They are do it enything

											</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="carousel-item">

					<div class="row  ">
						<div class="col">
							<div class="row envir" style="max-width: 540px;">
								<div class="col-lg-4 p-2 m-auto ">
									<img src="./image/disabled-patient-on-wheelchair-visiting-260nw-1033650547.webp"
										class="img-fluid    " alt="...">
								</div>
								<div class="col-lg-8 envir_info">
									<div class="card-body">
										<a href="{{url('enviorment#fourth-box')}}" target="_blank" rel="noopener noreferrer">
											<h5 class="card-title text-center text "> Belive and trust</h5>
											<p class="card-text d-md-block d-none text ">Human's best power is there trust ,
												belive and self-confidence. They are do it enything
											</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="row envir" style="max-width: 540px;">
								<div class="col-lg-4   p-2 m-auto">
									<img src="./image/oldage2.png" class="img-fluid " alt="...">
								</div>
								<div class="col-lg-8  envir_info">
									<div class="card-body">
										<a href="{{url('enviorment#fifth-box')}}" target="_blank" rel="noopener noreferrer">
											<h5 class="card-title text-center text-capitalize m-1 p-1 text ">old age like a
												child
												age</h5>
											<p class="card-text  d-md-block d-none m-1 p-1 text "> old age people are
												behaviour
												like small child's
											</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
				<span class="visually-hidden ">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
				data-bs-slide="next">
				<span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>




	<!-- future health care  excellence -->


	<div class="container mt-5 mb-5">

		<div class="row ">
			<h2 class="card-title text-center">
				Clinical Excellence
			</h2>
			<div class="col-4">

				<img src="./image/excellence.jpg" class="img-fluid" alt="Hospitals">
				<h4 class="text-center">2.5 M+ </h4>
				<p class="text-uppercase text-center fw-bold"> Patient treatment</p>

			</div>
			<div class="col-4 col-xs-4">
				<img src="./image/excellence2.jpg" class='img-fluid  ' alt="Hospitals in total india">
				<h4 class="text-center">22 </h4>
				<p class="text-uppercase fw-bold  text-center fs-md-1"> State of the are Hospitals </p>


			</div>
			<div class="col-4">
				<img src="./image/excellence3.jpg" class="img-fluid" alt="location & pattener">
				<h4 class="text-center">16,000+ </h4>
				<p id="blogs" class="text-center text-uppercase fw-bold">Associates</p>
			</div>

		</div>

	</div>





	</div>






	<!--  Blog's and other's'  of the future health  -->

	<div class="container text-center mt-3 mb-3">
		<h2 class="card-title">Blog's</h2>



		<div class="row  m-auto">
			<div class="col ">
				<div class="card mb-3 blog" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="./image/Esophageal-cancer.jpeg "
								class="img-fluid rounded-start border border-dark" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body"><a href="{{url('enviorment#blog1')}}">
									<h5 class="text-secondary">ESOPHAGEAL CANCER</h5>
									<p class="text-secondary">Esophageal cancer is a serious condition that affects the
										esophagus
										<span class=" d-lg-inline-block d-md-none">the muscular tube that carries food
											from the throat to the stomach.</span>
									</p>
									<p class="card-text float-end"><small class="text-muted float-end">Last updated 1
											month
											ago</small></p>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card mb-3 blog" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="./image/Heart-palpitations.jpeg"
								class="img-fluid rounded-start border border-dark" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<a href="{{url('enviorment#blog2')}}">
									<h5 class="text-secondary">BEYOND THE BEAT</h5>
									<p class="text-secondary ">Heart palpitation is a prevalent condition affecting
										millions worldwide.
										<span class="text-secondary"> , causing anxiety and concern for many
											individuals.</span>
									</p>
									<p class="card-text float-end"><small class="text-muted float-end">Last updated 15
											min
											ago

										</small></p>
								</a>

							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
		<div class="row  m-auto ">
			<div class="col ">
				<div class="card mb-3 blog" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="./image/Gastroenteritis-Demystified.jpeg"
								class="img-fluid rounded-start border border-dark" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body"><a href="{{url('enviorment#blog3')}}">
									<h5 class="text-secondary">GASTROENTERITIS DEMYSTIFIED </h5>
									<p class="text-secondary"> Gastroenteritis or stomach flu is a common illness
										affecting the digestive system
										<span class="text-secondary">Gastroenteritis, commonly known as the stomach
											flu</span>
									</p>
									<p class="card-text float-end"><small class="text-muted float-end">Last updated 4
											week
											ago</small></p>
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card mb-3 blog" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="./image/Hydrocephalus.jpeg" class="img-fluid rounded-start border border-dark"
								alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body"><a href="{{url('enviorment#blog4')}}">
									<h5 class="text-secondary">HYDROCEPHALUS</h5>
									<p class="text-secondary">Hydrocephalus is a neurological disorder in which the
										build-up of cerebrospinal fluid flow
										<span class="text-secondary"> condition characterized by the accumulation of
											cerebrospinal fluid (CSF) within the brain. </span>
									</p>
									<p class="card-text float-end"><small class="text-muted float-end">Last updated 1
											year
											ago

										</small></p>
								</a>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="d-block ">
			<button class="  btn btn-outline-success d-md-none d-sm-block  m-auto">
				<a href="{{url('enviorment#blog')}}"></a>
				Read More >></button>
		</div>
	</div>
	</div>
	</div>



	<!-- news and event  of future hospital  -->



	<section  class="about-section-padding  ">
		<div class="container  ">
			<div class="col-lg-8 col-md-12 col-12 pe-lg-5 mt-md-5 ">
				<div class="about-text">
					<h2>News&Events</h2>
					<p>Read More About Future Health's Events, Programs, and Coverage in the News</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12">
					<div class="about-img">
						<img src="./image/news5.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-12 ps-lg-auto mt-md-5">
					<div class="about-text">
						<h5>‘Bentall Surgery’ performed successfully at Future Health Hospital.</h5>
						<p><a href="{{url('enviorment#news')}}" style="color: black;" class="btn btn-info">LEARN MORE</a></p>

						<h5>66-year-old patient gets new lease of life through TAVI at Future Health Hospital
						</h5>
						<p><a href="{{url('enviorment#news')}}" style="color: black;" class="btn btn-info">LEARN MORE</a></p>

					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-12 ps-lg-auto mt-md-5">
					<div class="about-text">


					</div>
				</div>
			</div>
		</div>
	</section>





	<section  class="about-section-padding   mt-5 ">
		<div class="container  ">

			<div class="row">
				<div class="col-lg-6 col-md-12 col-12">
					<div class="about-img">
						<img src="./image/download (1).jpeg" alt="" class="img-fluid rounded-start">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-12 ps-lg-auto mt-md-5 p-4 "
					style="border-bottom: 1px solid lightseagreen; ">
					<div class="about-text">
						<h5>CSR at Future Health Hospital</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam deserunt aperiam itaque
							adipisci, ea ut rerum consequatur officia esse nesciunt magni error asperiores architecto
							aliquam nulla cumque, cupiditate impedit ullam?</p>
						<a href="{{url('child')}}"><button class="btn btn-info text-dark mt-5 ">LEARN
								MORE</button></a>
					</div>
				</div>

				<div class="col-lg-6 col-md-12 col-12 ps-lg-auto mt-md-5 p-4">
					<div class="about-text">
						<h5>Baby's Miracale journey hope at Future Health Hospital</h5>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate esse vel quam temporibus
							eligendi ipsa, aperiam illo ut tempora, adipisci tempore nemo vitae. Debitis assumenda
							consequatur veniam tenetur dolorem cupiditate.</p>

						<a href="{{url('child')}}"><button class="btn btn-info text-dark mt-5">LEARN
								MORE</button></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-12">
					<div class="about-img">
						<img src="./image/child-back.jpg" alt="" class="card-img-top">
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection