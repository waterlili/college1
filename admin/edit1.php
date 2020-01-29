 <?php
include '../object/main.php';
$security=new security;
$connect=new connect;
$template=new template;

if(!isset($_GET['id']))
{
	$security->Redirect("edit");
	}


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
                    <!-- user login dropdown start-->
                    <li class="dropdown" >
                        <a href="#" >
                            <img alt="" src="../formstyle/img/avatar1_small.jpg">
                            <span class="username"><?php echo $_SESSION['manager_name'];?></span>
                            
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                            <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
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
						$id=$security->Check_Get($_GET['id']);
						  $sql="SELECT * FROM `courses` WHERE c_code='".$id."' ";
						  $result=$connect->query($sql);
						 while($rows=mysql_fetch_assoc($result))
						   {
							   $_SESSION['coursecode']=$rows['c_code'];
						  ?>
                       <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                               ویرایش  اطلاعات 
                         
                            </header>
                            <div class="panel-body">
                                  <form class="form-horizontal" role="form" action="../check/edit.php" method="post">
      
                                  <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">کد دوره </label>
                                        <div class="col-lg-10">
                                         <input type="text" class="form-control" id="inputEmail1"  name="code" value="<?php echo $security->read($rows['c_code']);  ?>" readonly>
                                            
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام دوره</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1"  name="name" value="<?php echo $security->read($rows['c_name']); ?>">
                                            
                                        </div>
                                  </div>
            
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نوع دوره</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="combo" value="<?php echo $security->read($rows['c_type']); ?>">
                                                
                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">طول دوره</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="lenght" value="<?php echo $security->read($rows['c_lenght']); ?>">
                                                
                                
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">هزینه دوره</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="cost" value="<?php echo $security->read($rows['c_cost']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام استاد</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="teachername" value="<?php echo $security->read($rows['c_teacher']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">ظرفیت</label>
                                        <div class="col-lg-10">
                                            
                                            <input type="text" class="form-control" id="inputEmail1"  name="capacity" value="<?php echo $security->read($rows['c_capacity']); ?>" >
                                                
                                
                                        </div>
                                    </div>
                          
                                 <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-danger" name="submit">ویرایش</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                        </div>
                          <?php
						   }
						   ?>   
                        
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