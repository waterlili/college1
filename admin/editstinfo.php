<?php
include '../object/main.php';
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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

 
  </head>

  <body>

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
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <div class="row"></div>
                  <div class="col-lg-12">
                      <!--work progress start-->
                       <section class="panel">
                            <header class="panel-heading">
                                تغییرات اطلاعات دانشجو
                         
                            </header>
                            
                         <table class="table table-striped table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th>کد ملی</th>
                                        <th class="hidden-phone">شماره شناسنامه</th>
                                        <th>نام </th>
                                        <th>نام خانوادگی</th>
                                        <th>نام پدر</th>
                                        <th>رشته</th>
                                        <th>شغل</th>
                                        <th>آدرس محل سکونت</th>
                                         <th>شماره موبایل</th>
                                        <th>تاریخ عضویت</th>
                                        <th>نام کاربری </th>
                                        <th>رمز عبور</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                   <?php 
						  $sql="SELECT * FROM `students`";
						  $result=$connect->query($sql);
						  while($rows=mysql_fetch_assoc($result)){
						  ?>
                          
                         
                         <?php 		
                         
                        echo "<tr>
						<td>".$rows['codemeli']."</td>
						<td>".$rows['shenasname']."</td>
						<td>".$rows['fname']."</td>
						<td>".$rows['lname']."</td>
						<td>".$rows['fathername']."</td>
						<td>".$rows['field']."</td>
						
						<td>".$rows['job']."</td>
						<td>".$rows['address']."</td>
						<td>".$rows['mobile']."</td>
						<td>".$rows['date']."</td>
						<td>".$rows['username']."</td>
						<td>".$rows['password']."</td>
						
						<td>
                                            
                          <a href='editstinfo1.php?id=$rows[id_student]'><button class='btn btn-primary btn-xs'><i class='icon-pencil'></i></button></a></td>
						  <td>
                          <a href=../check/deletest.php?id=$rows[id_student]><button class='btn btn-danger btn-xs'><i class='icon-trash '></i></button></a>
						  
                          </td>
						</tr>";
                        
                          ?> 
                                   
                                     
                                    
                        <?php
						  }
						  ?>
                            </tbody>
                            </table>      
                        </section>

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
