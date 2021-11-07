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
  $signatory_type = $my_info["signatory_type"];

  // echo $signatory_type;
  $new_signatory_type = "";

  switch ($signatory_type) {
    case '1':
      $new_signatory_type = "department_treasurer";
      break;
    case '2':
      $new_signatory_type = "department_dean";
      break;
    case '3':
      $new_signatory_type = "librarian";
      break;
    case '4':
      $new_signatory_type = "coordinator_of_student_affairs";
      break;
    case '5':
      $new_signatory_type = "nstp";
      break;
    case '6':
      $new_signatory_type = "accss_chapter_treasurer";
      break;
    case '7':
      $new_signatory_type = "accssg_treasurer";
      break;
    case '8':
      $new_signatory_type = "registrar";
      break;
    case '9':
      $new_signatory_type = "vp_for_finance";
      break;
  }

  // if($signatory_type == "1"){
  //   $new_signatory_type = "department_treasurer";
  // }elseif($signatory_type == "2"){
  //   $new_signatory_type = "department_dean";
  // }elseif($signatory_type == "3"){
  //   $new_signatory_type = "librarian";
  // }elseif($signatory_type == "4"){
  //   $new_signatory_type = "coordinator_of_student_affairs";
  // }elseif($signatory_type == "5"){
  //   $new_signatory_type = "nstp";
  // }elseif($signatory_type == "6"){
  //   $new_signatory_type = "accss_chapter_treasurer";
  // }elseif($signatory_type == "7"){
  //   $new_signatory_type = "accssg_treasurer";
  // }elseif($signatory_type == "8"){
  //   $new_signatory_type = "registrar";
  // }elseif($signatory_type == "9"){
  //   $new_signatory_type = "vp_for_finance";
  // }
    
    if($account_type = 3){
    
        //  header('Location: ../forbidden');
    
    }
  
  }else{
    
    // header('Location: ../../');
	echo $_SESSION["id"];
	echo $account_type;
  
  }


	

?>

<div class="container">
  <h2>Toggleable Pills</h2>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home">Teacher Clearance</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu1">Student Clearance</a>
    </li>
  </ul>


  
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <!-- Start it Teacher Clearance -->
    
    </div>






    <div id="menu1" class="container tab-pane fade"><br>
    <!-- Start it Student Clearance -->
    <center>
<div class="container justify-content-center">
<div class="table-responsive">
  <table class="table">
  <thead>
      <tr>
		    <th>Name</th>
        <th>Year level</th>
        <th>Student Number</th>
        <th>Course</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

<?php
 
//  echo $new_signatory_type;
$check_student = mysqli_query($connections, "SELECT * FROM mytbl WHERE account_type='4' ");
$fetch_student =mysqli_fetch_assoc($check_student);
$get_student_number = $fetch_student["student_number"];



  if(isset($_GET["id"])){
    $student_number_value = $_GET["id"];
    mysqli_query($connections, "UPDATE student_tbl SET $new_signatory_type='2' WHERE rolenumber='$student_number_value' ");
    echo "<script>alert('Student clearance succesfully approved!');</script>";
    // echo $get_student_number;
  }

$view_query = mysqli_query($connections, "SELECT * FROM mytbl WHERE account_type='4' ");



// echo $check_student_status;
while($row =mysqli_fetch_assoc($view_query)){


  $db_name = $row["name"];
  $db_year_level = $row["year_level"];
  $db_student_number = $row["student_number"];
  $db_course = $row["course"];

  $get_student_status = mysqli_query($connections, "SELECT * FROM student_tbl WHERE rolenumber='$db_student_number' ");
  $row_student_status =mysqli_fetch_assoc($get_student_status);
  $check_student_status = $row_student_status["$new_signatory_type"];



echo "<tr class='text-center'>
<td>$db_name</td>
<td>$db_year_level</td>
<td>$db_student_number</td>
<td>$db_course</td>
<td>
<a href='"; if($check_student_status == "1"){ echo "?id=$db_student_number";}else{ echo "?"; } echo "'  class='btn "; if($check_student_status == "1"){echo "btn-success";}elseif($check_student_status == "2"){echo "btn-info";}elseif($check_student_status == "3"){echo "btn-warning";} echo "'>"; if($check_student_status == "1"){echo "Approve";}elseif($check_student_status == "2"){echo "Approved";}elseif($check_student_status == "3"){echo "Declined";} echo "</a>&nbsp;
<a href='' class='btn btn-danger'>Decline</a>
</td>
</tr>";
}
?>

    </tbody>
  </table>
</div>
</div>
</center>
    </div>


  </div>

</div>



<?php
include("../footer.php");
?>
