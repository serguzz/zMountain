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
	<title>Travelearth - Free Travel Idea</title>
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

	<link rel="stylesheet" href="<?php echo SUBDOMAIN;?>/template/css/pagination.css">

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
		<script src="template/js/html5.js"></script>
		<script src="template/js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>
<body class="index-page">

	<!--Pulse Callback button-and form (hidden)-->
	<?php
		include 'layouts/callback_elements.php';
	?>

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

			<?php foreach ($blogposts as $blogpost): ?>

					<div class="blogpost-container">
						<div class="blogpost-header">
							<div class="blogpost-cover">
								<img src="<?php echo SUBDOMAIN;?>/template/images/blog/<?php echo $blogpost["image"];?>">
							</div>
						</div>
						<div class="blogpost-body">
							<div class="blogpost-title">
								<h1><a href="<?php echo SUBDOMAIN;?>/blogpost/<?php echo $blogpost["id"];?>"><?php echo $blogpost["title"];?></a></h1>
							</div>
							<div class="blogpost-author">
								<p>by <a href="#"><?php echo $blogpost["author"]; ?> </a></p>
							</div>
							<div class="blogpost-text">
								<p><?php echo $blogpost["short_content"];?>
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
								<li class="published-date"><?php echo $blogpost['created_at'];?></li>

							</ul>
						</div>
					</div> <!-- blogpost-container-->
				<?php endforeach; ?>

				<div class="pagination-container">
					<?php	echo $pagination->get(); ?>
				</div>

		</div> <!--blog-container -->
		<!-- Постраничная навигация -->


		<!-----------------content-box-4-------------------->
		<?php
		 	include "layouts/newsfeed-section.php"?>
		?>
		
		<!-----------------content-box-4.2 - NEW!! made by Serguz-------------------->
		<section class="content-box box-4">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Latest Videos</h2>
						<p class="intro">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor <br>invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
					<div class="content">
						<div class="column sm-1-2">
							<div class="wrap-col">
								<div class="box-entry">
									<div class="box-entry-inner video-container">
										<iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/nYbzMupFrnA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="entry-details">
											<div class="entry-des">
												<span><a href="#">08th Apr 2017</a></span>
												<h3><a href="#">Great Caprise by Paganini</a></h3>
												<p>Listen to magic ...</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="column sm-1-2">
							<div class="wrap-col">
								<div class="box-entry">
									<div class="box-entry-inner video-container">
										<iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/nBCClFb7YoI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="entry-details">
											<div class="entry-des">
												<span><a href="#">08th Apr 2017</a></span>
												<h3><a href="#">Мистическая непокоренная вершина Кайлас</a></h3>
												<p>Сага о неприступных 6666 метрах</p>
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


		<!-----------------content-box-5-------------------->
		<section class="content-box box-5 boxstyle-1">
			<div class="zerogrid-full">
				<div class="row wrap-box"><!--Start Box-->
					<div class="">
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/1.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">8</div>
										<div class="portfolio-month">November</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/2.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">5</div>
										<div class="portfolio-month">November</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/3.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">13</div>
										<div class="portfolio-month">October</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/4.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">21</div>
										<div class="portfolio-month">October</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/5.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">28</div>
										<div class="portfolio-month">October</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/6.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">4</div>
										<div class="portfolio-month">September</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/7.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">30</div>
										<div class="portfolio-month">September</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/8.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">8</div>
										<div class="portfolio-month">December</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/9.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">8</div>
										<div class="portfolio-month">December</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
						<div class="column lg-1-5 sm-1-3 xs-1-2 portfolio-box">
							<a class="" href="single.php">
								<div class="portfolio-image" style="background-image: url('<?php echo SUBDOMAIN;?>/template/images/10.jpg')"></div>
								<div class="portfolio-caption">
									<div class="portfolio-time">
										<div class="portfolio-day">8</div>
										<div class="portfolio-month">December</div>
										<div class="portfolio-year">2016</div>
									</div>
									<div class="portfolio-details">
										<div class="portfolio-title">Listen to Future</div>
										<div class="portfolio-cat">Music, Single</div>
										<div class="portfolio-comments"><i class="fa fa-comments"></i>0</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

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
