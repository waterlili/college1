 <?php
include '../object/main.php';
$security=new security;
$connect=new connect;
$template=new template;



?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../formstyle/img/favicon.html">

    <title>پنل مدیریت</title>

    <!-- Bootstrap core CSS -->
    <link href="../formstyle/css/bootstrap.min.css" rel="stylesheet">
    <link href="../formstyle/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../formstyle/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../formstyle/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"
    <link rel="stylesheet" href="../formstyle/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="../formstyle/css/style.css" rel="stylesheet">
    <link href="../formstyle/css/style-responsive.css" rel="stylesheet" />

 

 
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg"><!--logo start--><!--logo end-->
        <div class="top-nav " >
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <li>
                       <?php
							$security->Covering("../inc-temp/profile_menu");
							?>
                    </li>
                    <!-- user login dropdown start-->
                
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
    </header>
      <!--header end-->
      <!--sidebar start-->
     <aside>
<div id="sidebar"  class="nav-collapse " float="right">
           <?php
							$security->Covering("../inc-temp/menu_side");
							?>
      </div>
          </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <div class="row"></div>
                  
                      <!--work progress start-->
                      
   
                                
                             
                           
                        <?php 
						$nm=$_SESSION['manager_fname'];
						  $sql="SELECT * FROM `students` WHERE level='1' AND fname='".$nm."' ";
						  $result=$connect->query($sql);
						 while($rows=mysql_fetch_assoc($result))
						   {
							   
						  ?>
                       <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                               ویرایش  اطلاعات 
                         
                            </header>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" action="../check/editstinfo.php" method="post">
                                <p align="center"> <?php 
                                   if(isset($_GET['empty']))
                                    {
	                                 $security->Check_Get($_GET['empty']);
	                                  $template->message("لطفا تمامی فیلد ها را تکمیل نمایید","red");
	
                                      }  
									  else if(isset($_GET['update']))
                                      {
	                                 $security->Check_Get($_GET['update']);
	                                  $template->message("اطلاعات با موفقیت ویرایش شد","green");
	
                                      }
									   else if(isset($_GET['error']))
                                      {
	                                 $security->Check_Get($_GET['error']);
	                                  $template->message("مشکل در بروز رسانی","red");
	
                                      }?></p>
                                  <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">کد ملی </label>
                                        <div class="col-lg-10">
                                         <input type="text" class="form-control" id="inputEmail1"  name="codemeli" value="<?php echo $security->read($rows['codemeli']);  ?>" readonly>
                                            
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">شماره شناسنامه</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1"  name="shenasname" value="<?php echo $security->read($rows['shenasname']); ?>">
                                            
                                        </div>
                                  </div>
            
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="fname" value="<?php echo $security->read($rows['fname']); ?>">
                                                
                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام خانوادگی</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="lname" value="<?php echo $security->read($rows['lname']); ?>">
                                                
                                
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام پدر</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="fathername" value="<?php echo $security->read($rows['fathername']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">رشته تحصیلی</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="field" value="<?php echo $security->read($rows['field']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">شغل</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="job" value="<?php echo $security->read($rows['job']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">آدرس</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="address" value="<?php echo $security->read($rows['address']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">موبایل</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="mobile" value="<?php echo $security->read($rows['mobile']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام کاربری</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="username" value="<?php echo $security->read($rows['username']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">رمزعبور</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="password" value="<?php echo $security->read($rows['password']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">آدرس ایمیل</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="email" value="<?php echo $security->read($rows['email']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">سال تولد</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="birthday" value="<?php echo $security->read($rows['birthday']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                
                          
                                 <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-danger" name="submit">ویرایش</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                             <?php
						   }
						   ?>
                        </section>
                        </div>
                            
                        
            </div>
            </div>
              <div class="row"></div>
              <div class="row"></div>

        </section>
      </section>
      <!--main content end-->
  </section>

      <!-- js placed at the end of the document so the pages load faster -->
    <script src="../formstyle/js/jquery.js"></script>
    <script src="../formstyle/js/jquery-1.8.3.min.js"></script>
    <script src="../formstyle/js/bootstrap.min.js"></script>
    <script src="../formstyle/js/jquery.scrollTo.min.js"></script>
    <script src="../formstyle/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../formstyle/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../formstyle/js/owl.carousel.js" ></script>
    <script src="../formstyle/js/jquery.customSelect.min.js" ></script>

    <!--common script for all pages-->
    <script src="../formstyle/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="../formstyle/js/sparkline-chart.js"></script>
    <script src="../formstyle/js/easy-pie-chart.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>