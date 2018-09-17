<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="libs/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="libs/css/util.css">
	<link rel="stylesheet" type="text/css" href="libs/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	  <form name="sendin" action="$(link-login-only)" method="post">
	    <input type="hidden" name="username" />
	    <input type="hidden" name="password" />
	    <input type="hidden" name="dst" value="$(link-orig)" />
	    <input type="hidden" name="popup" value="true" />
	  </form>

	  <script type="text/javascript" href="libs/md5.js"></script>
	  <script type="text/javascript">
	    <!--
	    function doLogin() {
				document.sendin.username.value = 'mail';
				document.sendin.password.value = hexMD5('$(chap-id)' + 'mail' + '$(chap-challenge)');
	      document.sendin.submit();
	      return false;
	    }
	    //-->
	  </script>

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('libs/images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" name="login" action="$(link-login-only)" method="post" $(if chap-id) onSubmit="return doLogin()" $(endif)>
					<input type="hidden" name="dst" value="$(link-orig)" />
					<input type="hidden" name="popup" value="true" />
					<input style="width: 80px" name="username" type="hidden" value="$(username)" />
					<input style="width: 80px" name="password" type="hidden" />
				</form>

				<script type="text/javascript" href="libs/md5.js"></script>
			  <script type="text/javascript">
			    <!--
			    function doLoginUser() {
			      document.login.username.value = 'mail';
			      document.login.password.value = 'mail';
			      document.login.submit();
			      return false;
			    }
			    //-->
			  </script>

				<form class="login100-form validate-form" name="loginUser" method="post" onSubmit="return doLoginUser()">
					<span class="login100-form-title p-b-59">
						Login Here.
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">No. Kamar</span>
						<input class="input100" type="text" name="name" placeholder="No. Kamar">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>

            <br>

					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="libs/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="libs/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="libs/vendor/bootstrap/js/popper.js"></script>
	<script src="libs/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="libs/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="libs/vendor/daterangepicker/moment.min.js"></script>
	<script src="libs/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="libs/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="libs/js/main.js"></script>

  <script type="text/javascript">
    document.login.username.focus();
  </script>

</body>
</html>
