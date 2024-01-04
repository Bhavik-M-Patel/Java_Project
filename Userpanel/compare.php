<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:37 GMT -->
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
  <header class="header-nav menu_style_home_one style2 navbar-scrolltofixed stricky main-menu">
    <div class="container"><!-- Ace Responsive Menu -->
	    <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
          <img class="nav_logo_img img-fluid" src="images/header-logo.svg" alt="header-logo.svg">
          <button type="button" id="menu-btn">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <a href="index-2.html" class="navbar_brand float-left dn-md">
          <img class="logo1 img-fluid" src="images/header-logo2.svg" alt="header-logo.svg">
          <img class="logo2 img-fluid" src="images/header-logo2.svg" alt="header-logo2.svg">
          <span>Staysearch</span>
        </a>
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
            <li> 
                
                <a href="index.php"><span class="title">Home</span></a>
            
          </li>
          <li> <a href="#"><span class="title">Properties</span></a>
            <ul>
              <li> 
                  
                  <a href="listing.php">Listing Properties</a> 
                
              </li>
              <li>
                
                  <a href="listingmap.php">Listing Map</a>
                
              </li>
            </ul>
          </li>
          <li> <a href="#"><span class="title">User</span></a>
            <!-- Level Two-->
            <ul>
              <li>   
                  <a href="dashboard.php">User Dashboard</a> 
              </li>
            </ul>
        </li>
        <li> <a href="#"><span class="title">Pages</span></a>
            <ul>
              
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="myaccount.php">My Account</a></li>
              <li><a href="package.php">Plans</a></li>
              <li><a href="compare.php">Compare</a></li>
              <li><a href="error.php">404 Page</a></li>
              <li><a href="tearm.php">Terms and Conditions</a></li>
              <!-- <li><a href="page-coming-soon.html">Coming Soon</a></li> 
              <li><a href="page-faq.html">Faq</a></li>
              <li><a href="page-ui-element.html">UI Elements</a></li>-->
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
          <li class="list-inline-item list_c"><a href="#"><span class="flaticon-phone mr7"></span> <span>(+91)1234567890</span></a></li>
          <li class="list-inline-item list_s"><a href="#" class="btn" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
          <li class="list-inline-item add_listing"><a href="dashboard-new-property.php"><span class="icon flaticon-button"></span><span class="dn-lg"> Add Property </span></a></li>
        </ul>
	    </nav>
		</div>
	</header>
  <!-- Modal -->
  <div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body container pb30 pl0 pr0 pt0">
          <div class="row">
            <div class="col-lg-12">
              <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content container" id="myTabContent">
            <div class="row mt30 tab-pane fade show active pl20 pr20" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="col-lg-12">
                <div class="login_form">
                  <form action="#">
                    <div class="mb-2 mr-sm-2">
                      <label for="formGroupExampleInput" class="form-label mb0">Login</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ali Tufa..">
                    </div>
                    <div class="form-group mb5">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                      <label class="custom-control-label" for="exampleCheck2">Remember me</label>
                      <a class="btn-fpswd float-right text-thm" href="#">Forgot</a>
                    </div>
                    <button type="submit" class="btn btn-log btn-block btn-thm mt20">Sign in</button>
                    <div class="row mt10">
                      <div class="col-lg-12">
                        <div class="user_log_info">
                          <p>Username: <span>agency or agent</span></p>
                          <p>Password: <span>demo</span></p>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row mt30 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="col-lg-12">
                <div class="sign_up_form">
                  <form action="#">
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="Login">
                    </div>
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="Last name">
                    </div>
                    <div class="form-group input-group">
                      <select class="selectpicker form-control" data-width="100%">
                        <option data-tokens="banking">User role</option>
                        <option data-tokens="digital&creative">User role 2</option>
                        <option data-tokens="retail">User role 3</option>
                        <option data-tokens="humanresource">User role 4</option>
                      </select>
                    </div>
                    <div class="form-group input-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group input-group mb20">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group input-group mb30">
                      <input type="password" class="form-control" placeholder="Re-enter password">
                    </div>
                    <button type="submit" class="btn btn-signup btn-block btn-dark mb0">REGISTER</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="images/header-logo.svg" alt="header-logo.svg"> <span class="mt15">Houzing</span> </div>
				<ul class="menu_bar_home2">
          <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"></a></li>
          <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div>
