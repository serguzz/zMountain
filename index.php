<?php

define('ROOT', dirname(__FILE__));

?>

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


	<!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <!-- CSS
  ================================================== -->
	<!-- My parallax styles -->
	<link rel="stylesheet" href="css/parallax.css">

	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<!-- Modal windows styles -->
	<link rel="stylesheet" href="css/modal.css">
	<!-- Pulse button styles -->
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
<!---Top Menu--->
<div id="cssmenu" >
	<ul>
	   <li class="active"><a href="index.php"><span>TravelEarth</span></a></li>
	   <li class="has-sub"><a href="#"><span>Activities</span></a>
		  <ul>
			 <li class="has-sub"><a href="windsurfing.php"><span>Віндсерфінг</span></a>
				<ul>
				   <li><a href="#"><span>Навчання</span></a></li>
				   <li class="last"><a href="#"><span>Прокат</span></a></li>
				</ul>
			 </li>
			 <li><a href="kiteboarding.php"><span>Кайтбординг</span></a>
			 </li>
			 <li><a href="#"><span>SUP дошки</span></a>

			 </li>
			 <li><a href="hiking.php"><span>Походи</span></a>

			 </li>
		  </ul>
	   </li>
		 <li><a href="blog.php"><span>Блог</span></a></li>
	   <li><a href="sandbox.php"><span>Sandbox</span></a></li>
		 <li class="has-sub"><a href="#"><span>Партнери</span></a>
			 	<ul>
					<li><a href="https://travelearth.zyrosite.com"><span>TravelEarth</span></a>
					<li><a href="https://www.facebook.com/sergiy.shevchenko.16"><span>Sergiy Shevchenko</span></a>

	 			 </li>
				</ul>
		 </li>

	   <li><a href="single.php"><span>Про нас</span></a></li>
	   <li class="last"><a href="contact.html"><span>Контакти</span></a></li>
	</ul>
</div>
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
						<p>Wherever we travel that brings us telling you stories of onset of wind.</p>
                       	 <p>  It comes from the sun</p>
						<a class="button button-skin button-service" href="tel:+380950137282">Подзвонити</a><br>
					<!--	<button class="call-us-button" href="tel:+380950137282">Call us</button>  -->
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
						<h2>Наші Послуги</h2>
						<p class="intro">Навчання та прокат віндсерфінг та кайт спорядження, прокат SUP дошок <br>походи в гори та супровід гіда</p>
					</div>
					<div class="content">
						<div id="owl-slide" class="owl-carousel">
							<div class="item">
								<img src="images/windsurfing/front_cut.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="windsurfing.php">Навчання віндсерфінгу в Києві</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">віндсерфінг</a>,
										<a href="#" rel="category tag">прокат</a>, <a href="#" rel="category tag">інструктор</a>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="images/kiteboarding/foil_1600.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="kiteboarding.php">кайт сафарі на Чорному морі</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">кайтсерфінгу</a>,
										<a href="#" rel="category tag">кайт</a>, <a href="#" rel="category tag">навчання</a>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="images/mountains/carpath1_cut.jpg" />
								<div class="carousel-caption">
									<div class="carousel-caption-inner">
										<p class="carousel-caption-title"><a href="hiking.php">походи в карпати</a></p>
										<p class="carousel-caption-category"><a href="#" rel="category tag">карпати</a>,
										<a href="#" rel="category tag">гід</a>, <a href="#" rel="category tag">похід</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-----------------content-box-2.2 - NEW!! made by Serguz-------------------->
		<section class="content-box box-2">
			<div class="header">
				<h2>Our services</h2>
			</div>
			<div class="parallax-block">
  			<img src="images/windsurfing/wind_main.jpg" data-speed="-3" class="img-parallax">
  			<h2>Windsurfing</h2>
				<h3>in Ukraine</h3>
			</div>

			<div class="parallax-block">
				<img src="images/kiteboarding/kiteboarding.jpg" data-speed="-3" class="img-parallax">
				<h2>Kiteboarding</h2>
				<h3>at Azov sea</h3>
			</div>

			<div class="parallax-block">
				<img src="images/mountains/hiking_1.jpg" data-speed="-3" class="img-parallax">
				<h2>Mountaineering</h2>
				<h3>in Carpathians</h3>
			</div>
		</section>

		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">

			<div class="header">
				<h2>Матергорн</h2>
				<p class="intro">Матеріал з Вікіпедії</p>
			</div>
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="column sm-1-2">
						<div class="wrap-col">
							<div class="img-hover-zoom">
								<img src="images/about.png" />
							</div>
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
							<img style="border-radius:5px;" src="images/mountains/carpath1_cut.jpg" alt="">
						</div>
						<div class="column md-1-3 sm-1-2 xs-1-2 img-hover-zoom">
							<a class="button button-skin button-service" href="tel:+380950137282">Подзвонити</a>
							<img style="border-radius:5px;" src="images/windsurfing/wind_sun.jpg" alt="" class="hidden-xs" style="margin: 0 0 0 20px;">
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
						<h2>Наші Новини</h2>
						<p class="intro">Що нового за останній тиждень, місяць, рік в світі туризму та водних видів спорту <br>Звіти про походи та поїздки, тренування та сплави.</p>
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

		<!-----------------content-box-4.2 - NEW!! made by Serguz-------------------->
		<section class="content-box box-4">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Instagram Feed</h2>
						<p class="intro">Follow us on Instagram</p>
					</div>
					<div class="content" id="instafeed">


					</div>
				</div>
			</div>
		</section>

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

		<!-----------------content-box-6-------------------->
		<section class="content-box box-6 box-style-3">
			<div class="zerogrid">
			<div class="row wrap-box"><!--Start Box-->
				<div class="">
					<div class="box-text">
						<div class="header">
							<h2>Contact Me</h2>
							<p class="intro">Please, leave your message below and <br> fill in the form with your contact information. </p>
						</div>
						<div class="content">
							<div class="subscribe-form">
								<form role="form" id="contactForm" data-toggle="validator">
									<div class="row">
										<div class="column sm-1-3">
											<div class="wrap-col">
												<input type="text" name="name" id="name" placeholder="Your Name" required="required" />
												<div class="help-block with-errors"></div>
											</div>
										</div>

										<div class="column sm-1-3">
											<div class="wrap-col">
												<input type="text" name="name2" id="name2" placeholder="Surname" required="required" />
												<div class="help-block with-errors"></div>
											</div>
										</div>

										<div class="column sm-1-3">
											<div class="wrap-col">
												<input type="email" name="email" id="email" placeholder="Email" required="required" />
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="column sm-1-3">
											<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Message subject" />
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="column full">
											<div class="wrap-col">
												<textarea id="message" placeholder="Message"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="column full">
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
		</section>

	</div>

