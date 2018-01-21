<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Xtreme Travel a Travel Agency Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Xtreme Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url()?>/_assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>/_assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>/_assets/css/styles.css?v=1.6" rel="stylesheet">
<!-- js -->
<script src="<?php echo base_url()?>/_assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>/_assets/js/scripts.js?v=1.7"></script>
<!-- //js -->
<!--FlexSlider-->
		<link rel="stylesheet" href="<?php echo base_url()?>/_assets/css/flexslider.css" type="text/css" media="screen" />
		<script defer src="<?php echo base_url()?>/_assets/js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
<!-- pop-up-script -->
<script src="<?php echo base_url()?>/_assets/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="<?php echo base_url()?>/_assets/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.view-seventh a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<script src="<?php echo base_url()?>/_assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url()?>/_assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/_assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul class="nav">
						<li><a href="index.html" class="active"> Home</a></li>
							<script>
								$( "li a.menu" ).click(function() {
								$( "ul.nav-sub" ).slideToggle( 300, function() {
								// Animation complete.
								});
								});
							</script>
					</ul>
				</nav>
			</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="head-logo">
					<a href="index.html"><span>X</span>treme Travel<i>Feeling Amazing Tour</i></a>
				</div>
				<div class="top-nav">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><img src="<?php echo base_url()?>/_assets/images/menu.png" alt=""></a>
					</div>	
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-info">
			<div class="container">
				<h1>Book Your Best Trip</h1>
				<div class="sap_tabs">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							  <!-- <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span><i class="glyphicon glyphicon-home" aria-hidden="true"></i>Hotels</span></li> -->
							  <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span><i class="glyphicon glyphicon-plane" aria-hidden="true"></i>Flights</span></li>
						  </ul>				  	 
							<div class="resp-tabs-container">
                                <form action="<?php echo base_url() ?>searchfull" method="POST">
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
										<div class="flights">
											<div class="reservation">
												<ul>		
													<li  class="span1_of_1 desti1">
														 <div class="book_date">

																<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																<input name="rute_from" type="text" placeholder="From" class="typeahead1 input-md form-control tt-input" required="">
                                                        
                                                            </div>					
													 </li>
													 <li  class="span1_of_1 desti1">
														 <div class="book_date">

																<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																<input name="rute_to" type="text" placeholder="To" class="typeahead1 input-md form-control tt-input" required="">

														 </div>					
													 </li>
													 <div class="clearfix"> </div>
												</ul>
											</div>
											<div class="reservation">
												<ul>	
													 <li  class="span1_of_1">
														 <h5>Departure</h5>
														 <div class="book_date">

															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input type="date" name="depart_date" class="date" id="datepicker" type="text" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">

														 </div>		
													 </li>
													 <li  class="span1_of_1 left">
														 <h5>Return</h5>
														 <div class="book_date">

															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input class="date" id="datepicker" type="text" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">

														 </div>					
													 </li>
													 <div class="clearfix"> </div>
												</ul>
											</div>
											<div class="reservation">
												<ul>
													<li class="span1_of_1 adult">
														 <h5>Traveller</h5>
														 <div class="section_room">
															  <select name="passengers" id="1 Traveller" onchange="change_country(this.value)" class="frm-field required sect1">
																	<option value="1">1 Traveller</option>
																	<option value="2">2 Traveller</option>         
																	<option value="3">3 Traveller</option>
																	<option value="4">4 Traveller</option>
																	<option value="5">5 Traveller</option>
																	<option value="6">6 Traveller</option>
															  </select>
														 </div>	
													</li>
													<li class="span1_of_1 adult">
															 <h5>Children (0-17)</h5>
															 <div class="section_room">
																  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																		<option value="null">1</option>
																		<option value="null">2</option>         
																		<option value="AX">3</option>
																		<option value="AX">4</option>
																		<option value="AX">5</option>
																		<option value="AX">6</option>
																  </select>
															 </div>	
														</li>
														<li class="span1_of_1 adult">
															 <h5>Class</h5>
															
															 <div class="section_room">
																  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																		<option value="null">Economy</option>
																		<option value="null">Business</option>     
																  </select>
															 </div>	
														</li>
													<div class="clearfix"> </div>
												</ul>
											</div>
											<div class="reservation">
												<ul>	
													 <li class="span1_of_3">
															<div class="date_btn">

																	<input type="submit" name="submit" value="Search Flights" />

															</div>
													 </li>
													 <div class="clearfix"></div>
												</ul>
											</div>
										</div>
									</div>
                                </div>
                                
                            </form>
							</div>
					</div>
				</div>
				<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
						</script>
				<div class="login">
					<a href="login.html">Login</a>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- about-us -->
	<div id="about" class="about">
		<div class="container">
			<h3>About Us</h3>
			<p class="ever">To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
			<div class="about-grids">
				<div class="col-md-6 about-grid">
					<div class="about-grid1">
						<div class="itis">
							<h4>voluptas nulla pariatur</h4>
						</div>
						<div class="hji">
							<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
						</div>
						<div class="about-grid1-pos">
							<img src="<?php echo base_url()?>/_assets/images/1.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
				</div>
				<div class="col-md-6 about-grid">
					<div class="about-grid2">
						<div class="col-xs-2 about-grid2-left">
							<p>01.</p>
						</div>
						<div class="col-xs-10 about-grid2-right">
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus 
								maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="about-grids">
				<div class="col-md-6 about-grid">
					<div class="about-grid2">
						<div class="col-xs-2 about-grid2-left">
							<p>02.</p>
						</div>
						<div class="col-xs-10 about-grid2-right">
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus 
								maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 about-grid">
					<div class="about-grid1 about-grd1">
						<div class="itis">
							<h4>voluptas nulla pariatur</h4>
						</div>
						<div class="hji">
							<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
						</div>
						<div class="about-grid1-pos1">
							<img src="<?php echo base_url()?>/_assets/images/2.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //about-us -->
