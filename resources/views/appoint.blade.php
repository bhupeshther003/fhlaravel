@extends('layouts.app')


@section('content')
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
	}

	

	body {
		background-color: #FFEBEE
	}

	.card {
		width: 400px;
		background-color: #fff;
		border: none;
		border-radius: 12px
	}

	label.radio {
		cursor: pointer;
		width: 100%
	}

	label.radio input {
		position: absolute;
		top: 0;
		left: 0;
		visibility: hidden;
		pointer-events: none
	}

	label.radio span {
		padding: 7px 14px;
		border: 2px solid #eee;
		display: inline-block;
		color: #039be5;
		border-radius: 10px;
		width: 100%;
		height: 48px;
		line-height: 27px
	}

	label.radio input:checked+span {
		border-color: #039BE5;
		background-color: #81D4FA;
		color: #fff;
		border-radius: 9px;
		height: 48px;
		line-height: 27px
	}

	.form-control {
		margin-top: 10px;
		height: 48px;
		border: 2px solid #eee;
		border-radius: 10px
	}

	.form-control:focus {
		box-shadow: none;
		border: 2px solid #039BE5
	}

	.agree-text {
		font-size: 12px
	}

	.terms {
		font-size: 12px;
		text-decoration: none;
		color: #039BE5
	}

	.confirm-button {
		height: 50px;
		border-radius: 10px
	}
</style>


<div class="back-1">
	<div class="container mt-5 mb-5 d-flex justify-content-center">
		<div class="card px-1 py-4">
			<div class="card-body">
				<h6 class="card-title mb-3">CHECK APPOINTMENT STATUS</h6>
				
				
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<input class="form-control" type="number""
								placeholder="Registration No.">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<div class="input-group"> <input class="form-control" type="text" placeholder="Mobile">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<div class="input-group"> <input class="form-control" type="text" placeholder="Email ID">
							</div>
						</div>
					</div>
				</div>
				<div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text"></div>
				<button class="btn btn-primary btn-block confirm-button" onclick="status()" >Check Status</button>
			</div>
		</div>

	</div>


	@endsection
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>

</html>