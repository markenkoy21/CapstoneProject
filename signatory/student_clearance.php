
<center>
<div class="container justify-content-center">
<div class="table-responsive">
  <table class="table">
  <thead>
      <tr class="text-center">
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



  if(isset($_GET["stu_dec"])){
    $student_number_value = $_GET["stu_dec"];
    mysqli_query($connections, "UPDATE student_tbl SET $new_signatory_type='3' WHERE rolenumber='$student_number_value' ");
    echo "<script>alert('Student clearance succesfully approved!');</script>";
    // echo $_GET["stu_dec"];
  }


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
<a href='"; if($check_student_status == "1"){ echo "?id=$db_student_number";}else{ echo "?"; } echo "'  class='btn "; if($check_student_status == "0"){echo "btn-primary";}elseif($check_student_status == "1"){echo "btn-success";}elseif($check_student_status == "2"){echo "btn-info";}elseif($check_student_status == "3"){echo "btn-warning";} echo "'>"; if($check_student_status == "0"){echo "Not yet Requested";}elseif($check_student_status == "1"){echo "Approve";}elseif($check_student_status == "2"){echo "Approved";}elseif($check_student_status == "3"){echo "Declined";} echo "</a>&nbsp;
<a href='?stu_dec=$db_student_number' class='btn btn-danger "; if($check_student_status == "3"){ echo "d-none"; } echo "'>Decline</a>
</td>
</tr>";
}
?>

    </tbody>
  </table>
</div>
</div>
</center>