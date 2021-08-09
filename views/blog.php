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
	<meta name="description" content="Free Travel Idea | travelearth.pp.ua">
	<meta name="author" content="serguz">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="template/images/favicon.png" type="image/x-icon">
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

<div class="wrap-body">
<!--////////////////////////////////////Header-->

<header id="header">
	<div class="wrap-header" >
		<!---Main Header--->
		<div class="blog-header">
			<!---Top Menu--->
			<?php
				include 'layouts/menu.php';
			 ?>
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
		<section class="content-box box-1">
			<div class="">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Блог</h2>
					</div>

					<!------------content-box-1-------------------->

					<!------------content-box-BLog-------------------->
					<div class="blog-container" id="blog_container">

						<?php
							include "blog-content.php"; //the inner content of the blog feed
						?>
					</div> <!--blog-container -->
				</div>
			</div>
		</section>

		<!-----------------content-box-4-------------------->
		<?php
		 	include "layouts/newsfeed-section.php";
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


		<!--Pulse Callback button-and form (hidden)-->
		<?php
			include 'layouts/callback_elements.php';
		?>

		<!-----------------content-box-5-------------------->

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

	<script>
		$(document).ready(function() {

			//Pagination code
			$(document).on("click", ".pagination li a", function(e) {
					e.preventDefault();
					//console.log($(this)[0].dataset.page);
					//console.log($(this)[0].href);

					$.ajax({
						url: $(this)[0].href + "/content",
						type: "GET",
						data: {

						},
						success: (data) => {
							history.pushState({}, '', $(this)[0].href);
							$("#blog_container").html(data);

						},
					});
			});
		});
	</script>

	<script type="text/javascript" src="<?php echo SUBDOMAIN;?>/template/js/validator.min.js"></script>
	<script type="text/javascript" src="<?php echo SUBDOMAIN;?>/template/js/form-scripts.js"></script>
	<script type="text/javascript" src="<?php echo SUBDOMAIN;?>/template/js/callback.js"></script>
	<script type="text/javascript" src="<?php echo SUBDOMAIN;?>/template/js/lang.js"></script>

</div>
</body></html>
