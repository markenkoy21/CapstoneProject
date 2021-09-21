<?php

include("../connection.php");



$retireve_query = mysqli_query($connections, "SELECT * FROM mytbl");

while($row_users = mysqli_fetch_assoc($retireve_query)){

    $id_users = $row_users["id"];



    $db_name = $row_users["name"];
    $db_course = $row_users["course"];
    $db_studentNo = $row_users["studentNo"];
    $db_password = $row_users["password"];


    

}
?>

<?php

   $view_query = mysqli_query($connections, "SELECT * FROM mytbl");
   echo "<table border='1 width='50%'>";
   echo "<tr>
        <td>Name</td>
        <td>Course</td>
        <td>Student Number</td>
        <td>Option</td>

        </tr>";

   while($row =mysqli_fetch_assoc($view_query)){
    $user_id = $row['id'];
    $db_name =$row["name"];
    $db_course =$row["course"];
     $db_studentNo =$row["studentNo"];



    echo "<tr>
        <td>$db_name</td>
        <td>$db_course</td>
        <td>$db_studentNo</td>


        <td>
        <a href='edit.php?id=$user_id'>Update</a>   

        &nbsp;

        <a href='ConfirmDelete.php?id=$user_id'>Delete</a>

        </td>


        </tr>";



 }  

   echo "</table>";


?>
