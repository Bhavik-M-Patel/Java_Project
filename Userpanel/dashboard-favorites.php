<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-dashboard-favorites.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:25 GMT -->
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

	<!-- Main Header Nav -->
	
        <?php
            include './dheader.php';
        ?>

	<!-- Main Header Nav For Mobile -->
	

	<!-- Our Dashbord -->
	<div class="extra-dashboard-menu dn-lg">
		<div class="ed_menu_list">
			<ul>
				<li><a href="dashboard.php"><span class="flaticon-dashboard"></span> Dashboard</a></li>
				<li><a href="dashboard-profile.php"><span class="flaticon-user"></span> My Profile</a></li>
				<li><a href="dashboard-property.php"><span class="flaticon-house"></span> My Properties List</a></li>
				<li><a href="dashboard-new-property.php"><span class="flaticon-button"></span> Add New Property</a></li>
				<li><a class="active" href="dashboard-favorites.php"><span class="flaticon-heart-shape-outline"></span> Favorites</a></li>
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
										<li><a href="dashboard-profile.php"><span class="flaticon-user"></span> My Profile</a></li>
										<li><a href="dashboard-property.php"><span class="flaticon-house"></span> My Properties List</a></li>
										<li><a href="dashboard-new-property.php"><span class="flaticon-button"></span> Add New Property</a></li>
										<li><a class="active" href="dashboard-favorites.php"><span class="flaticon-heart-shape-outline"></span> Favorites</a></li>
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
								<h2 class="breadcrumb_title">Favorites</h2>
								<p></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="invoice_table faborites table-responsive">
								<table class="table table-borderless">
								  <tbody>
								    <tr>
								      <th scope="row">
					              <div class="feat_property list property">
					                <div class="thumb"> <img class="img-whp" src="images/property/lg12.jpg" alt="lg12.jpg">
					                  <div class="thmb_cntnt">
					                    <ul class="tag mb0">
					                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
					                    </ul>
					                  </div>
					                </div>
					                <div class="details">
					                  <div class="tc_content">
					                    <h4 class="title">Ample Penthouse in villa <small class="tag2">FOR SALE</small></h4>
					                    <p>Iscone,Ahmedabad,Gujrat</p>
					                    <div class="fp_meta">
					                    	<a href="#">
					                    		<small><del class="body-color">₹88,800/mo</del></small> <br>
					                    		<span class="heading-color fw600">₹65,250/mo</span>
					                    	</a>
					                    </div>
					                  </div>
					                </div>
					              </div>
								      </th>
								      <td class="dn-md"></td>
								      <td class="dn-md"></td>
								      <td class="dn-md"></td>
								    	<td class="editing_list">
								    		<ul>
								    			<li class="list-inline-item">
										    		<a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
								    			</li>
								    		</ul>
								    	</td>
								    </tr>
								    <tr>
								      <th scope="row">
					             <div class="feat_property list property">
					                <div class="thumb"> <img class="img-whp" src="images/listing/s1.png" alt="s1.png">
					                  <div class="thmb_cntnt">
					                    <ul class="tag mb0">
					                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
					                    </ul>
					                  </div>
					                </div>
					                <div class="details">
					                  <div class="tc_content">
					                    <h4 class="title">Nice Luxury Family house<small class="tag2">FOR SALE</small></h4>
					                    <p>Vashana,Ahmedabad,Gujrat</p>
					                    <div class="fp_meta">
					                    	<a href="#">
					                    		<small><del class="body-color">₹52,800/mo</del></small> <br>
					                    		<span class="heading-color fw600">₹25,250/mo</span>
					                    	</a>
					                    </div>
					                  </div>
					                </div>
					              </div>
								      </th>
								      <td class="dn-md"></td>
								      <td class="dn-md"></td>
								      <td class="dn-md"></td>
								    	<td class="editing_list">
								    		<ul>
								    			<li class="list-inline-item">
										    		<a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
								    			</li>
								    		</ul>
								    	</td>
								    </tr>
								   
								  </tbody>
								</table>								
								<div class="mbp_pagination mt10">
									<ul class="page_navigation">
								    <li class="page-item">
								    	
								    </li>
                                                                
                                                                    <li class="page-item active" aria-current="page">
								    	<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">4</a></li>
								    <li class="page-item"><a class="page-link" href="#">5</a></li>
								    <li class="page-item"><a class="page-link" href="#">...</a></li>
								    <li class="page-item"><a class="page-link" href="#">15</a></li>
								    <li class="page-item">
								    	<a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
								    </li>
									</ul>
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
<script src="js/chart.min.js"></script>
<script src="js/chart-custome.js"></script>
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
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-dashboard-favorites.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:25 GMT -->
</html>