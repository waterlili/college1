<?php
include '../object/main.php';
include '../tools/date/jdf.php';
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
     <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo"></a>
            <!--logo end-->
          
            <div class="top-nav ">
             <ul class="nav pull-right top-menu">
                
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <li>
                      <?php
							$security->Covering("../inc-temp/profile_menu");
							?>
                            </li>
            </ul>
            </div>
              <div class="nav notify-row" id="top_menu" style="float:left">
                <!--  notification start -->
               <?php $security->Covering("../inc-temp/menu_alarm");?>
                <!--  notification end -->
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
                <!-- page start-->
                <div class="row">
                    <aside class="profile-nav col-lg-3">
                        <section class="panel">
                            <div class="user-heading round">
                              
                                 <a>
                                      <?php
			
						
								  echo '<img src="'.$_SESSION['img'].'" alt="...">';
						
                               ?>
                                 </a> 
                                  
                           
                                
                                <h1><?php echo $_SESSION['manager_name']; ?></h1>
                             
                            </div>

                            <ul class="nav nav-pills nav-stacked">
                               
                                <li><a href="calender.php"><i class="icon-calendar"></i>تقویم</a></li>
                                <li><a href="editprofile.php"><i class="icon-edit"></i>ویرایش پروفایل</a></li>
                                <li style="height:50px">&nbsp;</li>
                            </ul>

                        </section>
                    </aside>
                    <aside class="profile-info col-lg-9">
                      
                        <section class="panel">
                            <div class="bio-graph-heading">
اطلاعات کامل مدیریت سایت
                         
                            </div>
                            <div class="panel-body bio-graph-info">
                            <?php
							$nm=$_SESSION['manager_fname'];
							$sql="SELECT * FROM `students` WHERE level='1' AND fname='".$nm."'";
							  $result=$connect->query($sql);
						 while($rows=mysql_fetch_assoc($result))
						   {
							   
							?>
                              
                                <div class="row">
                                    <div class="bio-row">
                                        <p><span>نام </span>: <?php echo $_SESSION['manager_fname']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>نام خانوادگی</span>: <?php echo $_SESSION['manager_lname']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>نام پدر </span>: <?php echo $rows['fathername']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>سال تولد</span>: <?php echo $rows['birthday']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>آدرس محل سکونت </span>: <?php echo $rows['address']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>آدرس ایمیل </span>: <?php echo $rows['email']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>شماره موبایل</span>: <?php echo $rows['mobile']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>رشته تحصیلی </span>:<?php echo $rows['field']; ?></p>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </section>
                        <section>
                            <div class="row">
                           
                            
                                
                            </div>
                        </section>
                    </aside>
                </div>

                <!-- page end-->
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
