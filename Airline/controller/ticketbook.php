
 <?php 
 session_start();
require('database.php');
	$fname=$_POST["fname"];
	$sex=$_POST["sex"];
	$address=$_POST["address"];
	$phone=$_POST["phone"];
	$ticket=$_POST["ticketno"];
	$plane=$_POST["Plane"];
	$source=$_POST["source"];
	$destination=$_POST["destination"];
	$ddate=$_POST["ddate"];
 if (strlen($phone)!=10) {
     		# code...
  echo "The Phone Numbers is incorrect!!";
     	}
    elseif (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      echo "Name is not Numbers!!";
	}
	elseif($ticket=="" || $ddate=="" || $address=="Select Your Address" || $phone=="" ||$sex=="Select sex"||$fname==""||$plane=="Select Plane Type"||$source=="Select Source Place"||$destination=="Destination Place"){
		echo "Each Box Is no empty!!!";
	}
	elseif ($source==$destination) {
		# code...
		echo "The Source Place and Destination is not the same";
	}
	else{
				$qgondar="insert into place (fname,sex,address,phone,ticketno,plane,splace,dplace,date)
	                      values('".$fname."','".$sex."','".$address."','".$phone."','".$ticket."','".$plane."','".$source."','".$destination."','".$ddate."')";
	                      if ($conn->query($qgondar)==true) {
	                      	# code...
	                      	echo "Succecfully registerd";
	                      } else {
	                      	# code...
	                      	echo "Registration Failed";
	                      }
		
	}

$conn->close();

	                      


 ?>