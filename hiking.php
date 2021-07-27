<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


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

 	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<!-- Modal windows styles -->
	<link rel="stylesheet" href="css/modal.css">

	<!-- Owl Carousel Assets -->
  <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/pulse.css">



	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

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

<!--Pulse Callback button-->
	<button id="callback-button" class="pulse-button">

	    <span class="pulse-button_text">Замовити дзвінок</span>
	    <span class="pulse-button_rings"></span>
	    <span class="pulse-button_rings"></span>
	    <span class="pulse-button_rings"></span>
	</button>


<!---Callback contact form (inside a collback modal window)------------>

<!-- Модальне вікно замовлення callback  -->
<div class="modal" id="callback_modal">
	<div class="modal_content">
		<button id="callback_modal_closer" class="modal_closer"><img src="./images/close.png" width="35" alt="close"></button>

		<div class="contact">
			<h3 style="margin: 20px 0 20px 30px">Залиште заявку на дзвінок</h3>
			<div id="callback_form">
				<form role="form" id="callbackForm" data-toggle="validator">
					<div class="row">
						<div class="col-sm-1-3">
							<div class="wrap-col">
								<input type="text" name="name" id="name" placeholder="Ваше ім'я" required="required" />
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-sm-1-3">
							<div class="wrap-col">
								<input type="text" name="phone_number" id="phone_number" placeholder="Номер телефону" required="required" />
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

<!-------------------------------------------->


<div class="wrap-body">

<!--////////////////////////////////////Header-->
<?php
include 'templates/menu.php';
 ?>
