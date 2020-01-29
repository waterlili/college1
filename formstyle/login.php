<?php

include '../object/main.php';
$security=new security;
$template=new template;
?>


<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">


    <title>فرم ورود کاربران</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
    	
		<meta   http-equiv="content-type"   content="text/html;charset=utf-8"  />
		<meta name="description" content="" />
		<meta name="keywords" content="UNITED COMMS Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.scrolly.min.js"></script>
		<script src="../js/jquery.dropotron.min.js"></script>
		<script src="../js/jquery.scrollex.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="../css/skel.css" />
			<link rel="stylesheet" href="../css/style.css" />
			<link rel="stylesheet" href="../css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

</head>









  <body class="login-body">

  	

    <div class="container">

      <form class="form-signin" action="check.php" method="post">
        <h2 class="form-signin-heading">فرم ورود کاربران</h2>
        <div class="login-wrap">
            <p>
            <?php

if(isset($_GET['empty']))
{
	$security->Check_Get($_GET['empty']);
	$template->message("لطفا تمامی فیلد ها را تکمیل نمایید","red");
	
}
else if(isset($_GET['captcha']))
{
	$security->Check_Get($_GET['captcha']);
	$template->message("لطفا تصویر امنیتی را صحیح وارد نمایید","red");
}
else if(isset($_GET['errorlog']))
{
	$security->Check_Get($_GET['errorlog']);
	$template->message("مشخصات وارد شده صحیح نمی باشد","red");
	}
	else if(isset($_GET['errorusr']))
{
	$security->Check_Get($_GET['errorusr']);
	$template->message("کاربری با این مشخصات وجود ندارد","red");
	}

?>
         <input type="text" class="form-control" placeholder="نام کاربری" autofocus name="username" id="username" >
              <input type="password" class="form-control" placeholder="رمز عبور" name="password" id="password">
              <input type="password" class="form-control" placeholder="تصویر کد امنیتی" name="captcha" id="captcha">
            <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label> -->            </p>
          <img src="../tools/captcha/Captcha.php" alt="Captcha">
          <button class="btn btn-lg btn-login btn-block" type="submit" name="login">ورود</button>
        

        </div>

      </form>

    </div>


  </body>
</html>
