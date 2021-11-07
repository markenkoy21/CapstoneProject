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
    $role_number = $my_info["student_number"];
    
    if($account_type != 4){
    
        header('Location: ../forbidden');
    
    }
  
  }else{
    
    // header('Location: ../../');
	echo $_SESSION["id"];
	echo $account_type;
  
  }

// $check_status = mysqli_query($connections, "SELECT * FROM student_tbl WHERE rolenumber='' ");
// $fetch_stats = mysqli_fetch_assoc($check_status);
// $sig_type = $fetch_stats["id"];






     
	

?>

<center>
<div class="container-fluid col">
<div class="table-responsive">
  <table class="table">
  <thead>
      <tr>
        <th>Department Treasurer</th>
		    <th>Department Dean</th>
        <th>Librarian</th>
        <th>Coordinator of Student Affairs</th>
        <th>NSTP</th>
        <th>Accssg Chapter Treasurer</th>
        <th>Accssg Treasurer</th>
        <th>Registrar</th>
        <th>VP for finance</th>
      </tr>
    </thead>
    <tbody>
<?php

  $check_signatory_status = mysqli_query($connections, "SELECT * FROM student_tbl WHERE rolenumber='$role_number' ");
  $fetch_signatory_status = mysqli_fetch_assoc($check_signatory_status);
  $department_treasurer = $fetch_signatory_status["department_treasurer"];
  $department_dean = $fetch_signatory_status["department_dean"];
  $librarian = $fetch_signatory_status["librarian"];
  $coordinator_of_student_affairs = $fetch_signatory_status["coordinator_of_student_affairs"];
  $nstp = $fetch_signatory_status["nstp"];
  $accssg_chapter_treasurer = $fetch_signatory_status["accss_chapter_treasurer"];
  $accssg_treasurer = $fetch_signatory_status["accssg_treasurer"];
  $registrar = $fetch_signatory_status["registrar"];
  $vp_for_finance = $fetch_signatory_status["vp_for_finance"];
  

  if(isset($_POST["department_treasurer"])){
    mysqli_query($connections, "UPDATE student_tbl SET department_treasurer='1' WHERE rolenumber='$role_number' ");
  }

  if(isset($_POST["department_dean"])){
    mysqli_query($connections, "UPDATE student_tbl SET department_dean='1' WHERE rolenumber='$role_number' ");
  }
  if(isset($_POST["librarian"])){
    mysqli_query($connections, "UPDATE student_tbl SET librarian='1' WHERE rolenumber='$role_number' ");
  }
  if(isset($_POST["coordinator_of_student_affairs"])){
    mysqli_query($connections, "UPDATE student_tbl SET coordinator_of_student_affairs='1' WHERE rolenumber='$role_number' ");
  }
  if(isset($_POST["nstp"])){
    mysqli_query($connections, "UPDATE student_tbl SET nstp='1' WHERE rolenumber='$role_number' ");
  }
  if(isset($_POST["accssg_chapter_treasurer"])){
    mysqli_query($connections, "UPDATE student_tbl SET accssg_chapter_treasurer='1' WHERE rolenumber='$role_number' ");
  }
  if(isset($_POST["accssg_treasurer"])){
    mysqli_query($connections, "UPDATE student_tbl SET accssg_treasurer='1' WHERE rolenumber='$role_number' ");
  }

	echo "<tr><td><h6>";
    if($department_treasurer == "0"){
        echo "<form method='POST'><input type='submit' class='btn btn-success' name='department_treasurer' value='Request'/></form>";
      }elseif($department_treasurer == "1"){
        echo "<a class='btn btn-warning' name='department_treasurer'>Pending</a>";
      }elseif($department_treasurer == "2"){
        echo "<a class='btn btn-primary' name='department_treasurer'>Approved</a>";
      }else if($department_treasurer == "3"){
        echo "<a class='btn btn-danger' name='department_treasurer'>Declined</a>";
      }
      echo "</h6></td>";
      echo "<td><h6>";
    if($department_dean == "0"){
        echo "<form method='POST'><input type='submit' class='btn btn-success' name='department_dean' value='Request'/></form>";
      }elseif($department_dean == "1"){
        echo "<a class='btn btn-warning' name='department_dean'>Pending</a>";
      }elseif($department_dean == "2"){
        echo "<a class='btn btn-primary' name='department_dean'>Approved</a>";
      }else if($department_dean == "3"){
        echo "<a class='btn btn-danger' name='department_dean'>Declined</a>";
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
    if($coordinator_of_student_affairs == "0"){
        echo "<form method='POST'><input type='submit' class='btn btn-success' name='coordinator_of_student_affairs' value='Request'/></form>";
      }elseif($coordinator_of_student_affairs == "1"){
        echo "<a class='btn btn-warning' name='	coordinator_of_student_affairs'>Pending</a>";
      }elseif($coordinator_of_student_affairs == "2"){
        echo "<a class='btn btn-primary' name='	coordinator_of_student_affairs'>Approved</a>";
      }else if($coordinator_of_student_affairs == "3"){
        echo "<a class='btn btn-danger' name='	coordinator_of_student_affairs'>Declined</a>";
      }
      echo "</h6></td>";
      echo "<td><h6>";
    if($nstp == "0"){
        echo "<form method='POST'><input type='submit' class='btn btn-success' name='nstp' value='Request'/></form>";
      }elseif($nstp == "1"){
        echo "<a class='btn btn-warning' name='nstp'>Pending</a>";
      }elseif($nstp == "2"){
        echo "<a class='btn btn-primary' name='nstp'>Approved</a>";
      }else if($nstp == "3"){
        echo "<a class='btn btn-danger' name='department_treasurer'>Declined</a>";
      }
      echo "</h6></td>";
      echo "<td><h6>";
    if($accssg_chapter_treasurer == "0"){
        echo "<form method='POST'><input type='submit' class='btn btn-success' name='accssg_chapter_treasurer' value='Request'/></form>";
      }elseif($accssg_chapter_treasurer == "1"){
        echo "<a class='btn btn-warning' name='accssg_chapter_treasurer'>Pending</a>";
      }elseif($accssg_chapter_treasurer == "2"){
        echo "<a class='btn btn-primary' name='accssg_chapter_treasurer'>Approved</a>";
      }else if($accssg_chapter_treasurer == "3"){
        echo "<a class='btn btn-danger' name='accssg_chapter_treasurer'>Declined</a>";
      }
      echo "</h6></td>";
      echo "<td><h6>";
    if($accssg_treasurer == "0"){
        echo "<form method='POST'><input type='submit' class='btn btn-success' name='accssg_treasurer' value='Request'/></form>";
      }elseif($accssg_treasurer == "1"){
        echo "<a class='btn btn-warning' name='accssg_treasurer'>Pending</a>";
      }elseif($accssg_treasurer == "2"){
        echo "<a class='btn btn-primary' name='accssg_treasurer'>Approved</a>";
      }else if($accssg_treasurer == "3"){
        echo "<a class='btn btn-danger' name='accssg_treasurer'>Declined</a>";
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
      if($vp_for_finance == "0"){
          echo "<form method='POST'><input type='submit' class='btn btn-success' name='vp_for_finance' value='Request'/></form>";
        }elseif($vp_for_finance == "1"){
          echo "<a class='btn btn-warning' name='vp_for_finance'>Pending</a>";
        }elseif($vp_for_finance == "2"){
          echo "<a class='btn btn-primary' name='vp_for_finance'>Approved</a>";
        }else if($vp_for_finance == "3"){
          echo "<a class='btn btn-danger' name='vp_for_finance'>Declined</a>";
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
