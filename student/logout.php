<?php 

session_start();

unset($_SESSION["id"]);
session_unset();
session_destroy();
echo "Logging out ... please wait...";
// header('refresh: 3;url=login.php');
header('Location: ../); 
exit();

 ?>