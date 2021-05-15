<?php 
include('database.php')
      $sql="UPDATE place SET fname='".$_POST['fname']."',sex='".$_POST['sex']."',address='".$_POST['add']."',phone='".$_POST['phone']."',ticketno='".$_POST['ticks']."',plane='".$_POST['plane']."',splace='".$_POST['source']."',dplace='".$_POST['destination']."',ddate='".$_POST['date(format)']."' WHERE ticketno='".$_POST['ticks']."' and plane='".$_POST['plane']."' and splace='".$_POST['source']."' and date='".$_POST['date']."'"; 
 $result = mysqli_query($conn, $sql);



 ?>