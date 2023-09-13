@extends('layouts.app')
@section('content')
	<style>
		body{
      font-family: Arial, Helvetica, sans-serif;
    }

	
		input,
		 {
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

		.row>.col-xl-6>img {
			width: 100%;
			height: auto;
		}

		.row h4>img {
			width: 50px;
		}



	</style>

<script src="{{ 'js/javascript.js' }}"></script>
       
</head>

<body>
	@if (Session::has('success'))
	<script>
			alert(' {{ Session::get('success') }}');
	</script>
@endif



	<div class="container text-center ">
		<div class="card-header  m-2 fs-3 bg-info">
			Book Your Appointment
		</div>
	</div>



	<div class="container-fluid">

		<div class="row  ">
			<div class="col-xl-6  col-lg-6 col-md-6 col-sm-12">
				<img src="./image/appoint-2.webp" class="img-fluid" alt="">
			</div>
			<div class="col-xl-6  col-lg-6 col-md-6 col-sm-12">

			<form action="/apointbook" method="POST" >
@csrf
				<div class="card-header text-center fs-4 fw-bolder">Appointment</div>

				<label for="">Name</label><span class='text-danger'>*</span>
				<input type="text" name="name" class="form-control " placeholder="Enter Your Full Name" value={{old('name')}}>
				
				@error('name')
				<p class='text-danger'>	{{$message}}</p>
				@enderror
			
				<label for="">Email</label><span class='text-danger'>*</span>
				<input type="email" name="email" class="form-control" placeholder="Enter Your Email-ID" value={{old('email')}} >
				@error('email')
				<p class='text-danger'>	{{$message}}</p>
				@enderror

				<div class="row "  style="width:100%" >
					<div class="col-6  p-0 pe-2">
						<label for="">Age</label>
						<span class='text-danger'>*</span>
						<input type="tel" class="form-control" name="age" id="age" maxlenght="2"
							placeholder="Enter Your Age"  value={{old('age')}}>
							@error('age')
							<p class='text-danger'>	{{$message}}</p>
							@enderror
					</div>

					<div class=" col-6 ps-2 p-0" >
						<label for="">Mobile No.</label>
						<input type="number" class="form-control" name='phone' placeholder="Enter Your Mobile Number" value={{old('phone')}}>
						@error('phone')
							<p class='text-danger'>	{{$message}}</p>
							@enderror
					</div>
				</div>
				<div class="row " style="width:100%">

					<div class="col  p-0 pe-2 m-auto">

						<label for="date">Date</label>
						<input type="date"  class="form-control" name="dates" id="date" value={{old('dates')}}>
						 @error('dates')
						<p class='text-danger'>	{{$message}}</p>
						@enderror
					</div> 
					<div class="col  p-0 pe-2 m-auto">
						<label for="time">Time</label>
						<input type="time"   class="form-control" name='times'  id="time" value={{old('times')}}>
						{{-- @error('date')
							<p class='text-danger'>	{{$message}}</p>
							@enderror --}}
					</div>
				</div>
				<div class="row mt-1  m-0" style="width:100%">
					<h6>Address Details</h6>
					<div class="col  p-0 pe-2 m-auto">
						<input type="text"  class="form-control" name="area" id="add" placeholder="Enter Your Area" value={{old('area')}}>
						@error('area')
							<p class='text-danger'>	{{$message}}</p>
							@enderror
					</div>
					<div class="col  p-0 pe-2  m-auto">
						<input type="text"  class="form-control" name="city" id="add" placeholder="Enter Your City " value={{old('city')}}>
						@error('city')
							<p class='text-danger'>	{{$message}}</p>
							@enderror
					</div>
				</div>
				<div class="row m-0 mt-1 mb-1" style="width:100%">
					<div class="col   p-0 pe-2 m-auto">
						<input type="text"  class="form-control" name="state" id="add" placeholder="Enter Your State " value={{old('state')}}>
						@error('state')
							<p class='text-danger'>	{{$message}}</p>
							@enderror
					</div>
					<div class="col  p-0 pe-2  m-auto">
						<input type="text"  class="form-control" name="pincode" id="add" placeholder="Enter Your Pincode" value={{old('pincode')}}>
						@error('pincode')
							<p class='text-danger'>	{{$message}}</p>
							@enderror
					</div>
				</div>
				<div class="row">
					<button value="sumbit" id="appsub" class="btn btn-info"><span>>></span> Book Appointment</button>
				</div>
			</form>

			</div>
		</div>
	</div>


	<script>


	</script>
	

	<div class="container text-center  mt-5">
		<div class="card-header fw-bold  m-2 fs-3 bg-info">
			Video Consultance
		</div>
	</div>


	<div class="row">
  
<div class="col-xl-6  col-lg-6 col-md-6 col-sm-12">

	<iframe width="560" height="315" src="https://www.youtube.com/embed/KYILBTXSRx0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div class="col-xl-6  col-lg-6 col-md-6 col-sm-12">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/JQ08gEyyDWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

  
</div>
	</div>

@endsection 

</html>