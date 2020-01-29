<?php
 include '../object/main.php';
$security=new security;
$connect=new connect;
$template=new template;
						  if(isset($_POST['submit']))
						  {
							if($_POST['code']=='' || $_POST['name']=='' || $_POST['combo']=='' 
							|| $_POST['lenght']=='' || $_POST['cost']=='' || $_POST['teachername']=='' || $_POST['capacity']=='')
							{
								$security->Redirect("../admin/index","empty=4020");
								
								
								
								}  
								else{
									$code=$security->Check_Post($_POST['code']);
									$name=$security->Check_Post($_POST['name']);
									$type=$security->Check_Post($_POST['combo']);
									$lenght=$security->Check_Post($_POST['lenght']);
									$start=$security->Check_Post($_POST['start']);
									$cost=$security->Check_Post($_POST['cost']);
									$teachername=$security->Check_Post($_POST['teachername']);
									$capacity=$security->Check_Post($_POST['capacity']);
									$c_start=$security->Check_Post($_POST['c_start']);
									$c_end=$security->Check_Post($_POST['c_end']);
									$sql="INSERT INTO `courses` (`c_code`, `c_name`, `c_type`, `c_lenght`, `c_cost`, `c_teacher`, `c_capacity`, `c_start`, `c_end`) VALUES ('".$code."','".$name."', '".$type."','".$lenght."','".$cost."','".$teachername."'
									,'".$capacity."','".$c_start."','".$c_end."')";
									$result=$connect->query($sql);
						if($result)
			  {
				  $security->Redirect("../admin/index","send=1010");
			  }
			  else{
				   $security->Redirect("../admin/index","error=1020");
			  }
								}
							  
							  
							  
							  
							  
							  
							  } 
						  ?>
                           
                            