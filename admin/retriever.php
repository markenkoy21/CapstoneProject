<?php




$retireve_query = mysqli_query($connections, "SELECT * FROM mytbl");

while($row_users = mysqli_fetch_assoc($retireve_query)){

    $id_users = $row_users["id"];
    $db_name = $row_users["name"];
    $db_course = $row_users["course"];
    $db_student_number = $row_users["student_number"];
    $db_password = $row_users["password"];   

}
?>
<br>
<br>
<br>
<center>
<div class="container col-8">
<table border="0" class="table table-primary">
    <thead>
    <tr class="text-center">
        <th>Name</th>
        <th>Course</th>
        <th>Student Number</th>
        <th>Password</th>
        <th>Action</th>
    <tr>
    </thead>
    <tbody>
<?php


   $view_query = mysqli_query($connections, "SELECT * FROM mytbl");
   while($row =mysqli_fetch_assoc($view_query)){
    $user_id = $row['id'];
    $db_name =$row["name"];
    $db_course =$row["course"];
     $db_student_number =$row["student_number"];



     echo "<tr class='text-center'>
             <td>$db_name</td>
             <td>$db_course</td>
             <td>$db_student_number</td>
             <td>$db_password</td>
             <td>
             <a href=''  class='btn btn-primary'>Update</a>&nbsp;
             <a href='' class='btn btn-danger'>Delete</a>
             </td>
            </tr>";
 
 }
 

?>
</tbody>
</table>
</div>
</center>

<br>
<br>
<br>
<br>