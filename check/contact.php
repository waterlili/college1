<?php
include '../object/main.php';
$security=new security;
$connect=new connect;
if(isset($_POST['send']))
{
	if($_POST['email']=='' || $_POST['subject']=='' || $_POST['text']=='')
	{
		$security->Redirect("../contact","empty=1012");
	}
	else{
		$subject=$security->Check_Post($_POST['subject']);
		$email=$security->Check_Post($_POST['email']);
		$text=$security->Check_Post($_POST['text']);
		$text1=$security->read($text);
		if(!preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9\.-]+\.[a-zA-Z\.]+/",$email))
		{
			$security->Redirect("../contact","email=8020");
		}
		else{
			$sql="INSERT INTO `contact` (`subject` ,`email` ,`text` ,`flag`)
			VALUES ('".$subject."','".$email."','".$text1."','0')";
			  $result = $connect->query($sql);
			  if($result)
			  {
				  $security->Redirect("../contact","send=1010");
			  }
			  else{
				   $security->Redirect("../contact","error=1020");
			  }
		}
	}
}
else{
$security->Redirect("../contact");
}
?>