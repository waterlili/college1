<?php
session_start();
unset($_SESSION['manager_name']);
unset($_SESSION['manager_log']);
header("location:../../formstyle/login.php");
exit;
?>