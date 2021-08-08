<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Sergiy Brovchenko - My Portfolio</title>
	<meta name="description" content="Free Travel Idea | travelearth.cu.ma">
	<meta name="author" content="serguz">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="template/images/favicon.png" type="image/x-icon">
	<!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="template/owlcarousel/assets/owl.carousel.min.css">
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="template/css/zerogrid.css">
	<link rel="stylesheet" href="template/css/style.css">
	<link rel="stylesheet" href="template/css/menu.css">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<script src="template/js/jquery.min.js" type="text/javascript"></script>
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
<body class="index-page">
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
						<span>Sergiy Brovchenko</span>
						<div class="tl"></div>
						<div class="tr"></div>
						<div class="br"></div>
						<div class="bl"></div>
					</div>
					<div class="heading-text">
						<h2>My Portfolio</h2>
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
		<section class="content-box box-1">
			<div class="">
				<div class="row wrap-box"><!--Start Box-->

					<div class="header">
						<h2>Моє портфоліо</h2>
						<p class="intro">деякі проекти на ванільному JS, HTML та CSS <br>сюди не ввійшли кілька проектів на PHP</p>
					</div>
					<div class="content">
						<div id="owl-slide" class="owl-carousel">
							<div class="item">
								<img src="template/images/portfolio/calculator.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="portfolio/calculator" target="_blank">Калькулятор на JavaScript</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">#calculator</a>,
										<a href="#" rel="category tag">#JS</a>, <a href="#" rel="category tag">#JavaScript</a>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="template/images/portfolio/google_maps.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="portfolio/google_maps_api" target="_blank">Google Maps OpenWeather APIs</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">#API</a>,
										<a href="#" rel="category tag">#GoogleMap</a>, <a href="#" rel="category tag">#OpenWeather</a>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="template/images/portfolio/conference.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="portfolio/conference" target="_blank">Conference Web site</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">#css</a>,
										<a href="#" rel="category tag">#styles</a>, <a href="#" rel="category tag">#conference</a>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="template/images/windsurfing/front_cut.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="https://travelearth.zyrosite.com" target="_blank">TravelEarth на Zyro.com</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">#windsurfing</a>,
										<a href="#" rel="category tag">#kiteboarding</a>, <a href="#" rel="category tag">#hiking</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->

					<div class="header">
						<h2>Погода</h2>
					</div>

					<div class="column sm-1-2">
						<div class="wrap-col">
							<div class="weather_wrapper">
									<h2 class="weather_title">
										<div class="margin-auto">At Your Location</div>

									</h2>
									<script src="https://apps.elfsight.com/p/platform.js" defer></script>
									<div id="elfsight_widget" class="elfsight-app-65aa9c05-6bd0-46c5-b9c0-3355c598eda3 margin-auto"></div>
							</div>
						</div>
					</div>

					<div class="column sm-1-2">
						<div class="wrap-col">
							<div class="weather_wrapper">
								<div class="open_weather_map">
										<h2 class="weather_title">
											<div class="margin-auto">Any Location</div>

										</h2>
										<div class="weather_top">
											<div class="row">
												<div class="margin-auto">Введіть назву міста (en, ru):</div>
												<div class="enter_city_block">

													<input type="text" name="city_name" id="city_name" value="Kyiv">
													<input type="button" onclick="drawWeatherWidget()" value="Дізнатись погоду" class="weather_button">


													<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6hLiLmxnIiaGZKY3plTi4hrsPkSnVQvY&libraries=places&callback=initMap"></script>
													<script>

															var options = {
																	types: ['(cities)'],
																};
							                var autocomplete = new google.maps.places.Autocomplete($("#city_name")[0], options);

							                google.maps.event.addListener(autocomplete, 'place_changed', function() {
							                    // var place = autocomplete.getPlace();
							                    // console.log(place.address_components);
							                });

									        </script>


												</div>
											</div>

											<div class="row">
												<h3 class="weather_title">
													<div class="weather_city">Kiev-test</div>

												</h3>

												<div class="weather_summary">
													<div class="weather_desc margin-auto"></div>
													<div class="weather_icon col-2"></div>

												</div>
											</div>
										</div>

										<div class="weather_grid">


											<div class="col-1">temp:</div>
											<div class="avg_temp col-2"></div>
											<div class="col-1">min:</div>
											<div class="min_temp col-2"></div>
											<div class="col-1">max:</div>
											<div class="max_temp col-2"></div>
											<div class="col-1">Вологість:</div>
											<div class="weather_humidity col-2"></div>
											<div class="col-1">Вітер:</div>
											<div class="weather_wind col-2"></div>



										</div>

										<div class="weather_time">
												<p class="weather_time"></p>
												<p class="weather_date"></p>
												<p class="weather_status"></p>
										</div>

										<div class="weather_forecast margin-auto">
												<span class="weather_avg"></span>

												<span class="weather_min"></span>
												<span class="weather_max"></span>
										</div>
										<span class="margin-auto"></span>

								</div>
								<!-- End of openweathermap div -->
							</div> <!-- End of weather_wrapper -->
						</div>
					</div>

					<!-- INSTAGRAM  feed from elfsight widgets -->
					<script src="https://apps.elfsight.com/p/platform.js" defer></script>
					<div class="elfsight-app-3472638e-c62d-4da0-8663-eac93088a768"></div>

					<div class="column sm-1-2">
						<div class="wrap-col img-hover-zoom">
							<img src="template/images/about.png" />
						</div>
					</div>
					<div class="column sm-1-2">
						<div class="wrap-col">
							<p>Матеріал з Вікіпедії — вільної енциклопедії.</p>
							<p>Матергорн (нім. Matterhorn, італ. Cervino) — гора у Пеннінських Альпах на кордоні Італії та Швейцарії. Ця сьома за висотою гірська вершина Альп розташована між швейцарським населеленим пунктом Цермат (кантон Вале) та італійським населеним пунктом Червінія (область Валле-д'Аоста). Матергорн має чотири стіни: північна височіє над долиною Цмут, південна дивиться на Червінію, східна та західна — відповідно на хребет Горне та гору Дент Дерен. Стіни розділяють чотири хребти: Гернлі (північно-східний), Ліон (південно-західний), Цмут (північно-західний) та Фург (південно-західний).</p>
							<p>Стіни Матергорна круті, і з цієї причини на них мало снігу і льоду. Сніг, що випадає на схили Матергорна, регулярно обрушується лавиною і накопичується біля підніжжя стін у верхніх частинах льодовиків, які стікають з вершини з усіх боків. Найбільш великими льодовиками Матергорна є льодовик Тіфматен біля основи західної стіни, що є притокою льодовика Цмутт, і льодовик Матергорн[en] біля підніжжя північної стіни. Менші льодовики лежать біля підніжжя південної (нижній льодовик Матергорна - італ. Ghiacciaio Inferiore del Cervino, фр. Glacier inférieur du Cervin) і східної стін (безіменний льодовик).</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-----------------content-box-3-------------------->
		<section class="content-box box-3 boxstyle-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="row clearfix">
						<div class="column md-1-2 sm-1-2 xs-1-2 img-hover-zoom">
							<img style="border-radius:5px;" src="template/images/hiking/carpath1_cut.jpg" alt="">
						</div>
						<div class="column md-1-3 sm-1-2 xs-1-2 img-hover-zoom">
							<a class="button button-skin button-service" href="tel:+380950137282">Подзвонити</a>
							<img style="border-radius:5px;" src="template/images/windsurfing/wind_sun.jpg" alt="" class="hidden-xs" style="margin: 0 0 0 -80px;">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-----------------content-box-4-------------------->


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

		<!-----------------content-box-5---Portfolio-section-------->
		<?php
		 	include 'layouts/portfolio-section.php';
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


	<!-- Google Map
	<script src="js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6hLiLmxnIiaGZKY3plTi4hrsPkSnVQvY&callback=initMap" async defer></script>
-->

	<!-- Owl Carusel JavaScript -->
	<script src="template/owlcarousel/owl.carousel.js"></script>
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
	<script type="text/javascript" src="template/js/validator.min.js"></script>
	<script type="text/javascript" src="template/js/form-scripts.js"></script>


</div>
	<script type="text/javascript" src="template/js/lang.js"></script>
	<script type="text/javascript" src="template/js/weather_fetch.js"></script>
</body>
</html>
