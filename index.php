<?php
include 'object/main.php';
include 'tools/date/jdf.php';
$security=new security;
$connect=new connect;
$template=new template;
?>
<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html dir="rtl">
	<head>
		<title>آموزشگاه</title>
		<meta   http-equiv="content-type"   content="text/html;charset=utf-8"  />
		<meta name="description" content="" />
		<meta name="keywords" content="UNITED COMMS Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollex.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="index.html"></a></h1>
				<nav id="nav">
					<ul class="client-text">
                    </br>
                            <?php
							$security->Covering("inc-temp/menu_top");
							?>

						
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<header>
						<h2 class="client-text">آموزشگاه کامپیوتری</h2>
						<p class="client-text">آموزشگاه برگزیده ی سال 1394<br />
						زیر نظر سازمان فنی حرفه ای </p>
					</header>
					<span class="image"><img src="images/ax2.jpg" alt="" /></span>
				</div>
				<a href="#one" class="goto-next scrolly">Next</a>
			</section>

		<!-- One -->
			<section id="one" class="spotlight style1 bottom" >
				<span class="image fit main"><img src="images/ax3.jpg" alt="" /></span>
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="4u 12u$(medium)" style="text-align:right"  >
								
									<h3 class="client-text2">دوره های گرافیک رایانه ای</h3>
									<p class="client-text"> گرافیک مفهومی گسترده و بسیار جامع دارد و زبانی همگانی برای انتقال مفاهیم می باشد. گستره‌ی رشته‌ی گرافیک در دنیای تبلیغات، نشر و مطبوعات و حتی زندگی روزمره به چشم می‌خورد و علمیست که نیاز به تخصص‌های مختلف تئوری و نرم افزاری دارد.</p>
								
							</div>
							<div class="4u 12u$(medium)" style="text-align:right" >
                            <h3 class="client-text2">دوره های شبکه</h3>
								<p class="client-text">در حال حاضر استفاده از شبکه اکثر سازمان ها و شرکت ها الزامی است. شکل گیری و راه اندازی شبکه در هر شرکت یا سازمانی که دست کم از دو کامپیوتر استفاده می کند جزء اصول اولیه محسوب می گردد، هر سازمانی علاوه بر طراحی و به کارگیری شبکه ، نیازی مبرم به سیستمی دارد که عملکرد شبکه را زیر نظر گرفته و در زمان بروز هرگونه مشکلی ، سریعا عیب یابی نماید.</p>
							</div>
							<div class="4u$ 12u$(medium)" style="text-align:right" >
								<h3 class="client-text2">دوره های  برنامه نویسی تحت وب</h3>
                                <p class="client-text">

دوره اصول و مفاهيم برنامه نويسی وب پس از گذشت چندين ماه مطالعه و جمع آوری مطلب تدوين شده است . اين دوره تاکنون دربرخی از مراکز آموزشی بصورت کاملا" عملی و کارگاهی برگزار  و اينک بصورت  فشرده در اختيار علاقه مندان قرار می گيرد.</p>
							</div>
						</div>
					</div>
				</div>
				<a href="#two" class="goto-next scrolly">Next</a>
			</section>

		<!-- Two -->
			<section id="two" class="spotlight style2 right">
				<span class="image fit main"><img src="images/ax5.jpg" alt="" /></span>
				<div class="content" style="text-align:right">
					<header>
						<h2 class="client-text2">برنامه نویسی</h2>
						<h1 class="client-text2">برنامه نویسی از دیدگاه مهندسان آموزشگاه</h1>
					</header>
					<p class="client-text" style="text-align:right">
                    اسامی زبان‌های برنامه نویسی و نیز کارکردهای این زبان‌ها برای افرادی که اطلاعات چندانی از روند ایجاد یک صفحه اینترنتی ندارند واقعا گیج کننده است.
                    از سوی دیگر؛ رشد روز افزون وبگاه‌ها با کارکردهای گوناگون و همین طور شکل‌گیری ایده‌های نو در فضای وب باعث شده که زبان‌های برنامه نویسی تحت وب به سرعت پیشرفت کنند و <pre>...</pre>




