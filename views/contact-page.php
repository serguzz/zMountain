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
	<meta name="author" content="www.zerotheme.com">
	<meta name="description" content="Free Travel Idea | TravelEarth.cu.ma">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="template/owlcarousel/assets/owl.carousel.min.css">
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="template/css/zerogrid.css">
	<link rel="stylesheet" href="template/css/style.css">
	<link rel="stylesheet" href="template/css/menu.css">

	<link rel="stylesheet" href="template/css/pulse.css">
	<link rel="stylesheet" href="template/css/modal.css">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="template/js/jquery.min.js"></script>
	<script src="template/js/script.js"></script>

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
<body class="sub-page">
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<!---Top Menu--->
<?php
	include 'layouts/menu.php';
 ?>

<header id="header">
	<div class="wrap-header" >
		<!---Main Header--->
		<div class="main-header">
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
						<h2>Inspired by nature</h2>

					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">
		<div class="zerogrid">
			<div class="row"><!--Start Box-->
				<div class="crumbs">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">
							<h1 class="t-center" style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Contact Us</h1>
							<div class="col-full">
								<div id="map" style="height: 450px;"></div>
							</div>
							<div class="col-sm-1-3">
								<div class="wrap-col">
									<h3 style="margin: 20px 0">Контактна інформація</h3>
									<strong>Більшість часу ми в походах, сплавах, проводимо уроки віндсерфінгу в Києві на Дніпрі, кайтсерфінгу на Чорному морі</strong>
									<p>Для звязку телефонуйте або пишіть на месенджери за номером +380950137282. Також залишайте повідомлення через форму зв'язку або на email: serguz@ukr.net. Кращий спосіб - це месенджери або повідомлення у фейсбук</p>
									<p>03127, вул. Сєченова, 6<br>
										Kyiv, Ukraine</p>
									   <p>+380950137282 <br>
										+380950137282</p>
									<p>serguz@ukr.net</p>
								</div>
							</div>
							<div class="col-sm-2-3">
								<div class="wrap-col">
									<div class="contact">
										<h3 style="margin: 20px 0 20px 30px">Напишіть нам</h3>
										<div id="contact_form">
											<form role="form" id="contactForm" data-toggle="validator">
												<div class="row">
													<div class="col-sm-1-3">
														<div class="wrap-col">
															<input type="text" name="name" id="name" placeholder="Ваше ім'я" required="required" />
															<div class="help-block with-errors"></div>
														</div>
													</div>

													<div class="col-sm-1-3">
														<div class="wrap-col">
															<input type="email" name="email" id="email" placeholder="E-mail" required="required" />
															<div class="help-block with-errors"></div>
														</div>
													</div>

													<div class="col-sm-1-3">
														<div class="wrap-col">
															<input type="text" name="phone_number" id="phone_number" placeholder="Номер телефону" required="required" />
															<div class="help-block with-errors"></div>
														</div>
													</div>

													<div class="col-sm-1-3">
														<div class="wrap-col">
															<input type="text" name="subject" id="subject" placeholder="Тема повідомлення" />
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-full">
														<div class="wrap-col">
															<textarea id="message" placeholder="Повідомлення"></textarea>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-full">
														<div class="wrap-col">
															<button class="button button-skin button-subscribe" type="submit" name="Submit" >Send</button>
															<div id="msgSubmit" class="h3 text-center hidden"></div>
														</div>
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

<!--Red Pulse Callback button and hidden modal form-->
<?php
	include 'layouts/callback_elements.php';
?>

<!----End of Callback modal window------------------------->
<!--////////////////////////////////////Footer-->
<?php
 	include 'layouts/footer.php';
	?>

	<!-- Google Map -->
	<script src="template/js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6hLiLmxnIiaGZKY3plTi4hrsPkSnVQvY&callback=initMap" async defer></script>

	<script type="text/javascript" src="template/js/validator.min.js"></script>
	<script type="text/javascript" src="template/js/form-scripts.js"></script>
	<script type="text/javascript" src="template/js/callback.js"></script>


</div>
</body></html>
