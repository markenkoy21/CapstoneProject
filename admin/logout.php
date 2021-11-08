<?php 

session_start();
	
$logout = md5($_SESSION['id']);
$email = md5($logout);
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$wer = md5(rand(0,3));
$trash = substr(str_shuffle($chars), 0, 5);

unset($_SESSION['id']);

session_unset();
session_destroy();

echo "Logging out... Please wait...";
// echo "<script>window.location.href='index?logout=$logout&v_1=$email_md5';</script>";
header('Location: ../?logout=' . $logout . "&&" . $trash . "_" . $wer . "=" . $email);   
exit();

?>