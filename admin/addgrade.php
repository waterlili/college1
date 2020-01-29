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
                  <div class="col-lg-8">
                      <!--work progress start-->
                      <section class="panel"  >
                      <!-- <table class="table table-hover personal-task">
                              <tbody>
                              <tr><td width="13%"></br><td width="18%"></br><p align="center"  class="p-style" >لیست نمرات دانشجو</p>
                             
                                <p>&nbsp;</p></tr>-->
                                
                          <h3 class="name" align="center"  >فرم ثبت نمره</h3></br>     
                           <p align="center"><?php
						if(isset($_GET['empty']))
						{
							$security->Check_Get($_GET['empty']);
							$template->message("لطفا تمامی فیلدها را تکمیل نمایید","red");
							
						}else if(isset($_GET['send']))
						{
							$security->Check_Get($_GET['send']);
							$template->message("نمره با موفقیت افزوده شد.","green");
							
						}else if(isset($_GET['error']))
						{
							$security->Check_Get($_GET['error']);
							$template->message("نمره با موفقیت افزوده نشد.","red");
							
						}
			 
						  ?></p>
                          <?php 
						  $sql="SELECT * FROM `courses`";
						  $result=$connect->query($sql);
						  $rows=mysql_fetch_assoc($result);
						  ?>
                          <form class="form" align="center" action="../check/regrade.php" method="post" >
                              <p class="name" align="center">
                                <label for="name">کد دانشجو:</label>
                                <input type="text" name="code" id="code" />
                              </p>
   
                              <p class="name" align="center">
                                <label for="name">نام دوره:</label>
                                <input type="text" name="name" id="name" />
                              </p>
                                   <p class="name" align="center">
                                  
                                    
                                     
                                     
                                    
                                    
                                      <label for="name">نوع دوره:</label>
                                    <select type="text" name="combo" id="combo">

                                    
                                    
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
                                        <!--<input name="txtYearValue" type="text" id="txtYearValue" /></br>-->
<p align="center" class="name">
<input name="txtCombo" id="txtCombo" type="text" style="width:100px;margin-right:80px;" />
<input name="btnAddItem" type="button" id="btnAddItem"  value="افزودن آیتم" onclick="addCombo()"
style="width:90px;"/>

</p>

                                 </p>
                                 <p class="name" align="center">
                                   <label for="name">نمره :</label>
                                <input type="text" name="grade" id="name" />
                                 </p>
                               
                                 <p class="name" align="center">
                                    <label for="name" >نام استاد:</label>
                                <input type="text" name="teachername" id="name" />
                                 </p>
                               

   
                           <p class="submit" align="left">
                           <input type="submit" value="ثبت نمره" name="submit" />
                                 </p>
   
                             </form>
                          </section>
                          
                      
                          
                          
                          
                          
                    
                           
                             <!-- 
                               <tr> <td>1</td>
                                  <td>
                                      Target Sell
                                  </td>
                                  <td width="17%">
                                      <span class="badge bg-important">75%</span>
                                  </td>
                                  <td width="52%">
                                    <div id="work-progress1"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>
                                      Product Delivery
                                  </td>
                                  <td>
                                      <span class="badge bg-success">43%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress2"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>
                                      Payment Collection
                                  </td>
                                  <td>
                                      <span class="badge bg-info">67%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress3"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>
                                      Work Progress
                                  </td>
                                  <td>
                                      <span class="badge bg-warning">30%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress4"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>
                                      Delivery Pending
                                  </td>
                                  <td>
                                      <span class="badge bg-primary">15%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress5"></div>
                                  </td>
                              </tr>
                              </tbody>
                          </table>-->
						 
                    
                      <!--work progress end-->
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
