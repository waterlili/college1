<?php
 include '../object/main.php';
$security=new security;
$connect=new connect;
$template=new template;
$reggarde;
 $_SESSION['grade']=$reggrade;
						  if(isset($_POST['submit']))
						  {
							if($_POST['grade']=='')
							{
								$security->Redirect("../admin/grade","empty=4020");
								
								
								
								}  
								else {
									$grade=$security->Check_Post($_POST['grade']);
								    $sql="UPDATE `st_grade` SET `grade`='".$grade."' WHERE id='".$_SESSION['stid']."'";
									$result=$connect->query($sql);
									$reggarde=1;
									
						if($result)
			  {
				  $security->Redirect("../admin/grade","send=1010");
			  }
			  else{
				   $security->Redirect("../admin/grade","error=1020");
			  }
								}
							  
							  
							  
							  
							  
							  
							  } 
						  ?>
                           
                            