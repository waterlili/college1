<?php
include '../object/main.php';
$security=new security;
$connect=new connect;
$template=new template;
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>

  
    <meta charset="utf-8" >
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
<div>
  <header class="panel-heading" >
                                ثبت نمرات
                         
                            </header>
                     <?php
					
					
                     $q = $security->Check_Get($_GET['q']);
                     $sql="SELECT * FROM st_grade WHERE courseid = '".$q."'";
                     $result=$connect->query($sql);






echo "<table class='table table-striped border-top' id='sample_1'>
                                <thead>
                                    <tr class='odd gradeX'>

                                        <th>شماره دانشجویی</th>
                                        <th>نام دوره</th>
                                        <th>نام استاد</th>
										<th> نمره</th>
										 
                                        
                                    </tr>
                                </thead><body>";
								
while($row = mysql_fetch_array($result)) {
	
    echo "<tr class='odd gradeX'>";
    echo "<td>'".$row['id']."'</td>";
    echo "<td>'".$row['coursename']."'</td>";
	echo "<td class='hidden-phone'>'".$row['techername']."'</td>";
	echo "<td><a href='grade.php'><button  style='float:right;' class='btn btn-danger btn-xs'><i class='icon-location-arrow '></i></button></a></td>";

    
    echo "</tr>";
	
}

echo "</body></table>";
					
					
?>

 </div>           
                <!-- page start-->
             
                   
                       
                          
                      
                    
               
                <!-- page end-->
            
      
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

 
</body>
</html>