
 <?php 
require('database.php');

	$name=$_POST["fname"];
	$address=$_POST["address"];
	$email=$_POST["email"];
	$Phone=$_POST["Phone"];
	$comment=$_POST["comment"];
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "Name is not Numbers!!";
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid Email!!";
		 }
		 elseif($name=="" || $address=="" ||  $Phone=="" ||$comment==""){
		echo "Each Box Is no empty!!!";
	}
			$query="insert into contact (fname,adress,email,phone,comment)
	                      values('".$name."','".$address."','".$email."','".$Phone."','".$comment."')";
	                      if ($conn->query($query)==true) {
	                      	# code...
	                      	echo "Your comment is Sent!!";
	                      } else {
	                      	# code...
	                      	echo "Registration Failed";
	                      }


$conn->close();

	                      


 ?>