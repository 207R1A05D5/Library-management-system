<?php
include('header.php')
?>
  <!--content-->
  <style>
    .space {
  width: 4px;
  height: auto;
  display: inline-block;
}
</style>
  <div class="data p-4">
	<h3>REGISTRATION FORM</h3>
	<form action="#" method="post" name="sform" enctype="multipart/form-data" onsubmit="return validateform()">
  <div class="row pt-2">
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
      <div class="error text-warning" id="firstnameErr"></div>
    </div>
	<div class="form-group col-md-4">
      <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Middle  name">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name" required>
      <div class="error text-warning" id="lastnameErr"></div>
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="rollno" id="rollno" placeholder="Roll No." required>
      <div class="error text-warning" id="rollErr"></div>
    </div> 
	<div class="form-group col-md-4">
      <input type="number" class="form-control" name="phone" id="phone" placeholder="phone" required>
      <div class="error text-warning" id="phoneErr"></div>
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control "  name="birth" id="inputDate" onfocus="(this.type='date')" min="1979-12-31" max="2000-01-02" placeholder="Dob" required>
    </div>
	<div class="form-group col-md-4">
  <select class="form-control" id="branch" name="branch">
	  <option>BRANCH</option>
	  <option>CSE</option>
	  <option>CSM</option>
	  <option>CSD</option>
	  <option>MECH</option>
	  <option>CIVIL</option>
	  <option>ECE</option>
	  <option>EEE</option>
	  <option>CYBER SECURITY</option>
    </select>
	<div class="error text-warning" id="branchErr"></div>
    </div>
	 <div class="form-group col-md-4">
	Gender:
  <input type="radio" name="gender" value="Male" checked/> Male
  <input type="radio" name="gender" value="Female"/> Female
	<input type="radio" name="gender" value="others"/> Others
	</div>
    
    <div class="form-group col-md-4">
      <input type="text" class="form-control " name="city" id="city" placeholder="City" required>
    	<div class="error text-warning" id="cityErr"></div>
    </div>
    <div class="form-group col-md-4 ">
   <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
   <div class="error text-warning" id="stateErr"></div>  
  </div>
    
  <div class="form-group col-md-12">
       <input type="text" class="form-control" id="inputAddress" name="paddress" placeholder="Permanent address" required>
  </div>
  <div class="form-group col-md-12">
    <input type="text" class="form-control" id="inputAddress2" name="taddress" placeholder="Temporary address" required>
  </div>
  <div class="form-group col-md-4">
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>
    	<div class="error text-warning" id="emailErr"></div>
    </div>
    <div class="form-group col-md-4">
      <input type="password" class="form-control " name="password" id="password" placeholder="Password" required>
    </div>
    <div class="form-group col-md-4">
      <input type="password" class="form-control " name="password1" id="password1" placeholder="Confirm password" required>
      <div class="error text-warning" id="passwordErr"></div>
    </div>
   <div>
  <button type="submit" name="submit" class="btn btn-danger">Sign Up</button>
 <div class="space">
  </div>
  <button type="reset" class="btn btn-info">Reset</button>
   </div>
</form>
</div>
<!-- validations-->
<script>
  	// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
   }   
// Defining a function to validate form 
function validateform() {
    // Retrieving the values of form elements 
    var firstname = document.sform.firstname.value;
	var lastname = document.sform.lastname.value;
	var aadhar = document.sform.rollno.value;
	var password1 = document.sform.password.value;
	var password2 = document.sform.password1.value;
	var phone = document.sform.phone.value;
	var blood = document.sform.branch.value;
    var city = document.sform.city.value;
    var state = document.sform.state.value;
	
    
	// Defining error variables with a default value
    var firstnameErr = lastnameErr = rollErr  = passwordErr = phoneErr = branchErr = cityErr =stateErr  = true;    
    // Validate firstname
    if(firstname == "") {
        printError("firstnameErr", "Please enter your firstname");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(firstname) === false) {
            printError("firstnameErr", "Please enter a valid firstname");
        } else {
            printError("firstnameErr", "");
            firstnameErr = false;
        }
    }
	// Validate lastname
    if(lastname == "") {
        printError("lastnameErr", "Please enter your lastname");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lastname) === false) {
            printError("lastnameErr", "Please enter a valid lastname");
        } else {
            printError("lastnameErr", "");
            lastnameErr = false;
        }
    }

    if(rollno == "") {
        printError("rollErr", "Please enter your ROLL NUMBER");
    }else {
        var regex = /^[A-Z0-9]*$/\d{11}$/;
        if(regex.test(rollno) === false) {
            printError("rollErr", "Please enter a valid 10 digit roll number");
        } else{
            printError("rollErr", "");
            phoneErr = false;
        }
    }
	// validate password
	if(password1==password2){
            printError("passwordErr", "");
            passwordErr = false;
	
	} else {
        printError("passwordErr", "Please enter same password");
        }
    
    // Validate phone number
    if(phone == "") {
        printError("phoneErr", "Please enter your phone number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(phone) === false) {
            printError("phoneErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("phoneErr", "");
            phoneErr = false;
        }
    }
    if(blood == "BRANCH") {
        printError("branchErr", "Please select your branch");
    } else {
        printError("branchErr", "");
        branchErr = false;
    }
	// Validate city
    if(city == "") {
        printError("cityErr", "Please enter your city");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(city) === false) {
            printError("cityErr", "Please enter a valid city");
        } else {
            printError("cityErr", "");
            cityErr = false;
        }
    }
    // Validate state
    if(state == "") {
        printError("stateErr", "Please enter your state");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(state) === false) {
            printError("stateErr", "Please enter a valid state");
        } else {
            printError("stateErr", "");
            cityErr = false;
        }
    }
   
    // Prevent the form from being submitted if there are any errors
    if((firstnameErr || lastnameErr || rollErr || passwordErr || phoneErr || branchErr || cityErr || stateErr) == true) {
       return false;
    } else {
		alert("succesfull");
    }
}
</script>
          <!-- php code-->
<?php
include('footer.php')
?>
<?php
function reg()
{
    include_once('connection.php');
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $rollno=$_POST['rollno'];
    $phone = $_POST['phone'];
    $birth = $_POST['birth'];
    $branch = $_POST['branch'];
    $gender = $_POST['gender'];
    $city =$_POST['city'];
    $state = $_POST['state'];
    
    $paddress = $_POST['paddress'];
    $taddress = $_POST['taddress'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
	$sql="insert into userinfo (firstname,middlename,lastname,rollno,phone,birth,branch,gender,city,state,paddress,taddress,email,password,status) values('$firstname','$middlename','$lastname','$rollno','$phone','$birth','$branch','$gender','$city','$state','$paddress','$taddress','$email','$password','no')";
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ".mysqli_error($conn);  
}
}
if(isset($_POST['submit']))
{
	reg();
    echo '<br';
  echo 'succesfully inserted';
}
?>