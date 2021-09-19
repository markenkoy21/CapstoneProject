<?php

$email = $password = "";

$emailErr = $passwordErr = "";


if($_SERVER["REQUEST_METHOD"]== "POST"){

	if (empty($_POST["email"])) {

		$emailErr = "Email is required!";
	
	}else{

		$email = $_POST["email"];
	
	}


	if (empty($_POST["password"])) {
	
		$passwordErr = "Password is required!";
	
	}else{

		$password = $_POST["password"];
	
	}
}

?>

<form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	
	<input type="text" name="email" value="<?php echo $email; ?>"><br>
	<span class="error"><?php echo $emailErr; ?></span><br>

	<input type="password" name="password" value="<?php echo $password; ?>"><br>
	<span class="error"><?php echo $passwordErr; ?></span><br>

	<input type="submit" name="Login">.<input type="submit" value="Register"><br>

</form>