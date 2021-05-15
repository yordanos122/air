<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/log.css">

<div class="wrapper">
		<header style="height: 30%;">
      <div class="container">
                <img style="position: absolute;left: 5%;top: 2%; height: 20%;width: 20%;" src="../assete/logo.png">
        <div style="position: absolute;top: 20%;" id="logo">Ethio Ticket</div>
        <div style="position: absolute;  left: 80%;" id="logo">ኢትዮ ትኬት</div>
        
        <nav style="position: absolute;top: 18%;left: 45%;">
          <a href="customer.php">Home</a>
          <a href="register.php">Registration</a>
          <a href="about.php">About Us</a>
          <a href="contact.php">Contact Us</a>
          <a href="login.php">Login</a>
        </nav>
        
      </div>
    </header>
		
	</div>
<!------ Include the above in your HEAD tag ---------->
 
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div style="position: absolute;top: 30%;"  class="nav-side-menu">
    <div class="brand">Customer</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
       <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                 <li>
                  <a href="viewschedul.php"><i class="fa fa-gift fa-lg"></i>View Schedule<span class="arrow"></span></a>
                </li>
                <li >
                  <a href="ticketbooking.php"><i class="fa fa-gift fa-lg"></i>Ticket Booking<span class="arrow"></span></a>
                </li>
                <li>
                  <a href="payment.php"><i class="fa fa-gift fa-lg"></i>Payment<span class="arrow"></span></a>
                </li>
                 
                <li>
                  <a href="viewtickets.php"><i class="fa fa-gift fa-lg"></i>View Booked Ticket<span class="arrow"></span></a>
                </li>
                <li>
                  <a href="delete.php"><i class="fa fa-gift fa-lg"></i>Delete The Ticket<span class="arrow"></span></a>
                </li>
                <li>
                  <a href="update.php"><i class="fa fa-globe fa-lg"></i>Update The Ticket<span class="arrow"></span></a>
                </li>  
                <li>
                  <a href="login.php"><i class="fa fa-car fa-lg"></i> Logout <span class="arrow"></span></a>
                </li>
            </ul>
     </div>
</div>
<div>
  <div style="position: absolute;top: 40%; left: 50%;">
        <h2 style="color: blue;">Schedule Records</h2>
      </div>
<div style="position: absolute;top: 60%;left: 25%;">
  <?php  
  require('../controller/database.php');
$sql = "SELECT * FROM schedule";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      ?>
      
       <table border="2px" style="width: 1000px;line-height: 40px">
        <tr bgcolor="magenta" style="color: black;">
        <th>Plane Photo</th>
        <th>Plane Name</th>
        <th>Number of Seat</th>
        <th>Destination Date</th>
        <th>Price</th>
        <th>Soure Place</th>
        <th>Destination Place</th>
        <th>Action</th>
          </tr>
          <?php
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr bgcolor="black" style="color: white;"><?php
                echo "<td>" . $row['photo'] . "</td>";
                echo "<td>" . $row['plane'] . "</td>";
                echo "<td>" . $row['seat'] . "</td>";
                echo "<td>" . $row['ddate'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['source'] . "</td>";
                echo "<td>" . $row['destination'] . "</td>";
                echo "<td>"?><a href="ticketbooking.php"> Reservation</a></td><?php?>
                </tr><?php
        }
        ?>
        </table>
              <?php
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
</div>
<div style="position: absolute;top: 200%; width: 100%;" class="footer-bottom-area bg-dark-light section-padding-sm">
                <div class="container">
                    <div class="row widgets footer-widgets">

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-about">
                                <h5 class="widget-title">About Us</h5>
                                <img src="../assete/logo.png">
                                <p>We are a team of designers and developers that create high quality</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-quick-links">
                                <h5 class="widget-title">My Service</h5>
                                <ul>
                                    <li><a href="admin.php">Home</a></li>
                                    <li><a href="register.php">Registration</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="help.php">Helps</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-quick-links">
                                <h5 class="widget-title">Admin Service</h5>
                                <ul>
                                    <li><a href="ticketbooking.php">Ticket Booking</a></li>
                                    <li><a href="viewschedul.php">View Schedule</a></li>
                                    <li><a href="viewtickets.php">View Booked Ticket</a></li>
                                    <li><a href="delete.php">Delete The Ticket</a></li>
                                    <li><a href="payment.php">Payment</a></li>
                                    <li><a href="update.php">Update The Ticket</a></li>
                                    <li><a href="login.php">Logiout</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-contact">
                                <h5 class="widget-title">Contact Us</h5>
                                <ul>
                                    <li class="address">
                                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                                        <p>Address : Gondar Ethiopia</p>
                                    </li>
                                    <li class="phone">
                                        <span class="icon"><i class="fa fa-phone"></i></span>
                                        <p><a href="#">+251930707972</a></p>
                                    </li>
                                    <li class="fax">
                                        <span class="icon"><i class="fa fa-fax"></i></span>
                                        <p><a href="#">+251930707972</a></p>
                                    </li>
                                    <li class="email">
                                        <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                        <p><a href="#">yaikobtadele@gmail.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
