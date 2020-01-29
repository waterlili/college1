<?php
 include 'object/main.php';
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
		<title> تماس با ما</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
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
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
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

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2 class="client-text" >تماس با ما</h2>
						
					</header>

					
						

					<!-- Form -->
						<section >
                        <div class="client-text1">
				 <?php
 					if(isset($_GET['empty']))
					  {
						  $security->Check_Get($_GET['empty']);
				          $template->message("لطفا تمامی فیلد های موردنیاز را تکمیل نمایید","red");
					  }
					 if(isset($_GET['email']))
					  {
						  $security->Check_Get($_GET['email']);
				          $template->message("لطفا ایمیل را صحیح وارد نمایید","red");
					  }
					  	  else if(isset($_GET['error']))
					  {
						  $security->Check_Get($_GET['error']);
				          $template->message("با عرض پوزش پیام شما ثبت نشد","red");
					  }
					  
					    else if(isset($_GET['send']))
					  {
						  $security->Check_Get($_GET['send']);
				          $template->message("با تشکر به زودی درخواست شما توسط مدیریت بررسی می شود","green");
					  }
					  
					  ?>
                      </div>
							<form method="post" action="contactcheck.php" >
							
									
                              </br>
                        
                                    <div class="4u 12u$(xsmall)" >
										<input type="email" name="email" id="name" value="" placeholder="آدرس ایمیل" class="client-text1" /></br>
									</div>
                                    	    
                                    	<div class="4u 12u$(xsmall)" >
										<input type="text" name="subject" id="name" value="" placeholder="موضوع" class="client-text1" /></br>
									</div>
                                         
                                         
									<div class="4u$" style="margin-right:400px;">
										<textarea name="message" id="message" placeholder="متن پیام" rows="6" class="client-text"></textarea>
									</div>
                                    </br>
                                      	<div class="4u 12u$(xsmall)" >
										<input type="text" name="securitycode" id="name" value="" placeholder="تصویر امنیتی" class="client-text1" /></br>
                                        
									</div>
                                    
                                     <div class="4u 12u$(xsmall)"  >
										
                                         <img src="tools/captcha/Captcha.php" alt="Captcha" class="client-text1">
									</div>
                                    
                                   
									<div class="12u$" style="margin-right:620px;" >
										<ul class="actions" class="client-text">
											<li><input type="submit" value="ارسال اطلاعات" name="submit"   class="special"/></li>
											
										</ul>
									</div>
								</div>
                                
								
							</form>
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