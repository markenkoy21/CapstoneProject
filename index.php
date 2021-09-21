<?php
include("connection.php");
include("header.php");
include("footer.php");
$name = $course = $studentNo = $password = "";
$nameErr = $courseErr = $studentNoErr = $passwrodErr = "";


if(isset($_POST["submit"])){

    if(empty ($_POST["name"])){
        $nameErr = "Name is required!";
    
    }else{
        
        $name = $_POST["name"];
    }

    if
    (empty ($_POST["course"])){
        $courseErr = "Course is required!";
    }
    else{
        $course = $_POST["course"];
    }
    if
    (empty($_POST["studentno"])){
        $studentNoErr = "Email is required!";
    }
    else{
        $studentNo = $_POST["studentno"];
    }
    if(empty($_POST["password"])){

        $passwrodErr = "Password is required!";
    }else{

        $password = $_POST["password"];
    }



    if($name && $course && $studentNo ){
        
        $check_email = mysqli_query($connections, "SELECT * FROM mytbl WHERE studentNo='$studentNo'");
        
        $check_email_row = mysqli_num_rows($check_email);

       

        if ($check_email_row > 0) {

            $emailErr  = "Email is already registered!";
        
        }else{

            $query = mysqli_query($connections, "INSERT INTO mytbl(name,course,studentNo,password)
            
            VALUES('$name','$course','$studentNo','$password')");
            
            echo "<script>alert('New record has been inserted!')</script>";
            echo "<script>window.location.href='index.php';</script>";


        }

 

    }
    
}


?>
<style>
.error{
    color:red;
}

</style>


<?php include("Nav.php");?>
<br>
<br>

<center>
<div class="container border rounded col-4 pt-3 pb-3 bg-danger text-light">
<form method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">


<h1 class="">Register</h1>
<br>

<form method="post">


    <div id="div" class="form-group col">
    <input type="text" value="<?php echo $name; ?>" class="form-control py-4 form_with_label" name="name" id="name" alt="name" required placeholder="Name *" onkeyup="name_block()" onblur="nameblur()" onfocus="namefocus()" autocomplete="off">
    <label for="name" id="namelabel" alt="label" class="float-left">Name <span style="color: white;">*</span></label>
    </div>

    <div id="div" class="form-group col">
    <select class="form-control align-middle size-5" id="course" name="course">
        <option class="" name="course" value="select_course">Course</option>
        <option class="" name="course" value="MAE" <?php if($course == "MAE"){ echo "selected"; }?> >MAE</option>
        <option class="" name="course" value="MBA" <?php if($course == "MBA"){ echo "selected"; }?> >MBA</option>
        <option class="" name="course" value="Juris Doctor" <?php if($course == "Juris Doctor"){ echo "selected"; }?> >Juris Doctor</option>
        <option class="" name="course" value="TECP" <?php if($course == "TECP"){ echo "selected"; }?> >TECP</option>
        <option class="" name="course" value="BSE" <?php if($course == "BSE"){ echo "selected"; }?> >BSE</option>
        <option class="" name="course" value="BEE" <?php if($course == "BEE"){ echo "selected"; }?> >BEE</option>
        <option class="" name="course" value="BA" <?php if($course == "BA"){ echo "selected"; }?> >BA</option>
        <option class="" name="course" value="CRIM" <?php if($course == "CRIM"){ echo "selected"; }?> >CRIM</option>
        <option class="" name="course" value="NURSING" <?php if($course == "NURSING"){ echo "selected"; }?> >NURSING</option>
        <option class="" name="course" value="BSBA" <?php if($course == "BSBA"){ echo "selected"; }?> >BSBA</option>
        <option class="" name="course" value="BSHM" <?php if($course == "BSHM"){ echo "selected"; }?> >BSHM</option>
        <option class="" name="course" value="BSTM" <?php if($course == "BSTM"){ echo "selected"; }?> >BSTM</option>
        <option class="" name="course" value="BSA" <?php if($course == "BSA"){ echo "selected"; }?> >BSA</option>
        <option class="" name="course" value="BSAIS" <?php if($course == "BSAIS"){ echo "selected"; }?> >BSAIS</option>
        <option class="" name="course" value="BSREM" <?php if($course == "BSREM"){ echo "selected"; }?> >BSREM</option>
        <option class="" name="course" value="BSCS" <?php if($course == "BSCS"){ echo "selected"; }?> >BSCS</option>
        <option class="" name="course" value="BSIT" <?php if($course == "BSIT"){ echo "selected"; }?> >BSIT</option>

    </select>
    </div>

    <div id="div" class="form-group col pt-3">
    <input type="text" value="<?php echo $studentNo; ?>" class="form-control py-4 form_with_label" name="studentno" id="studentno" alt="studentno" required placeholder="Student Number *" onkeyup="studentno_block()" onblur="studentnoblur()" onfocus="studentnofocus()" autocomplete="off">
    <label for="studentno" id="studentnolabel" alt="label" class="float-left">Student Number <span style="color: white;">*</span></label>
    </div>

    <div id="div" class="form-group col">
    <input type="text" value="<?php echo $password; ?>" class="form-control py-4 form_with_label" name="password" id="password" alt="password" required placeholder="Password *" onkeyup="password_block()" onblur="passwordblur()" onfocus="passwordfocus()" autocomplete="off" onkeypress='return isNumberKey(event)'>
    <label for="password" id="passwordlabel" alt="label" class="float-left">Password <span style="color: white;">*</span></label>
    </div>




    <div class="text-right">
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </div>

    </form>
</div>
</div>
</center>



</form>
<hr>


<?php
include("connection.php");

?>