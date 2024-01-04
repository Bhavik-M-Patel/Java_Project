<?php
    require './class/apclass.php';
   
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-listing-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:01 GMT -->
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
  <header class="header-nav menu_style_home_one style2 menu_boxshadow navbar-scrolltofixed stricky main-menu">
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
                <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign in</a></li>
                <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a></li>
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
                      <a class="btn-fpswd float-right text-thm" href="#">Forgot</a></div>
                    <button type="submit" class="btn btn-log btn-block btn-thm mt20">Sign in</button>
                    <div class="row mt10">
                      <div class="col-lg-12">
                        <div class="user_log_info">
                          <p>Username:<span>agency or agent</span></p>
                          <p>Password:<span>demo</span></p>
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
        <div class="main_logo_home2 text-center"><img class="nav_logo_img img-fluid mt10" src="images/header-logo.svg" alt="header-logo.svg"><span class="mt15">Houzing</span></div>
        <ul class="menu_bar_home2">
          <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"></a></li>
          <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
          <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
        </ul>
      </div>
    </div>
    <?php
        include './mobileheader.php';
    ?>
  </div>

  <!-- Listing Grid View -->
  <section class="our-listing pb30-991">
     <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="listing_sidebar dn db-lg">
            <div class="sidebar_content_details style3">
              <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
              <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                <div class="siderbar_widget_header">
                  <h4 class="title mb0">Find Your New Home<a class="filter_closed_btn float-right" href="#"><small>x</small><span class="flaticon-close"></span></a></h4>
                </div>
                <div class="sidebar_advanced_search_widget">
                  <ul class="sasw_list mb0">
                    <li class="search_area">
                      <div class="form-group">
                        <input type="text" class="form-control form_control" placeholder="Enter Keyword">
                      </div>
                    </li>
                    <li>
                      <div class="search_option_two">
                        <div class="sidebar_select_options">
                          <select class="selectpicker w100 show-tick">
                            <option value="">Status</option>
                            <option value="Active">Active</option>
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="search_option_two">
                        <div class="sidebar_select_options">
                          <select class="selectpicker w100 show-tick">
                            <option>Type</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Condo">Flat</option>
                             <option value="Condo">Houses</option>
                            <option value="Studio">Row house</option>
                            <option value="Villa">Villa</option>
                          </select>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="search_option_two">
                        <div class="sidebar_select_options">
                          <select class="selectpicker w100 show-tick">
                            <option>All Cities</option>
                            <option value="London">Ahmedabd</option>
                            <option value="NewYork">Surat</option>
                            <option value="Paris">Rajkot</option>
                            <option value="Istanbul">Vadodara</option>
                            <option value="Amsterdam">Ghandinagar</option>
                         </select>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="search_option_two">
                        <div class="sidebar_select_options">
                          <select class="selectpicker w100 show-tick">
                            <option>Bedrooms</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5....</option>
                          </select>
                        </div>
                      </div>
                    </li>
                    <li class="search_area">
                      <div class="form-group">
                        <input type="text" class="form-control form_control" placeholder="Min. Area">
                      </div>
                    </li>
                    <li class="search_area">
                      <div class="form-group">
                        <input type="text" class="form-control form_control" placeholder="Max. Area">
                      </div>
                    </li>
                    <li class="search_area">
                      <div class="form-group">
                        <input type="text" class="form-control form_control" placeholder="Property ID">
                      </div>
                    </li>
                    <li>
                      <div class="sidebar_priceing_slider_mobile">
                        <div class="wrapper">
                          <p class="mb0">Price Range</p>
                          <div class="10,000 99,000 " id="slider"></div>
                          <span id="slider-range-value1">10,000 99,000</span>
                          <span id="slider-range-value2">10,000,99,000</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="sidebar_accordion_widget mt40">
                        <div id="accordion2" class="panel-group">
                          <div class="panel">
                            <div class="panel-heading">
                              <h4 class="panel-title other_fet">
                                <a href="#panelBodyRating2" class="accordion-toggle link text-thm" data-toggle="collapse" data-parent="#accordion"><i class="icon fa fa-plus"></i> Other Features</a>
                              </h4>
                            </div>
                            <div id="panelBodyRating2" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul class="ui_kit_checkbox selectable-list">
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck10">
                                      <label class="custom-control-label mb0" for="customCheck10">Air Conditioning</label>
                                    </div>
                                  </li>
                               
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck13">
                                      <label class="custom-control-label mb0" for="customCheck13">Gym</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck14">
                                      <label class="custom-control-label mb0" for="customCheck14">Laundry</label>
                                    </div>
                                  </li>
                                
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck16">
                                      <label class="custom-control-label mb0" for="customCheck16">Microwave</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck17">
                                      <label class="custom-control-label mb0" for="customCheck17">Outdoor Shower</label>
                                    </div>
                                  </li>
                                  <li class="mb0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck18">
                                      <label class="custom-control-label mb0" for="customCheck18">Refrigerator</label>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="search_option_button text-center mt25">
                        <button type="submit" class="btn btn-block btn-thm mb25">Search</button>
                        <ul class="mb0">
                          <li class="list-inline-item mb0"><a href="#"><span class="vam flaticon-return mr10"></span> Reset Search</a></li>
                          <li class="list-inline-item mb0 ml30"><a href="#"><span class="vam flaticon-heart-shape-outline mr10"></span> Saved Search</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_content style2 mb100">
            <h2 class="breadcrumb_title">Homes For Sale</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Listing</li>
            </ol>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="dn db-lg mb30-md text-center">
            <div id="main2"><a id="open2" class="filter_open_btn btn-thm" href="#">Show Filter <span class="flaticon-setting-lines ml10"></span></a></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3">
          <div class="sidebar_listing_grid1 mb30 dn-lg">
            <div class="sidebar_listing_list">
              <div class="sidebar_advanced_search_widget">
                <ul class="sasw_list mb0">
                  <li><h4 class="mb0">Find Your New Home</h4></li>
                  <li class="search_area">
                    <div class="form-group">
                      <input type="text" class="form-control form_control" placeholder="Enter Keyword">
                    </div>
                  </li>
                  <li>
                    <div class="search_option_two">
                      <div class="sidebar_select_options">
                        <select class="selectpicker w100 show-tick">
                          <option value="">Status</option>
                          <option value="Active">Active</option>
                          <option value="Pending">Pending</option>
                          <option value="Approved">Approved</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="search_option_two">
                      <div class="sidebar_select_options">
                        <select class="selectpicker w100 show-tick">
                          <option>Type</option>
                          <option value="Apartment">Apartment</option>
                          <option value="Flat">Flat</option>
                          <option value="Raw House">Houses</option>
                          <option value="Villa">Row house</option>
                          <option value="Duplex">Villa</option>
                        </select>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="search_option_two">
                      <div class="sidebar_select_options">
                        <select class="selectpicker w100 show-tick">
                          <option>All Cities</option>
                          <option value="London">Ahmedabad</option>
                          <option value="NewYork">Surat</option>
                          <option value="Paris">Rajkot</option>
                          <option value="Istanbul">Vadodara</option>
                          <option value="Amsterdam">Ghandinagar</option>
                         
                        </select>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="search_option_two">
                      <div class="sidebar_select_options">
                        <select class="selectpicker w100 show-tick">
                          <option>Bedrooms</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                  </li>
                  <li class="search_area">
                    <div class="form-group">
                      <input type="text" class="form-control form_control" placeholder="Min. Area">
                    </div>
                  </li>
                  <li class="search_area">
                    <div class="form-group">
                      <input type="text" class="form-control form_control" placeholder="Max. Area">
                    </div>
                  </li>
                  <li class="search_area">
                    <div class="form-group">
                      <input type="text" class="form-control form_control" placeholder="Property ID">
                    </div>
                  </li>
                  <li>
                    <div class="sidebar_priceing_slider_desktop">
                      <div class="wrapper">
                        <p class="mb0">Price Range</p>
                        <div class="slider-range"></div>
                        <input type="text" class="amount" placeholder="₹10,000"> 
                        <input type="text" class="amount2" placeholder="₹99,000">
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sidebar_accordion_widget mt40">
                      <div id="accordion" class="panel-group">
                        <div class="panel">
                          <div class="panel-heading">
                            <h4 class="panel-title other_fet">
                              <a href="#panelBodyRating" class="accordion-toggle link text-thm" data-toggle="collapse" data-parent="#accordion"><i class="icon fa fa-plus"></i> Other Features</a>
                            </h4>
                          </div>
                          <div id="panelBodyRating" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul class="ui_kit_checkbox selectable-list">
                                <li class="mb0">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label mb0" for="customCheck1">Air Conditioning</label>
                                  </div>
                                </li>
                               
                              
                                <li class="mb0">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label mb0" for="customCheck4">Gym</label>
                                  </div>
                                </li>
                                <li class="mb0">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label mb0" for="customCheck5">Laundry</label>
                                  </div>
                                </li>
                                 <li class="mb0">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label mb0" for="customCheck7">Microwave</label>
                                  </div>
                                </li>
                                <li class="mb0">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label mb0" for="customCheck8">Outdoor Shower</label>
                                  </div>
                                </li>
                                <li class="mb0">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                                    <label class="custom-control-label mb0" for="customCheck9">Refrigerator</label>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="search_option_button text-center mt25">
                      <button type="submit" class="btn btn-block btn-thm mb25">Search</button>
                      <ul class="mb0">
                        <li class="list-inline-item mb0"><a href="#"><span class="vam flaticon-return mr10"></span> Reset Search</a></li>
                        <li class="list-inline-item mb0 ml30"><a href="#"><span class="vam flaticon-heart-shape-outline mr10"></span> Saved Search</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
              
              
            <div class="terms_condition_widget">
              <h4 class="title mb10">Featured Properties</h4>
              <div class="sidebar_feature_property_slider">
                <div class="item">
                  <div class="feat_property sidebar mb10">
                    <div class="thumb">
                      <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                      <div class="thmb_cntnt">
                        <ul class="tag mb0">
                          <li class="list-inline-item"><a href="#">For Rent</a></li>
                          <li class="list-inline-item"><a href="#">Featured</a></li>
                        </ul>
                        <h4 class="title posr color-white">New Apartment Nice Wiew</h4>
                        <a class="fp_price" href="#">₹13,500/mo <small><del>₹22,800/mo</del></small></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="feat_property sidebar mb10">
                    <div class="thumb">
                        <img class="img-whp" src="images/Bulding1/8.jpg" alt="8.jpg">
                      <div class="thmb_cntnt">
                        <ul class="tag mb0">
                          <li class="list-inline-item"><a href="#">For Rent</a></li>
                          <li class="list-inline-item"><a href="#">Featured</a></li>
                        </ul>
                        <h4 class="title posr color-white">New Apartment</h4>
                        <a class="fp_price" href="#">₹7,500/mo <small><del>₹23,800/mo</del></small></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="feat_property sidebar mb10">
                    <div class="thumb">
                        <img class="img-whp" src="images/Bulding1/10.jpg" alt="10.jpg">
                      <div class="thmb_cntnt">
                        <ul class="tag mb0">
                          <li class="list-inline-item"><a href="#">For Rent</a></li>
                          <li class="list-inline-item"><a href="#">Featured</a></li>
                        </ul>
                        <h4 class="title posr color-white">Luxury Family house's</h4>
                        <a class="fp_price" href="#">₹37,500/mo <small><del>₹42,800/mo</del></small></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="feat_property sidebar mb10">
                    <div class="thumb">
                        <img class="img-whp" src="images/Bulding1/12.jpg" alt="12.jpg">
                      <div class="thmb_cntnt">
                        <ul class="tag mb0">
                          <li class="list-inline-item"><a href="#">For Rent</a></li>
                          <li class="list-inline-item"><a href="#">Featured</a></li>
                        </ul>
                        <h4 class="title posr color-white">New Family Apartment </h4>
                        <a class="fp_price" href="#">₹24,500/mo <small><del>₹52,800/mo</del></small></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9">
          <div class="row">
            <div class="listing_filter_row dif db-767">
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                <div class="left_area tac-xsd mb30-767">
                  <p class="mb0 mt10"><span class="heading-color">175</span> Showing</p>
                </div>
              </div>
              <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                <div class="listing_list_style tac-767">
                  <ul class="mb0">
                    <li class="list-inline-item dropdown text-left bb2"><span class="stts">Short by:</span>
                      <select class="selectpicker">
                        <option>Newest property</option>
                        <option>Most Recent</option>
                        <option>Recent</option>
                        <option>Best Selling</option>
                        <option>Old Review</option>
                      </select>
                    </li>
                    <li class="list-inline-item gird"><a href="#"><span class="fa fa-th-large"></span></a></li>
                    <li class="list-inline-item list"><a href="#"><span class="fa fa-th-list"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
            
            
            <div class='row'>
                <?php
               
                   $selectq = mysqli_query($connection, "select * from tbl_property") or die(mysqli_error($connection));
                                    
                                    while($ownerrow = mysqli_fetch_array($selectq))
                                    {
                                        echo "
          
                                              <div class='col-lg-6 col-xl-4'>
                                              <div class='feat_property'>
                                              <div class='thumb'>
                                              <img class='img-whp' src='images/property/fl1.jpg' alt='fl1.jpg'>
                                              <div class='thmb_cntnt'>
                                              <ul class='tag mb0'>
                                              <li class='list-inline-item'><a href='#'>FEATURED</a></li>
                                              </ul>
                                              <ul class='tag2 mb0'>
                                              <li class='list-inline-item'><a href='#'>FOR SALE</a></li>
                                              </ul>
                                              </div>
                                              <div class='thmb_cntnt2'>
                                              <ul class='listing_gallery mb0'>
                                              <li class='list-inline-item'><a class='text-white' href='#'><span class='flaticon-photo-camera mr5'></span> 22</a></li>
                                              <li class='list-inline-item'><a class='text-white' href='#'><span class='flaticon-play-button mr5'></span> 3</a></li>
                                              </ul>
                                              </div>
                                              </div>
                                              </div>
                                              </div>

                                              ";
                                    }
                                    
                ?>
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
<script src="js/pricing-slider.js"></script>
<script src="js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-listing-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:07 GMT -->
</html>