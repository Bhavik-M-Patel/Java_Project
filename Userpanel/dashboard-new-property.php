<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-dashboard-new-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:21 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, google maps, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="Houzing - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/fileuploader.css">
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
<style>
</style>
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
				<li><a class="active" href="dashboard-new-property.php"><span class="flaticon-button"></span> Add New Property</a></li>
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
										<li><a href="dashboard-profile.php"><span class="flaticon-user"></span> My Profile</a></li>
										<li><a href="dashboard-property.php"><span class="flaticon-house"></span> My Properties List</a></li>
										<li><a class="active" href="dashboard-new-property.php"><span class="flaticon-button"></span> Add New Property</a></li>
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
								<h2 class="breadcrumb_title">Add New Property</h2>
								<p class=""></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
		          <div class="new_property_form">
								<h4 class="title mb30">Contact Information</h4>
		            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
		              <div class="row">
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Property Title *">
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_type" class="form-control form_control" type="text" placeholder="Type">
		                  </div>
		                </div>
		                <div class="col-sm-12">
		                  <div class="form-group">
		                    <textarea name="form_message" class="form-control" rows="6" placeholder="Property Description *"></textarea>
		                  </div>
		                </div>
		              </div>
		            </form>
		          </div>
						</div>
						<div class="col-lg-12">
		          <div class="new_property_form">
								<h4 class="title mb30">Additional</h4>
		            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
		              <div class="row">
		                <div class="col-md-4">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Property ID">
		                  </div>
		                </div>
		                <div class="col-md-4">
											<div class="ui_kit_select_search add_new_property mb30">
												<select class="selectpicker" data-live-search="true" data-width="100%">
													<option>Parent property</option>
													<option data-tokens="Free">Free</option>
													<option data-tokens="PriceLevel2">Low: ₹</option>
													<option data-tokens="PriceLevel3">Medium: ₹₹</option>
													<option data-tokens="PriceLevel4">High: ₹₹₹</option>
												</select>
											</div>
		                </div>
		                <div class="col-sm-4">
											<div class="ui_kit_select_search add_new_property mb30">
												<select class="selectpicker" data-live-search="true" data-width="100%">
													<option>Status</option>
													<option data-tokens="Active">Active</option>
													<option data-tokens="Pending">Pending</option>
													<option data-tokens="Approved">Approved</option>
													<option data-tokens="Others">Others</option>
												</select>
											</div>
		                </div>
		                <div class="col-sm-4">
											<div class="tags_input mb20">
												<input class="form_control" type="text" data-role="tagsinput" value="rented, sold,sale">
											</div>
		                </div>
		                <div class="col-md-4">
		                  <div class="form-group mb20">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Material">
		                  </div>
		                </div>
		                <div class="col-md-4">
		                  <div class="form-group mb20">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Rooms">
		                  </div>
		                </div>
		                <div class="col-md-4">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Beds">
		                  </div>
		                </div>
		                <div class="col-md-4">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Baths">
		                  </div>
		                </div>
		                <div class="col-md-4">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Garages">
		                  </div>
		                </div>
		                <div class="col-md-4">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Year built">
		                  </div>
		                </div>
		                <div class="col-md-4">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Home area (sqft)">
		                  </div>
		                </div>
		                <div class="col-md-4">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Property address">
		                  </div>
		                </div>
		               </div>
		            </form>
		          </div>
		          <div class="new_property_form">
								<h4 class="title mb30">Price</h4>
		            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
		              <div class="row">
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Price (₹)">
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Price Prefix">
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Price Suffix">
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Price Custom">
		                  </div>
		                </div>
		              </div>
		            </form>
		          </div>
		          <div class="new_property_form">
								<h4 class="title mb30">Location</h4>
		            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
		              <div class="row">
		                <div class="col-md-6">
											<div class="ui_kit_select_search add_new_property mb30">
												<select class="selectpicker" data-live-search="true" data-width="100%">
													<option>Regions</option>
													<option data-tokens="City">City</option>
													<option data-tokens="Capital">Capital</option>
													<option data-tokens="State">State</option>
													<option data-tokens="Village">Village</option>
												</select>
											</div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Friendly Address">
		                  </div>
		                </div>
		                <div class="col-md-12">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Map Location">
		                  </div>
		                </div>
		                <div class="col-md-12">
		                  <div class="form-group mb20">
												<div class="h550 bdrs3" id="map-canvas"></div>
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Latidude">
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Longitude">
		                  </div>
		                </div>
		              </div>
		            </form>
		          </div>
		          <div class="new_property_form">
								<h4 class="title mb30">Media</h4>
		            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
		              <div class="row">
										<div class="col-lg-12">
											<h5 class="fz14 fw600 mb20">Featured image</h5>
											<ul class="mb0">
												<li class="list-inline-item">
													<div class="portfolio_item">
                                                                                                            <img class="img-fluid" src="images/Bulding1//21.jpg" alt="21.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
								    					<a href="#"><span>X</span></a>
								    				</div>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="portfolio_item">
                                                                                                            <img class="img-fluid" src="images/Bulding1/22.jpg" alt="22.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
								    					<a href="#"><span>X</span></a>
								    				</div>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="portfolio_item">
                                                                                                            <img class="img-fluid" src="images/Bulding1/12.jpg" alt="12.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
								    					<a href="#"><span>X</span></a>
								    				</div>
													</div>
												</li>
											</ul>
									  	<div class="upload_file_input_add_remove">
									    	<span class="btn_upload">
													<input type="file" id="imag" title="" class="input-img"/>
									    		<span>UPLOAD FILES</span>
												</span>
									    	<img id="ImgPreview" src="images/resource/upload-img.png" class="preview1" alt=""/>
									    	<button id="removeImage1" class="btn-rmv1" type="button"><span>X</span></button>
									  	</div>
										</div>
										<div class="col-lg-12 mt50 mb15">
											<h5 class="mb20">Gallery Images (optional)</h5>
											<ul class="mb0">
												<li class="list-inline-item vat">
											  	<div class="upload_file_input_add_remove">
											    	<span class="btn_upload">
											    		<input type="file" id="imag2" title="" class="input-img"/>
											    		<span>UPLOAD FILES</span>
											    	</span>
											    	<img id="ImgPreview2" src="images/resource/upload-img.png" class="preview2" alt=""/>
											    	<button id="removeImage2" class="btn-rmv2" type="button"><span>X</span></button>
											  	</div>
												</li>
											</ul>
										</div>
		                <div class="col-md-12">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Video link">
		                  </div>
		                </div>
		                <div class="col-md-12">
		                  <div class="form-group">
		                    <textarea name="form_message" class="form-control" rows="6" placeholder="Virtual Tour"></textarea>
		                  </div>
		                </div>
		              </div>
		            </form>
		          </div>
		          <div class="new_property_form">
								<h4 class="mb30">Hightlights</h4>
								<a class="text-thm tdu" href="#">Select / Deselect All</a>
								<div class="ui_kit_select_search form-group list_hightlights df mt20">
	                <ul class="add_listing selectable-list">
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck1">
												<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck2">
												<label class="custom-control-label" for="customCheck2">Barbeque</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck3">
												<label class="custom-control-label" for="customCheck3">Dryer</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck4">
												<label class="custom-control-label" for="customCheck4">Gym</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck5">
												<label class="custom-control-label" for="customCheck5">Laundry</label>
											</div>
	                	</li>
	                </ul>
	                <ul class="add_listing selectable-list ml100 ml40-lg ml0-md">
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck6">
												<label class="custom-control-label" for="customCheck6">Lawn</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck7">
												<label class="custom-control-label" for="customCheck7">Microwave</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck8">
												<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck9">
												<label class="custom-control-label" for="customCheck9">Refrigerator</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck10">
												<label class="custom-control-label" for="customCheck10">Stunning views</label>
											</div>
	                	</li>
	                </ul>
	                <ul class="add_listing selectable-list ml100 ml40-lg ml0-md">
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck11">
												<label class="custom-control-label" for="customCheck11">Dining Room</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck12">
												<label class="custom-control-label" for="customCheck12">Fireplace</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck13">
												<label class="custom-control-label" for="customCheck13">Pets Allowed</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck14">
												<label class="custom-control-label" for="customCheck14">Unit Washer/Dryer</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck15">
												<label class="custom-control-label" for="customCheck15">Onsite Parking</label>
											</div>
	                	</li>
	                </ul>
	                <ul class="add_listing selectable-list ml100 ml40-lg ml0-md">
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck16">
												<label class="custom-control-label" for="customCheck16">Waterfront</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck17">
												<label class="custom-control-label" for="customCheck17">Parking</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck18">
												<label class="custom-control-label" for="customCheck18">Doorman</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck19">
												<label class="custom-control-label" for="customCheck19">Central Heating</label>
											</div>
	                	</li>
	                	<li>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck20">
												<label class="custom-control-label" for="customCheck20">Cleaning Service</label>
											</div>
	                	</li>
	                </ul>
								</div>
		          </div>
		          <div class="new_property_form">
								<h4 class="title mb30">Floor Plans</h4>
		            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
		              <div class="row">
										<div class="col-lg-12">
											<div class="faq_according style2">
												<div class="accordion" id="accordionExample">
											  	<div class="card floor_plan">
												    <div class="card-header" id="headingOne">
												    	<h2 class="mb-0">
											        	<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											        		<ul class="mb0">
											        			<li class="list-inline-item">First Floor</li>
											        			<li class="list-inline-item">Size: <span>1267 Sqft</span></li>
											        			<li class="list-inline-item">Rooms: <span>670 Sqft</span></li>
											        			<li class="list-inline-item">Baths: <span>530 Sqft</span></li>
											        			<li class="list-inline-item">Price: <span>₹55,489</span></li>
											        		</ul>
											        	</button>
											        	<!-- <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											        		<span class="flor_plat_title float-left">First Floor</span>
											        		<ul class="flor_plat_space">
											        			<li class="list-inline-item">Size: <span>1267 Sqft</span></li>
											        			<li class="list-inline-item">Rooms: <span>670 Sqft</span></li>
											        			<li class="list-inline-item">Baths: <span>530 Sqft</span></li>
											        			<li class="list-inline-item">Price: <span>$1489</span></li>
											        		</ul>
											        	</button> -->
												   		</h2>
												    </div>
												    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
													    <div class="card-body">
													    	<img class="img-fluid mb10" src="images/resource/floor_plan.png" alt="floor_plan.png">
										        		<p class="mb20">Occupying over 8,000 square feet, perched over 1,100 feet in the air with absolutely breathtaking panoramic 360-degree views of all of New York City and the surrounding tri-state area, The 82nd Floor at 432 Park Avenue has been completely reimagined by one of the most sought-after design houses in London and represents an utterly unique opportunity to own a globally significant property.</p>
										        		<p>The residence is comprised of 5 bedrooms, 2 master bathrooms, 4 on-suite guest bathrooms, 2 powder rooms, 2 offices, 2 dressing rooms, a media room, an oversized eat-in gourmet chef's kitchen, and a sprawling 1,100 square-foot Great Room perfectly situated in the prime southwest corner of the floor.</p>
													    </div>
												    </div>
											    </div>
											    <div class="card floor_plan">
											    	<div class="card-header active" id="headingTwo">
											    		<h2 class="mb-0">
										        		<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											        		<ul class="mb0">
											        			<li class="list-inline-item">First Floor</li>
											        			<li class="list-inline-item">Size: <span>1167 Sqft</span></li>
											        			<li class="list-inline-item">Rooms: <span>570 Sqft</span></li>
											        			<li class="list-inline-item">Baths: <span>430 Sqft</span></li>
											        			<li class="list-inline-item">Price: <span>₹45,489</span></li>
											        		</ul>
											        	</button>
											    		</h2>
											    	</div>
											    	<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
										      		<div class="card-body">
													    	<img class="img-fluid mb10" src="images/resource/floor_plan.png" alt="floor_plan.png">
										        		<p class="mb20">Occupying over 8,000 square feet, perched over 1,100 feet in the air with absolutely breathtaking panoramic 360-degree views of all of New York City and the surrounding tri-state area, The 82nd Floor at 432 Park Avenue has been completely reimagined by one of the most sought-after design houses in London and represents an utterly unique opportunity to own a globally significant property.</p>
										        		<p>The residence is comprised of 5 bedrooms, 2 master bathrooms, 4 on-suite guest bathrooms, 2 powder rooms, 2 offices, 2 dressing rooms, a media room, an oversized eat-in gourmet chef's kitchen, and a sprawling 1,100 square-foot Great Room perfectly situated in the prime southwest corner of the floor.</p>
										     		 </div>
											    	</div>
											    </div>
												</div>
											</div>
										</div>
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Name">
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_type" class="form-control form_control" type="text" placeholder="Rooms">
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="Baths">
		                  </div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group mb30">
		                    <input name="form_type" class="form-control form_control" type="text" placeholder="Size">
		                  </div>
		                </div>
		                <div class="col-sm-12">
		                  <div class="form-group mb30">
		                    <textarea name="form_message" class="form-control" rows="6" placeholder="Content"></textarea>
		                  </div>
		                </div>
										<div class="col-lg-12">
											<h5 class="fz14 fw600 mb25">Preview Image</h5>
											<ul class="mb0">
												<li class="list-inline-item">
													<div class="portfolio_item">
														<img class="img-fluid" src="images/Bulding1//21.jpg" alt="21.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
								    					<a href="#"><span>X</span></a>
								    				</div>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="portfolio_item">
														<img class="img-fluid" src="images/Bulding1/22.jpg" alt="22.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
								    					<a href="#"><span>X</span></a>
								    				</div>
													</div>
												</li>
                                                                                                <li class="list-inline-item">
													<div class="portfolio_item">
														<img class="img-fluid" src="images/Bulding1/12.jpg" alt="12.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
								    					<a href="#"><span>X</span></a>
								    				</div>
													</div>
												</li>
												<li class="list-inline-item vat">
											  	<div class="upload_file_input_add_remove style-right mb30-sm">
											    	<span class="btn_upload">
											    		<input type="file" id="imag3" title="" class="input-img" placeholder="UPLOAD FILES"/>
											    		<span class="">UPLOAD FILES</span>
											    	</span>
											    	<img id="ImgPreview3" src="#" class="preview3" alt=""/>
											    	<button id="removeImage3" class="btn-rmv3" type="button"><span>X</span></button>
											  	</div>
												</li>
											</ul>
										</div>
										<div class="col-lg-12">
											<div class="new_propertyform_btn">
												<a href="#" class="btn btn-thm ad_flor_btn">ADD FLOOR</a>
												<a href="#" class="btn remov_flor_btn float-right fn-520">REMOVE FLOOR</a>
											</div>
										</div>
		              </div>
		            </form>
		          </div>
		          <div class="new_property_form">
								<h4 class="title mb30">Select Adress</h4>
		            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
		              <div class="row">
		                <div class="col-md-6">
											<div class="ui_kit_select_search add_new_property mb30-sm">
												<select class="selectpicker" data-live-search="true" data-width="100%">
													<option>select</option>
													<option data-tokens="City">City</option>
													<option data-tokens="Village">Village</option>
													<option data-tokens="Capital">Capital</option>
												</select>
											</div>
		                </div>
		                <div class="col-md-6">
		                  <div class="form-group">
		                    <input name="form_name" class="form-control form_control" type="text" placeholder="">
		                  </div>
		                </div>
		              </div>
		            </form>
		          </div>
	            <div class="text-right">
								<a class="btn btn-thm listing_save_btn" href="#">Submit</a>
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
<script src="js/tagsinput.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scrollto.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.smartuploader.js"></script>
<script src="js/progressbar.js"></script>
<script src="js/slider.js"></script>
<script src="js/timepicker.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/dashboard-script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"></script>
<script src="js/googlemaps1.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-dashboard-new-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:23 GMT -->
</html>