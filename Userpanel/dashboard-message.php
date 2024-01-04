<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-dashboard-message.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 08:56:25 GMT -->
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
				<li><a href="dashboard-favorites.php"><span class="flaticon-heart-shape-outline"></span> Favorites</a></li>
				<li><a href="dashboard-save-search.php"><span class="flaticon-magnifiying-glass"></span> Saved Searches</a></li>
				<li><a href="dashboard-invoices.php"><span class="flaticon-invoice"></span> My Invoices</a></li>
				<li><a class="active" href="dashboard-message.php"><span class="flaticon-mail-inbox-app"></span> Inbox</a></li>
				<li><a href="dashboard-logout.php"><span class="flaticon-logout"></span> Logout</a></li>
			</ul>
		</div>
	</div>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-alice-blue">
		<div class="container-fluid message_page">
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
										<li><a href="dashboard-favorites.php"><span class="flaticon-heart-shape-outline"></span> Favorites</a></li>
										<li><a href="dashboard-save-search.php"><span class="flaticon-magnifiying-glass"></span> Saved Searches</a></li>
										<li><a href="dashboard-invoices.php"><span class="flaticon-invoice"></span> My Invoices</a></li>
										<li><a class="active" href="dashboard-message.php"><span class="flaticon-mail-inbox-app"></span> Inbox</a></li>
										<li><a href="dashboard-logout.php"><span class="flaticon-logout"></span> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 mb50">
							<div class="breadcrumb_content">
								 <h2 class="breadcrumb_title">   Inbox   </h2>
								<p class=""></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5 col-xl-4">
							<div class="message_container">
								<div class="inbox_user_list">
									<div class="iu_heading">
										<div class="candidate_revew_search_box">
											<form class="form-inline">
									    	<button class="btn" type="submit"><span class="flaticon-magnifiying-glass"></span></button>
									    	<input class="form-control" type="search" placeholder="Serach" aria-label="Search">
									    </form>
										</div>
									</div>
									<ul>
										<li class="contact pt3">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s1.jpg" alt="s1.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Darlene Robertson</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">10 day</small>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s2.jpg" alt="s2.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Jane Cooper</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">20 day</small>
															<div class="m_notif">2</div>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s3.jpg" alt="s3.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Arlene McCoy</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">1 month</small>
															<div class="m_notif online">2</div>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s4.jpg" alt="s4.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Albert Flores</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">15 day</small>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s5.jpg" alt="s5.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Cameron Williamson</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">12 day</small>
															<div class="m_notif away">2</div>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s6.jpg" alt="s6.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Kristin Watson</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">45 mins</small>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s7.jpg" alt="s7.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Annette Black</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">2 month</small>
															<div class="m_notif busy">2</div>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s8.jpg" alt="s8.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Jacob Jones</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">3 month</small>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s1.jpg" alt="s1.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Vincent Porter</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">37 mins</small>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<img class="img-fluid" src="images/team/s2.jpg" alt="s2.jpg"/>
													<div class="child-wrap df">
														<div class="meta">
															<h5 class="name">Jacob Brown</h5>
															<p class="preview">Head of Development</p>
														</div>
														<div class="iul_notific">
															<small class="body-color">4 month</small>
														</div>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-xl-8">
							<div class="message_container mt30-md">
								<div class="user_heading">
									<div class="wrap">
										<span class="contact-status online"></span>
										<img class="img-fluid mr10" src="images/team/s3.jpg" alt="s3.jpg"/>
										<div class="meta">
											<a class="text-thm tdu float-right fz14" href="#">Delete Conversation</a>
											<h5 class="name">Arlene McCoy</h5>
											<p class="preview">Active</p>
										</div>
									</div>
								</div>
								<div class="inbox_chatting_box">
									<ul class="chatting_content">
										<li class="sent">
											<div class="df">
												<img class="img-fluid align-self-start mr-3" src="images/team/s4.jpg" alt="s4.jpg"/>
												<h5 class="title">Albert Flores <small class="body-color ml15">1 day</small></h5>
											</div>
								    	<p>How likely are you to recommend our company to your friends and family?</p>
										</li>
										<li class="reply first">
											<div class="df justify-content-end">
												<h5 class="title"><small class="body-color mr15">55 mins</small> You</h5>
												<img class="img-fluid align-self-end ml-3" src="images/team/s5.jpg" alt="s5.jpg"/>
											</div>
								    	<p>Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</p>
										</li>
										<li class="sent">
											<div class="df">
												<img class="img-fluid align-self-start mr-3" src="images/team/s5.jpg" alt="s5.jpg"/>
												<h5 class="title">Albert Flores <small class="body-color ml15">34 mins</small></h5>
											</div>
								    	<p>Ok, Understood!</p>
										</li>
										<li class="reply first">
											<div class="df justify-content-end">
												<h5 class="title"><small class="body-color mr15">35 mins</small> You</h5>
												<img class="img-fluid align-self-end ml-3" src="images/team/s5.jpg" alt="s5.jpg"/>
											</div>
								    	<p>The project finally complete! Let's go to!.</p>
										</li>
										<li class="sent">
											<div class="df">
												<img class="img-fluid align-self-start mr-3" src="images/team/s4.jpg" alt="s4.jpg"/>
												<h5 class="title">Albert Flores <small class="body-color ml15">2 day</small></h5>
											</div>
								    	<p>Let's go!</p>
										</li>
										<li class="sent">
											<div class="df">
												<img class="img-fluid align-self-start mr-3" src="images/team/s4.jpg" alt="s4.jpg"/>
												<h5 class="title">Albert Flores <small class="body-color ml15">23 mins</small></h5>
											</div>
								    	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
										</li>
										<li class="sent">
											<div class="df">
												<img class="img-fluid align-self-start mr-3" src="images/team/s4.jpg" alt="s4.jpg"/>
												<h5 class="title">Albert Flores <small class="body-color ml15">24 mins</small></h5>
											</div>
								    	<p>Hello, John!</p>
										</li>
										<li class="reply first">
											<div class="df justify-content-end">
												<h5 class="title"><small class="body-color mr15">45 mins</small> You</h5>
												<img class="img-fluid align-self-end ml-3" src="images/team/s5.jpg" alt="s5.jpg"/>
											</div>
								    	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
										</li>
										<li class="reply first">
											<div class="df justify-content-end">
												<h5 class="title"><small class="body-color mr15">47 mint</small> You</h5>
												<img class="img-fluid align-self-end ml-3" src="images/team/s5.jpg" alt="s5.jpg"/>
											</div>
								    	<p>Are we meeting today?</p>
										</li>
										<li class="reply first">
											<div class="df justify-content-end">
												<h5 class="title"><small class="body-color mr15">2 day</small> You</h5>
												<img class="img-fluid align-self-end ml-3" src="images/team/s5.jpg" alt="s5.jpg"/>
											</div>
								    	<p>The project finally complete! Let's go to!</p>
										</li>
										<li class="sent">
											<div class="df">
												<img class="img-fluid align-self-start mr-3" src="images/team/s4.jpg" alt="s4.jpg"/>
												<h5 class="title">Albert Flores <small class="body-color ml15">35 mins</small></h5>
											</div>
								    	<p>Let's go!</p>
										</li>
										<li class="sent">
											<div class="df">
												<img class="img-fluid align-self-start mr-3" src="images/team/s4.jpg" alt="s4.jpg"/>
												<h5 class="title">Albert Flores <small class="body-color ml15">9  mins</small></h5>
											</div>
								    	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
										</li>
										<li class="reply first">
											<div class="df justify-content-end">
												<h5 class="title"><small class="body-color mr15">11 mins</small> You</h5>
												<img class="img-fluid align-self-end ml-3" src="images/team/s5.jpg" alt="s5.jpg"/>
											</div>
								    	<p>Are we meeting today?</p>
										</li>
										<li class="reply first">
											<div class="df justify-content-end">
												<h5 class="title"><small class="body-color mr15">2 day</small> You</h5>
												<img class="img-fluid align-self-end ml-3" src="images/team/s5.jpg" alt="s5.jpg"/>
											</div>
								    	<p>The project finally complete! Let's go to!</p>
										</li>
										<li class="sent">
											<div class="df">
												<img class="img-fluid align-self-start mr-3" src="images/team/s4.jpg" alt="s4.jpg"/>
												<h5 class="title">Albert Flores <small class="body-color ml15">24 mins</small></h5>
											</div>
								    	<p>Let's go!</p>
										</li>
										<li class="sent">
											<div class="df">
												<img class="img-fluid align-self-start mr-3" src="images/team/s4.jpg" alt="s4.jpg"/>
												<h5 class="title">Albert Flores <small class="body-color ml15">3 day</small></h5>
											</div>
								    	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
										</li>
									</ul>
								</div>
								<div class="mi_text">
									<div class="message_input">
										<form class="form-inline">
								    	<input class="form-control" type="search" placeholder="Type a Message" aria-label="Search">
								    	<button class="btn" type="submit">Send</button>
								    </form>
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
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>


</html>