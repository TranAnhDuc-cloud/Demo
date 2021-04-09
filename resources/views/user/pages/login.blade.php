
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | Đăng Nhập</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
	
		<!--header-->
		<div class="header-w3l">
			@if ( Session::has('error') )
				<h3>{{ Session::get('error') }}</h3>
			@endif
			<h1>Login</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="wthree-form">
							<h2>Login The WebSite</h2>
							<form action="{{route('xulyLogin')}}" method="post">
								@csrf
								<div class="form-sub-w3">
									<input type="text" name="username" placeholder="Username " required="" />
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-sub-w3">
									<input type="password" name="password" placeholder="Password" required="" />
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								<label class="anim">
								<input type="checkbox" class="checkbox">
									<span>Remember Me</span> 
									<a href="#">Forgot Password</a>
								</label> 
								<div class="clear"></div>
								<div class="submit-agileits">
									<input type="submit" value="Login">
								</div>
								<div id="home-login " style="margin-top: 10px">
									<a href="{{route('home')}}" ><button type="button" class="btn-home">Home </button></a>
									<a href="{{route('Register')}}"><button type="button" class="btn-login">Register</button></a>
								</div>
							</form>

						</div>
				<!--//form-ends-here-->

		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; All rights reserved @ 2021 | Design by Anh Duc</p>
		</div>
		<!--//footer-->
</body>
</html>