<?php
include("../connection.php");
include("../header.php");
include("nav.php");

if(isset($_SESSION["id"])){

    $user_id = $_SESSION["id"];
  
    $query_info = mysqli_query($connections, "SELECT * FROM mytbl WHERE name='$user_id'");
    $my_info = mysqli_fetch_assoc($query_info);
    $account_type = $my_info["account_type"];
    $name = $my_info["name"];
    
    if($account_type != 2){
    
        header('Location: ../forbidden');
    
    }
  
  }else{
    
    // header('Location: ../../');
	// echo $_SESSION["id"];
	// echo $account_type;
  
  }

?>


<?php
include("../footer.php");
?>