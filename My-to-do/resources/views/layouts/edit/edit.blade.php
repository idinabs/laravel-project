<!DOCTYPE html>
<html lang="en">
<head>
	<title>My To Do List</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/edit-assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/edit-assets/vendor/bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/edit-assets/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/edit-assets/vendor/css-hamburgers/hamburgers.min.css">')}}
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/edit-assets/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{	asset('assets/edit-assets/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{	asset('assets/edit-assets/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/edit-assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/edit-assets/css/main.css')}}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="/post/{{ $update->judul }}/edit">

					@method('patch')
					@csrf
					
						<span class="login100-form-title p-b-32">
							<h6 style="text-align: center;">Perbarui To Do</h6>
						</span>

							<span class="txt1 p-b-11" style="margin-top: 40px">
								Judul
							</span>
							<div class="wrap-input100 validate-input m-b-36">
								<input class="input100" type="text" name="judul" value="{{ $update->judul }}">
								<span class="focus-input100"></span>
							</div>
							@error('judul')
								<div class="alert alert-danger"> {{ $message }} </div>
							@enderror

							<span class="txt1 p-b-11">
								Keterangan
							</span>
							<div class="wrap-input100 validate-input m-b-40">
								<textarea class="form-control" name="keterangan" id="keterangan" rows="7" >{{ $update->keterangan }}</textarea>
							</div>
							
							<button class="btn btn-primary">Simpan</button>


				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>