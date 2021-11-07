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
    
    if($account_type != 4){
    
        header('Location: ../forbidden');
    
    }
  
  }else{
    
    // header('Location: ../../');
	echo $_SESSION["id"];
	echo $account_type;
  
  }



$get_record = mysqli_query($connections, "SELECT * FROM mytbl WHERE name='$user_id'");
$row_edit = mysqli_fetch_assoc($get_record);

	$db_name = $row_edit["name"];
	$db_course = $row_edit["course"];
   


?>
<?php
include("nav.php");
?>
<?php

echo "<center>
      <tr>
	  <td><h1> Welcome $db_name , have a good day! </h6></td>
	  <td><p> Finish your clearance before the end of semester! By clicking the clearance above click the following request for every signatories. <br>Reminder if your request got rejected you have an incomplete requirements so make sure that you don't have any problems  in school.</p></td>
	</tr></center>";



?>
<?php
include("../footer.php");
?>