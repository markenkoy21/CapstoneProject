<?php


include("../connection.php");
include("../header.php");



session_start();


// if(isset($_SESSION["id"])){
// $user_id = $_SESSION["id"];
// }else{
// 	echo "You must login first!<a href='../login.php'>Login now</a>";
// }

if(isset($_SESSION["id"])){

    $user_id = $_SESSION["id"];
  
    $query_info = mysqli_query($connections, "SELECT * FROM mytbl WHERE name='$user_id'");
    $my_info = mysqli_fetch_assoc($query_info);
    $account_type = $my_info["account_type"];
    
    if($account_type != 1){
    
        header('Location: ../forbidden');
    
    }
  
  }


?>
<?php include("Nav.php");?>
<?php

echo "<center> <h1>ADMIN</h1></center>"



?>


