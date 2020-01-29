<?php
include '../object/main.php';
$security=new security;
$connect=new connect;
$template=new template;
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../formstyle/img/favicon.html">

    <title>پنل مدیریت</title>

    <!-- Bootstrap core CSS -->
   <!--  <script src="../calender/js-persian-cal.min.js"></script>
    <link rel="stylesheet" href="../calender/js-persian-cal.css">-->
    
            
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

  <body class="arzesh-bootstrap"  ng-controller='MainController'>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg"><!--logo start--><!--logo end-->
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
     <section id="main-content">
          <section class="wrapper">
             <div class="row"></div>
			
                          <?php 
						  $sql="SELECT * FROM `st_grade`";
						  $result=$connect->query($sql);
						  $rows=mysql_fetch_assoc($result);
						  ?>
                        <div class="col-lg-8">
                        <section class="panel">
                       
                            <header class="panel-heading">
                               افزودن دانشجو
                         
                            </header>
                            
                            <div class="panel-body">
               <form class="form-horizontal" role="form" action="../check/addst.php" method="post" 
               enctype="multipart/form-data">
                                <p align="center"><?php
						if(isset($_GET['empty']))
						{
							$security->Check_Get($_GET['empty']);
							$template->message("لطفا تمامی فیلدها را تکمیل نمایید","red");
							
						}else if(isset($_GET['send']))
						{
							$security->Check_Get($_GET['send']);
							$template->message("دانشجوی جدید با موفقیت افزوده شد","green");
							
						}else if(isset($_GET['error']))
						{
							$security->Check_Get($_GET['error']);
							$template->message("دانشجوی جدید با موفقیت افزوده نشد","red");
							
						}
			 
						  ?>
                          
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">کدملی </label>
                                        <div class="col-lg-10">
                                         <input type="text" class="form-control" id="inputEmail1" placeholder="کد ملی" name="codemeli">
                                            
                                        </div>
                                   </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">شماره شناسنامه</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="شماره شناسنامه" name="shomareshenasname">
                                            
                                    </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام دانشجو</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="نام دانشجو" name="name">
                                            
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام خانوادگی </label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="نام خانوادگی دانشجو" name="family">
                                            
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام پدر</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="نام پدر" name="fathername">
                                            
                                    </div>
                                    </div>
                                                <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">رشته تحصیلی</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="رشته تحصیلی" name="field">
                                            
                                    </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <label  class="col-lg-2 control-label">عکس دانشجو</label>
                                        <div class="col-lg-10">
                                        <input type="file" style="float:right;color:red" name="fileToUpload" id="fileToUpload">
                                
                                    </div>
                                    </div>
                                   <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">وضعیت شغلی</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="وضعیت شغلی" name="job">
                                            
                                    </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام کاربری</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="نام کاربری" name="username">
                                            
                                    </div>
                                    </div>
                                           <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">رمز عبور</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="رمز عبور" name="password">
                                            
                                    </div>
                                    </div>
                         
                         
                                <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">شماره موبایل</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="شماره موبایل" name="mobile">
                                            
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">تاریخ عضویت</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control"   placeholder="تاریخ عضویت" name="date">

                               
                                    </div>
                                     
                                    </div>
                                         <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">سطح دسترسی</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="سطح دسترسی" name="level">
                                            
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label"> محل سکونت</label>
                                        <div class="col-lg-10">
                                        <textarea class="form-control" id="inputEmail1" placeholder="آدرس محل سکونت" name="address"></textarea>
                                            
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-danger" name="submit">ثبت</button>
                                        </div>
                                    </div>
                                    
   
                             </form>
                             
                             
                     </div>
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
    <script src="../formstyle/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="../formstyle/js/jquery-2.1.4.min.js" type="text/javascript"></script>
   
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
<script type="text/javascript">
$(function() {
$("#demo").persianDatepicker();
});



</script>


  </body>
</html>