</p>
					<ul class="actions">
						<li class="client-text"><a href="#" class="button" >ادامه مطلب</a></li>
					</ul>
				</div>
				<a href="#three" class="goto-next scrolly">Next</a>
			</section>

		<!-- Three -->
			<section id="three" class="spotlight style3 left">
				<span class="image fit main bottom"><img src="images/ax6.jpg" alt="" /></span>
				<div class="content">
					<header>
						<h2 class="client-text2">دوره های پیشرفته لینوکس</h2>
						<p class="client-text" style="text-align:right">لینوکس و قدرت جامعه ی متن باز</p>
					</header>
					<p class="client-text" style="text-align:right">لینوکس هسته سیستم عامل شبه یونیکس است که توزیع های بسیار زیاد و متفاوتی برای کاربرد های گوناگون بر پایه آن ایجاد شده است که این دسته از سیستم عامل های برپایه لینوکس به عنوان سیستم عامل های لینوکس شناخته می شوند.

به دلیل پایداری، به روز رسانی و انعطاف پذیری بسیار بالا این سیستم عامل ها بر روی انواع سخت افزارها مانند قابل نصب می باشد.

سیستم عامل لینوکس دارای دو محیط گرافیکی و خط فرمانی می باشد<pre>...</pre></p>
					<ul class="actions">
						<li class="client-text"><a href="#" class="button">ادامه مطلب</a></li>
                        
					</ul>
				</div>
				<a href="#four" class="goto-next scrolly">Next</a>
			</section>

		<!-- Four 
			<section id="four" class="wrapper style1 special fade-up">
				<div class="container">
					<header class="major">
						<h2>Accumsan sed tempus adipiscing blandit</h2>
						<p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
					</header>
					<div class="box alt">
						<div class="row uniform">
							<section class="4u 6u(medium) 12u$(xsmall)">
								<span class="icon alt major fa-area-chart"></span>
								<h3>Ipsum sed commodo</h3>
								<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
							</section>
							<section class="4u 6u$(medium) 12u$(xsmall)">
								<span class="icon alt major fa-comment"></span>
								<h3>Eleifend lorem ornare</h3>
								<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
							</section>
							<section class="4u$ 6u(medium) 12u$(xsmall)">
								<span class="icon alt major fa-flask"></span>
								<h3>Cubilia cep lobortis</h3>
								<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
							</section>
							<section class="4u 6u$(medium) 12u$(xsmall)">
								<span class="icon alt major fa-paper-plane"></span>
								<h3>Non semper interdum</h3>
								<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
							</section>
							<section class="4u 6u(medium) 12u$(xsmall)">
								<span class="icon alt major fa-file"></span>
								<h3>Odio laoreet accumsan</h3>
								<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
							</section>
							<section class="4u$ 6u$(medium) 12u$(xsmall)">
								<span class="icon alt major fa-lock"></span>
								<h3>Massa arcu accumsan</h3>
								<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
							</section>
						</div>
					</div>
					<footer class="major">
						<ul class="actions">
							<li><a href="#" class="button">Magna sed feugiat</a></li>
						</ul>
					</footer>
				</div>
			</section>

		 -->
			<section id="five" class="wrapper style2 special fade">
				<div class="container">
					<header>
						<h2 class="client-text2">جهت اطلاعات بیش تر از اخبار آموزشگاه ایمیل خود را وارد کنید</h2>
						
					</header>
					<form method="post" action="#" class="container 50%">
						<div class="row uniform 50%">
							<div class="8u 12u$(xsmall)" ><input type="email" name="email" id="email" placeholder="ایمیل خود را وارد کنید"  class="client-text"/></div>
							<div class="4u$ 12u$(xsmall)" ><input type="submit" value="ثبت"  class="fit special" /></div>
						</div>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
					<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					
				</ul>
			</footer>

	</body>
</html>