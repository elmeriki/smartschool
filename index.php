<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="ui/boostrap/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <script src="ui/boostrap/bootstrap.js"></script>
     <script src="ui/boostrap/jquery.js"></script>
     <link href="images/faviclogo.png" rel="shortcut icon" />
<!------ Include the above in your HEAD tag ---------->
<title>MySchool App | Login </title>
</head>
<body>
<style>

body{
    font-family: 'Open Sans', sans-serif;
}
.logo i {
	font-size: 31px;
	margin-right: 4px;
	word-spacing: 14px;
}
.logo{
	color: white;
	margin: 0;
	font-size: 20px;
	padding: 4px 0;
	padding-bottom: 15px;

}
.login-bottom-text{
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 12px;
	color: white;
	line-height: 19px;
}

header{
	background:#101010;
	padding-top: 20px;
}
header .form-group{
	margin-bottom: 0px;
}
header .btn-header-login{
	margin-bottom: 15px;	
}
.login-main{
	margin-top: 130px;
}
.multibox{
	padding-left: 0px;
	padding-bottom: 10px;
}
.login-main span{
	font-size: 12px;
} 



footer hr{
	margin-top: 0px;
	padding-top: 0px;
}
.footer-options ul{
	clear: both;
	padding: 0px;
	margin: 0px;
}
.footer-options ul li{
	float:left;
	list-style: none;
	padding: 5px;
	font-size: 12px;
}
.footer-options ul li a{
	text-decoration: none;
	color: #000;
}
.copyrights{
	margin-top: 25px;
}


</style>
<header>
    <div class="container">
	<div class="row">
		<div class="col-sm-6">
      <div class="logo"> <img src="images/logo1.png" alt="" height="70px">
  </div>
      
		</div>
		<div class="col-sm-6 hidden-xs">
			<div class="row">
				<div class="col-sm-5">
                    <form action="controller/logincontroller.php" method="POST">
					  <div class="form-group">
					    <input type="text" class="form-control" name="username"  placeholder="Email Address">
					    <div class="login-bottom-text checkbox hidden-sm">
						    <label>
						      <input type="checkbox" id="">
						      Keep me sign in
						    </label>
						  </div>
					  </div>
				</div>	
				<div class="col-sm-5">
					 <div class="form-group">
					    <input type="text" class="form-control" name="password" placeholder="Password">
					    <div class="login-bottom-text hidden-sm"> Forgot your password?  </div>
					  </div>
				</div>
				<div class="col-sm-2">
					 <div class="form-group">
					    <input type="submit" value="login" class="btn btn-default btn-header-login">
                      </div>
</form>
				</div>
			</div>	
		</div>
	</div>
	</div>
</header>
<article class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="login-main">

                <img src="images/dash.png" alt="">
					<h4><i class="fa fa-dashboard"></i>100% Administration</h4>
					<span>Print class lists, attendance registers, birthday lists, name labels, emergency contact lists, calendars, block sheets and more!</span>

					<h4> <i class="fa fa-money"></i> 100%  Billing </h4>
					<span>Quickly and easily create invoices, print statements, capture payments and know exactly who owes you money.</span>

					<h4><i class="fa fa-mobile-phone"></i>100% Communication</h4>
					<span>Keep your parents up-to-date by easily sending them invoices, statements, notices and newsletters via SMS, email and / or by grouped and sorted prints.</span>

				</div>
			</div>
			<div class="col-sm-4">
				<div class="">
				<br>
                <h4><i class="fa fa-shield"></i> <strong>Register now</strong></h4>
                
			  	<hr>
				<div class="form-group">
				  <label class="control-label" for="">Email Address</label>
				  <input type="text" class="form-control" placeholder="Email Address">
				</div>

				<div class="form-group">
				  <label class="control-label" for="">Password</label>
				  <input type="text" class="form-control" placeholder="Password">
				</div>

				<div class="form-group">
				  <label class="control-label" for="">Repeat Password</label>
				  <input type="text" class="form-control" placeholder="Repeat Password">
				</div>

				<div class="">
					<label>Birthday</label>
				  <div class="form-group">
					  <div class="col-sm-4 multibox">
					 	<select class="form-control">
					 		<option>Day</option>
					 	</select>
					  </div>
					   <div class="col-sm-4 multibox">
					 	<select class="form-control">
					 		<option>Month</option>
					 	</select>
					  </div>
					   <div class="col-sm-4 multibox">
					 	<select class="form-control">
					 		<option>Year</option>
					 	</select>
					  </div>
				   
				  </div>
				</div>
		      
				<small>
					By clicking Sign Up, you agree to our Terms and that you have read our
					 Data Use Policy, including our Cookie Use.
				</small>	 
				<div style="height:10px;"></div>
				<div class="form-group">
				  <label class="control-label" for=""></label>
				  <input type="submit" class="btn btn-primary">
				</div>	 

				  </div>
			</div>
			</div>
		</div>
</article>
<footer class="container">
<br><br><br><br><br><br><br><br><br><br><br>
<hr>
<div class="footer-options">
<ul >
	<li><a href="#">Payment</li>
	<li><a href="#">Attendance</li>
	<li><a href="#">Exam</li>
	<li><a href="#">Fees</li>
	<li><a href="#">Feed</li>
	<li><a href="#">Register</a></li>
	<li><a href="#">Delete</a></li>
	<li><a href="#">Locations</a></li>
	<li><a href="#">contact</a></li>
</ul>
</div>
<div style="clear:both"></div>
<small class="copyrights"> © Copyrights reserved  2019</small>
</footer>
    
</body>
</html>