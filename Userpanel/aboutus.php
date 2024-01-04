<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:30 GMT -->
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
    <div class="container">
        <!-- Ace Responsive Menu -->
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
          <li class="list-inline-item add_listing"><a href="page-dashboard-new-property.html"><span class="icon flaticon-button"></span><span class="dn-lg"> Add Property </span></a></li>
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
				<div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="images/header-logo.svg" alt="header-logo.svg"> <span class="mt15">STAYSEARCH</span> </div>
				<ul class="menu_bar_home2">
          <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"></a></li>
          <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div>

<!-- mobile-menu -->
<?php
    include './mobileheader.php';
?>

</div>

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">About Us</h2>
						<ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">About Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section bb1 pb70">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="main-title text-center">
						<h2>Our Mission Is To Staysearch</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="about_thumb mb30-smd">
						<img class="img-fluid w100" src="../Adminpanel/images/logo1.png" alt="logo1.jpg"/>
                                                
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_content">
						<p class="large"></p>
						<p></p>
                                                <p></p>
						<p>That’s why we go beyond the typical listings, by sourcing insights straight from locals and offering over 34 neighborhood map overlays, to give people a deeper understanding of what living in a home and neighborhood is really like.</p>
					</div>
				</div>
			</div>
			<div class="row mt50">
				<div class="col-md-6 col-lg-3">
					<div class="funfact_one text-center">
						<div class="details">
							<div class="timer text-thm">66.180</div>
							<p class="ff_title">Homes for sale</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">4.809</div>
              <p class="ff_title">Open houses</p>
            </div>
          </div>
				</div>
				<div class="col-md-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">30.469</div>
              <p class="ff_title">Recently sold</p>
            </div>
          </div>
				</div>
				<div class="col-md-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">2.919</div>
              <p class="ff_title">Price reduced</p>
            </div>
          </div>
				</div>
			</div>
		</div>
	</section>
  
  <!-- Our Team -->
  <section class="our-team pb40 bb1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Meet Our Agents</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="team_slider_home1">
            <div class="item">
              <div class="team_member">
                <div class="thumb"> <img class="img-fluid" src="images/team/1.jpg" alt="1.jpg">
                  <div class="overylay">
                    <ul class="social_icon">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <h4><a href="page-agent-single.html">Robert Fox</a></h4>
                  <p>Lead Designer</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_member">
                <div class="thumb"> <img class="img-fluid" src="images/team/2.jpg" alt="2.jpg">
                  <div class="overylay">
                    <ul class="social_icon">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <h4><a href="page-agent-single.html">Floyd Miles</a></h4>
                  <p>CEO, Director</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_member">
                <div class="thumb"> <img class="img-fluid" src="images/team/3.jpg" alt="3.jpg">
                  <div class="overylay">
                    <ul class="social_icon">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <h4><a href="page-agent-single.html">Albert Flores</a></h4>
                  <p>Marketer</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_member">
                <div class="thumb"> <img class="img-fluid" src="images/team/4.jpg" alt="4.jpg">
                  <div class="overylay">
                    <ul class="social_icon">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <h4><a href="page-agent-single.html">Darlene Robertson</a></h4>
                  <p>Project Manager</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_member">
                <div class="thumb"> <img class="img-fluid" src="images/team/5.jpg" alt="5.jpg">
                  <div class="overylay">
                    <ul class="social_icon">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <h4><a href="page-agent-single.html">Savannah Nguyen</a></h4>
                  <p>Lead Developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Property Cities -->
  <section id="property-city" class="property-city pb70 bb1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Services</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-4 col-xl-4">
          <div class="row">
            <div class="col-sm-12">
              <div class="explore_city custom_class_service float-left">
                  <div class="thumb"><img class="img-fluid" src="images/Bulding1/55_1.jpg" alt="55_1.jpg"></div>
                <div class="details">
                  <h4 class="title">Property Management</h4>
                  <p>Services</p>
                </div>
              </div>
              <div class="explore_city custom_class_service float-right">
                <div class="thumb"><img class="img-fluid" src="images/service/2.jpg" alt="2.jpg"></div>
                <div class="details">
                  <h4 class="title">Financial Reporting</h4>
                  <p>Services</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="explore_city">
                  <div class="thumb"><img class="img-fluid" src="images/Bulding1/94.jpg" alt="94.jpg"></div>
                <div class="details">
                  <h4 class="title">Business Development</h4>
                  <p>Services</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-lg-5 col-xl-6">
          <div class="explore_city style2">
              <div class="thumb"><img class="img-fluid" src="images/Bulding1/91_1.jpg"alt="91.jpg"></div>
            <div class="details">
              <h4 class="title">Finance Real Estate</h4>
              <p>Services</p>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-3 col-xl-2">
          <div class="explore_city custom_class_service2">
              <div class="thumb"><img class="img-fluid" src="images/Bulding1/93.jpg" alt="93.jpg"></div>
            <div class="details">
              <h4 class="title">Recover Asset Value</h4>
              <p>Services</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

	<!-- Our Team -->
	<section class="our-testimonials bg-ptrn1 pb70">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
            <h2>Our Testimonials</h2>
            <p></p>
					</div>
				</div>
			</div>
      <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="testimonial_post text-center">
            <div class="details">
              <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
            </div>
            <div class="thumb"> <img src="images/testimonial/1.png" alt="1.png"> </div>
            <div class="client_details">
              <h4 class="title">Marvin McKinney</h4>
              <div class="client-postn">Designer</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="testimonial_post text-center">
            <div class="details">
              <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
            </div>
            <div class="thumb"> <img src="images/testimonial/2.png" alt="2.png"> </div>
            <div class="client_details">
              <h4 class="title">Theresa Webb</h4>
              <div class="client-postn">Host</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="testimonial_post text-center">
            <div class="details">
              <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
            </div>
            <div class="thumb"> <img src="images/testimonial/3.png" alt="3.png"> </div>
            <div class="client_details">
              <h4 class="title">Robert Fox</h4>
              <div class="client-postn">Reporter</div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="testimonial_post text-center">
            <div class="details">
              <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
            </div>
            <div class="thumb"> <img src="images/testimonial/4.png" alt="4.png"> </div>
            <div class="client_details">
              <h4 class="title">Guy Hawkins</h4>
              <div class="client-postn">Developer</div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</section>

	<!-- Our Partners -->
	<section id="our-partners" class="our-partners bt1 pt60 pb60">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-2">
					<div class="our_partner">
						<img src="images/partners/1.png" alt="1.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2">
					<div class="our_partner">
						<img src="images/partners/2.png" alt="2.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2">
					<div class="our_partner">
						<img src="images/partners/3.png" alt="3.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2">
					<div class="our_partner">
						<img src="images/partners/4.png" alt="4.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2">
					<div class="our_partner">
						<img src="images/partners/5.png" alt="5.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2">
					<div class="our_partner">
						<img src="images/partners/6.png" alt="6.png">
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

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:30 GMT -->
</html>