<header id="header">
	<div class="wrap-header" >
		<!---Main Header--->
		<div class="hiking-header">
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
						<h2>Походи в гори</h2>
						<p>When you go beyond the boundary</p>
                       	 <p>  Mountains will support you</p>
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

				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Походи в Карпати</h2>
						<p class="intro">Прокат спорядження та послуги гіда <br>Індивідуальні та групові походи </p>
					</div>
					<div class="content">
						<div id="owl-slide" class="owl-carousel">
							<div class="item">
								<img src="images/mountains/6.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="#">Альпи - снігова шапка Європи</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">#alps</a>,
										<a href="#" rel="category tag">#alpinism</a>, <a href="#" rel="category tag"></a>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="images/mountains/4.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="#">легко в бою</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">#альпінізм</a>,
										<a href="#" rel="category tag">#похід</a>, <a href="#" rel="category tag">#Карпати</a>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="images/mountains/13.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="#">Одноденні походи</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">#Говерла</a>,
										<a href="#" rel="category tag">#Гід</a>, <a href="#" rel="category tag">#Карпати</a>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="images/mountains/12.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="#">Карпатські полонини</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">#полонина</a>,
										<a href="#" rel="category tag">#вівчарство</a>, <a href="#" rel="category tag">#карпати</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

		</section>

		<!-----------------Tours descriptions box. With modal windows.
		Styled like original content-box-4 (repeated below)------------>

		<!-- Модальне вікно загальне  -->
		<div class="modal" id="hiking_modal">
			<div class="modal_content">
				<button id="hiking_modal_closer" class="modal_closer"><img src="./images/close.png" width="35" alt="close"></button>
				<!-- Контент модального окна -->
				<img id="hiking_modal_img" class="hiking_modal_img" src="" alt="Говерла">
				<h1 id="hiking_modal_title" class="modal_title">Тестовий похід</h1>
				<p id="hiking_modal_description" class="modal_description">Тестове описання</p>
				<a class="button button-skin button-service" href="tel:+380950137282">Хочу в похід</a>
			</div>
		</div>

		<section class="content-box box-4">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Маршрути</h2>
						<p class="intro">На вибір варіанти маршрутів різної складності <br>для будь-якого рівня підготовки.</p>
					</div>

					<div class="content">
						<div class="column sm-1-3">
							<div class="wrap-col">
								<div class="box-entry">

									<div class="box-entry-inner hiking_modal_opener" data-name="hoverla">
									<img src="images/mountains/hoverla_cut.jpg" class="img-responsive"/>
									<div class="entry-details">
											<div class="entry-des">
												<span><a href="#">08th Apr 2017</a></span>
												<h3><a href="#">Похід на Говерлу</a></h3>

													<p>Гове́рла — найвища вершина Українських Карпат і найвища точка України, її висота становить 2 061 м над рівнем моря</p>

											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="column sm-1-3">
							<div class="wrap-col">
								<div class="box-entry">
									<div class="box-entry-inner hiking_modal_opener" data-name="pipivan">
										<img src="images/mountains/pipivan.jpg" class="img-responsive"/>
										<div class="entry-details">
											<div class="entry-des">
												<span><a href="#">08th Apr 2017</a></span>
												<h3><a href="#">Обсерваторія на Піп Іван</a></h3>
												<p>Піп Іван Чорногірський (2028 м) – третя за висотою вершина Українських Карпат, одна з основних вершин Чорногірського хребта...</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="column sm-1-3">
							<div class="wrap-col">
								<div class="box-entry">
									<div class="box-entry-inner hiking_modal_opener" data-name="homyak">
										<img src="images/mountains/homyak_cut.jpg" class="img-responsive"/>
										<div class="entry-details">
											<div class="entry-des">
												<span><a href="#">08th Apr 2017</a></span>
												<h3><a href="#">гора Хом'як</a></h3>
												<p>Гора Хом'як є популярним пунктом у пішохідних маршрутах вихідного дня. З вершини видно сусідні гори і хребти... </p>
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


		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="header">
				<h2>Українські Карпати</h2>

			</div>
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="column sm-1-2">
						<div class="wrap-col">
							<div class="img-hover-zoom">
								<img src="images/mountains/hiking_about_cut.jpg" />
							</div>
						</div>
					</div>
					<div class="column sm-1-2">
						<div class="wrap-col">
							<p>Карпати - гори на території Словаччини, Чехії, Польщі, Угорщини, Румунії та України. Гірський масив довжиною більше 240 км. На вершинах Карпат розкинулися альпійські луки. Тут починаються річки Прут, Черемош, Лімниця.
								 Карпати відомі  природними ландшафтами, чистим повітрям, холодними водоспадами та джерелами. В лісах ростуть буки і смереки. На схилах розкинулися  зарослі ожини, малини, брусниці  і чорниці. Славляться Карпати і великою кількістю грибів, серед яких особливо смачними вважаються маслюки, лисички і білі. Влітку тут мирно пасуться отари бекаючих овець і волелюбні табуни напівдиких коней.</p>
							<p>Карпати — один з головних вододілів Європи між Балтійським і Чорним морем. Поділяються на дві субпровінції — Зовнішні Карпати (Західні[en] та Східні) і Внутрішні Карпати (Західні[en] та Східні). Орографічно виділяють Західні Карпати (територія Австрії, Чехії, Словаччини, Польщі та України — найвищі гірські масиви), Східні, або Лісисті, Карпати (найбільш знижена і звужена частина Карпат; Східні Карпати складаються зі Східних Бескидів (територія Польщі, Словаччини, України), Українських Карпат (Україна) і Молдово-Семиградських Карпат (Румунія), Південні Карпати, або Трансильванські Альпи (територія Румунії).
							</p>
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
						<div class="column md-1-2 sm-1-2 xs-1-2">
							<div class="img-hover-zoom">
								<img src="images/mountains/homyak2.png" alt="">
							</div>
						</div>
						<div class="column md-1-3 sm-1-2 xs-1-2">
							<a class="button button-skin button-service" href="tel:+380950137282">Подзвонити</a>
							<div class="img-hover-zoom">
								<img src="images/12.jpg" alt="" class="hidden-xs" style="margin: 0 0 0 20px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-----------------content-box-4-------------------->
		<section class="content-box box-4">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Latest News</h2>
						<p class="intro">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor <br>invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
					<div class="content">
						<div class="column sm-1-3">
							<div class="wrap-col">
								<div class="box-entry">
									<div class="box-entry-inner">
										<img src="images/2.jpg" class="img-responsive"/>
										<div class="entry-details">
											<div class="entry-des">
												<span><a href="#">08th Apr 2017</a></span>
												<h3><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h3>
												<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="column sm-1-3">
							<div class="wrap-col">
								<div class="box-entry">
									<div class="box-entry-inner">
										<img src="images/3.jpg" class="img-responsive"/>
										<div class="entry-details">
											<div class="entry-des">
												<span><a href="#">08th Apr 2017</a></span>
												<h3><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h3>
												<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="column sm-1-3">
							<div class="wrap-col">
								<div class="box-entry">
									<div class="box-entry-inner">
										<img src="images/4.jpg" class="img-responsive"/>
										<div class="entry-details">
											<div class="entry-des">
												<span><a href="#">08th Apr 2017</a></span>
												<h3><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h3>
												<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
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
								<div class="portfolio-image" style="background-image: url('images/1.jpg')"></div>
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
								<div class="portfolio-image" style="background-image: url('images/2.jpg')"></div>
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
								<div class="portfolio-image" style="background-image: url('images/3.jpg')"></div>
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
								<div class="portfolio-image" style="background-image: url('images/4.jpg')"></div>
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
								<div class="portfolio-image" style="background-image: url('images/5.jpg')"></div>
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
								<div class="portfolio-image" style="background-image: url('images/6.jpg')"></div>
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
								<div class="portfolio-image" style="background-image: url('images/7.jpg')"></div>
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
								<div class="portfolio-image" style="background-image: url('images/8.jpg')"></div>
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
								<div class="portfolio-image" style="background-image: url('images/9.jpg')"></div>
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
								<div class="portfolio-image" style="background-image: url('images/10.jpg')"></div>
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
 			include 'templates/contact-me-section.php';
		?>

	</div>
</section>


<!--////////////////////////////////////Footer-->
<?php
 	include 'templates/footer.php';
	?>

	<!-- Google Map -->
	<script src="js/google-map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>

	<!-- Owl Carusel JavaScript -->
	<script src="owlcarousel/owl.carousel.js"></script>
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

	<script type="text/javascript" src="js/validator.min.js"></script>
	<script type="text/javascript" src="js/form-scripts.js"></script>

	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/callback.js"></script>

</div>
</body>
</html>