<!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li> 
              
              <a href="index.php"><span class="title">Home</span></a>
           
            </li>
            <li> <a href="#"><span class="title">Properties</span></a>
                <ul>
              
                    <li> 
                  
                        <a href="listing.php">Listing Properties</a> 
                
                    </li>
                    <li>
                
                  <a href="listingmap.php">Listing Map</a>
                
                </li>
            </ul>
          </li>
        <li> <a href="#"><span class="title">User</span></a>
            <!-- Level Two-->
            <ul>
                <li>   
                  <a href="dashboard.php">User Dashboard</a> 
                </li>
            </ul>
        </li>
        <li> <a href="#"><span class="title">Pages</span></a>
            <ul>
              
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="myaccount.php">My Account</a></li>
              <li><a href="package.php">Plans</a></li>
              <li><a href="compare.html">Compare</a></li>
              <li><a href="error.php">404 Page</a></li>
              <li><a href="tearm.php">Terms and Conditions</a></li>
              <!-- <li><a href="page-coming-soon.html">Coming Soon</a></li> 
              <li><a href="page-faq.html">Faq</a></li>
              <li><a href="page-ui-element.html">UI Elements</a></li>-->
            </ul>
        </li>
        <li><a href="page-contact.html">Contact</a></li>
        <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="#"><span class="icon flaticon-button mr5"></span> </a></li>
	</ul>
    </nav>
        <li><a href="page-contact.html">Contact</a></li>
        <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="#"><span class="icon flaticon-button mr5"></span> Create Listing</a></li>
			</ul>
		</nav>
	</div>

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">Compare Properties</h2>
						<ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Compare</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Service Section Area -->
	<section class="our-service">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Pricing Packages</h2>
						<p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor.</p>
					</div>
				</div>
			</div>
			<div class="row">
        <div class="col-lg-12">
          <div class="compare_table table-responsive">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">
                    <div class="membership_header">
                      <div class="thumb">
                        <a class="dn-991" href="#"><span class="flaticon-trash"></span></a>
                        <a class="dn-991 fet" href="#">FEATURED</a>
                        <img class="img-fluid w100" src="images/property/fp1.jpg" alt="fp1.jpg">
                      </div>
                    </div>
                  </th>
                  <th scope="col">
                    <div class="membership_header">
                      <div class="thumb">
                        <a class="dn-991" href="#"><span class="flaticon-trash"></span></a>
                        <a class="dn-991 fet" href="#">FEATURED</a>
                        <img class="img-fluid w100" src="images/Bulding1/10.jpg" alt="10.jpg">
                      </div>
                    </div>
                  </th>
                  <th scope="col">
                    <div class="membership_header">
                      <div class="thumb">
                        <a class="dn-991" href="#"><span class="flaticon-trash"></span></a>
                        <a class="dn-991 fet" href="#">FEATURED</a>
                        <img class="img-fluid w100" src="images/Bulding1/12.jpg" alt="12.jpg">
                      </div>
                    </div>
                  </th>
                </tr>
              </thead>
              <thead>
                <tr>
                  <th class="bgc-alice-blue pl30" scope="col">Title</th>
                  <th class="bgc-alice-blue" scope="col">New Apartment Nice Wiew</th>
                  <th class="bgc-alice-blue" scope="col">Luxury Family house's</th>
                  <th class="bgc-alice-blue" scope="col">New Family Apartment</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="pl30" scope="row">Price</th>
                  <td>₹13,500/mo</td>
                  <td>₹37,500/mo</td>
                  <td>₹24,500/mo</td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">Property Type</th>
                  <td>Apartment</td>
                  <td>Family house</td>
                  <td>Family Apartment</td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">Address</th>
                  <td>Vejalpur,Ahmedabad,Gujrat</td>
                  <td>Vashana,Ahmedabad,Gujrat</td>
                  <td>Maninagar,Ahmedabad,Gujrat</td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">City</th>
                  <td>Ahmedabad</td>
                  <td>Ahmedabad</td>
                  <td>Ahmedabad</td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">State/county</th>
                  <td>Gujrat</td>
                  <td>Gujrat</td>
                  <td>Gujrat</td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">Zip/Postal Code</th>
                  <td>380001</td>
                  <td>380001</td>
                  <td>380001</td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">Property Size</th>
                  <td>1241 sqft</td>
                  <td>3487 sqft</td>
                  <td>1987 sqft</td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">Property ID</th>
                  <td>HTE01</td>
                  <td>HYT35</td>
                  <td>YTF09</td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">Bedrooms</th>
                  <td>3</td>
                  <td>4</td>
                  <td>2</td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">Bathrooms </th>
                  <td>2</td>
                  <td>4</td>
                  <td>2</td>
                </tr>
               
                <tr>
                  <th class="pl30" scope="row">Air Conditioning</th>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle_close" href="#"><span class="fa fa-times-circle"></span></a></td>
                </tr>
               
              
                <tr>
                  <th class="pl30" scope="row">Gym</th>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle_close" href="#"><span class="fa fa-times-circle"></span></a></td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">Laundry</th>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle_close" href="#"><span class="fa fa-times-circle"></span></a></td>
                </tr>
              
                <tr>
                  <th class="pl30" scope="row">Microwave</th>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle_close" href="#"><span class="fa fa-times-circle"></span></a></td>
                </tr>
                <tr>
                  <th class="pl30" scope="row">Outdoor Shower</th>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle_close" href="#"><span class="fa fa-times-circle"></span></a></td>
                </tr>
               
                <tr>
                  <th class="pl30" scope="row">TV Cable</th>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle" href="#"><span class="fa fa-check-circle"></span></a></td>
                  <td><a class="check_circle_close" href="#"><span class="fa fa-times-circle"></span></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
  <?php
    include './footer.php';
  ?>
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
<script src="js/isotop.js"></script>
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
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:37 GMT -->
</html>