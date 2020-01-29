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
		<title> درخواست همکاری</title>
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
						<h2 class="client-text" >فرم درخواست همکاری</h2>
						<p></p>
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
							<form method="post" action="employcheck.php" >
							
									<div class="4u 12u$(xsmall)" >
										<input type="text" name="name" id="name" value="" placeholder="نام" class="client-text1" /></br>
									</div>
                                    <div class="4u 12u$(xsmall)" >
									     <input type="text" name="family" id="name" value="" placeholder="نام خانوادگی" class="client-text1"/>
									</div>
                                    </br>
                                    <div class="4u 12u$(medium)" style="margin-right:390px;" >
										<input type="radio" id="priority-low" name="priority"   value="زن">
                                        
                                        &nbsp;&nbsp;&nbsp;
										<label for="priority-low" class="client-text"  >زن</label>
                                        
									&nbsp;&nbsp;
										<input type="radio" id="priority-normal" name="priority"  value="مرد" >
										<label for="priority-normal" class="client-text" >مرد</label>
									</div>
                                 
                                 <div class="4u 12u$(medium)" style="margin-right:392px;">
                                  <input type="radio" id="priority-low1" name="priority1"  value="مجرد" checked >
								  <label for="priority-low1" class="client-text" >مجرد</label>
                                  
                                  <input type="radio" id="priority-normal1" name="priority1"  value="متاهل">
                                  <label for="priority-normal1" class="client-text">متاهل</label>
                                    
                                     </div>
                                    </br>
                                    	<div class="4u 12u$(xsmall)" >
										<input type="text" name="field" id="name" value="" placeholder="رشته تحصیلی" class="client-text1" /></br>
									</div>
                                 
                                  
                                   	<div class="4u$" style="margin-right:400px;" >
										<div class="select-wrapper" >
											<select name="category" id="category" class="client-text2">
												<option value="دیپلم">&nbsp;&nbsp;&nbsp;دیپلم</option>
                                                <option value="فوق لیسانس">&nbsp;&nbsp;&nbsp;فوق لیسانس</option>
                                                <option value="لیسانس">&nbsp;&nbsp;&nbsp;لیسانس</option>
                                                <option value="فوق دیپلم">&nbsp;&nbsp;&nbsp;فوق دیپلم</option>
                                                <option value="دکتری">&nbsp;&nbsp;&nbsp; دکتری</option>
											</select>
                                         
										</div>
									</div>
                                    </br>
                                    
                                    <div style="margin-right:400px;">
                                    <span class="select-wrapper" class="client-text2">
                                  
                                         <select class="selective" id="selective1" name="day" >
                            <option value="روز تولد"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; روز تولد</option>
                            <?php for($i=1;$i<=12;$i++){ 
                            echo '<option value="saab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$i.'</option>';
                           
                             } ?>
                        </select> 
                        </span>
                       
                        <span class="select-wrapper" class="client-text2">
                                        <select class="selective" id="selective2" name="month">
                            <option value=" " > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ماه تولد</option>
                           <?php for($i=1;$i<=12;$i++){ 
                            echo '<option value="saab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$i.'</option>';
                           
                             } ?>
                        </select>
                        </span>
                        <span class="select-wrapper" class="client-text2">
                                        <select class="selective" id="selective3" name="year">
                            <option value=" "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;سال تولد</option>
                            
                             <?php for($i=60;$i<=80;$i++){ 
                            echo '<option value="saab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13'.$i.'</option>';
                           
                             } ?>
                           
                        </select>
                        </span>
                       
                       
                              
                              </div>
                              </br>
                        
                                    <div class="4u 12u$(xsmall)" >
										<input type="email" name="email" id="name" value="" placeholder="آدرس ایمیل" class="client-text1" /></br>
									</div>
                                    	    
                                    	<div class="4u 12u$(xsmall)" >
										<input type="text" name="mobile" id="name" value="" placeholder="شماره موبایل" class="client-text1" /></br>
									</div>
                                         
                                         
									<div class="4u$" style="margin-right:400px;">
										<textarea name="address" id="message" placeholder="آدرس محل سکونت" rows="6" class="client-text"></textarea>
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