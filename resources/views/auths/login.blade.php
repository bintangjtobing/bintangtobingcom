<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login System Administration</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{!! url('https://kit.fontawesome.com/ae026c985d.js')!!}"></script>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="{!! url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')!!}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847043/login/fonts/Linearicons-Free-v1.0.0/icon-font.min_pxq0sb.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847055/login/vendor/animate/animate_luhp2l.css')!!}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847057/login/vendor/css-hamburgers/hamburgers.min_rfmkus.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847054/login/vendor/animsition/css/animsition.min_qnhkz2.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847058/login/vendor/select2/select2.min_mvaaf4.css')!!}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847058/login/vendor/daterangepicker/daterangepicker_xtpqsm.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847040/login/css/util_grzrhe.css')!!}">
	<link rel="stylesheet" type="text/css" href="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847039/login/css/main_mguhrx.css')!!}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                
				<form class="login100-form validate-form" method="POST" action="/postlogin">
                        {{ csrf_field() }}
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					@if(session('sukses'))
				<div class="alert alert-success" role="alert">Login in...</div>
				@elseif(session('gagal'))
				<div class="alert alert-danger" role="alert">{{session('gagal')}}</div>
				@endif
					<div class="wrap-input100">
						<input class="input100" autofocus type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						{{-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div> --}}

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn form-group">
						<button type="submit" class="login100-form-btn">Sign in</button>
					</div>
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Don't have an account yet? <a href="#"> Create an Account</a>
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fab fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('https://res.cloudinary.com/infinitysolutions-co-id/image/upload/v1563847054/login/images/bg-01_vplffe.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
<script src="{!! url('https://code.jquery.com/jquery-3.3.1.slim.min.js')!!}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<script src="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847054/login/vendor/animsition/js/animsition.min_iz2pjl.js')!!}"></script>
<!--===============================================================================================-->

<script src="{!! url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')!!}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{!! url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')!!}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<script src="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847058/login/vendor/select2/select2.min_nqw5vd.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847058/login/vendor/daterangepicker/moment.min_x9ojtz.js')!!}"></script>
	<script src="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847058/login/vendor/daterangepicker/daterangepicker_glvmcz.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847057/login/vendor/countdowntime/countdowntime_li0qh1.js')!!}"></script>
<!--===============================================================================================-->
    <script src="{!! url('https://res.cloudinary.com/infinitysolutions-co-id/raw/upload/v1563847060/login/js/main_g5bg7a.js')!!}"></script>
    

</body>
</html>