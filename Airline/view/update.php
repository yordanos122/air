<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="../css/ticket.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<<header style="height: 30%;">
      <div class="container">
                <img style="position: absolute;left: 5%;top: 2%; height: 20%;width: 20%;" src="../assete/logo.png">
        <div style="position: absolute;top: 20%;" id="logo">Ethio Ticket</div>
        <div style="position: absolute;  left: 80%;" id="logo">ኢትዮ ትኬት</div>
        
        <nav style="position: absolute;top: 18%;left: 45%;">
          <a href="customer.php">Home</a>
          <a href="register.php">Registration</a>
          <a href="about.phph">About Us</a>
          <a href="contact.php">Contact Us</a>
          <a href="login.php">Login</a>
        </nav>
        
      </div>
    </header>
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
                  <a href="ticketbooking.php"><i class="fa fa-dashboard fa-lg"></i> Ticket Booking </a>
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
<form method="POST">
<div style="position: absolute;top: 40%;left: 30%;">
<div class="form-group ">
<label style="color: black;" class="control-label requiredField" for="name">
Ticket Number : 
<span class="asteriskField">
</span>
</label>
<input class="form-control" id="name" name="tick" placeholder="Enter Ticket Number" type="text"/>
</div>
<div class="form-group ">
<label style="color: black;" class="control-label requiredField" for="tel">
Plane Type:</label>
<select style="height: 40px;" name="Planes" class="form-control">
        <option value="">Select Plane Type</option>
        <option value="Boeing 747-8">Boeing 747-8</option>
        <option value="Boeing 747-8">Boeing 777-300</option>
        <option value="Airbus A350-900">Airbus A350-900</option>
        <option value="Airbus A340-500">Airbus A340-500</option>
</select>
</div>
 <div class="form-group ">
<label style="color: black;" class="control-label " for="select">
Source Place:
</label>
<select style="height: 40px;" name="splace" class="form-control">
       <option value="">Select Source Place</option>
        <option value="Addis Ababa">Addis Ababa</option>
        <option value="Gondar">Gondar</option>
        <option value="Mekele">Mekele</option>
        <option value="Hawassa">Hawassa</option>
        <option value="Bahir Dar">Bahir Dar</option>
        <option value="Gambella">Gambella</option>
        <option value="Jimma">Jimma</option>
</select>
</div>
<div style="position: absolute;left: 110%; top: -2%;">
 
<div class="form-group ">
 <label style="color: black;" class="control-label " for="select">
Destination Place:
</label>
<select style="height: 40px;" name="dplace" class="form-control">
       <option value="">Select Destination Place</option>
        <option value="Addis Ababa">Addis Ababa</option>
        <option value="Gondar">Gondar</option>
        <option value="Mekele">Mekele</option>
        <option value="Hawassa">Hawassa</option>
        <option value="Bahir Dar">Bahir Dar</option>
        <option value="Gambella">Gambella</option>
        <option value="Jimma">Jimma</option>
</select>
</div>
<div class="form-group ">
<label style="color: black;" class="control-label " for="select">
Destination Date:
</label>
<input class="form-control" id="name" name="date" placeholder="Enter Destination Date" type="Date"/>
</div>
<div class="form-group">
<div>
<input class="btn btn-primary" type="submit" name="save" value="View Update">
</div>
</div>
</div>
</form>                    
</div>
<div>
<div>
  <?php
