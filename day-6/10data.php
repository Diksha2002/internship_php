<?php
$connection = mysqli_connect("localhost", "root", "", "demo");

if($_POST){
    $firstname = $_POST['txt1'];
    $middlename = $_POST['txt2'];
    $lastname = $_POST['txt3'];
    $course = $_POST['txt4'];
    $gender = $_POST['txt5'];
    $mobileno = $_POST['txt6'];
    $address = $_POST['txt7'];
    $email = $_POST['txt8'];
    $password = $_POST['txt9'];
    $retypepassword = $_POST['txt10'];

    $q = mysqli_query($connection, "insert into tbl_test (test_firstname,test_lastname ,test_middlename,test_course,test_gender,test_mobile no,test_address,test_email,test_password,test_re-type password) values('{$firstname}','{$middlename}','{$lastname}','{$course}','{$gender}','{$mobile}','{$address}','{$email}','{$password}','{$retypepassword}')") or die("error".
     mysqli_error($connection));

    if($q){
        echo "<script>alert('record added');</script>";
    }
}
?>




<Html>  
<head>   
<title>  
Registration Page  
</title>  
</head>  
<body> 
<br>  
<br>  
<form>  
  
<label> Firstname </label>         
<input type="text" name="firstname" size="15"/> <br> <br>  
<label> Middlename: </label>     
<input type="text" name="middlename" size="15"/> <br> <br>  
<label> Lastname: </label>         
<input type="text" name="lastname" size="15"/> <br> <br>  
  
<label>   
Course :  
</label>   
<select>  
<option value="Course">Course</option>  
<option value="BCA">BCA</option>   
<option value="B.Tech">B.Tech</option>  
 
</select>  
  
<br>  
<br>  
<label>   
Gender :  
</label><br>  
<input type="radio" name="male"/> Male <br>  
<input type="radio" name="female"/> Female <br>  
  
<br>  
<br>  
  
<label>   
mobile no :  
</label>  
<input type="text" name="country code"  value="+91" size="2"/>   
<input type="text" name="phone" size="10"/> <br> <br>  
Address  
<br>  
<textarea cols="80" rows="5" value="address">  
</textarea>  
<br> <br>  
Email:  
<input type="email" id="email" name="email"/> <br>    
<br> <br>  
Password:  
<input type="Password" id="pass" name="pass"> <br>   
<br> <br>  
Re-type password:  
<input type="Password" id="repass" name="repass"> <br> <br>  
<input type="button" value="Submit"/>  
</form>  
</body>  
</html>  