<?php

$connections = mysqli_connect("localhost","root","","fsclerance");

if  (mysqli_connect_errno()){

    echo "Failed to connect to MySQL; " . mysqli_connect_error();
}else{

  
}

?>

<style>
.btn-primary{
-webkit-border-radius: 0;
-moz-broder-radius: 0;
border-radius:0px;
font-family:Georgia;
color:#FFFFFF;
font-size:16px;
background: #34d9bd;
padding:6px 20px 8px 20px;
text-decoration:none;

}
.btn-primary:hover{
background:#4ccfb3;
text-decoration:none;
}


</style>