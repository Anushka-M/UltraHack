
<!DOCTYPE html>
<html lang="en">
<head>
<title>uhack</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Medico Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- portfolio -->	
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDncutOun-3bPm2mu3YjI0Mee8PrdA1J9c&callback=initMap">
    </script>
<script type="text/javascript">
	var map;
	
	function geolocation(){
		if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
    function showPosition(position) {
    	var x=position.coords.latitude;
    	var y=position.coords.longitude;
    console.log( "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude);
    
	}
	 
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 28.7040592, lng: 77.10249019999999},
          zoom: 8
        });

        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;

        geocodeLatLng(geocoder, map, infowindow);
        

      }

      function geocodeLatLng(geocoder, map, infowindow,x,y) {
        var input = 28.7040592+","+77.10249019999999;
        var latlngStr = input.split(',', 2);
        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
              map.setZoom(11);
              var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
              //infowindow.setContent(results[0].formatted_address);
              //infowindow.open(map, marker);
              console.log(result[0].formatted_address);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
      }

	
</script>

<!-- //portfolio -->	
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body onload="geolocation()">
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header-top">
				<div class="header">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="agileits-logo">
									<h1><a href="index.php">codewize</a></h1>
								</div>
							</div>

							
						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="w3ls-text">
												<div class="w3ls-text-info">
													<h2>Quick<span>aids</span><span>and</span>services</h2>
												</div>
											</div>
										</li>
										<li>
											<div class="w3ls-text">
												<div class="w3ls-text-info">
													<h2>App<span>You</span><span>Can</span>Trust</h2>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="services" id="services">
		<div class="container">
			<div class="agileits-heading">
				<h3>Our Service</h3> 
			</div>
			<div class="specialty-grids-top">
				<div class="col-md-4 service-box" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<a href="option.php"><i class="fa fa-ambulance" aria-hidden="true"></i></a>
					</figure>
					<a href="#"><h5>Ambulance</h5></a>
					
				</div>
				
				<div class="col-md-4 service-box">
					<figure class="icon">
						<i class="fa fa-user-md" aria-hidden="true"></i>					
					</figure>
					<a href="#"><h5>Quick Aids</h5></a>
	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- portfolio -->
	<!-- <div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-heading">
				<h3>Our Gallery</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<li class="w3layouts agileits" data-filter="1">Category1</li>
				<li class="w3layouts agileits" data-filter="2">Category2</li>
				<li class="w3layouts agileits" data-filter="3">Category3</li>
				<li class="w3layouts agileits" data-filter="4">Category4</li>
				<li class="w3layouts agileits" data-filter="5">Category5</li>
			</ul>

			<div class="filtr-container w3layouts agileits">

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 5" data-sort="Luminous night">
					<a href="images/p2.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p2.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 4" data-sort="City wonders">
					<a href="images/p3.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p3.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="In production">
					<a href="images/p4.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p4.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3, 4" data-sort="Industrial site">
					<a href="images/p5.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p5.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Peaceful lake">
					<a href="images/p6.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p6.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 5" data-sort="City lights">
					<a href="images/p7.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p7.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/p8.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p8.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div> -->
	<!-- //portfolio -->
	<!-- team -->
	
	<!-- //team -->
	<!-- events -->
	<!-- <div class="w3-events" id="events"> 
		<div class="container">
			<div class="agileits-heading">
				<h3>Latest Events</h3>
			</div>
			<div class="events-info">
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4>10<span>Nov</span></h4>
						<h6><a href="#" data-toggle="modal" data-target="#myModal">Nulla tellus ex, dapibus quis</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
				</div>
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4>20<span>Dec</span></h4>
						<h6><a href="#" data-toggle="modal" data-target="#myModal">Mauris vehicula vel augue non</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>  -->
	<!-- //events -->
	<!-- modal -->
	<!-- <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Medico <span>Club</span></h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //modal -->
	<!-- newsletter -->
	<div class="newsletter jarallax">
		<div class="w3-agile-newsletter">
			<div class="container">
				<div class="agileits-heading team-heading">
					<h3>For More Updates</h3>
				</div>
				<div class="newsletter-grids">
					<div class="newsletter-left">
						<p>Subscribe to our email newsletter to receive updates</p>
					</div>
					<div class="newsletter-right">
						<form action="#" method="post">
							<input type="text" placeholder="Subscribe" name="Subscribe" required="">
							<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="agileits-heading">
				<h3>Contact</h3>
			</div>
			<div class="w3layouts-contact-grids">
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-map" aria-hidden="true"></i>
					<h5>Address</h5>
					<p>Indira Ganshi Delhi Technical University for Women, Kashmere Gate-06</p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<h5>Phone</h5>
					<p>+91-9990592266</p>
					
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<h5>Email</h5>
					<p><a href="mailto:info@example.com"> codeWize@gmail.com.com</a></p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-share-alt" aria-hidden="true"></i>
					<h5>Social</h5>
					<p>Touch With Us</p>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- contact-info -->
	<div class="contact-info jarallax">
		<div class="contact-info-grids">
			<div class="container">
				<div class="agileits-heading team-heading">
					<h3>Send a Message</h3>
				</div>
				<div class="contact-form">
					<form action="#" method="post">
						<input type="text" placeholder="Name" required="">
						<input type="email" placeholder="Email" required="">
						<input type="text" placeholder="Telephone" required="">
						<textarea placeholder="Message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact-info -->
	<!-- footer -->
	<!-- <footer>
		<div class="container">
			<div class="copyright">
				<p>© 2017 Medico Club. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</footer> -->
	<!-- //footer -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>