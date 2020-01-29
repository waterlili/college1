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
    <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","gradreg1.php?q="+str,true);
        xmlhttp.send();
    }
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
            
                <!-- page start-->
                <div class="row">
                      
                    <div class="col-lg-12">
                     
                       
                            
                                              
                      
                         
                          
                               </br>
                                
                                <div class="col-lg-10" style="margin-right:0px" >
                                         <form> 
                                            <select  class="form-control" name="coursename" style="width:160px;height:50px;" onchange="showUser(this.value)" >
                                        <?php
                                  
                                    
									 $sql1="SELECT `c_type`,`c_code`
                                     FROM `courses` WHERE `c_type` IS NOT NULL
                                     ORDER BY `c_type`";
									 $result1=$connect->query($sql1);
									 while($items=mysql_fetch_assoc($result1))
						             {

                                    $code=$items['c_code'];

                                     $value=$items['c_type'];

                                    ?>

                                  <option value="<?php echo $code; ?>"><?php echo $value; ?></option>


                                 <?php

                                   
							      }
                                  ?>
                                 
                                      
                               
                                            </select>
                                            </form>                                          
                                
                                </br></br></br>
                                    </br>
                             <div id="txtHint" >اطلاعات دوره ی مورد نظر در اینجا نمایش داده خواهد شد</div>
                             </div>
                         
                            <table class="table table-striped border-top" id="sample_1">
                           
                                
                                <tbody>
                                 
                                </tbody>
                              
                            </table>
                        
                             
                          
                      
                         
                                            
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


  


  </body>
</html>
