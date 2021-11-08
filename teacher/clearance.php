<?php
include("../header.php");
include("../connection.php");
include("nav.php");
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
  $role_number = $my_info["teachers_number"];
    
    if($account_type = 3){
    
        //  header('Location: ../forbidden');
    
    }
  
  }else{
    
    // header('Location: ../../');
	echo $_SESSION["id"];
	echo $account_type;
  
  }


	

?>

<center>
<div class="container justify-content-center">
<div class="table-responsive">
  <table class="table">
  <thead>
      <tr>
        <th>Accfeu/Accent</th>
		    <th>Librarian</th>
        <th>Registrar</th>
        <th>Office Department Head</th>
        <th>Program Coordinator</th>
        <th>Dean/Principal</th>
        <th>HRD Officer</th>
        <th>Accountant</th>
        <th>Vp. Academic Affairs</th>
        <th>Vp. for Finance Ancillary</th>
      </tr>
    </thead>
    <tbody>

<?php

$check_signatory_status = mysqli_query($connections, "SELECT * FROM faculty_tbl WHERE teachers_number='$role_number' ");
$fetch_signatory_status = mysqli_fetch_assoc($check_signatory_status);
$accfeu_accent = $fetch_signatory_status["accfeu_accent"];
$librarian = $fetch_signatory_status["librarian"];
$registrar = $fetch_signatory_status["registrar"];
$office_department_head = $fetch_signatory_status["office_department_head"];
$program_coordinator = $fetch_signatory_status["program_coordinator"];
$dean_principal = $fetch_signatory_status["dean_principal"];
$hrd_officer = $fetch_signatory_status["hrd_officer"];
$accountant = $fetch_signatory_status["accountant"];
$vp_accademic_affairs = $fetch_signatory_status["vp_accademic_affairs"];
$vp_finance_ancilllary = $fetch_signatory_status["vp_finance_ancilllary"];

  
if(isset($_POST["accfeu_accent"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET accfeu_accent='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}

if(isset($_POST["librarian"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET librarian='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}

if(isset($_POST["registrar"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET registrar='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}

if(isset($_POST["office_department_head"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET office_department_head='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}

if(isset($_POST["program_coordinator"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET program_coordinator='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}

if(isset($_POST["dean_principal"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET dean_principal='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}

if(isset($_POST["hrd_officer"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET hrd_officer='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}

if(isset($_POST["accountant"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET accountant='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}

if(isset($_POST["vp_accademic_affairs"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET vp_accademic_affairs='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}

if(isset($_POST["vp_finance_ancilllary"])){
  mysqli_query($connections, "UPDATE faculty_tbl SET vp_finance_ancilllary='1' WHERE teachers_number='$role_number' ");
  header("Location: ?");
}


echo "<tr><td><h6>";
if($accfeu_accent == "0"){
    echo "<form method='POST'><input type='submit' class='btn btn-success' name='accfeu_accent' value='Request'/></form>";
  }elseif($accfeu_accent == "1"){
    echo "<a class='btn btn-warning' name='accfeu_accent'>Pending</a>";
  }elseif($accfeu_accent == "2"){
    echo "<a class='btn btn-primary' name='accfeu_accent'>Approved</a>";
  }else if($accfeu_accent == "3"){
    echo "<a class='btn btn-danger' name='accfeu_accent'>Declined</a>";
  }
  echo "</h6></td>";
  echo "<td><h6>";
if($librarian == "0"){
    echo "<form method='POST'><input type='submit' class='btn btn-success' name='librarian' value='Request'/></form>";
  }elseif($librarian == "1"){
    echo "<a class='btn btn-warning' name='librarian'>Pending</a>";
  }elseif($librarian == "2"){
    echo "<a class='btn btn-primary' name='librarian'>Approved</a>";
  }else if($librarian == "3"){
    echo "<a class='btn btn-danger' name='librarian'>Declined</a>";
  }
  echo "</h6></td>";
  echo "<td><h6>";
if($registrar == "0"){
    echo "<form method='POST'><input type='submit' class='btn btn-success' name='registrar' value='Request'/></form>";
  }elseif($registrar == "1"){
    echo "<a class='btn btn-warning' name='registrar'>Pending</a>";
  }elseif($registrar == "2"){
    echo "<a class='btn btn-primary' name='registrar'>Approved</a>";
  }else if($registrar == "3"){
    echo "<a class='btn btn-danger' name='registrar'>Declined</a>";
  }
  echo "</h6></td>";
  echo "<td><h6>";
if($office_department_head == "0"){
    echo "<form method='POST'><input type='submit' class='btn btn-success' name='office_department_head' value='Request'/></form>";
  }elseif($office_department_head == "1"){
    echo "<a class='btn btn-warning' name='	office_department_head'>Pending</a>";
  }elseif($office_department_head == "2"){
    echo "<a class='btn btn-primary' name='	office_department_head'>Approved</a>";
  }else if($office_department_head == "3"){
    echo "<a class='btn btn-danger' name='	office_department_head'>Declined</a>";
  }
  echo "</h6></td>";
  echo "<td><h6>";
if($program_coordinator == "0"){
    echo "<form method='POST'><input type='submit' class='btn btn-success' name='program_coordinator' value='Request'/></form>";
  }elseif($program_coordinator == "1"){
    echo "<a class='btn btn-warning' name='program_coordinator'>Pending</a>";
  }elseif($program_coordinator == "2"){
    echo "<a class='btn btn-primary' name='program_coordinator'>Approved</a>";
  }else if($program_coordinator == "3"){
    echo "<a class='btn btn-danger' name='program_coordinator'>Declined</a>";
  }
  echo "</h6></td>";
  echo "<td><h6>";
if($dean_principal == "0"){
    echo "<form method='POST'><input type='submit' class='btn btn-success' name='dean_principal' value='Request'/></form>";
  }elseif($dean_principal == "1"){
    echo "<a class='btn btn-warning' name='dean_principal'>Pending</a>";
  }elseif($dean_principal == "2"){
    echo "<a class='btn btn-primary' name='dean_principal'>Approved</a>";
  }else if($dean_principal == "3"){
    echo "<a class='btn btn-danger' name='dean_principal'>Declined</a>";
  }
  echo "</h6></td>";
  echo "<td><h6>";
if($hrd_officer == "0"){
    echo "<form method='POST'><input type='submit' class='btn btn-success' name='hrd_officer' value='Request'/></form>";
  }elseif($hrd_officer == "1"){
    echo "<a class='btn btn-warning' name='hrd_officer'>Pending</a>";
  }elseif($hrd_officer == "2"){
    echo "<a class='btn btn-primary' name='hrd_officer'>Approved</a>";
  }else if($hrd_officer == "3"){
    echo "<a class='btn btn-danger' name='hrd_officer'>Declined</a>";
  }
  echo "</h6></td>";
  echo "<td><h6>";
  if($accountant == "0"){
    echo "<form method='POST'><input type='submit' class='btn btn-success' name='accountant' value='Request'/></form>";
  }elseif($accountant == "1"){
    echo "<a class='btn btn-warning' name='accountant'>Pending</a>";
  }elseif($accountant == "2"){
    echo "<a class='btn btn-primary' name='accountant'>Approved</a>";
  }else if($accountant == "3"){
    echo "<a class='btn btn-danger' name='accountant'>Declined</a>";
  }
  echo "</h6></td>";
  echo "<td><h6>";
  if($vp_accademic_affairs == "0"){
      echo "<form method='POST'><input type='submit' class='btn btn-success' name='vp_accademic_affairs' value='Request'/></form>";
    }elseif($vp_accademic_affairs == "1"){
      echo "<a class='btn btn-warning' name='vp_accademic_affairs'>Pending</a>";
    }elseif($vp_accademic_affairs == "2"){
      echo "<a class='btn btn-primary' name='vp_accademic_affairs'>Approved</a>";
    }else if($vp_accademic_affairs == "3"){
      echo "<a class='btn btn-danger' name='vp_accademic_affairs'>Declined</a>";
    }
  echo "</h6></td>";
  echo "<td><h6>";
  if($vp_finance_ancilllary == "0"){
      echo "<form method='POST'><input type='submit' class='btn btn-success' name='vp_finance_ancilllary' value='Request'/></form>";
    }elseif($vp_finance_ancilllary == "1"){
      echo "<a class='btn btn-warning' name='vp_finance_ancilllary'>Pending</a>";
    }elseif($vp_finance_ancilllary == "2"){
      echo "<a class='btn btn-primary' name='vp_finance_ancilllary'>Approved</a>";
    }else if($vp_finance_ancilllary == "3"){
      echo "<a class='btn btn-danger' name='vp_finance_ancilllary'>Declined</a>";
    }
    
  echo "</tr>";

?>
</tbody>
</table>
</div>
</div>
</center>


<?php
include("../footer.php");
?>