require('../controller/database.php');
if(isset($_POST['save'])){
   $sql = "SELECT * FROM place where ticketno='".$_POST['tick']."' and plane='".$_POST['Planes']."' and splace='".$_POST['splace']."' and date='".$_POST['date']."'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      ?>
      <div style="position: absolute;top: 80%; left: 50%;">
        <h2 style="color: blue;">Your Records</h2>
      </div>
<div style="position: absolute;top: 90%;left: 25%;">
          <?php
        while($row = mysqli_fetch_array($result)){
                ?> <form action="../controller/update.php" method="POST">      <div >        <?php
                echo "<b>Name  "?><div class="form-group "><input type="text" name="fname" value= <?php echo $row['fname'] ;?>> </div><?php
                echo "Sex  "?><div><input type="text" name="sex" value= <?php echo $row['sex'] ;?>></div> <?php
                echo "Address  "?><div><input type="text" name="add" value= <?php echo $row['address'] ;?>></div> <?php
                echo "Phone  "?><div><input type="text" name="phone" value= <?php echo $row['phone'] ;?>></div> <?php
                ?><div style="position: absolute;left: 130%;top: 0%;"> <?php
                echo "Ticket numbe  "?><div><input type="text" name="ticks" value= <?php echo $row['ticketno'] ;?>></div> <?php
                echo "Plane  "?><div><input type="text" name="plane" value= <?php echo $row['plane'] ;?>> </div><?php
                echo "Sourc  "?><div><input type="text" name="source" value= <?php echo $row['splace'] ;?>></div> <?php
                echo "Destination  "?><div><input type="text" name="destination" value= <?php echo $row['dplace'] ;?>></div> <?php
                echo "Date  "?><div><input type="Date" name="date" value= <?php echo $row['date'] ;?>></div> <?php 
                ?></div> <input class="btn btn-primary" style="position: absolute;left: 280%;" type="submit" name="update" value="Update"> </div> </form><?php
           
        }
        mysqli_free_result($result);
    } else{
        ?>
<p style="position: absolute;left: 30%;top: 100%;color: black;"><?php echo "No Reserved Your Ticket."; ?></p>
<?php
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

  }
?>
<?php
require('../controller/database.php');
if (isset($_POST['delete'])) {
  $de=$_POST['dplace'];
          if($de=="Gondar"){
             $sql = "DELETE  FROM gondar where ticketno='".$_POST['tick']."' and plane='".$_POST['Planes']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
             if($result = mysqli_query($conn, $sql)){
              echo "Your Data is Deleted";
            }}
            if($de=="Mekele"){
             $sql = "DELETE  FROM mekele where ticketno='".$_POST['tick']."' and plane='".$_POST['Planes']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
             if($result = mysqli_query($conn, $sql)){
              echo "Your Data is Deleted";
            }}
            if($de=="Addis Ababa"){
             $sql = "DELETE  FROM addis_ababa where ticketno='".$_POST['tick']."' and plane='".$_POST['Planes']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
             if($result = mysqli_query($conn, $sql)){
              echo "Your Data is Deleted";
            }}
             if($de=="Hawassa"){
             $sql = "DELETE  FROM hawassa where ticketno='".$_POST['tick']."' and plane='".$_POST['Planes']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
             if($result = mysqli_query($conn, $sql)){
              echo "Your Data is Deleted";
            }}
             if($de=="Jimma"){
             $sql = "DELETE  FROM Jimma where ticketno='".$_POST['tick']."' and plane='".$_POST['Planes']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
             if($result = mysqli_query($conn, $sql)){
              echo "Your Data is Deleted";
            }}
             if($de=="Gambella"){
             $sql = "DELETE  FROM gambella where ticketno='".$_POST['tick']."' and plane='".$_POST['Planes']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
             if($result = mysqli_query($conn, $sql)){
              echo "Your Data is Deleted";
            }}
             if($de=="Bahir Dar"){
             $sql = "DELETE  FROM bahir_dar where ticketno='".$_POST['tick']."' and plane='".$_POST['Planes']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
             if($result = mysqli_query($conn, $sql)){
              echo "Your Data is Deleted";
            }}
          }
?>
</div>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div style="width: 100%;position: absolute; top: 200%;">
  <div class="footer-bottom-area bg-dark-light section-padding-sm">
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
                                    <li><a href="customer.php">Home</a></li>
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




</div>
