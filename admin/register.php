<?php
// include("connection.php");
// include("header.php");

// $name = $course = $roleno = $password = $acount_type = $signatory_type = $admin  ="";
// $nameErr = $courseErr = $rolenoErr = $passwrodErr = $acount_typeErr = $signatoryErr = $adminErr = "";


// if(isset($_POST["submit"])){

//     if(empty ($_POST["name"])){
//         $nameErr = "Name is required!";
    
//     }else{
        
//         $name = $_POST["name"];
//     }

//     if
//     (empty ($_POST["course"])){
//         $courseErr = "Course is required!";
//     }
//     else{
//         $course = $_POST["course"];
//     }
//     if
//     (empty($_POST["studentno"])){
//         $studentNoErr = "Email is required!";
//     }
//     else{
//         $studentNo = $_POST["studentno"];
//     }
//     if(empty($_POST["password"])){

//         $passwrodErr = "Password is required!";
//     }else{
//         $password = $_POST["password"];

//     }
//     // $admin = $_REQUEST["admin"];
//     // if($_POST["admin"]){

//     // }else{

//     //     $admin = $_POST["admin"];
//     // }



//     if($name && $course && $roleno ){
        
//         $check_email = mysqli_query($connections, "SELECT * FROM mytbl WHERE studentNo='$studentNo'");
        
//         $check_email_row = mysqli_num_rows($check_email);

       

//         if ($check_email_row > 0) {

//             $emailErr  = "Email is already registered!";
        
//         }else{

//             $query = mysqli_query($connections, "INSERT INTO mytbl(name,course,studentNo,password)
            
//             VALUES('$name','$course','$studentNo','$password')");
            
//             echo "<script>alert('New record has been inserted!')</script>";
//             echo "<script>window.location.href='index.php';</script>";


//         }

 

//     }
    
// }


// ?>
<style>
.error{
    color:red;
}

</style>


<?php
include("../connection.php");
include("header.php");
include("Nav.php");
?>
<br>
<br>

<center>
<div class="container border rounded col-4 pt-5 pb-3 bg-danger text-light">
<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">


<h1 class="">Register</h1>
<br>

<form method="post">


<div class="container">                                    
 

  <select class="form-control col-3 ml-2 pt-1 pb-2 d-inline bg-info text-white" id="account_check" onchange="account_type_check()">
  <option value="account">Account Type</option>
  <option value="admin" <?php if(isset($_GET['redirect'])){ if($_GET['redirect'] == "admin"){ echo "selected"; }}?> ><a class="btn btn-info ml-2 my-3">Admin</a></option>
  <option value="signatory" <?php if(isset($_GET['redirect'])){ if($_GET['redirect'] == "signatory"){ echo "selected"; }}?> ><a class="btn btn-info ml-2 my-3">Signatory</a></option>
  <option value="teacher" <?php if(isset($_GET['redirect'])){ if($_GET['redirect'] == "teacher"){ echo "selected"; }}?> ><a class="btn btn-info ml-2 my-3">Teacher</a></option>
  <option value="student" <?php if(isset($_GET['redirect'])){ if($_GET['redirect'] == "student"){ echo "selected"; }}?> ><a class="btn btn-info ml-2 my-3">Student</a></option>
  </select>

    <br>
    <br>
    <br>

<?php

