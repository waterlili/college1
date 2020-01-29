<?php
session_start(); 


class security{
//check post data
function Check_Post($value){
    $Return1 = mysql_real_escape_string($value);
    $Return2 = htmlspecialchars($Return1);
    return $Return2;
}
//check get data
function Check_Get($value){
    $Return1 = mysql_real_escape_string($value);
    $Return2 = htmlspecialchars($Return1);
    $Return3 = intval($Return2);
    return $Return3;

}
//redirect function
function Redirect($page,$parameter)
{
	if(isset($page) && isset($parameter))
	{
    $page_filter = $page.".php?".$parameter;
    header("location:$page_filter");
    exit;
	}
	else if(isset($page)){
		$page_filter = $page.".php";
    header("location:$page_filter");
    exit;
	}
}
//covering function ---->include()
function Covering($page){
	$page_filter = $page.".php";
	include "$page_filter";
}

//check manager log
function check_manage()
{
	if($_SESSION['manage_log']!= true)
	{
		$this->Redirect("../login/index");
	}
}
//check user log
function check_user()
{
	if($_SESSION['user_log']!= true)
	{
		$this->Redirect("../login/index");
	}
}
function read($value)
{
	$return1=strip_tags($value);
	return $return1;
	
}

}
class template{
	//error or success message
	function message($text,$color){
		 echo "<b><font color=$color size='3'>$text</font></b>"; 
	}
}
class connect{
//connect to server and database and create security query
function query($sql)
{
	$Server_name = "localhost";
	$Server_username = "root";
	$Server_password = "";
	$Dbname = "education";
	$link=mysql_connect($Server_name,$Server_username,$Server_password) or
	 exit("Error in connect to server");
	if($link)
	{
		if(mysql_select_db($Dbname))
		{
			mysql_query("set names utf8");
			mysql_query("set charset utf8");
			$result = mysql_query($sql);
			if(!$result)
			{
				echo "Error in query";
			}
			return $result;
			
		}
		else{
			echo "Erron in connect to database";
		}
	}
	else{
	   echo "Error in connect to server";
	}
}
}
?>