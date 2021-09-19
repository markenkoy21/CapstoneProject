<?php
include("header.php");
$name = $course = $studentNo = $password = "";
$nameErr = $courseErr = $studentNoErr = $passwrodErr = "";


if($_SERVER ["REQUEST_METHOD"]== "POST"){

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
    (empty($_POST["studentNo"])){
        $studentNoErr = "Email is required!";
    }
    else{
        $studentNo = $_POST["studentNo"];
    }
    if(empty($_POST["password"])){

        $passwrodErr = "Password is required!";
    }else{

        $password = $_POST["password"];
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

<form method="post" enctype="multipart/form-data">


    <div id="div" class="form-group col">
    <input type="text" value="<?php echo $name; ?>" class="form-control py-4 form_with_label" name="name" id="name" alt="name" required placeholder="Name *" onkeyup="name_block()" onblur="nameblur()" onfocus="namefocus()" autocomplete="off">
    <label for="name" id="namelabel" alt="label" class="float-left">Name <span style="color: white;">*</span></label>
    </div>

    <div id="div" class="form-group col">
    <select class="form-control align-middle size-5" id="course" name="course">
        <option class="" name="course" value="select_course">Course</option>
        <option class="" name="course" value="Paid" <?php if($course == "Paid"){ echo "selected"; }?> >MAE</option>
        <option class="" name="course" value="Unpaid" <?php if($course == "Unpaid"){ echo "selected"; }?> >MBA</option>
        <option class="" name="course" value="Downpayment" <?php if($course == "Downpayment"){ echo "selected"; }?> >Juris Doctor</option>
        <option class="" name="course" value="Balance" <?php if($course == "Balance"){ echo "selected"; }?> >TECP</option>
        <option class="" name="course" value="Paid" <?php if($course == "Paid"){ echo "selected"; }?> >BSE</option>
        <option class="" name="course" value="Unpaid" <?php if($course == "Unpaid"){ echo "selected"; }?> >BEE</option>
        <option class="" name="course" value="Downpayment" <?php if($course == "Downpayment"){ echo "selected"; }?> >BA</option>
        <option class="" name="course" value="TECP" <?php if($course == "TECP"){ echo "selected"; }?> >CRIM</option>
        <option class="" name="course" value="Paid" <?php if($course == "Paid"){ echo "selected"; }?> >NURSING</option>
        <option class="" name="course" value="Unpaid" <?php if($course == "Unpaid"){ echo "selected"; }?> >BSBA</option>
        <option class="" name="course" value="Downpayment" <?php if($course == "Downpayment"){ echo "selected"; }?> >BSHM</option>
        <option class="" name="course" value="TECP" <?php if($course == "TECP"){ echo "selected"; }?> >BSTM</option>
        <option class="" name="course" value="TECP" <?php if($course == "TECP"){ echo "selected"; }?> >BSA</option>
        <option class="" name="course" value="TECP" <?php if($course == "TECP"){ echo "selected"; }?> >BSAIS</option>
        <option class="" name="course" value="TECP" <?php if($course == "TECP"){ echo "selected"; }?> >BSREM</option>
        <option class="" name="course" value="TECP" <?php if($course == "TECP"){ echo "selected"; }?> >BSCS</option>
        <option class="" name="course" value="TECP" <?php if($course == "TECP"){ echo "selected"; }?> >BSIT</option>

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
<?php
include("footer.php");
?>