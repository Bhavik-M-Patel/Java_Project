<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:24 GMT -->
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
<title>Staysearch</title>
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

	<!-- Main Header Nav -->
	<?php
            include './dheader.php';
        ?>

	<!-- Main Header Nav For Mobile -->
	

	<!-- Our Dashbord -->
	<div class="extra-dashboard-menu dn-lg">
		<div class="ed_menu_list">
			<ul>
				<li><a class="active" href="dashboard.php"><span class="flaticon-dashboard"></span> Dashboard</a></li>
				<li><a href="dashboard-profile.php"><span class="flaticon-user"></span> My Profile</a></li>
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
							<div class="dashboard_navigationbar dn db-lg mt50">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li><a class="active" href="dashboard.php"><span class="flaticon-dashboard"></span> Dashboard</a></li>
										<li><a href="dashboard-profile.php"><span class="flaticon-user"></span> My Profile</a></li>
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
								<h2 class="breadcrumb_title">Hello, User!</h2>
								<p>Ready to jump back in!</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one">
								<div class="icon"><span class="flaticon-house"></span></div>
								<div class="detais">
									<div class="timer">9</div>
									<h4>My Properties</h4>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one">
								<div class="icon"><span class="flaticon-view"></span></div>
								<div class="detais">
									<div class="timer">65</div>
									<h4>Total Views</h4>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one">
								<div class="icon"><span class="flaticon-mail-inbox-app"></span></div>
								<div class="detais">
									<div class="timer">531</div>
									<h4>Inbox</h4>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one">
								<div class="icon"><span class="flaticon-heartbeat"></span></div>
								<div class="detais">
									<div class="timer">124</div>
									<h4>Total Favorites</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-8">
							<div class="application_statics">
								<h4>Total Views</h4>
                <canvas id="myChartweave" width="100" height="50"></canvas>
                <canvas class="dn" id="myChart"></canvas>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="recent_job_activity">
								<h4 class="title">Recent Activities</h4>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-house"></span></div></li>
										<li class="list-inline-item"><p>Your listing <span class="text-thm">Luxury Family Home</span> has been approved!.</p></li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-house"></span></div></li>
										<li class="list-inline-item"><p>lovely Apartment <span class="text-thm">Renovated Apartment</span></p></li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-house"></span></div></li>
										<li class="list-inline-item"><p>Someone favorites your <span class="text-thm">Ample Penthouse in villa</span> View listing!</p></li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="fa fa-heart-o"></span></div></li>
										<li class="list-inline-item"><p>Your listing <span class="text-thm">Luxury Family Home for Sale</span></p></li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-house"></span></div></li>
										<li class="list-inline-item"><p>Brown left a review on <span class="text-thm">Renovated Apartment</span></p></li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-house"></span></div></li>
										<li class="list-inline-item"><p>Someone favorites your <span class="text-thm">Renovated luxury villa's</span> View listing!</p></li>
									</ul>
								</div>
								<div class="grid mb0">
									<ul class="pb0 mb0 bb_none">
										<li class="list-inline-item"><div class="icon"><span class="flaticon-house"></span></div></li>
										<li class="list-inline-item"><p>Your listing <span class="text-thm">Beautifull Row House</span> has been approved!.</p></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt50">
						<div class="col-lg-12 text-center">
							<p class="mb0">Copyright © 2021 CreativeLayers. All Right Reserved.</p>
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
<script src="js/chart.min.js"></script>
<script src="js/chart-custome.js"></script>
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
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:24 GMT -->
</html>