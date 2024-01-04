<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-terms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:38 GMT -->
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
                 
                      <a href="listingmap.php">Listing map</a>
                
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
          <li class="list-inline-item list_c"><a href="#"><span class="flaticon-phone mr7"></span> (+91)1234567890</a></li>
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
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="E-mail/Mobile No.">
                    </div>
                    <div class="form-group mb5">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                      <label class="custom-control-label" for="exampleCheck2">Remember me</label>
                      <a class="btn-fpswd float-right text-thm" href="forgetpassword.php">Forgot </a>
                    </div>
                    <button type="submit" class="btn btn-log btn-block btn-thm mt20">Sign in</button>
                    
                  </form>
                </div>
              </div>
            </div>
            <div class="row mt30 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="col-lg-12">
                <div class="sign_up_form">
                    <form action="index.php">
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
                      <input type="number" class="form-control" placeholder="Mobile Number">
                    </div>
                    <!--<div class="form-group input-group">
                      <select class="selectpicker form-control" data-width="100%">
                        <option data-tokens="banking">User role</option>
                        <option data-tokens="digital&creative">User role 2</option>
                        <option data-tokens="retail">User role 3</option>
                        <option data-tokens="humanresource">User role 4</option>
                      </select>
                    </div>-->
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
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
        <li><span>Home</span>
          <ul>
            <li><a href="index-2.html">Home V1</a></li>
            <li><a href="index2.html">Home V2</a></li>
            <li><a href="index3.html">Home V3</a></li>
            <li><a href="index4.html">Home V4</a></li>
            <li><a href="index5.html">Home V5</a></li>
            <li><a href="index6.html">Home V6</a></li>
            <li><a href="index7.html">Home V7</a></li>
            <li><a href="index8.html">Home V8</a></li>
            <li><a href="index9.html">Home V9</a></li>
            <li><a href="index10.html">Home V10</a></li>
          </ul>
        </li>
				<li><span>Listing</span>
					<ul>
						<li><span>Listing Styles</span>
							<ul>
                <li><a href="page-listing-v1.html">Listing v1</a></li>
                <li><a href="page-listing-v2.html">Listing v2</a></li>
                <li><a href="page-listing-v3.html">Listing v3</a></li>
                <li><a href="page-listing-v4.html">Listing v4</a></li>
                <li><a href="page-listing-v5.html">Listing v5</a></li>
                <li><a href="page-listing-v6.html">Listing v6</a></li>
                <li><a href="page-listing-all.html">Listing All</a></li>
							</ul>
						</li>
						<li><span>Listing Map</span>
							<ul>
                <li><a href="page-listing-v7.html">Map v1</a></li>
                <li><a href="page-listing-v8.html">Map v2</a></li>
                <li><a href="page-listing-v9.html">Map v3</a></li>
                <li><a href="page-listing-v10.html">Map v4</a></li>
                <li><a href="page-listing-v11.html">Map v5</a></li>
                <li><a href="page-listing-v12.html">Map v6</a></li>
                <li><a href="page-listing-v13.html">Map v7</a></li>
							</ul>
						</li>
						<li><span>Listing Single</span>
							<ul>
                <li><a href="page-listing-single-v1.html">Single V1</a></li>
                <li><a href="page-listing-single-v2.html">Single V2</a></li>
                <li><a href="page-listing-single-v3.html">Single V3</a></li>
                <li><a href="page-listing-single-v4.html">Single V4</a></li>
                <li><a href="page-listing-single-v5.html">Single V5</a></li>
                <li><a href="page-listing-single-v6.html">Single V6</a></li>
                <li><a href="page-listing-single-v7.html">Single V7</a></li>
                <li><a href="page-listing-single-v8.html">Single V8</a></li>
							</ul>
						</li>
            <li><span>User Detils</span>
              <ul>
                <li><a href="page-dashboard.html">Dashboard</a></li>
                <li><a href="page-dashboard-profile.html">My Profile</a></li>
                <li><a href="page-dashboard-property.html">My Listings</a></li>
                <li><a href="page-dashboard-new-property.html">New Listings</a></li>
                <li><a href="page-dashboard-favorites.html">Favorites</a></li>
                <li><a href="page-dashboard-save-search.html">Save Search</a></li>
                <li><a href="page-dashboard-invoices.html">My Invoice</a></li>
                <li><a href="page-dashboard-message.html">Inbox</a></li>
                <li><a href="page-dashboard-logout.html">Logout</a></li>
              </ul>
            </li>
					</ul>
				</li>
        <li><span>Pages</span>
					<ul>
						<li><span>Shop</span>
							<ul>
	              <li><a href="page-shop.html">Shop Pages</a></li>
	              <li><a href="page-shop-single.html">Shop Single</a></li>
	              <li><a href="page-shop-cart.html">Cart</a></li>
	              <li><a href="page-shop-checkout.html">Checkout</a></li>
	              <li><a href="page-shop-order.html">Order</a></li>
							</ul>
						</li>
            <li><a href="page-about.html">About Us</a></li>
				<li><span>Blog</span>
					<ul>
            <li><a href="page-blog-grid.html">Blog Grid</a></li>
            <li><a href="page-blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
            <li><a href="page-blog-details.html">Blog Details</a></li>
            <li><a href="page-blog-list.html">Blog List</a></li>
            <li><a href="page-blog-single.html">Blog Single</a></li>
            <li><a href="page-blog-single2.html">Blog Single v2</a></li>
					</ul>
				</li>
              <li><a href="page-coming-soon.html">Coming Soon</a></li>
              <li><a href="page-gallery.html">Gallery</a></li>
              <li><a href="page-faq.html">Faq</a></li>
              <li><a href="page-login.html">My Account</a></li>
              <li><a href="page-pricing.html">Pricing V1</a></li>
              <li><a href="page-compare.html">Compare</a></li>
              <li><a href="page-error.html">404 Page</a></li>
              <li><a href="page-terms.html">Terms and Conditions</a></li>
              <li><a href="page-ui-element.html">UI Elements</a></li>
					</ul>
				</li>
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
						<h2 class="breadcrumb_title">Terms and Condition</h2>
						<ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Terms and Condition</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Terms & Conditions -->
	<section class="our-terms pb70">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xl-9">
					<div class="terms_condition_grid">
						<div class="grids mb60">
							<h4 class="title">Privacy Policy</h4>
				    	<p class="mb25">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula.</p>
			        <p class="mb0">Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Ut et adipiscing erat. Curabitur this is a text link libero tempus congue.</p>
						</div>
						<div class="grids mb30">
							<h4 class="title">Our Terms</h4>
				    	<p class="mb25">Nullam tempus sollicitudin cursus. Nulla elit mauris, volutpat eu varius malesuada, pulvinar eu ligula. Ut et adipiscing erat. Curabitur adipiscing erat vel libero tempus congue. Nam pharetra interdum vestibulum. Aenean gravida mi non aliquet porttitor. Praesent dapibus, nisi a faucibus tincidunt, quam dolor condimentum metus, in convallis libero ligula ut eros.</p>
              <p class="mb25">Nullam this is a link nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Nulla elit mauris, volutpat eu varius malesuada, pulvinar eu ligula. Ut et adipiscing erat. Curabitur adipiscing erat vel libero tempus congue. Nam pharetra interdum vestibulum. Aenean gravida mi non aliquet porttitor. Praesent dapibus, nisi a faucibus tincidunt, quam dolor condimentum metus, in convallis libero ligula ut</p>
              <p class="mb0">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>
						</div>
					</div>
				</div>
        <div class="col-md-4 col-xl-3">
          <div class="terms_condition_widget">
            <div class="widget_list">
              <h5 class="title">Navigation</h5>
              <ul class="list_details">
                <li><a href="#">Welcome Text</a></li>
                <li><a href="#">Our Terms</a></li>
                <li><a href="#">Conditions</a></li>
                <li><a href="#">Your Privacy</a></li>
                <li><a href="#">Informations We Collect</a></li>
              </ul>
            </div>
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
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-terms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:38 GMT -->
</html>