
 <?php 
require('database.php');
	$invoice=$_POST["invoice"];
	$payment=$_POST["payment"];
	if (!preg_match("/^[0-9]*$/",$invoice)) {
      echo " Factor Number is no character!!";
	}
		 elseif ($invoice==""||$payment=="") {
		 	# code...
		 	echo "The Box is not empty";
		 }
		 else{
		 			$inserquery="insert into payment (invoice,payment)
	                      values('".$invoice."','".$payment."')";
	                      if ($conn->query($inserquery)==true) {
	                      	# code...
	                      	echo "Succecfully Registerd";
	                      } else {
	                      	# code...
	                      	echo "Registration Failed";
	                    }

$conn->close();

	                      

header("refresh:2 url=../view/payment.php");
	}

 ?>