</section>


<!--////////////////////////////////////Footer-->
<footer id="footer">
	<div class="zerogrid wrap-footer">
		<div class="row">
			<div class="column sm-2-4 column footer-1">
				<div class="wrap-col">
					<h3 class="widget-title">About</h3>
					<p>Більшість часу ми в походах, сплавах, проводимо уроки віндсерфінгу в Києві на Дніпрі, кайтсерфінгу на Чорному морі.</p>
					<p>Для звязку телефонуйте або пишіть на месенджери за номером +380950137282. Також залишайте повідомлення через форму зв'язку або на email: serguz@ukr.net. Кращий спосіб - це месенджери або повідомлення у фейсбук</p>
					<ul class="quicklinks">
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul>
				</div>
			</div>
			<div class="column sm-1-4 column footer-2">
				<div class="wrap-col">
					<h3 class="widget-title">Contact Us</h3>
					<p>Call us:</p>
					<strong style="font-size: 25px;">+380 95 0137282</strong>
					<p>Address:</p>
					<strong>6, Sechenova street, Kyiv 03127, Ukraine</strong>
					<p>Email:</p>
					<strong>serguz@ukr.net</strong>
				</div>
			</div>
			<div class="column sm-1-4 column footer-3">
				<div class="wrap-col">
					<h3 class="widget-title">Socials</h3>
					<ul class="social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/sergiy.shevchenko.16"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/s.sergiy/"><i class="fa fa-instagram"></i></a></li>

						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="copyright">
				Copyright @ zMountain - Designed by Zerotheme | <a href="https://www.zerotheme.com" title="TravelEarth - Free Travel Idea">TravelEarth</a>
			</br>Copyright @ TravelEarth - Designed by Serguz | <a href="#" title="TravelEarth - Free Travel Idea">TravelEarth</a>
			</div>
		</div>
	</div>

</footer>


	<!-- Google Map -->
	<script src="js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6hLiLmxnIiaGZKY3plTi4hrsPkSnVQvY&callback=initMap" async defer></script>

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
	<script>
	$(document).ready(function(){
		$(window).resize(function(){
			var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
			if (width >= '768') {
				var footerHeight = $('#footer').outerHeight();
				$('#container').css({'marginBottom': footerHeight + 'px'});
			}else{
				$('#container').css({'marginBottom': '0px'});
			}
		});
		$(window).resize();
	});
    </script>



	<script type="text/javascript" src="js/validator.min.js"></script>
	<script type="text/javascript" src="js/form-scripts.js"></script>

	<script type="text/javascript" src="js/callback.js"></script>
	<script type="text/javascript" src="js/parallax.js"></script>

</div>
</body></html>
