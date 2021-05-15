
 <?php 
require('database.php');
	$name=$_POST["fname"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	$sex=$_POST["sex"];
	$password=$_POST["password"];
	$cpassword=$_POST["cpassword"];
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "Name is not Numbers!!";
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid Email!!";
		 }
	elseif ($password!=$cpassword) {
		# code...
		echo "The password is not mach";
	} 
	elseif(strlen($phone)!=10){
       echo "Invalid Phone number!!";
	}
	else {
		# code...
		$inserquery="insert into registe (fname,email,phone,adress,sex,password)
	                      values('".$name."','".$email."','".$phone."','".$address."','".$sex."','".$password."')";
	                      if ($conn->query($inserquery)==true) {
	                      	# code...
	                      	echo "Succecfully Registerd";
	                      } else {
	                      	# code...
	                      	echo "Registration Failed";
	                      }
	}

$conn->close();

	                      

header("refresh:2 url=../view/register.php");
 ?>