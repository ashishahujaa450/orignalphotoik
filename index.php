<!DOCTYPE html>
<html>
<head>
	<title>Photoik</title>

	<!--meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Ashu">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!--bootstrap css minified file-->
	<link rel="stylesheet" type="text/css" href="public/assets/bootstrap/css/bootstrap.min.css">

	<!--custome style sheet-->
	<link rel="stylesheet" type="text/css" href="public/stylesheet/style.css">

	<!--font awesome-->
	<link rel="stylesheet" type="text/css" href="public/assets/font-awesome.min.css">



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<div class="main">
		<div class="overlay">
			<div class="block text-center">
				<h2>Change the way of Looking <br>with Photoik Web</h2>
				<button class="btn btn-default my-btn">Login</button>
				<button class="btn btn-default my-btn">Sign up</button>
			</div><!--end block-->

			<!--note:
				please remove display:none; for see login and signup section-->
				
			<!--login page codee-->

			<div class="block text-center" class="login" style="display:none;">
				<h2>login now</h2>
				<hr>
				
				<form action="#" method="post" class="text-center">

					<label for="email">Email</label><br>
					<input type="text" name="email" id="email" class="form-control myform"><br>

					<label for="password">Password</label><br>
					<input type="text" name="pwd" id="password" class="form-control myform"><br>

					<button type="button" class="btn btn-default btn-2">Submit Query</button>
				</form>
			</div><!--end block-->


			<!--sign up code-->
			<div class="block text-center" class="login" style="display:none;">
				<h2>sign up</h2>
				<hr>
				
				<form action="#" method="post" class="text-center">

					<label for="name">full name</label><br>
					<input type="text" name="fname" id="name" class="form-control myform"><br>

					<label for="email2">email</label><br>
					<input type="text" name="em" id="email2" class="form-control myform"><br>

					<label for="password2">Password</label><br>
					<input type="text" name="pwd2" id="password2" class="form-control myform"><br>

					<button type="button" class="btn btn-default btn-2">Submit Query</button>
				</form>
			</div><!--end block-->
		</div><!--end overlay-->
	</div><!--end main window-->




	<!--latest compiled javascript files for bootstrap-->
	<script type="text/javascript" src="public/assets/bootstrap/js/jquery.min.js"></script>

	<!--bootstrap required javascript-->
	<script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>