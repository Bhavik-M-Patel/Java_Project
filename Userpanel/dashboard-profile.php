<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:24 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, google maps, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="Houzing - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>STAYSEARCH</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	
	
        <!-- Responsive Menu Structure-->
       <?php
        include './dheader.php';
       ?>

	<!-- Main Header Nav For Mobile -->
	

	<!-- Our Dashbord -->
	<div class="extra-dashboard-menu dn-lg">
		<div class="ed_menu_list">
			<ul>
				<li><a href="dashboard.php"><span class="flaticon-dashboard"></span> Dashboard</a></li>
				<li><a class="active" href="dashboard-profile.php"><span class="flaticon-user"></span> My Profile</a></li>
				<li><a href="dashboard-property.php"><span class="flaticon-house"></span> My Properties List</a></li>
				<li><a href="dashboard-new-property.php"><span class="flaticon-button"></span> Add New Property</a></li>
				<li><a href="dashboard-favorites.php"><span class="flaticon-heart-shape-outline"></span> Favorites</a></li>
				<li><a href="dashboard-save-search.php"><span class="flaticon-magnifiying-glass"></span> Saved Searches</a></li>
				<li><a href="dashboard-invoices.php"><span class="flaticon-invoice"></span> My Invoices</a></li>
				<li><a href="dashboard-message.php"><span class="flaticon-mail-inbox-app"></span> Inbox</a></li>
				<li><a href="dashboard-logout.php"><span class="flaticon-logout"></span> Logout</a></li>
			</ul>
		</div>
	</div>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-alice-blue">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-2 dn-lg pl0"></div>
				<div class="col-xl-10">
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-lg">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li><a href="dashboard.php"><span class="flaticon-dashboard"></span> Dashboard</a></li>
										<li><a class="active" href="dashboard-profile.php"><span class="flaticon-user"></span> My Profile</a></li>
										<li><a href="dashboard-property.php"><span class="flaticon-house"></span> My Properties List</a></li>
										<li><a href="dashboard-new-property.php"><span class="flaticon-button"></span> Add New Property</a></li>
										<li><a href="dashboard-favorites.php"><span class="flaticon-heart-shape-outline"></span> Favorites</a></li>
										<li><a href="dashboard-save-search.php"><span class="flaticon-magnifiying-glass"></span> Saved Searches</a></li>
										<li><a href="dashboard-invoices.php"><span class="flaticon-invoice"></span> My Invoices</a></li>
										<li><a href="dashboard-message.php"><span class="flaticon-mail-inbox-app"></span> Inbox</a></li>
										<li><a href="dashboard-logout.php"><span class="flaticon-logout"></span> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 mb50">
							<div class="breadcrumb_content">
								<h2 class="breadcrumb_title">My Profile</h2>
								<p class=""></p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-8">
									<form class="contact_form profile mb30" action="#">
										<div class="row">
											<div class="col-lg-12">
												<h4 class="mb30 title">Contact Information</h4>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="First Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="email" class="form-control form_control" placeholder="Email">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Phone">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Mobile">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Address">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<h4 class="mb30 mt20 title">Social Media</h4>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Facebook Url">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Twitter Url">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Instagram Url">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Website Url(without http)">
												</div>
											</div>
											
											
											<div class="col-lg-12">
												<div class="form-group mb30">
											    <textarea class="form-control" rows="6" placeholder="About Me"></textarea>
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group mb0">
													<button class="btn btn-thm update_btn">UPDATE PROFILE</button>
												</div>
											</div>
										</div>
									</form>
									<form class="contact_form profile mb30-lg" action="#">
										<div class="row">
											<div class="col-lg-12">
												<h4 class="mb30 title">Change Password</h4>
											</div>
											<div class="col-lg-12">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="Old Password">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb25">
										    	<input type="text" class="form-control form_control" placeholder="New Password">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mb30">
										    	<input type="email" class="form-control form_control" placeholder="Confirm New Password">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group mb0">
													<button class="btn btn-thm update_btn">CHANGE PASSWORD</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="col-lg-4">
									<div class="my_dashboard_profile">
										<h4 class="mb20 title">Photo</h4>
										<div class="wrap-custom-file mb25">
									    <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
									    <label for="image1">
								      	<span class="flaticon-document">&nbsp;&nbsp;UPLOAD PROFILE PHOTO</span>
												<small class="file_title">*minimum 500px x 500px</small>
									    </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt50">
						<div class="col-lg-12 text-center">
							<p class="mb0">STAYSEARCH.COM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/ace-responsive-menu.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.min.js"></script>
<script src="js/simplebar.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scrollto.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/progressbar.js"></script>
<script src="js/slider.js"></script>
<script src="js/timepicker.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smartuploader.js"></script>
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:24 GMT -->
</html>