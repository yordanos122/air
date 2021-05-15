<?php 
session_start();
require('database.php');
$user=$_POST["user"];
$email=$_POST["email"];
$password=$_POST["password"];
$q="select * from registe where email='".$_POST['email']."' and password='".$_POST['password']."'";
$result=mysqli_query($conn,$q);
$ya="select * from admin where email='".$_POST['email']."' and password='".$_POST['password']."'";
$results=mysqli_query($conn,$ya);
if ($user=="Customer") {
	# code...
     if ($email=="" && $password=="") {
          # code...
          echo "Email and Password is not empty";
     }
	elseif (Mysqli_num_rows($result)==0) {
	# code...
	$row=mysqli_fetch_assoc($result);
     $_SESSION['user']=$row['username'];
     	 header("location:../view/customer.php");
     	}
     	else{
     		echo "Email and Password is incorect";
     	}
     
} 
else if($user=="Admin") {
     if ($email=="" && $password=="") {
          # code...
          echo "Email and Password is not empty";
     }
	# code...
	elseif (Mysqli_num_rows($results)>0) {
	# code...
	$row=mysqli_fetch_assoc($results);
     $_SESSION['user']=$row['username'];
     	 header("location:../view/admin.php");
     	}
     	else{
     		echo "Email and Password is incorect";
     		
     	}

}
else{
	echo "Fist select the user";
	
}







 ?>
