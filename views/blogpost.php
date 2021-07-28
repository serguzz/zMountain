<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Travelearth - Free Travel Blog</title>
	<meta name="description" content="Free Travel Idea | travelearth.cu.ma">
	<meta name="author" content="serguz">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="<?php echo SUBDOMAIN;?>/template/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo SUBDOMAIN;?>/template/css/style.css">
	<link rel="stylesheet" href="<?php echo SUBDOMAIN;?>/template/css/menu.css">
	<!-- Modal windows styles -->
	<link rel="stylesheet" href="<?php echo SUBDOMAIN;?>/template/css/modal.css">
	<!-- Pulse button styles -->
	<link rel="stylesheet" href="<?php echo SUBDOMAIN;?>/template/css/pulse.css">
	<!-- Blog  styles -->
	<link rel="stylesheet" href="<?php echo SUBDOMAIN;?>/template/css/blog.css">

	<!-- Custom Fonts -->
	<link href="<?php echo SUBDOMAIN;?>/template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="<?php echo SUBDOMAIN;?>/template/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo SUBDOMAIN;?>/template/js/script.js"></script>

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>
<body class="index-page">

<div class="wrap-body">

<!--////////////////////////////////////Header-->
<?php
	include 'layouts/menu.php';
 ?>
<header id="header">
	<div class="wrap-header" >
		<!---Main Header--->
		<div class="blog-header">
			<div class="zerogrid">
				<div class="row">
					<div class="hero-heading">
						<span>TravelEarth</span>
						<div class="tl"></div>
						<div class="tr"></div>
						<div class="br"></div>
						<div class="bl"></div>
					</div>
					<div class="heading-text">
						<h2>Stories & Tips</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">
		<!------------content-box-1-------------------->

		<!------------content-box-BLog-------------------->
		<div class="blog-container" id="blog_container">
			<div class="blogpost-container">
				<div class="blogpost-header">
					<div class="blogpost-cover">
						<img src="<?php echo SUBDOMAIN;?>/template/images/blog/<?php echo $blogpost["image"];?>">
					</div>
				</div>
				<div class="blogpost-body">
					<div class="blogpost-title">
						<h1><a href="#">
                  <?php echo $blogpost["title"];?>
                </a>
            </h1>
					</div>
					<div class="blogpost-text">
						<p>
              <?php echo $blogpost["content"];?>
            </p>
					</div>
					<div class="blogpost-tags">
							<li><a href="#">Lorem</a></li>
							<li><a href="#">dfgfg</a></li>
							<li><a href="#">nbnnn nnn</a></li>
							<li><a href="#">dfgfg</a></li>
							<li><a href="#">dfgfg</a></li>
					</div>
				</div>

				<div class="blogpost-footer">
					<ul>
						<li class="published-date">4 days ago</li>

					</ul>
				</div>
			</div> <!-- blogpost-container-->
		</div> <!--blog-container -->

    <!--Pulse Callback button-and form (hidden)-->
  	<?php
  		include 'layouts/callback_elements.php';
  	?>
		<!-------content-box-6--Contact Me Section----------->
		<?php
 			include 'layouts/contact-me-section.php';
		?>

	</div>
</section>


<!--////////////////////////////////////Footer-->
<?php
 	include 'layouts/footer.php';
	?>


	<!-- Google Map -->
	<script src="<?php echo SUBDOMAIN;?>/template/js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6hLiLmxnIiaGZKY3plTi4hrsPkSnVQvY&callback=initMap" async defer></script>

	<!-- Owl Carusel JavaScript -->
	<script src="<?php echo SUBDOMAIN;?>/template/owlcarousel/owl.carousel.js"></script>
	<script>
	$(document).ready(function() {
	  $("#owl-slide").owlCarousel({
		autoplay:true,
		autoplayTimeout:3000,
		loop: true,
		lazyLoad : true,
		items: 1,
		dots: true,
		stagePadding: 300,
		responsive : {
			0 : {stagePadding: 0},
			600 : {stagePadding: 100},
			900 : {stagePadding: 200},
			1199 : {}
		},
	  });
	});
	</script>

	<script type="text/javascript" src="<?php echo SUBDOMAIN;?>/template/js/validator.min.js"></script>
	<script type="text/javascript" src="<?php echo SUBDOMAIN;?>/template/js/form-scripts.js"></script>
	<script type="text/javascript" src="<?php echo SUBDOMAIN;?>/template/js/callback.js"></script>

</div>
</body></html>
