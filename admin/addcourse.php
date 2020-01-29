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
  <script type="text/javaScript">
 function addCombo() {
    var textb = document.getElementById("txtCombo");
    var combo = document.getElementById("combo");
     
    var option = document.createElement("option");
    option.text = textb.value;
    option.value = textb.value;
    try {
        combo.add(option, null); //Standard
    }catch(error) {
        combo.add(option); // IE only
    }
    textb.value = "";
}



</script>
  
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
                
                    <!-- settings start -->
                     <?php
							$security->Covering("../inc-temp/menu_alarm");
							?>
                
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
              <!--state overview start-->
              <div class="row"></div>
                  
                      <!--work progress start-->
                      
   
                                
                             
                           
                          <?php 
						  $sql="SELECT * FROM `courses`";
						  $result=$connect->query($sql);
						  $rows=mysql_fetch_assoc($result);
						  ?>
                       <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
                               ثبت دوره
                         
                            </header>
                            <div class="panel-body">
                            
                  <form class="form-horizontal" role="form" action="../check/createco.php" method="post">
                                <p align="center"><?php
						if(isset($_GET['empty']))
						{
							$security->Check_Get($_GET['empty']);
							$template->message("لطفا تمامی فیلدها را تکمیل نمایید","red");
							
						}else if(isset($_GET['send']))
						{
							$security->Check_Get($_GET['send']);
							$template->message("دوره ی جدید با موفقیت افزوده شد.","green");
							
						}else if(isset($_GET['error']))
						{
							$security->Check_Get($_GET['error']);
							$template->message("دوره ی جدید با موفقیت افزوده نشد.","red");
							
						}
			 
						  ?>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">کد دوره </label>
                                        <div class="col-lg-10">
                                         <input type="text" class="form-control" id="inputEmail1" placeholder="کد دوره" name="code">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام دوره</label>
                                        <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="نام دوره" name="name">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نوع دوره</label>
                                        <div class="col-lg-10">
                                            
                                            <select type="text" class="form-control" name="combo" id="combo" placeholder="نام دوره">
                                                
                                     <?php

                                    
									 $sql1 ="SELECT DISTINCT `c_type`
                                     FROM `courses` WHERE `c_type` IS NOT NULL
                                     ORDER BY `c_type`";
									 $result1=$connect->query($sql1);
									 while($items=mysql_fetch_assoc($result1))
						             {

                                    

                                     foreach ($items as $value) {

                                    ?>

                                  <option value="<?php echo $value; ?>"><?php echo $value; ?></option>


                                 <?php

                                   
									 }
                                       ?>
                                       <?php }?>
                                            </select>
                                        </div>
                                         </div>
                                       <div class="form-group"> 
                                        

                                     
                                       <label for="additems" class="col-lg-2 control-label"></label>
                                       <span class="col-lg-10">
                                       <input name="txtCombo" id="txtCombo" type="text" class="form-control"  />
                                      </br>
                                       
                                       <input name="btnAddItem" type="button" id="btnAddItem"  value="افزودن آیتم" onclick="addCombo()"
class="btn btn-danger" style="width:90px;"/>
                                      
                                       </span>
                                     
                                        
                                        </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">طول دوره</label>
                                        <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputEmail1" placeholder="طول دوره" name="lenght">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">هزینه دوره</label>
                                        <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputEmail1" placeholder="هزینه دوره" name="cost">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">نام استاد</label>
                                        <div class="col-lg-10">
                                         <input type="text" class="form-control" id="inputEmail1" placeholder="نام استاد" name="teachername">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">ظرفیت</label>
                                        <div class="col-lg-10">
                                         <input type="text" class="form-control" id="inputEmail1" placeholder="ظرفیت" name="capacity">
                                            
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label"> شروع</label>
                                        <div class="col-lg-10">
                                         <input type="text" class="form-control" id="inputEmail1" placeholder="تاریخ شروع" name="c_start">
                                            
                                        </div>
                                    </div> <div class="form-group">
                                        <label for="coursecode" class="col-lg-2 control-label">پایان</label>
                                        <div class="col-lg-10">
                                         <input type="text" class="form-control" id="inputEmail1" placeholder="تاریخ پایان" name="c_end">
                                        <!--<input type="اhidden" class="form-control" value="<?php  echo jdate('Y/n/j'); ?>">-->
                                            
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
