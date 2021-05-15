
 <?php 
require('database.php');

	$plane=$_POST["plane"];
	$date=$_POST["ddate"];
	$prices=$_POST["price"];
	$source=$_POST["splace"];
	$destination=$_POST["dplace"];
	$photo=$_POST["photo"];
	$seat=$_POST["seat"];
	if ($source==$destination) {
		# code...
		echo "The Source Place and Destination is not the same";
	}
	elseif (!preg_match("/^[0-9 ]*$/",$seat)) {
      echo "Seat Numbe is only Digit";
	}
	elseif (!preg_match("/^[0-9 ]*$/",$prices)) {
      echo "price is only Digit";
	}
	else{
			$inserquery="insert into schedule (photo,plane,seat,ddate,price,source,destination)
	                      values('".$photo."','".$plane."','".$seat."','".$date."','".$prices."','".$source."','".$destination."')";
	                      if ($conn->query($inserquery)==true) {
	                      	# code...
	                      	echo "Succecfully registerd";
	                      } else {
	                      	# code...
	                      	echo "Registration Failed";
	                      }
	}


$conn->close();

	                      


 ?>