<!DOCTYPE HTML>
<html>
<head>
    <title> PROPERTY SEARCH & BOOKING SYSTEM </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.php"><img src="images/logo3.png" alt=""/></a>
  </div>
            <form action="index.php" id="myform" method="post" class="form-horizontal">
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	   
		<input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<ul class="new">
			<li class="new_left"><p><a href="forgetpassword.php">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="signup.php"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	    </form>
  </div>
  <script src="mytools/"></script>


<script src="mytools/jquery.validate.min.js"></script>
<style>
    .error{
        color:red;
    }
</style>
<script>
$().ready(function() {
   $("#myform").validate(); 
});
</script>


</body>
</html>
