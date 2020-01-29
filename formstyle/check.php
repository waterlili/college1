<?php
include '../object/main.php';
$security= new security;
$connect = new connect;

if(isset($_POST['login'])){
	if($_POST['username']=='' || $_POST['password']=='' || $_POST['captcha']=='')
	{
		$security->Redirect("login","empty=1090");
	}else 
	{
		$username=$security->Check_Post($_POST['username']);
		$password=$security->Check_Post($_POST['password']);
		//$captcha=$security->Check_Post($_POST['captcha']);
		//$sql="SELECT * FROM `student` WHERE username='".$username."' && password='".$password."';
		if($_SESSION['captcha']!=$_POST['captcha'])
		{
			$security->Redirect("login","captcha=9027");
			}
			
	else{
			$sql="SELECT * FROM `students` WHERE username='".$username."' && password='".$password."'";
			$result=$connect->query($sql);
		    $rows=mysql_fetch_assoc($result);
			
			if($rows["level"]==2){
			    if(mysql_num_rows($result)==1)
			    {
				$_SESSION['student_name']=$rows['fname']." ".$rows['lname'];
				$_SESSION['student_fname']=$rows['fname'];
				$_SESSION['student_lname']=$rows['lname'];
				$_SESSION['student_log']=true;
				$security->Redirect("../student/index","welcome=2020");
			    }else
			    {
				$security->Redirect("login","errorlog=6032");
			    }
			}
			
			else if($rows["level"]==1){
				if(mysql_num_rows($result)==1)
				
				{   
				    
					$_SESSION['manager_name']=$rows['fname']." ".$rows['lname'];
					$_SESSION['manager_fname']=$rows['fname'];
					$_SESSION['manager_lname']=$rows['lname'];
					$_SESSION['manager_log']=true;
					$security->Redirect("../admin/index","welcome=2020");
				}else
				{
					$security->Redirect("login","errorlog=6033");
				}
				
			   }
			   else{
				$security->Redirect("login","errorusr=9022");
			}
		
		     }
	        }
	      }
			
		 
		
        



 ?>