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
	<title>Travelearth - Free Hiking</title>
	<meta name="description" content="Free Travel Idea | travelearth.pp.ua">
	<meta name="author" content="serguz@ukr.net">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<link rel="shortcut icon" href="template/images/icons/mountain_logo.png" type="image/x-icon">
	<!-- Modal windows styles -->
	<link rel="stylesheet" href="template/css/modal.css">

	<!-- Owl Carousel Assets -->
  <link rel="stylesheet" href="template/owlcarousel/assets/owl.carousel.min.css">
  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="template/css/zerogrid.css">
	<link rel="stylesheet" href="template/css/style.css">
	<link rel="stylesheet" href="template/css/menu.css">
	<link rel="stylesheet" href="template/css/pulse.css">

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

<!--Pulse Callback button-->
<?php
	include 'layouts/callback_elements.php';
?>
<!-------------------------------------------->


<div class="wrap-body">

<!--////////////////////////////////////Header-->
<?php
include 'layouts/menu.php';
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
						<h2>Mountaineering</h2>
						<!--p>When you go beyond the boundary</p>
                       	 <p>  Mountains will support you</p-->
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
								<img src="template/images/hiking/6.jpg" />
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
								<img src="template/images/hiking/4.jpg" />
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
								<img src="template/images/hiking/13.jpg" />
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
								<img src="template/images/hiking/12.jpg" />
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

		<!-----------------Services descriptions box. With modal windows.
		Styled like original content-box-4 (repeated below)------------>

		<section class="content-box box-4">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Маршрути</h2>
						<p class="intro">На вибір варіанти маршрутів різної складності <br>для будь-якого рівня підготовки.</p>
					</div>
				</div>

					<?php
						include "layouts/services-content.php";
					?>

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
								<img src="template/images/hiking/hiking_about_cut.jpg" />
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
								<img src="template/images/hiking/homyak2.png" alt="">
							</div>
						</div>
						<div class="column md-1-3 sm-1-2 xs-1-2">
							<a class="button button-skin button-service" href="tel:+380950137282">Подзвонити</a>
							<div class="img-hover-zoom">
								<img src="template/images/12.jpg" alt="" class="hidden-xs" style="margin: 0 0 0 20px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-----------------content-box-4-------------------->
		<?php
		 	include "layouts/newsfeed-section.php";
		?>

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
</div>

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

	<script type="text/javascript" src="template/js/callback.js"></script>
	<script type="text/javascript" src="template/js/lang.js"></script>

</body>
</html>
