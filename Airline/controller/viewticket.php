<?php

require('database.php');

 

// retrieve data from database
$sql = "SELECT * FROM MyGuests";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
	# code...
	
	echo " <table border='1'>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Age</th>
		</tr>";
	
 
	 while($row = mysqli_fetch_assoc($result)) 
	 {
	 	echo "<tr>";
        echo "<td>";
        	 echo	$row["id"];

        echo "</td>";
         echo "<td>";
        	 echo	$row["name"];

        echo "</td>";
         echo "<td>";
        	 echo	$row["age"];

        echo "</td>";
	 	echo "</tr>";
 
	 }
	 echo "</table>";
} else 
{
	# code...
	echo "no result";
}

 
mysqli_close($conn);
?>