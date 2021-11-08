
<center>
<div class="container justify-content-center">
<div class="table-responsive">
  <table class="table">
  <thead>
      <tr class="text-center">
		<th>Name</th>
        <th>Teacher Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

<?php
 
//  echo $new_signatory_type;
$check_teacher = mysqli_query($connections, "SELECT * FROM mytbl WHERE account_type='3' ");
$fetch_teacher =mysqli_fetch_assoc($check_teacher);
$get_teacher_number = $fetch_teacher["teachers_number"];



  if(isset($_GET["dec"])){
    $teacher_number_decline_value = $_GET["dec"];
    mysqli_query($connections, "UPDATE faculty_tbl SET $new_signatory_type='3' WHERE teachers_number='$teacher_number_decline_value' ");
    echo "<script>alert('Student clearance succesfully approved!');</script>";
    // echo $_GET["dec"];
  }

  if(isset($_GET["id"])){
    $teacher_number_value = $_GET["id"];
    mysqli_query($connections, "UPDATE faculty_tbl SET $new_signatory_type='2' WHERE teachers_number='$teacher_number_value' ");
    echo "<script>alert('Student clearance succesfully approved!');</script>";
    // echo $get_student_number;
  }

$view_query = mysqli_query($connections, "SELECT * FROM mytbl WHERE account_type='3' ");



// echo $check_student_status;
while($row =mysqli_fetch_assoc($view_query)){


  $db_name = $row["name"];
  $db_teacher_number = $row["teachers_number"];
//   echo $db_teacher_number;

  $get_teacher_status = mysqli_query($connections, "SELECT * FROM faculty_tbl WHERE teachers_number='$db_teacher_number' ");
  $row_teacher_status =mysqli_fetch_assoc($get_teacher_status);
  $check_teacher_status = $row_teacher_status["$new_signatory_type"];



echo "<tr class='text-center'>
<td>$db_name</td>
<td>$db_teacher_number</td>

<td>
<a href='"; if($check_teacher_status == "1"){ echo "?id=$db_teacher_number";}else{ echo "?"; } echo "'  class='btn "; if($check_teacher_status == "0"){echo "btn-primary";}elseif($check_teacher_status == "1"){echo "btn-success";}elseif($check_teacher_status == "2"){echo "btn-info";}elseif($check_teacher_status == "3"){echo "btn-warning";} echo "'>"; if($check_teacher_status == "0"){echo "Not yet Requested";}elseif($check_teacher_status == "1"){echo "Approve";}elseif($check_teacher_status == "2"){echo "Approved";}elseif($check_teacher_status == "3"){echo "Declined";} echo "</a>&nbsp;
<a href='?dec=$db_teacher_number' class='btn btn-danger "; if($check_teacher_status == "3"){ echo "d-none"; } echo "'>Decline</a>";
echo "
</td>
</tr>";
}
?>

    </tbody>
  </table>
</div>
</div>
</center>