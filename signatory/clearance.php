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
    case '10':
      $new_signatory_type = "accfeu_accent";
      break;
    case '11':
      $new_signatory_type = "librarian";
      break;
    case '12':
      $new_signatory_type = "registrar";
      break;
    case '13':
      $new_signatory_type = "office_department_head";
      break;
    case '14':
      $new_signatory_type = "program_coordinator";
      break;
    case '15':
      $new_signatory_type = "dean_principal";
      break;
    case '16':
      $new_signatory_type = "hrd_officer";
      break;
    case '17':
      $new_signatory_type = "accountant";
      break;
    case '18':
      $new_signatory_type = "vp_accademic_affairs";
      break;
    case '19':
      $new_signatory_type = "vp_finance_ancilllary";
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

  // 10-19
    
    if($account_type = 3){
    
        //  header('Location: ../forbidden');
    
    }
  
  }else{
    
    // header('Location: ../../');
	echo $_SESSION["id"];
	echo $account_type;
  
  }


	// student_clearance.php
  // teacher_clearance.php
  // echo $signatory_type;

  switch ($signatory_type) {
    case ($signatory_type == '1' || $signatory_type == '2' || $signatory_type == '3' || $signatory_type == '4' || $signatory_type == '5' || $signatory_type == '6' || $signatory_type == '7' || $signatory_type == '8' || $signatory_type == '9'):
      include("student_clearance.php");
      // echo "Student";
      break;
    
    case ($signatory_type == '10' || $signatory_type == '11' || $signatory_type == '12' || $signatory_type == '13' || $signatory_type == '14' || $signatory_type == '15' || $signatory_type == '16' || $signatory_type == '17' || $signatory_type == '18' || $signatory_type == '19'):
      include("teacher_clearance.php");
      // echo "Teacher";
      break;
  }
?>



<?php
include("../footer.php");
?>
