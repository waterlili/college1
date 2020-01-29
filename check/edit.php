<?php
include '../object/main.php';
include '../tools/date/jdf.php';
$security=new security;
$connect=new connect;
if(isset($_POST['submit']))
{if($_POST['code']=='' || $_POST['name']=='' || $_POST['combo']=='' || $_POST['lenght']=='' || $_POST['cost']=='' || $_POST['teachername']=='' || $_POST['capacity']=='' )
{	
$security->Redirect("../admin/edit","empty=4060");
}else
{                                   
									$name=$security->Check_Post($_POST['name']);
									$type=$security->Check_Post($_POST['combo']);
									$lenght=$security->Check_Post($_POST['lenght']);
									$cost=$security->Check_Post($_POST['cost']);
									$teachername=$security->Check_Post($_POST['teachername']);
									$capacity=$security->Check_Post($_POST['capacity']);
									$sql="UPDATE `courses` SET `c_name` = '".$name."', `c_type` = '".$type."', `c_lenght` = '".$lenght."', `c_cost` = '".$cost."', `c_teacher` = '".$teachername."', `c_capacity` = '".$capacity."' WHERE `c_code`='".$_SESSION['coursecode']."'";
						$result=$connect->query($sql);
						if($result)
			  {
				  $security->Redirect("../admin/editwhole","update=1010");
			  }
			  else{
				   $security->Redirect("../admin/editwhole","error=1020");
			  }
								}
							  
							  
							  
							  
							  
							  
							  } 
							  else{
								  $security->Redirect("../admin/editwhole");							  }
						  ?>