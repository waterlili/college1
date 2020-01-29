<?php
 include 'object/main.php';
$security=new security;
$connect=new connect;
$template=new template;
						 
				 if(isset($_POST['submit']))
				 {	
				 	 if ($_POST['email']=='' || $_POST['subject']=='' || $_POST['message']=='')
				          {
					        $security->Redirect("employe","empty=5236");
						  }
						  else{
		           
								
									$email=$security->Check_Post($_POST['email']);
									$subject=$security->Check_Post($_POST['subject']);
									$message=$security->Check_Post($_POST['message']);
									
									
									
									         if(!preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9\.-]+\.[a-zA-Z\.]+/",$email))
		                                   { 
								      
						                    $security->Redirect("employe","email=8020");
										   }
								
									
									$sql="INSERT INTO `contact` (`email`, `subject`, `text`) VALUES ('".$email."','".$subject."','".$message."')";
									$result=$connect->query($sql);
						if($result)
			  {
				  $security->Redirect("contact","send=1010");
			  }
			  else{
				  $security->Redirect("contact","error=1020");
			  }
								}
							  
							  
							  
				 }
							  
							  
							  
						  ?>