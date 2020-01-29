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
    
<script>    
    function printDiv(printpage) {
     var printContents = document.getElementById(printpage).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
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
    <section id="main-content">
            <section class="wrapper">
               <div class="row">
                    <div class="col-lg-10" >
                        <section class="panel" id="printpage" name="printpage">
                            <header class="panel-heading">
                                بررسی دوره ها
                         
                            </header>
                            
                            <table class="table table-striped table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th>کد دوره</th>
                                        <th class="hidden-phone">نام دوره </th>
                                        <th>نوع دوره</th>
                                        <th>طول دوره </th>
                                        <th>هزینه دوره</th>
                                        <th>مدرس</th>
                                        <th>ظرفیت</th>
                                        <th>تاریخ شروع</th>
                                        <th>تاریخ پایان</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      <?php 
									
									
									  
						  $sql="SELECT * FROM `courses`";
						  $result=$connect->query($sql);
						  
						  while($rows=mysql_fetch_assoc($result)){
							   
						  ?>
                          
                         
                         <?php 		
                         
                        echo "<tr>
						<td>".$rows['c_code']."</td>
						<td class='hidden-phone'>".$rows['c_name']."</td>
						<td>".$rows['c_type']."</td>
						<td>".$rows['c_lenght']."</td>
						<td>".$rows['c_cost']."</td>
						<td>".$rows['c_teacher']."</td>
						<td>".$rows['c_capacity']."</td>
						<td>".$rows['c_start']."</td>
						<td>".$rows['c_end']."</td>
						  <td>
                        
                    
                                            
                          <a href='../admin/edit1.php?id=$rows[c_code]'><button class='btn btn-primary btn-xs'><i class='icon-pencil'></i></button></a></td>
						  </td>
						  <td>
                          <a href='../check/delete?id=$rows[c_code]'><button class='btn btn-danger btn-xs'><i class='icon-trash '></i></button></a>
						  </td>
						  <td>
						<button class='btn btn-danger btn-xs'  onclick=printDiv('printpage')><i class='icon-print '></i></button>
						  
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
                <!-- page end-->
            </section>
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