<!-- awesome -->
	<div class="awesome">
		<div class="container">
			<div class="col-md-4 awesome-left">
				<h3>voluptas nulla</h3>
				<p>Too many of us look upon Americans as dollar chasers.
					This is a cruel libel, even if it is reiterated thoughtlessly.</p>
			</div>
			<div class="col-md-8 awesome-right">
				<div class="col-md-4 awesome-right-grid">
					<div class="awesome-right-grid1 view1 fifth-effect">
						<img class="img-responsive" src="<?php echo base_url()?>/_assets/images/10.jpg" alt=" " />		
						<div class="social-icons">
							<ul>
								<li><a href="#" class="p"></a></li>
								<li><a href="#" class="facebook"></a></li>
								<li><a href="#" class="twitter"></a></li>
							</ul>
						</div>
						<div class="mask"></div>
					</div>
					<h4>man who chooses</h4>
					<p>Place // Photography</p>		
				</div>
				<div class="col-md-4 awesome-right-grid">
					<div class="awesome-right-grid1 view1 fifth-effect">
						<img class="img-responsive" src="<?php echo base_url()?>/_assets/images/1.jpg" alt=" " />		
						<div class="social-icons">
							<ul>
								<li><a href="#" class="p"></a></li>
								<li><a href="#" class="facebook"></a></li>
								<li><a href="#" class="twitter"></a></li>
							</ul>
						</div>
						<div class="mask"></div>
					</div>
					<h4>man who chooses</h4>
					<p>Place // Photography</p>		
				</div>
				<div class="col-md-4 awesome-right-grid">
					<div class="awesome-right-grid1 view1 fifth-effect">
						<img class="img-responsive" src="<?php echo base_url()?>/_assets/images/2.jpg" alt=" " />		
						<div class="social-icons">
							<ul>
								<li><a href="#" class="p"></a></li>
								<li><a href="#" class="facebook"></a></li>
								<li><a href="#" class="twitter"></a></li>
							</ul>
						</div>
						<div class="mask"></div>
					</div>
					<h4>man who chooses</h4>
					<p>Place // Photography</p>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //awesome -->
<!-- twitter-text -->
	<div id="dfg" class="twitter-text">
		<div class="container">
			<div class="twitter-txt">
				<h3><a href="mailto:info@example.com">info@example.com</a> Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero.</h3>
				<p>about 13 hours,12 minutes ago</p>
			</div>
		</div>
	</div>
<!-- //twitter-text -->
<!-- events -->
	<div id="events" class="events">
		<div class="container">
			<h3>News & <span>Events</span></h3>
			<p class="ever">To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
			<div class="events-grids">
				<div class="col-md-4 events-grid">
					<div class="cal">
						<img src="<?php echo base_url()?>/_assets/images/3.png" alt=" " class="img-responsive" />
						<div class="cal-info">
							<h4>molestiae consequatur</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
								quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo 
								voluptas nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 events-grid">
					<div class="cal">
						<img src="<?php echo base_url()?>/_assets/images/3.png" alt=" " class="img-responsive" />
						<div class="cal-info">
							<h4>molestiae consequatur</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
								quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo 
								voluptas nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 events-grid">
					<div class="cal">
						<img src="<?php echo base_url()?>/_assets/images/3.png" alt=" " class="img-responsive" />
						<div class="cal-info">
							<h4>molestiae consequatur</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
								quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo 
								voluptas nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="events-grids1">
				<div class="col-md-4 events-grid1">
					<div class="events-grid11">
						<span>01.</span>
						<div class="events-grid11-info">
							<h4><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><label>31 October 2015</label>molestiae consequatur</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
								quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo 
								voluptas nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 events-grid1">
					<div class="events-grid11">
						<span>02.</span>
						<div class="events-grid11-info">
							<h4><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><label>31 October 2015</label>molestiae consequatur</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
								quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo 
								voluptas nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 events-grid1">
					<div class="events-grid11">
						<span>03.</span>
						<div class="events-grid11-info">
							<h4><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><label>31 October 2015</label>molestiae consequatur</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
								quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo 
								voluptas nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //events -->
<!--contact-->
	<div id="mail" class="contact">
		<div class="container">
			<h3>How to Find Us</h3>
			<p class="ever">To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
			<div class="contact-grids">
				<div class="col-md-7 contact-right">				
					<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<p>"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries. "</p>
					<ul>
						<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							756 globel Place, Australia.
						</li>					
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							+123 2222 222
						</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<a href="mailto:info@example.com">mail@example.com</a>
						</li>
					</ul>
				</div>						
				<div class="clearfix"> </div>
			</div>
		</div>			
	</div>
<!--//contact-->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				<ul>
					<li><a href="index.html"><i>X</i>treme Travel</a><span> |</span></li>
					<li><p>The awesome agency. <span>0800 (123) 4567 // Australia 746 PO</span></p></li>
				</ul>
			</div>
			<div class="footer-right">
				<p>© 2016 Xtreme Travel. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>