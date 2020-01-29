<?php
include '../object/main.php';
include '../tools/date/jdf.php';
$security=new security;
$connect=new connect;
if(isset($_POST['submit']))
{if( $_POST['shenasname']=='' || $_POST['fname']=='' || $_POST['lname']=='' || $_POST['fathername']=='' || $_POST['field']=='' || $_POST['job']=='' || $_POST['address']==''|| $_POST['mobile']==''|| $_POST['username']==''|| $_POST['password']=='' || $_POST['email']=='' || $_POST['birthday']=='')
{	
$security->Redirect("../admin/editprofile","empty=4060");
}else
{                                   
									
									$shenasname=$security->Check_Post($_POST['shenasname']);
									$fname=$security->Check_Post($_POST['fname']);
									$lname=$security->Check_Post($_POST['lname']);
									$fathername=$security->Check_Post($_POST['fathername']);
									$field=$security->Check_Post($_POST['field']);
									$job=$security->Check_Post($_POST['job']);
									$address=$security->Check_Post($_POST['address']);
									$mobile=$security->Check_Post($_POST['mobile']);
									$email=$security->Check_Post($_POST['email']);
				     				$birthday=$security->Check_Post($_POST['birthday']);
									$username=$security->Check_Post($_POST['username']);
									$password=$security->Check_Post($_POST['password']);
									
									$sql="UPDATE `students` SET  `shenasname` = '".$shenasname."', `fname` = '".$fname."', `lname` = '".$lname."', `fathername` = '".$fathername."', `field` = '".$field."' , `job` = '".$job."' , `address` = '".$address."' , `mobile` = '".$mobile."' , `email` = '".$email."' , `birthday` = '".$birthday."' , `username` = '".$username."' , `password` = '".$password."' WHERE `id_student`='".$_SESSION['stcode']."'";
						$result=$connect->query($sql);
						if($result)
			  {
				  $security->Redirect("../admin/editprofile","update=1010");
			  }
			  else{
				   $security->Redirect("../admin/editprofile","error=1020");
			  }
								}
							  
							  
							  
							  
							  
							  
							  } 
							  else{
								  $security->Redirect("../admin/editprofile");							  }
						  ?>