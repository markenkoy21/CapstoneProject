<?php
include("connection.php");
include("header.php");
$roleno = $password = "";
$rolenoErr = $passwordErr = "";
session_start();

if(isset($_SESSION["id"])){

    $user_id = $_SESSION["id"];
    $check_account_type = mysqli_query($connections, "SELECT * FROM mytbl WHERE name='$user_id'");
    $get_account_type = mysqli_fetch_assoc($check_account_type);
    $account_type = $get_account_type["account_type"];
	
    
    if($account_type == 1){
    
        // header('Location: admin');
		// echo "This is for redirect" . $user_id;
    
    }elseif($account_type == 2){
    
        // header('Location: signatory');
		// echo "This is for redirect" . $user_id;

    }elseif($account_type == 3){
    
        // header('Location: teacher');
		// echo "This is for redirect" . $user_id;

    }elseif($account_type == 4){
    
        // header('Location: student');
		// echo "This is for redirect" . $user_id;

    }

}




// if($_SERVER["REQUEST_METHOD"]== "POST"){

// 	if (empty($_POST["email"])) {

// 		$rolenoErr = "Email is required!";
	
// 	}else{

// 		$roleno= $_POST["email"];
	
// 	}


// 	if (empty($_POST["password"])) {
	
// 		$passwordErr = "Password is required!";
	
// 	}else{

// 		$password = $_POST["password"];
	
// 	}

// 	if($roleno && $password){

		
// 		$check_roleno = mysqli_query($connections, "SELECT * FROM mytbl WHERE roleno='$roleno'" );

// 		$check_roleno_row = mysqli_num_rows($check_roleno);


// 		if($check_roleno_row > 0){


// 			while ($row = mysqli_fetch_assoc($check_roleno)) {
// 				$user_id = $row["id"];

// 				$db_passwordword = $row["password"];
// 				$db_db_account_type = $row["account_type"];


// 				if ($password ==$db_passwordword) {
// 					session_start();
// 					$_SESSION["id"] = $user_id;
					
// 				if($db_db_account_type == "1"){
// 					echo "<script>window.location.href='admin';></script>";
// 				}else if($db_db_account_type == "2"){
// 					echo "<script>window.location.href='signatory';</script>";
// 				}else if($db_db_account_type == "3"){
// 					echo "<script>window.location.href='teacher';</script>";
// 				}else if($db_db_account_type == "4"){
// 					echo "<script>window.location.href='student';</script>";
// 				}

				
// 			}else{
// 				$passwordErr = "Password is incorrect!";
// 			}

// 		}
// 	}else{
// 		 $rolenoErr = "Email is not registered!";
// 	}
// }
// }


// Log in Here
if(isset($_POST["submit"])){


	if(empty($_POST["password"]) && empty($_POST["email"]) ){
  
	  // $logErr = "User Name and Password are empty!";
	  echo"<script>alert('User Name and Password are empty');</script>";
  
	  }else{
  
	  if(empty($_POST["email"])){
	  
	  // $logErr = "Usern Name is empty!";
	  echo"<script>alert('User Name is empty');</script>";
  
	  }else{
  
	  // $you = $_POST["useN"];
	  $user_id = $_POST["email"];
	  
	  }
  
	  if(empty($_POST["password"])){
  
		  // $logErr = "Password is empty!";
		  echo"<script>alert('Password is empty');</script>";         
	  
	  }else{
	  
		  // $pass = $_POST["pas"];
		  $password = $_POST["password"];
	  
  
	  }
  
	  }
  
  
  
  
  
	  if($user_id && $password){
  
		$check_name = mysqli_query($connections, "SELECT * FROM mytbl WHERE name='$user_id' ");
		$check_name_row = mysqli_num_rows($check_name);
		
		if($check_name_row > 0){
		
			$fetch = mysqli_fetch_assoc($check_name);
			$db_password = $fetch["password"];
			
			$db_account_type = $fetch["account_type"];
		
		if($db_account_type == "1"){
		
			
			if($db_password == $password){
				
					$_SESSION["id"] = $user_id;
  
					header('Location: admin');
  
				
				}else{
				
					$password = ""; 
					echo"<script>alert('Your Password is incorrect!');</script>";
				
				}
  
		
		}elseif ($db_account_type == "2") {
  
			if ($db_password == $password) {
  
				$_SESSION["id"] = $user_id;
				
				header('Location: signatory');
  
				}else{
				
					$password = "";
					echo"<script>alert('Your Password is incorrect!');</script>";
				
				}   
		}elseif ($db_account_type == "3") {
  
			if ($db_password == $password) {
  
				$_SESSION["id"] = $user_id;
				
				header('Location: teacher');
  
				}else{
				
					$password = "";
					echo"<script>alert('Your Password is incorrect!');</script>";
				
				}   
	  }elseif ($db_account_type == "4") {
  
			if ($db_password == $password) {
  
				$_SESSION["id"] = $user_id;
				
				header('Location: student');
  
				}else{
				
					$password = "";
					echo"<script>alert('Your Password is incorrect!');</script>";
				
				}   
			
		}else{
  
			$user_id = "";
			echo"<script>alert('Sorry, the User Name you entered is not registered.');</script>";
		}
	}
	}
  }

?>

<center>

	<div class="container">
		<h1 >Login</h1>

		<div>
		<img src="acc_logo.gif.png" width="250px">
		</div>

	</div>
	<div class="container border rounded col-4 pt-4 pb-3 bg-danger text-light">
<form method="POST" >

<form method="post">
<div id="div" class="form-group col pt-3">
	<input type="text" name="email" value="<?php echo $roleno; ?>" class="form-control py-4 form_with_label" name="roleno" id="roleno" alt="roleno" required placeholder="Student Number *" onkeyup="roleno_block()" onblur="rolenoblur()" onfocus="rolenofocus()" autocomplete="off">
    <label for="roleno" id="rolenolabel" alt="label" class="float-left">
	<span class="error" style="color: white;"><?php echo $rolenoErr; ?></span>
	</div>

	<div id="div" class="form-group col">
	<input type="password" name="password" value="<?php echo $password; ?>" class="form-control py-4 form_with_label" name="password" id="password" alt="password" required placeholder="Password *" onkeyup="password_block()" onblur="passwordblur()" onfocus="passwordfocus()" autocomplete="off" onkeypress='return isNumberKey(event)'>
    <label for="password" id="passwordlabel" alt="label" class="float-left">
	<span class="error" style="color: white;"><?php echo $passwordErr; ?>Password*</span>
	</div>
	
	<div id="div" class="form-group col">
	<input type="submit" name="submit" value="Login" class="btn btn-primary">
	</div>
	
</form>
</form>
</div>
</center>


