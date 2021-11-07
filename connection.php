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

.tbl-primary{
    font-family:Arial;
    color:#ffffff;
    font-size:15px;
    background:#005eff;
    padding: 10px 20px 10px 20px;
    text-decoration:none;
    border-radius: 0px;
    text-align:center;

}
.vbl-primary{
    font-family:Arial;
    text-align:center;
}

.btn-approve{
    font-family:Arial;
    color:#ffffff;
    font-size:15px;
    background:#005eff;
    padding: 10px 20px 10px 20px;
    text-decoration:none;
    border-radius: 20px;
}
.btn-approve:hover{

    background: #076dad;
    text-decoration:none;
}
.btn-reject{
    font-family:Georgia;
    color:#ffffff;
    font-size: 15px;
    background: #d93434;
    padding: 10px 20px 10px 20px;
    text-decoration:none;
    border-radius: 20px;
}
.btn-reject:hover{
    background: #fc3c3c;
    text-decoration:none;
}


</style>