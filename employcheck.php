<?php
 include 'object/main.php';
$security=new security;
$connect=new connect;
$template=new template;
						 
				 if(isset($_POST['submit']))
				 {	
				 if ($_POST['name']=='' || $_POST['family']=='' || $_POST['field']=='' || $_POST['category']==''||
				$_POST['priority']=='' || $_POST['priority1']=='' || $_POST['day']=='' || $_POST['month']=='' ||$_POST['year']=='' || $_POST['email']=='' || $_POST['mobile']=='' || $_POST['address']=='')
				{
					$security->Redirect("employe","empty=5236");
					}
					else{
		
									$name=$security->Check_Post($_POST['name']);
									$family=$security->Check_Post($_POST['family']);
									$field=$security->Check_Post($_POST['field']);
									$category=$security->Check_Post($_POST['category']);
									$priority=$security->Check_Post($_POST['priority']);
									$priority1=$security->Check_Post($_POST['priority1']);
									$day=$security->Check_Post($_POST['day']);
									$month=$security->Check_Post($_POST['month']);
									$year=$security->Check_Post($_POST['year']);
									$email=$security->Check_Post($_POST['email']);
									$mobile=$security->Check_Post($_POST['mobile']);
									$address=$security->Check_Post($_POST['address']);
									
									
									
									         if(!preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9\.-]+\.[a-zA-Z\.]+/",$email))
		                                   { 
								      
						                    $security->Redirect("employe","email=8020");
										   }
								
									
									$sql="INSERT INTO `emp` (`e_name`, `e_family`, `e_priority`, `e_priority1`, `e_field`, `e_category`, `e_day`, `e_month`, `e_year`, `e_email`, `e_mobile`, `e_address`) VALUES ('".$name."','".$family."', '".$priority."','".$priority1."','".$field."','".$category."'
									,'".$day."','".$month."','".$year."','".$email."','".$mobile."','".$address."')";
									$result=$connect->query($sql);
						if($result)
			  {
				  $security->Redirect("employe","send=1010");
			  }
			  else{
				  $security->Redirect("employe","error=1020");
			  }
								}
							  
							  
				 }
							  
							  
							  
							  
						  ?>