if(isset($_GET['redirect'])){ if($_GET['redirect'] == "admin"){

        $admin_name = $admin_password = $account_type = "";
        $admin_nameErr = $admin_passwordErr = $account_typeErr ="";
   if(isset($_POST["admin_submit"])){
   
   if(!empty($_POST["admin_name"])){
    //    $admin_nameErr = "Name is Required!";
//    }else{
       $admin_name = $_POST["admin_name"];
   }

   if(!empty($_POST["admin_password"])){
    //    $admin_passwordErr = "Password is required!";
//    }else{
        $admin_password = $_POST["admin_password"];
   }

        if  ($admin_name && $admin_password){
           $check_admin_email = mysqli_query($connections, "SELECT * FROM mytbl WHERE name='$admin_name'");
            
            $check_admin_email_row = mysqli_num_rows($check_admin_email);


            if ($check_admin_email_row > 0){

                // $admin_nameErr = "This username name is already register try another!";
                echo "<script>alert('This username name is already register try another!');</script>";

            }else{

                $query = mysqli_query($connections, "INSERT INTO mytbl(name,password,account_type)
                
                VALUES('$admin_name','$admin_password','1')");
                
                echo "<script>alert('Admin record has been inserted!'); window.location.href='?';</script>";
    
    
            }
        }

   } 
?>
 <form method="POST">
<div id="div" class="form-group col pt-4">
    <input type="text" value="<?php echo $admin_name; ?>" class="form-control py-4 form_with_label" name="admin_name" id="admin_name" alt="admin_name" required placeholder="Name *" onkeyup="name_block()" onblur="nameblur()" onfocus="namefocus()" autocomplete="off">
    <label for="admin_name" id="namelabel" alt="label" class="float-left"><span style="color: white;">Name*</span></label>
    </div>

    <div id="div" class="form-group col pt-2">
    <input type="text" value="<?php echo $admin_password; ?>" class="form-control py-4 form_with_label" name="admin_password" id="admin_password" alt="admin_password" required placeholder="Password *" onkeyup="password_block()" onblur="passwordblur()" onfocus="passwordfocus()" autocomplete="off" onkeypress='return isNumberKey(event)'>
    <label for="admin_password" id="passwordlabel" alt="label" class="float-left"><span style="color: white;">Password*</span></label>
    </div>
    </div>

    <div class="text-right">
        <button type="submit" name="admin_submit" class="btn btn-success">Admin Register</button>
    </div>
</form>
<?php
}
}
?>

<?php


if(isset($_GET['redirect'])){ if($_GET['redirect'] == "signatory"){

    $signatory_name = $signatory = $signatory_password = $if_dean_department ="";

    if(isset($_POST["signatory_submit"])){

    if(!empty($_POST["signatory_name"])){
    
    

        $signatory_name = $_POST["signatory_name"];
    }
    if(!empty($_POST["signatory"])){


        $signatory = $_POST["signatory"];
        // echo "<script>alert('test')</script>";

    }
    if(!empty($_POST["signatory_password"])){

    
        $signatory_password = $_POST["signatory_password"];

    }
    if(!empty($_POST["if_dean_department"])){

        $if_dean_department = $_POST["if_dean_department"];

    }else{
        $if_dean_department = "";
    }
   

    if  ($signatory_name && $signatory && $signatory_password){

        $check_signatory_email = mysqli_query($connections, "SELECT * FROM mytbl WHERE name='$signatory_name'");

        $check_signatory_email_row = mysqli_num_rows($check_signatory_email);


        if ($check_signatory_email_row > 0 ){
            
            echo "<script>alert('This username name is already register try another!');</script>";
            
        }else{

            $query = mysqli_query($connections, "INSERT INTO mytbl(name,signatory_type,course,password,account_type)
            VALUES('$signatory_name','$signatory','$if_dean_department','$signatory_password','2')");
            
            echo "<script>alert('Signatory record has been inserted!')</script>";
        
        }
    }
}
    

    ?>
    <form method="POST">
      <div id="div" class="form-group col pt-4">
    <input type="text" value="<?php echo $signatory_name; ?>" class="form-control py-4 form_with_label" name="signatory_name" id="$signatory_name" alt="$signatory_name" required placeholder="Name *" onkeyup="name_block()" onblur="nameblur()" onfocus="namefocus()" autocomplete="off">
    <label for="signatory_name" id="namelabel" alt="label" class="float-left"><span style="color: white;">Name*</span></label>
    </div>

    <div id="div" class="form-group col pt-2">
    <input type="text" value="<?php $signatory_password; ?>" class="form-control py-4 form_with_label" name="signatory_password" id="signatory_password" alt="signatory_password" required placeholder="Password *" onkeyup="password_block()" onblur="passwordblur()" onfocus="passwordfocus()" autocomplete="off" onkeypress='return isNumberKey(event)'>
    <label for="signatory_password" id="passwordlabel" alt="label" class="float-left"><span style="color: white;">Password*</span></label>
    </div>

    <div id="div" class="form-group col pt-3">
    <select class="form-control align-middle size-5" id="signatory" name="signatory" onchange="signatoryChange()">
             <option class="" name="signatory" value="select_course">Signatory type</option>
                 <option class="" name="signatory" value="1" <?php if($signatory == ">1"){ echo "selected"; }?> >DEPARTMENT TREASURER</option>
                      <option class="" name="signatory" value="2" <?php if($signatory == "2"){ echo "selected"; }?> >DEPARTMENT DEAN</option>
                         <option class="" name="signatory" value="3" <?php if($signatory == "3"){ echo "selected"; }?> >LIBRARIAN</option>
                              <option class="" name="signatory" value="4" <?php if($signatory == "4"){ echo "selected"; }?> >COORDINATOR OF STUDENT AFFAIRS</option>
                                 <option class="" name="signatory" value="5" <?php if($signatory == "5"){ echo "selected"; }?> >NSTP</option>
                                      <option class="" name="signatory" value="6" <?php if($signatory == "6"){ echo "selected"; }?> >ACCSS CHAPTER TREASURER</option>
                                      <option class="" name="signatory" value="7" <?php if($signatory == "7"){ echo "selected"; }?> >ACCSSG TREASURER</option>
                                         <option class="" name="signatory" value="8" <?php if($signatory == "8"){ echo "selected"; }?> >REGISTRAR</option>
                                             <option class="" name="signatory" value="9" <?php if($signatory == "9"){ echo "selected"; }?> >VP FOR FINANCE</option>
                                               <option class="" name="signatory" value="10" <?php if($signatory == "10"){ echo "selected"; }?> >ACCFEU/ACCENT</option>
                                               <option class="" name="signatory" value="15" <?php if($signatory == "11"){ echo "selected"; }?> >LIBRARIAN FOR FACULTY</option>
                                                 <option class="" name="signatory" value="11" <?php if($signatory == "12"){ echo "selected"; }?> >REGISTRAR FOR FACULTY</option>
                                                      <option class="" name="signatory" value="12" <?php if($signatory == "13"){ echo "selected"; }?> >OFFICE DEPARTMENT HEAD</option>
                                                          <option class="" name="signatory" value="13" <?php if($signatory == "14"){ echo "selected"; }?> >PROGRAM COORDINATOR</option>
                                                      <option class="" name="signatory" value="14" <?php if($signatory == "15"){ echo "selected"; }?> >DEAN/PRINCIPAL</option>
                                                 <option class="" name="signatory" value="15" <?php if($signatory == "16"){ echo "selected"; }?> >HRD OFFICER</option>
                                             <option class="" name="signatory" value="16" <?php if($signatory == "17"){ echo "selected"; }?> >ACCOUNTANT</option>
                                    <option class="" name="signatory" value="18" <?php if($signatory == "18"){ echo "selected"; }?> >VP ACADEMIC AFFAIRS</option>
                                 <option class="" name="signatory" value="19" <?php if($signatory == "19"){ echo "selected"; }?> >VP FOR FINANCE & ANCILLARY SERVICES</option>

    </select>
    </div>

    <div id="div" class="form-group col pt-4">
    <select class="form-control align-middle size-5" id="if_dean_department" name="if_dean_department" <?php if($signatory == "2"){ echo "enable"; }else{ echo "disabled"; }?>>
             <option class="" name="if_dean_department" value="select_if_dean_department">If dean select Department</option>
                 <option class="" name="if_dean_department" value="Not Dean" <?php if($if_dean_department == "Not Dean"){ echo "selected"; }?> >Not Dean</option>
                 <option class="" name="if_dean_department" value="MAE" <?php if($if_dean_department == "MAE"){ echo "selected"; }?> >MAE</option>
                      <option class="" name="if_dean_department" value="MBA" <?php if($if_dean_department == "MBA"){ echo "selected"; }?> >MBA</option>
                         <option class="" name="if_dean_department" value="Juris Doctor" <?php if($if_dean_department == "Juris Doctor"){ echo "selected"; }?> >Juris Doctor</option>
                              <option class="" name="if_dean_department" value="TECP" <?php if($if_dean_department == "TECP"){ echo "selected"; }?> >TECP</option>
                                 <option class="" name="if_dean_department" value="BSE" <?php if($if_dean_department == "BSE"){ echo "selected"; }?> >BSED</option>
                                      <option class="" name="if_dean_department" value="BEE" <?php if($if_dean_department == "BEE"){ echo "selected"; }?> >BEE</option>
                                         <option class="" name="if_dean_department" value="BA" <?php if($if_dean_department == "BA"){ echo "selected"; }?> >BA</option>
                                             <option class="" name="if_dean_department" value="CRIM" <?php if($if_dean_department == "CRIM"){ echo "selected"; }?> >CRIM</option>
                                               <option class="" name="if_dean_department" value="NURSING" <?php if($if_dean_department == "NURSING"){ echo "selected"; }?> >NURSING</option>
                                                 <option class="" name="if_dean_department" value="BSBA" <?php if($if_dean_department == "BSBA"){ echo "selected"; }?> >BSBA</option>
                                                      <option class="" name="if_dean_department" value="BSHM" <?php if($if_dean_department == "BSHM"){ echo "selected"; }?> >BSHM</option>
                                                          <option class="" name="if_dean_department" value="BSTM" <?php if($if_dean_department == "BSTM"){ echo "selected"; }?> >BSTM</option>
                                                      <option class="" name="if_dean_department" value="BSA" <?php if($if_dean_department == "BSA"){ echo "selected"; }?> >BSA</option>
                                                 <option class="" name="if_dean_department" value="BSAIS" <?php if($if_dean_department == "BSAIS"){ echo "selected"; }?> >BSAIS</option>
                                             <option class="" name="if_dean_department" value="BSREM" <?php if($if_dean_department == "BSREM"){ echo "selected"; }?> >BSREM</option>
                                        <option class="" name="if_dean_department" value="BSCS" <?php if($if_dean_department == "BSCS"){ echo "selected"; }?> >BSCS</option>
                                     <option class="" name="if_dean_department" value="BSIT" <?php if($if_dean_department == "BSIT"){ echo "selected"; }?> >BSIT</option>
    </select>
    </div>
    </div>

    <div class="text-right">
        <button type="submit" name="signatory_submit" class="btn btn-info">Register</button>
    </div>
</form>
<?php
}
}
?>

<?php
if(isset($_GET['redirect'])){ if($_GET['redirect'] == "teacher"){

    $teacher_name = $teachers_number = $teacher_password = "";
    if(isset($_POST["teacher_submit"])){

    if(!empty($_POST{"teacher_name"})){
            $teacher_name = $_POST["teacher_name"];

        // }else{

        
    if(!empty($_POST["teacher_password"])){

        
    // }else{
        $teacher_password = $_POST["teacher_password"];

    if(!empty($_POST["teachers_number"])){

        $teachers_number = $_POST["teachers_number"];
        echo $teacher_name;
    }
    }
        }
   


        if($teacher_name && $teachers_number && $teacher_password){

            $check_teacher_email = mysqli_query($connections, "SELECT * FROM mytbl WHERE name='$teacher_name'");

            $check_teacher_email_row = mysqli_num_rows($check_teacher_email);
    
    
            if ($check_teacher_email_row > 0 ){
                
                echo "<script>alert('This username name is already register try another!');</script>";
                
            }else{
    
                $query = mysqli_query($connections, "INSERT INTO mytbl(name,teachers_number,password,account_type)
                VALUES('$teacher_name','$teachers_number','$teacher_password','3')");

                $faculty_query = mysqli_query($connections, "INSERT INTO faculty_tbl(teachers_number,accfeu_accent,librarian,
                                            registrar,office_department_head,program_coordinator,dean_principal,
                                            hrd_officer,accountant,vp_accademic_affairs,vp_finance_ancilllary,status)
                VALUE('$teachers_number','0','0','0','0','0','0','0','0','0','0','0')");
                
                echo "<script>alert('Signatory record has been inserted!'); window.location.href='?';</script>";
            
            }


        }
        
    }
?>
    
    <div id="div" class="form-group col pt-4">
    <input type="text" value="<?php echo $teacher_name; ?>" class="form-control py-4 form_with_label" name="teacher_name" id="teacher_name" alt="teacher_name" required placeholder="Name *" onkeyup="name_block()" onblur="nameblur()" onfocus="namefocus()" autocomplete="off">
    <label for="teacher_name" id="namelabel" alt="label" class="float-left"><span style="color: white;">Name*</span></label>
    </div>

    <div id="div" class="form-group col pt-2">
    <input type="text" value="<?php echo $teachers_number; ?>" class="form-control py-4 form_with_label" name="teachers_number" id="teachers_number" alt="teachers_number" required placeholder="Student Number*" onkeyup="roleno_block()" onblur="rolenoblur()" onfocus="rolenofocus()" autocomplete="off" onkeypress='return isNumberKey(event)'>
    <label for="teachers_number" id="rolenolabel" alt="label" class="float-left"><span style="color: white;">Teacher's No*</span></label>
    </div>

    <div id="div" class="form-group col pt-2">
    <input type="text" value="<?php echo $teacher_password; ?>" class="form-control py-4 form_with_label" name="teacher_password" id="teacher_password" alt="teacher_password" required placeholder="Password *" onkeyup="password_block()" onblur="passwordblur()" onfocus="passwordfocus()" autocomplete="off" onkeypress='return isNumberKey(event)'>
    <label for="teacher_password" id="passwordlabel" alt="label" class="float-left"><span style="color: white;">Password*</span></label>
    

    
    </div>

    


    <div class="text-right">
        <button type="submit" name="teacher_submit" class="btn btn-dark"> Teacher Register</button>
    </div>
    

<?php
}
}
?>

<?php
if(isset($_GET['redirect'])){ if($_GET['redirect'] == "student"){


    $student_name = $student_course = $year_level = $student_number = $student_password = "";


    if(isset($_POST["student_submit"])){

        if(!empty($_POST["student_name"])){
            $student_name = $_POST["student_name"];
        }

        if(!empty($_POST["student_course"])){

        $student_course = $_POST["student_course"];
        }
        if(!empty($_POST["year_level"])){

            $year_level = $_POST["year_level"];
        }
        if(!empty($_POST["student_number"])){

            $student_number = $_POST["student_number"];
        }
        if(!empty($_POST["student_password"])){

            $student_password = $_POST["student_password"];
        }




        if($student_name && $student_course && $year_level && $student_number && $student_password){

            $check_student_email = mysqli_query($connections, "SELECT * FROM mytbl WHERE student_number='$student_number' ");

            $check_student_email_row = mysqli_num_rows($check_student_email);

            if($check_student_email_row > 0){
                echo "<script>alert('This student number if already registered!')</script>";
            }

            else{

                $query = mysqli_query($connections, "INSERT INTO mytbl(name,course,year_level,student_number,password,account_type)
                VALUES('$student_name','$student_course','$year_level','$student_number','$student_password','4')");

                $query = mysqli_query($connections, "INSERT INTO student_tbl(rolenumber,department_treasurer,department_dean,
                                      librarian,coordinator_of_student_affairs,nstp,accss_chapter_treasurer,accssg_treasurer,
                                      registrar,vp_for_finance,status)
                VALUES('$student_number','0','0','0','0','0','0','0','0','0','0')");

                echo "<script>alert('Student Record has been Inserted!')</script>";
            }
        }

        // echo "<script>alert('button')</script>";


    }

    



    
    
?>
    <form method="POST">
    <div id="div" class="form-group col pt-4">
    <input type="text" value="<?php echo $student_name; ?>" class="form-control py-4 form_with_label" name="student_name" id="student_name" alt="student_name" required placeholder="Name *" onkeyup="name_block()" onblur="nameblur()" onfocus="namefocus()" autocomplete="off">
    <label for="student_name" id="namelabel" alt="label" class="float-left"><span style="color: white;">Name*</span></label>
    </div>

    <div id="div" class="form-group col pt-4">
    <select class="form-control align-middle size-5" id="student_course" name="student_course">
             <option class="" name="student_course" value="select_course">Course</option>
                 <option class="" name="student_course" value="MAE" <?php if($student_course == "MAE"){ echo "selected"; }?> >MAE</option>
                      <option class="" name="student_course" value="MBA" <?php if($student_course == "MBA"){ echo "selected"; }?> >MBA</option>
                         <option class="" name="student_course" value="Juris Doctor" <?php if($student_course == "Juris Doctor"){ echo "selected"; }?> >Juris Doctor</option>
                              <option class="" name="student_course" value="TECP" <?php if($student_course == "TECP"){ echo "selected"; }?> >TECP</option>
                                 <option class="" name="student_course" value="BSE" <?php if($student_course == "BSE"){ echo "selected"; }?> >BSED</option>
                                      <option class="" name="student_course" value="BEE" <?php if($student_course == "BEE"){ echo "selected"; }?> >BEE</option>
                                         <option class="" name="student_course" value="BA" <?php if($student_course == "BA"){ echo "selected"; }?> >BA</option>
                                             <option class="" name="student_course" value="CRIM" <?php if($student_course == "CRIM"){ echo "selected"; }?> >CRIM</option>
                                               <option class="" name="student_course" value="NURSING" <?php if($student_course == "NURSING"){ echo "selected"; }?> >NURSING</option>
                                                 <option class="" name="student_course" value="BSBA" <?php if($student_course == "BSBA"){ echo "selected"; }?> >BSBA</option>
                                                      <option class="" name="student_course" value="BSHM" <?php if($student_course == "BSHM"){ echo "selected"; }?> >BSHM</option>
                                                          <option class="" name="student_course" value="BSTM" <?php if($student_course == "BSTM"){ echo "selected"; }?> >BSTM</option>
                                                      <option class="" name="student_course" value="BSA" <?php if($student_course == "BSA"){ echo "selected"; }?> >BSA</option>
                                                 <option class="" name="student_course" value="BSAIS" <?php if($student_course == "BSAIS"){ echo "selected"; }?> >BSAIS</option>
                                             <option class="" name="student_course" value="BSREM" <?php if($student_course == "BSREM"){ echo "selected"; }?> >BSREM</option>
                                        <option class="" name="student_course" value="BSCS" <?php if($student_course == "BSCS"){ echo "selected"; }?> >BSCS</option>
                                     <option class="" name="student_course" value="BSIT" <?php if($student_course == "BSIT"){ echo "selected"; }?> >BSIT</option>
    </select>
    </div>

    <div id="div" class="form-group col pt-4">
    <select class="form-control align-middle size-5" id="year_level" name="year_level">
                 <option class="" name="year_level" value="select_course">Year Level</option>
                       <option class="" name="year_level" value="1st Year" <?php if($year_level == "1st Year"){ echo "selected"; }?> >1st Year</option>
                              <option class="" name="year_level" value="2nd Year" <?php if($year_level == "2nd Year"){ echo "selected"; }?> >2nd Year</option>
                                   <option class="" name="year_level" value="3th Year" <?php if($year_level == "3th Year"){ echo "selected"; }?> >3rd Year</option>
                                          <option class="" name="year_level" value="4th Year" <?php if($year_level == "4th Year"){ echo "selected"; }?> >4rd Year</option>
        

    </select>
    </div>
    
    <div id="div" class="form-group col pt-2">
    <input type="text" value="<?php echo $student_number; ?>" class="form-control py-4 form_with_label" name="student_number" id="student_number" alt="student_number" required placeholder="Student Number*" onkeyup="roleno_block()" onblur="rolenoblur()" onfocus="rolenofocus()" autocomplete="off" onkeypress='return isNumberKey(event)'>
    <label for="student_password" id="rolenolabel" alt="label" class="float-left"><span style="color: white;">Student No*</span></label>
    </div>

    <div id="div" class="form-group col pt-2">
    <input type="text" value="<?php echo $student_password; ?>" class="form-control py-4 form_with_label" name="student_password" id="student_password" alt="student_password" required placeholder="Password *" onkeyup="password_block()" onblur="passwordblur()" onfocus="passwordfocus()" autocomplete="off" onkeypress='return isNumberKey(event)'>
    <label for="student_password" id="passwordlabel" alt="label" class="float-left"><span style="color: white;">Password*</span></label>
    </div>
    </div>

    <div class="text-right">
        <button type="submit" name="student_submit" class="btn btn-warning">Student Register</button>
    </div>
    </form>

<?php
}
}
?>

<script>
    function account_type_check(){
        let account_check = document.getElementById("account_check");
        let select_account_type = account_check.options[account_check.selectedIndex].value;
        // alert(select_account_type);
        window.location.href="?redirect="+select_account_type;
    }
    function signatoryChange(){
        let signatory_check = document.getElementById("signatory");
        //let if_dean_department_check = document.getElementById("if_dean_department");
        if(signatory_check.value == "2"){
            document.getElementById("if_dean_department").disabled = false;
        }else{
            document.getElementById("if_dean_department").disabled = true;
            document.getElementById("if_dean_department").value = "select_if_dean_department";
        }
    }

</script>

<?php
include("footer.php");

?>

