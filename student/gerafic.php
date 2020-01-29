
<?php
include '../object/main.php';
$security=new security;
$connect=new connect;

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

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

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
                            <span class="username"><?php echo $_SESSION['student_name'];?></span>
                            
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
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="active">
                      <a class="" href="index.html">
                          
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>لیست نمرات دانشجو</span>
                      </a>
                  </li>
                  <li class="sub-menu" >
                      <a href="javascript:;" class="">
                          <i class="icon-book"></i>
                           
                          <span>ترم های درحال ثبت نام</span>
                          <span class="arrow"></span>
                         
                      </a>
                      <ul class="sub">
                        <li><a href='barnamenevisi.php'>برنامه نویسی</a></li>
                          <li><a class='' href='shabake.php'>شبکه</a></li>
                          <li><a class='' href='gerafic.php'>گرافیک</a></li>
                          <li><a class='' href='slider.html'>لینوکس</a></li>
                          <li><a class='' href='font_awesome.html'>آزاد</a></li>
                      </ul>
                  </li>
				  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-cogs"></i>
                          <span>Components</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="grids.html">Grids</a></li>
                          <li><a class="" href="calendar.html">Calendar</a></li>
                          <li><a class="" href="charts.html">Charts</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-tasks"></i>
                          <span>Form Stuff</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Components</a></li>
                          <li><a class="" href="form_wizard.html">Form Wizard</a></li>
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-th"></i>
                          <span>Data Tables</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                          <li><a class="" href="dynamic_table.html">Dynamic Table</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="inbox.html">
                          <i class="icon-envelope"></i>
                          <span>Mail </span>
                          <span class="label label-danger pull-right mail-info">2</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-glass"></i>
                          <span>Extra</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="profile.html">Profile</a></li>
                          <li><a class="" href="invoice.html">Invoice</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                          <li><a class="" href="500.html">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="login.html">
                          <i class="icon-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
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
                                
                                   <table class="table table-hover personal-task">
                                    <tbody>
     
                          <?php
						   
        $sql="SELECT * FROM `courses` WHERE id BETWEEN 300 AND 399 ";
                              $result=$connect->query($sql);
							
							 while($rows=mysql_fetch_assoc($result))
							 
							 {
                                 echo "<tr>
                                    <td>".$rows['id']."</td>
                                    <td>".$rows['c_name']."</td>
                                    <td><span class='badge bg-important'>".$rows['c_lenght']."</span></td>
									<td><div id='work-progress1'>".$rows['c_start']."</div></td>
									<td><div id='work-progress1'>".$rows['c_cost']."</div></td>
									<td><div id='work-progress1'>".$rows['c_techer']."</div></td>
                                  </tr>";
							 }
							  
                               
                           
                          ?>
                            </tbody>
                          </table>
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
