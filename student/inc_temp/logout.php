<?php
session_start();
unset($_SESSION['student_name']);
unset($_SESSION['student_log']);
header("location:../../formstyle/login.php");
exit;
?>