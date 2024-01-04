<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, google maps, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="STAYSEARCH">
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


</head>
<body>
<div class="wrapper">
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
 <?php
 
     include './header.php';
 
 ?>
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
                    <form action="index.php">
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
        <div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="images/header-logo.svg" alt="header-logo.svg"> <span class="mt15"></span> </div>
        <ul class="menu_bar_home2">
          <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"></a></li>
          <li class="list-inline-item"><a class="muser_icon" href="#" data-toggle="modal" data-target="#logInModal"><span class="flaticon-user"></span></a></li>
          <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
        </ul>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <?php
     include './mobileheader.php';
    ?>
  </div>
  
  <!-- Search Field Modal -->
  <section class="modal fade search_dropdown" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">ADVANDEC SEARCH</h6>
          <a class="closer" data-dismiss="modal" aria-label="Close" href="#"><span aria-hidden="true"><img src="images/icons/close.svg" alt="close.svg"></span></a>
        </div>
        <div class="modal-body">
          <div class="popup_modal_wrapper">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="adv_src_pmodal">
                    <h6 class="title">Bathrooms</h6>
                    <div class="ui_kit_select_box">
                      <select class="selectpicker custom-select-lg mb20">
                        <option value="">Select Bathrooms</option>
                        <option value="One">1</option>
                        <option value="Two">2</option>
                        <option value="Three">3</option>
                        <option value="Four">4</option>
                        <option value="Five">5</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="adv_src_pmodal">
                    <h6 class="title">Beds</h6>
                    <div class="ui_kit_select_box">
                      <select class="selectpicker custom-select-lg mb20">
                        <option value="">Select Beds</option>
                        <option value="One">1</option>
                        <option value="Two">2</option>
                        <option value="Three">3</option>
                        <option value="Four">4</option>
                        <option value="Five">5</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb30-md">
                  <div class="adv_src_pmodal">
                    <h6 class="title">Area (sq ft)</h6>
                    <div class="form-group">
                      <input type="text" class="form-control area_input float-left" placeholder="Min. Area">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control area_input float-right" placeholder="Max. Area">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="adv_src_pmodal">
                    <h6 class="title">STATUS</h6>
                    <div class="ui_kit_select_box">
                      <select class="selectpicker custom-select-lg mb20">
                        <option value="">Select Status</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                        <option value="Pending">Pending</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb30-md">
                  <div class="adv_src_pmodal">
                    <h6 class="title">Price</h6>
                    <div class="mt20" id="slider"></div>
                    <span id="slider-range-value1">₹15,000</span>
                    <span id="slider-range-value2">₹1,99,000</span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="adv_src_pmodal">
                    <h6 class="title">PROPERTY ID</h6>
                    <input type="text" class="form-control property_id_input" placeholder="HZZS 03492">
                  </div>
                </div>
              </div>
              <div class="row mt30">
                <div class="col-lg-12">
                  <div class="adv_src_pmodal">
                    <h6><span class="title">Amenities</span> <a class="tdu text-thm fz13 ml10" href="#">Select / Deselect All</a></h6>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="adv_src_pmodal mb20">
                    <div class="ui_kit_checkbox">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM1">
                        <label class="custom-control-label" for="customCheckM1">Air Conditioning</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM2">
                        <label class="custom-control-label" for="customCheckM2">Barbeque</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM3">
                        <label class="custom-control-label" for="customCheckM3">Dryer</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM4">
                        <label class="custom-control-label" for="customCheckM4">Gym</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM5">
                        <label class="custom-control-label" for="customCheckM5">Laundry</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="adv_src_pmodal mb20">
                    <div class="ui_kit_checkbox">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM6">
                        <label class="custom-control-label" for="customCheckM6">Lawn</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM7">
                        <label class="custom-control-label" for="customCheckM7">Microwave</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM8">
                        <label class="custom-control-label" for="customCheckM8">Outdoor Shower</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM9">
                        <label class="custom-control-label" for="customCheckM9">Refrigerator</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM10">
                        <label class="custom-control-label" for="customCheckM10">Stunning views</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="adv_src_pmodal mb20">
                    <div class="ui_kit_checkbox">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM11">
                        <label class="custom-control-label" for="customCheckM11">Waterfront</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM12">
                        <label class="custom-control-label" for="customCheckM12">Parking</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM13">
                        <label class="custom-control-label" for="customCheckM13">Doorman</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM14">
                        <label class="custom-control-label" for="customCheckM14">Central Heating</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckM15">
                        <label class="custom-control-label" for="customCheckM15">Cleaning Service</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="adv_src_pmodal">
                    <button class="btn btn-block btn-thm"><span class="fa fa-search mr15"></span>Show 250+ PROPERTY</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Home Design -->
  <section class="home-one home1-overlay bg-home1">
    <div class="container">
      <div class="row posr">
        <div class="col-lg-12">
          <div class="home_content home1 custom_width">
            <div class="home-text text-center">
              <p class="fz18 color-white">It's great to be Property!</p>
              <h2 class="fz50">Find Your Perfect your Property</h2>
            </div>
            <div class="home_tabs">
              <ul class="nav justify-content-center nav-tabs" id="myTab2" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="buy-tab" data-toggle="tab" href="listing.php" role="tab" aria-controls="buy" aria-selected="true">Buy</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="rent-tab" data-toggle="tab" href="listing.php" role="tab" aria-controls="rent" aria-selected="false">Rent</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="sold-tab" data-toggle="tab" href="#sold" role="tab" aria-controls="sold" aria-selected="false">Sold</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent2">
                <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                  <div class="home_adv_srch_opt">
                    <div class="wrapper">
                      <div class="home_adv_srch_form">
                        <form class="bgc-white p20">
                          <div class="form-row align-items-center">
                            <div class="col-auto home_form_input mb15-md">
                              <div class="form-group style2 mb-2 pl10 pl0-lg">
                                <label>TYPE</label>
                                <div class="select-wrap style2-dropdown">
                                  <select class="selectpicker show-tick" multiple>
                                      <form action="listing.php">
                                    <option value="Apartment">Apartment</option>
                                    <option value="Flat">Flat</option>
                                    <option value="Raw House">Raw house</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Villa">Duplex</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto home_form_input mb15-md">
                              <div class="form-group style2 mb-2 pl10 pl0-lg">
                                <label>LOCATION</label>
                                <div class="select-wrap style2-dropdown">
                                  <select class="selectpicker">
                                    <option value="">All Cities</option>
                                    <option value="">Ahemdabad</option>
                                    <option value="">Surat</option>
                                    <option value="">Vadodra</option>
                                    <option value="">Rajkot</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto home_form_input mb15-md">
                              <div class="form-group style1 mb-2 ml0-767">
                                <label>SEARCH</label>
                                <div class="select-wrap style1-dropdown">
                                  <select name="lang" class="form-control js-searchBox">
                                    <option value="">find your property</option>
                                    <option value="">Apartment</option>
                                    <option value="">villa</option>
                                    <option value="">Flat</option>
                                    <option value=""<a href="listing.php"></a>View All Results</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto home_form_adv_srch_form_btn mb20-md">
                              <div class="adv_srch_btn dropbtn ml0-767" data-toggle="modal" data-target="#staticBackdrop">
                                <i class="flaticon-setting-lines mr10 mt10 mt0-md flr-520"></i>
                                Advanced <br class="dn-991"><a href="listing.php"> Search</a>
                              </div>
                            </div>
                            <div class="col-auto home_form_input2">
                              <button type="submit" class="btn search-btn ml0-767"><span class="fa fa-search"></span> Search</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                  <div class="home_adv_srch_opt">
                    <div class="wrapper">
                      <div class="home_adv_srch_form">
                        <form class="bgc-white p20">
                          <div class="form-row align-items-center">
                            <div class="col-auto home_form_input mb15-md">
                              <div class="form-group style2 mb-2 pl10 pl0-lg">
                                <label>TYPE</label>
                                <div class="select-wrap style2-dropdown">
                                  <select class="selectpicker show-tick" multiple>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Flat">Flat</option>
                                    <option value="Raw House">Raw house</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Duplex">Duplex</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto home_form_input mb15-md">
                              <div class="form-group style2 mb-2 pl10 pl0-lg">
                                <label>LOCATION</label>
                                <div class="select-wrap style2-dropdown">
                                  <select class="selectpicker">
                                    <option value="">All Cities</option>
                                    <option value="">Ahemdabad</option>
                                    <option value="">Surat</option>
                                    <option value="">Vadodra</option>
                                    <option value="">Rajkot</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto home_form_input mb15-md">
                              <div class="form-group style1 mb-2 ml0-767">
                                <label>SEARCH</label>
                                <div class="select-wrap style1-dropdown">
                                  <select name="lang" class="form-control js-searchBox">
                                    <option value="">Find your property</option>
                                    <option value="">Apartment</option>
                                    <option value="">Villa</option>
                                    <option value="">Flat</option>
                                    <option value="">View All Results</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto home_form_adv_srch_form_btn mb20-md">
                              <div class="adv_srch_btn dropbtn ml0-767" data-toggle="modal" data-target="#staticBackdrop">
                                <i class="flaticon-setting-lines mr10 mt10 mt0-md flr-520"></i>
                                Advanced <br class="dn-991"> Search
                              </div>
                            </div>
                            <div class="col-auto home_form_input2">
                              <button type="submit" class="btn search-btn ml0-767"><span class="fa fa-search"></span> Search</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
                  <div class="home_adv_srch_opt">
                    <div class="wrapper">
                      <div class="home_adv_srch_form">
                        <form class="bgc-white p20">
                          <div class="form-row align-items-center">
                            <div class="col-auto home_form_input mb15-md">
                              <div class="form-group style2 mb-2 pl10 pl0-lg">
                                <label>TYPE</label>
                                <div class="select-wrap style2-dropdown">
                                  <select class="selectpicker show-tick" multiple>
                                   <option value="Apartment">Apartment</option>
                                    <option value="Flat">Flat</option>
                                    <option value="Raw House">Row Huse</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Duplex">Duplex</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto home_form_input mb15-md">
                              <div class="form-group style2 mb-2 pl10 pl0-lg">
                                <label>LOCATION</label>
                                <div class="select-wrap style2-dropdown">
                                  <select class="selectpicker">
                                    <option value="">All Cities</option>
                                    <option value="NewYork">Ahemdabad</option>
                                    <option value="London">Surat</option>
                                    <option value="Paris">Vadodra</option>
                                    <option value="Istanbul">Rajkot</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto home_form_input mb15-md">
                              <div class="form-group style1 mb-2 ml0-767">
                                <label>SEARCH</label>
                                <div class="select-wrap style1-dropdown">
                                  <select name="lang" class="form-control js-searchBox">
                                    <option value="">Choose For Sold</option>
                                    <option value="EatonGarthPenthouse1">Apartment</option>
                                    <option value="EatonGarthPenthouse2">Flat</option>
                                    <option value="EatonGarthPenthouse3">Villa</option>
                                    <option value="Hotels">View All Results</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto home_form_adv_srch_form_btn mb20-md">
                              <div class="adv_srch_btn dropbtn ml0-767" data-toggle="modal" data-target="#staticBackdrop">
                                <i class="flaticon-setting-lines mr10 mt10 mt0-md flr-520"></i>
                                Advanced <br class="dn-991"> Search
                              </div>
                            </div>
                            <div class="col-auto home_form_input2">
                              <button type="submit" class="btn search-btn ml0-767"><span class="fa fa-search"></span> Search</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Feature Properties -->
  <section id="feature-property" class="feature-property">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Discover Our Featured Listings</h2>
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="popular_listing_slider1">
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="images/property/fl1.jpg" alt="fl1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Modern Villa With Nice View</a></h4>
                    <p>Vastral,Ahmedabad,Gujarat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>3 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1050 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><small><del class="body-color">₹35,465/mo</del></small><br>
                        <span class="heading-color fw600">₹17,700/mo</span></a></li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="images/property/fl2.jpg" alt="fl2.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Fully Wooden Apartment</a></h4>
                    <p>Thaltej,Ahmedabad,Gujarat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>3 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>2 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>925 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹29,650/mo</del></small><br>
                          <span class="heading-color fw600">₹14,500/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="images/property/fl3.jpg" alt="fl3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Duplex With Modern Technology</a></h4>
                    <p>Satellite,Ahmedabad,Gujarat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹45,320/mo</del></small><br>
                          <span class="heading-color fw600">₹21,780/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/7.jpg" alt="fl4.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Mountain Look Apartment</a></h4>
                    <p>SG Highway,Gota,Ahmedabad,Gujarat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>3 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>4 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>950 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹32,100/mo</del></small><br>
                          <span class="heading-color fw600">₹18,970/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/8.jpg" alt="30.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Flat With Modern Facilities </a></h4>
                    <p>Odhav,Ahmedabad,Gujarat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>2 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>3 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>850 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><small><del class="body-color">₹27,300/mo</del></small><br>
                        <span class="heading-color fw600">₹13,500/mo</span></a></li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/9.jpg" alt="18.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                    <p>Satellite,Ahmedabad,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1175 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹45,500/mo</del></small><br>
                          <span class="heading-color fw600">₹31,500/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="images/property/bdh58.jpg" alt="bdh58.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">green nature house</a></h4>
                    <p>Naranpura,Ahmedabad,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>975 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹15,800/mo</del></small><br>
                          <span class="heading-color fw600">₹11,250/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="images/property/lls75.jpg" alt="fl1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                    <p>Vastral,Ahmedabad,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>875 Sq Ft</a></li>
                     </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹75,800/mo</del></small><br>
                          <span class="heading-color fw600">₹53,900/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/4.jpeg" alt="4.jpeg"/>
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Raw House With Nice Look </a></h4>
                    <p>Naroda,Ahmedabad,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>3 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>4 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1275 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><small><del class="body-color">₹39,800/mo</del></small><br>
                        <span class="heading-color fw600">₹27,500/mo</span></a></li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/10.jpg" alt="10.jpg"/>
                     
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Modern Interior House</a></h4>
                    <p>Vastrapur,Ahmedabad,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>3 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>4 Bath</a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1225 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹65,800/mo</del></small><br>
                          <span class="heading-color fw600">₹54,250/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/11.jpg" alt="11.jpg"/>
                      
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Natural feel like a house</a></h4>
                    <p>Bopal,Ahmedabad,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹81,800/mo</del></small><br>
                          <span class="heading-color fw600">₹68,300/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="images/property/fl4.jpg" alt="fl4.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Flat with Good Interior</a></h4>
                    <p>Gota,Ahmedabad,Gujarat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>2 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>3 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>925 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹51,400/mo</del></small><br>
                          <span class="heading-color fw600">₹42,550/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/12.jpg" alt="25.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">New Apartment Natural View</a></h4>
                    <p>Maninagar,Ahmedabad,Gujarat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>3 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>4 Bath</a></li>
                       <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><small><del class="body-color">₹79,800/mo</del></small><br>
                        <span class="heading-color fw600">₹57,500/mo</span></a></li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/13.jpg" alt="13.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Modern Look Raw House</a></h4>
                    <p>Chandkheda,Ahmedabad,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹90,800/mo</del></small><br>
                          <span class="heading-color fw600">₹73,250/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/14.jpg" alt="14.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Modern Villa With Swimming Pool</a></h4>
                    <p>Bopal,Ahmedabad,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                       <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹88,700/mo</del></small><br>
                          <span class="heading-color fw600">₹65,350/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property">
                  <div class="thumb"> <img class="img-whp" src="staysearch/15.jpg" alt="15.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html">Home Around Nature Garden</a></h4>
                    <p>Navrangpura,Ahmedababd,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>3 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>4 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹78,800/mo</del></small><br>
                          <span class="heading-color fw600">₹61,900/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   
  
  <!-- How It Works -->
  <section id="why-chose" class="whychose_us bgc-alice-blue pb70">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Why Choose Us</h2>
            <p>We provide full service at every step.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-xl-3">
          <div class="why_chose_us">
            <div class="icon"> <span class="flaticon-discord"></span> </div>
            <div class="details">
              <h4>Trusted By Thousands</h4>
              <p>With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="why_chose_us">
            <div class="icon"> <span class="flaticon-house"></span> </div>
            <div class="details">
              <h4>Wide Renge Of Properties</h4>
              <p>With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="why_chose_us">
            <div class="icon"> <span class="flaticon-calculator"></span> </div>
            <div class="details">
              <h4>Financing Made Easy</h4>
              <p>With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="why_chose_us">
            <div class="icon"> <span class="flaticon-maps"></span> </div>
            <div class="details">
              <h4>See Neighborhoods</h4>
              <p>With over 1 million+ homes for sale available on the website, Trulia can match you with a house you will want to call home.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Property Cities -->
  <section class="property-city pb70">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Explore Our Properties</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="feature_place_home2_slider">
            <div class="item">
              <div class="properti_city">
                <div class="thumb"><img class="img-fluid w100" src="images/property/ep1.jpg" alt="ep1.jpg"></div>
                <div class="overlay">
                  <div class="details">
                    <div class="icon"><span class="flaticon-home"></span></div>
                    <h4><a href="page-listing-single-v5.html">House</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="properti_city">
                <div class="thumb"><img class="img-fluid w100" src="images/property/ep2.jpg" alt="ep2.jpg"></div>
                <div class="overlay">
                  <div class="details">
                    <div class="icon"><span class="flaticon-apartment"></span></div>
                    <h4><a href="page-listing-single-v5.html">Apartment</a></h4>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="properti_city">
                <div class="thumb"><img class="img-fluid w100" src="images/property/ep4.jpg" alt="ep4.jpg"></div>
                <div class="overlay">
                  <div class="details">
                    <div class="icon"><span class="flaticon-villa"></span></div>
                    <h4><a href="page-listing-single-v5.html">Villa</a></h4>
                  </div>
                </div>
            </div>
            <div class="item">
              <div class="properti_city">
                <div class="thumb"><img class="img-fluid w100" src="images/property/ep5.jpg" alt="ep.jpg"></div>
                <div class="overlay">
                  <div class="details">
                    <div class="icon"><span class="flaticon-living-room"></span></div>
                    <h4><a href="page-listing-single-v5.html">Room</a></h4>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <div class="properti_city">
                <div class="thumb"><img class="img-fluid w100" src="images/property/ep2.jpg" alt="ep2.jpg"></div>
                <div class="overlay">
                  <div class="details">
                    <div class="icon"><span class="flaticon-apartment"></span></div>
                    <h4><a href="page-listing-single-v5.html">Flat</a></h4>
                  </div>
                </div>
              </div>
            </div>
              
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Divider -->
  <section class="divider home-style1 parallax" data-stellar-background-ratio="0.2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="business_exposer text-center">
            <p class="fz16 text-uppercase text-white fw500">TRENDS</p>
            <h2 class="title text-white mb20">Unique Location Is the Week's Most Popular Home</h2>
            <a class="btn exposer_btn" href="#">READ MORE</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- funfact -->
  <section class="our-funfact bb1 pt60 pb30">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">66.180</div>
              <p class="ff_title">Property for sale</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">4.809</div>
              <p class="ff_title">Open property</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">30.469</div>
              <p class="ff_title">Recently solds property</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer text-thm">2.919</div>
              <p class="ff_title">Price </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Recent Property For Rent -->
  <section class="recent-property pb70">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Recent Properties for sale</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="recent_property_slider_home1">
            <div class="item">
              <div class="feat_property recent">
                <div class="thumb"> <img class="img-whp" src="images/property/rp1.jpg" alt="rp1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html"></a>Luxurious villa</h4>
                    <p>Thaltej,Ahmedabad-380060</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><small><del class="body-color">₹54,000/mo</del></small><br>
                        <span class="heading-color fw600">₹30,300/mo</span></a></li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property recent">
                <div class="thumb"> <img class="img-whp" src="images/property/rp2.jpg" alt="rp2.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html"></a>beautiful living home</h4>
                    <p>Narol,Ahmedabad-382405</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1500 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹45,000/mo</del></small><br>
                          <span class="heading-color fw600">₹23,000/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property recent">
                <div class="thumb"> <img class="img-whp" src="images/property/rp3.jpg" alt="rp3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a>##</div>
                    <h4><a href="page-listing-single-v8.html"></a>Latest Modern house</h4>
                    <p>Ishanpur,Ahmedabad-380043</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹57,400/mo</del></small><br>
                          <span class="heading-color fw600">₹34,340/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="feat_property recent">
                <div class="thumb"> <img class="img-whp" src="images/property/rp4.jpg" alt="rp3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">FEATURED</a></li>
                    </ul>
                    <ul class="tag2 mb0">
                      <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="#"><img src="#" alt=""></a></div>
                    <h4><a href="page-listing-single-v8.html"></a>Modern badroom </h4>
                    <p>Ellis Bridge,Ahmedabad,Gujrat</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>              
                      <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item">
                        <a href="#">
                          <small><del class="body-color">₹65,500/mo</del></small><br>
                          <span class="heading-color fw600">₹43,500/mo</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Testimonials -->
  <!--<section class="our-testimonials bg-ptrn1 pb40 pb100-lg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Our Testimonials</h2>
            <p></p>
          </div>
        </div>
      </div>
      <--<div class="row">
        <div class="col-lg-12">
          <div class="testimonial_slider_home1">
            <div class="item">
              <div class="testimonial_post home1 text-center">
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
            <div class="item">
              <div class="testimonial_post home1 text-center">
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
            <div class="item">
              <div class="testimonial_post home1 text-center">
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
            <div class="item">
              <div class="testimonial_post home1 text-center">
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
            <div class="item">
              <div class="testimonial_post home1 text-center">
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
          </div>
        </div>
      </div>
    </div>
  </section>-->
  
  <!-- Property Cities -->
  <section id="property-city" class="property-city pb70 bb1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Explore Cities</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
          <div class="explore_city custom_class_from_520 fl-520">
            <div class="thumb"><img class="img-fluid" src="images\cities/taxshila.jpg" alt="taxshila.jpg"></div>
            <div class="details">
              <h4 class="title"><a href="page-listing-single-v3.html">Elige bridge</a></h4>
              <p>150 Properties</p>
            </div>
          </div>
          <div class="explore_city custom_class_from_520 fr-520">
            <div class="thumb"><img class="img-fluid" src="images/cities/shilp.jpg" alt="shilp.jpg"></div>
            <div class="details">
              <h4 class="title"><a href="page-listing-single-v3.html">Syamal</a></h4>
              <p>125 Properties</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
          <div class="explore_city custom_class_from_520 fl-520">
            <div class="thumb"><img class="img-fluid" src="images/cities/Real place.jpg" alt="Real place.jpg"></div>
            <div class="details">
              <h4 class="title"><a href="page-listing-single-v3.html">Setlite</a></h4>
              <p>121 Properties</p>
            </div>
          </div>
          <div class="explore_city custom_class_from_520 fr-520">
              <div class="thumb"><img class="img-fluid" src="images/cities/Hills and icone.jpg" alt="Hills and icone.jpg"></div>
            <div class="details">
              <h4 class="title"><a href="page-listing-single-v3.html"></a> Vastral view</h4>
              <p>97 Properties</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xl-6">
          <div class="explore_city style2">
              <div class="thumb"><img class="img-fluid" src="images/Bulding1/91_1.jpg" alt="91.jpg"></div>
            <div class="details">
              <h4 class="title"><a href="page-listing-single-v3.html">city of lake</a></h4>
              <p>250 Properties</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xl-2">
          <div class="explore_city custom_class_from_767 fl-767">
              <div class="thumb"><img class="img-fluid" src="images/cities/icone,s.jpg" alt="icone,sjpg"></div>
            <div class="details">
              <h4 class="title"><a href="page-listing-single-v3.html">Icone naroda</a></h4>
              <p>175 Properties</p>
            </div>
          </div>
          <div class="explore_city custom_class_from_767 fr-767">
              <div class="thumb"><img class="img-fluid" src="images/cities/Highway.jpg" alt="Highway.jpg"></div>
            <div class="details">
              <h4 class="title"><a href="page-listing-single-v3.html">Iscone</a></h4>
              <p>65 Properties</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Team -->
 
  
  <!-- Our Blog -->
 
  
  <!<!-- Packages -->
  <section class="our-pricing pt0 pb0">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Pricing Packages</h2>
            <p>We Provides Premium Residents And Services</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="pricing_packages_top mb30">
            <h5 class="save_title">Save 15% on annual package</h5>
            <div class="toggle-btn">
              <span class="pricing_save1">Monthly</span>
              <label class="switch">
                <input type="checkbox" id="checbox" onclick="check()"/>
                <span class="pricing_table_switch_slide round"></span>
              </label>
              <span class="pricing_save2">AnnualSave</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-xl-3">
          <div class="pricing_packages">
            <div class="heading text-center">
              <h5 class="package_title">STARTER</h5>
              <h2 class="text2">₹99</h2>
              <h2 class="text1">₹1009</h2>
            </div>
            <div class="details">
              <ul  class="list">
                <li>Basic Listing Submission</li>
                <li>One Listing</li>
                <li>30 Days Availability</li>
                <li>Limited Support</li>
                <li>Accept Reviews</li>
                <li>Edit Your Listing</li>
              </ul>
              <a href="#" class="btn package_btn">GET STARTED</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="pricing_packages">
            <div class="heading text-center">
              <h5 class="package_title">STANDART</h5>
              <h2 class="text2">₹149</h2>
              <h2 class="text1">₹1509</h2>
            </div>
            <div class="details">
              <ul class="list">
                <li>Basic Listing Submission</li>
                <li>One Listing</li>
                <li>30 Days Availability</li>
                <li>Limited Support</li>
                <li>Accept Reviews</li>
                <li>Edit Your Listing</li>
              </ul>
              <a href="#" class="btn package_btn">GET STARTED</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="pricing_packages">
            <div class="heading text-center">
              <h5 class="package_title">PREMIUM</h5>
              <h2 class="text2">₹199</h2>
              <h2 class="text1">₹2009</h2>
            </div>
            <div class="details">
              <ul class="list">
                <li>Basic Listing Submission</li>
                <li>One Listing</li>
                <li>30 Days Availability</li>
                <li>Limited Support</li>
                <li>Accept Reviews</li>
                <li>Edit Your Listing</li>
              </ul>
              <a href="#" class="btn package_btn">GET STARTED</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="pricing_packages">
            <div class="heading text-center">
              <h5 class="package_title">GOLD</h5>
              <h2 class="text2">₹249</h2>
              <h2 class="text1">₹2509</h2>
            </div>
            <div class="details">
              <ul class="list">
                <li>Basic Listing Submission</li>
                <li>One Listing</li>
                <li>30 Days Availability</li>
                <li>Limited Support</li>
                <li>Accept Reviews</li>
                <li>Edit Your Listing</li>
              </ul>
              <a href="#" class="btn package_btn">GET STARTED</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Start Partners -->
  <section class="start-partners home1 bgc-thm pt70 pb70">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="start_partner text-center">
            <h2>Become a Real Estate company</h2>
            <p>We only work with the best companies around the client.</p>
          </div>
            <div class="parner_reg_btn text-center mt25"> <a class="btn" href="registernow.php">REGISTER NOW</a> </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Footer -->
  <?php
 include './footer.php';
  ?>
  <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a> </div>
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
<script src="js/wow.min.js"></script> 
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:55:28 GMT -->
</html>