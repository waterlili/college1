<?php
include '../object/main.php';
$security=new security;
$connect=new connect;
if(isset($_GET['id'])){
	$id=$security->Check_Get($_GET['id']);
	$sql="DELETE FROM `students` WHERE id_student='".$id."'";
	$result = $connect->query($sql);
	if($result)
	{
		$security->Redirect("../admin/editstinfo","delete=1010");
	}
	else{
		$security->Redirect("../admin/editstinfo","error_del=2030");
		
	}
}
else{
		$security->Redirect("../admin/editstinfo");
		}
?>