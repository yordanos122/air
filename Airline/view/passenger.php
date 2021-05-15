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
          <a href="admin.php">Home</a>
          <a href="register.php">Registration</a>
          <a href="about.php">About Us</a>
          <a href="contact.php">Contact Us</a>
          <a href="login.php">Login</a>
        </nav>
        
      </div>
    </header>
    
  </div>
<div style="position: absolute;top: 30%;"  class="nav-side-menu">
    <div class="brand">Admintration</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="schedule.php"><i class="fa fa-gift fa-lg"></i>Scheduling Flignts<span class="arrow"></span></a>
                </li>
                <li>
                  <a href="passenger.php"><i class="fa fa-gift fa-lg"></i> View Passenger List<span class="arrow"></span></a>
                </li>
                <li>
                  <a href="viewuser.php"><i class="fa fa-globe fa-lg"></i> View the User <span class="arrow"></span></a>
                </li> 
                <li>
                  <a href="feedback.php"><i class="fa fa-gift fa-lg"></i> View Feedback<span class="arrow"></span></a>
                </li>
                <li>
                  <a href="login.php"><i class="fa fa-car fa-lg"></i> Logout <span class="arrow"></span></a>
                </li>
            </ul>
     </div>
</div>
<div style="position: absolute;left: 30%;width: 100%;" class="yyy">
  <form method="POST">
    <div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3" id="setMeeting" style="padding:10px;">
    <div style="margin-bottom:30px;">
      <label style="color: black;">Plane Type</label>
      <select name="plane" class="form-control input-lg" id="meetingType" style="height: 50px;">
        <option value="">Select Plane Type</option>
        <option value="Boeing 747-8">Boeing 747-8</option>
        <option value="Boeing 747-8">Boeing 777-300</option>
        <option value="Airbus A350-900">Airbus A350-900</option>
        <option value="Airbus A340-500">Airbus A340-500</option>
      </select>
    </div>
    
    <div class="margin-bottom:30px;">
      <label style="color: black;">Denstination Date</label>
      <input type="Date" class="form-control input-lg" placeholder="Denstination Date"  id="datepicker" name="date">
    </div>
     <div style="margin-bottom:30px;">
      <label style="color: black;">Source Place</label>
      <select class="form-control input-lg" name="splace" id="meetingType" style="height: 50px;">
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
     <div style="margin-bottom:30px;">
      <label style="color: black;">Select Detination Place</label>
      <select class="form-control input-lg" name="dplace" id="meetingType" style="height: 50px;">
        <option value="">Detination Place</option>
        <option value="Addis Ababa">Addis Ababa</option>
        <option value="Gondar">Gondar</option>
        <option value="Mekele">Mekele</option>
        <option value="Hawassa">Hawassa</option>
        <option value="Bahir Dar">Bahir Dar</option>
        <option value="Gambella">Gambella</option>
        <option value="Jimma">Jimma</option>
      </select>
    </div>
<div>
<input class="btn btn-primary" type="submit" name="save" value="Search">
</div>
  </div>
  </div>
</div>
  </form>
  
</div>
<div>
   <?php
require('../controller/database.php');
if(isset($_POST['save'])){
  $destination=$_POST['dplace'];
  if($destination=="Gondar"){
$sql = "SELECT * FROM gondar where  plane='".$_POST['plane']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      ?>
      <div style="position: absolute;top: 100%; left: 50%;">
        <h2 style="color: blue;">The Records</h2>
      </div>
<div style="position: absolute;top: 110%;left: 25%;">
       <table border="2px" style="width: 1000px;line-height: 40px">
        <tr bgcolor="magenta" style="color: black;">
        <th>Full name</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Ticket Number</th>
        <th>Plan Type</th>
        <th>Sourc Address</th>
        <th>Destination Address</th>
        <th>Destination Date</th>
        
          </tr>
          <?php
        while($row = mysqli_fetch_array($result)){
         ?>
            <tr bgcolor="black" style="color: white;"><?php
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['ticketno'] . "</td>";
                echo "<td>" . $row['plane'] . "</td>";
                echo "<td>" . $row['splace'] . "</td>";
                echo "<td>" . $row['dplace'] . "</td>";
                echo "<td>" . $row['ddate'] . "</td>";
            echo "</tr>";
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

  }
  if($destination=="Mekele"){
$sql = "SELECT * FROM mekele where  plane='".$_POST['plane']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      ?>
      <div style="position: absolute;top: 100%; left: 50%;">
        <h2 style="color: blue;">The Records</h2>
      </div>
<div style="position: absolute;top: 110%;left: 25%;">
       <table border="2px" style="width: 1000px;line-height: 40px">
        <tr bgcolor="magenta" style="color: black;">
        <th>Full name</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Ticket Number</th>
        <th>Plan Type</th>
        <th>Sourc Address</th>
        <th>Destination Address</th>
        <th>Destination Date</th>
        
          </tr>
          <?php
        while($row = mysqli_fetch_array($result)){
         ?>
            <tr bgcolor="black" style="color: white;"><?php
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['ticketno'] . "</td>";
                echo "<td>" . $row['plane'] . "</td>";
                echo "<td>" . $row['splace'] . "</td>";
                echo "<td>" . $row['dplace'] . "</td>";
                echo "<td>" . $row['ddate'] . "</td>";
            echo "</tr>";
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

  }
  if($destination=="Addis Ababa"){
$sql = "SELECT * FROM addis ababa where  plane='".$_POST['plane']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      ?>
      <div style="position: absolute;top: 100%; left: 50%;">
        <h2 style="color: blue;">The Records</h2>
      </div>
<div style="position: absolute;top: 110%;left: 25%;">
       <table border="2px" style="width: 1000px;line-height: 40px">
        <tr bgcolor="magenta" style="color: black;">
        <th>Full name</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Ticket Number</th>
        <th>Plan Type</th>
        <th>Sourc Address</th>
        <th>Destination Address</th>
        <th>Destination Date</th>
        
          </tr>
          <?php
        while($row = mysqli_fetch_array($result)){
         ?>
            <tr bgcolor="black" style="color: white;"><?php
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['ticketno'] . "</td>";
                echo "<td>" . $row['plane'] . "</td>";
                echo "<td>" . $row['splace'] . "</td>";
                echo "<td>" . $row['dplace'] . "</td>";
                echo "<td>" . $row['ddate'] . "</td>";
            echo "</tr>";
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

  }
  if($destination=="Hawassa"){
$sql = "SELECT * FROM hawassa where  plane='".$_POST['plane']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      ?>
      <div style="position: absolute;top: 100%; left: 50%;">
        <h2 style="color: blue;">The Records</h2>
      </div>
<div style="position: absolute;top: 110%;left: 25%;">
       <table border="2px" style="width: 1000px;line-height: 40px">
        <tr bgcolor="magenta" style="color: black;">
        <th>Full name</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Ticket Number</th>
        <th>Plan Type</th>
        <th>Sourc Address</th>
        <th>Destination Address</th>
        <th>Destination Date</th>
        
          </tr>
          <?php
        while($row = mysqli_fetch_array($result)){
         ?>
            <tr bgcolor="black" style="color: white;"><?php
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['ticketno'] . "</td>";
                echo "<td>" . $row['plane'] . "</td>";
                echo "<td>" . $row['splace'] . "</td>";
                echo "<td>" . $row['dplace'] . "</td>";
                echo "<td>" . $row['ddate'] . "</td>";
            echo "</tr>";
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

  }
if($destination=="Jimma"){
$sql = "SELECT * FROM jimma where  plane='".$_POST['plane']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      ?>
      <div style="position: absolute;top: 100%; left: 50%;">
        <h2 style="color: blue;">The Records</h2>
      </div>
<div style="position: absolute;top: 110%;left: 25%;">
       <table border="2px" style="width: 1000px;line-height: 40px">
        <tr bgcolor="magenta" style="color: black;">
        <th>Full name</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Ticket Number</th>
        <th>Plan Type</th>
        <th>Sourc Address</th>
        <th>Destination Address</th>
        <th>Destination Date</th>
        
          </tr>
          <?php
        while($row = mysqli_fetch_array($result)){
         ?>
            <tr bgcolor="black" style="color: white;"><?php
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['ticketno'] . "</td>";
                echo "<td>" . $row['plane'] . "</td>";
                echo "<td>" . $row['splace'] . "</td>";
                echo "<td>" . $row['dplace'] . "</td>";
                echo "<td>" . $row['ddate'] . "</td>";
            echo "</tr>";
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

  }
if($destination=="Gambella"){
$sql = "SELECT * FROM gambella where  plane='".$_POST['plane']."' and splace='".$_POST['splace']."' and ddate='".$_POST['date']."'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      ?>
      <div style="position: absolute;top: 100%; left: 50%;">
        <h2 style="color: blue;">The Records</h2>
      </div>
<div style="position: absolute;top: 110%;left: 25%;">
       <table border="2px" style="width: 1000px;line-height: 40px">
        <tr bgcolor="magenta" style="color: black;">
        <th>Full name</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Ticket Number</th>
        <th>Plan Type</th>
        <th>Sourc Address</th>
        <th>Destination Address</th>
        <th>Destination Date</th>
        
          </tr>
          <?php
        while($row = mysqli_fetch_array($result)){
         ?>
            <tr bgcolor="black" style="color: white;"><?php
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['ticketno'] . "</td>";
                echo "<td>" . $row['plane'] . "</td>";
                echo "<td>" . $row['splace'] . "</td>";
                echo "<td>" . $row['dplace'] . "</td>";
                echo "<td>" . $row['ddate'] . "</td>";
            echo "</tr>";
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

  }


}

  ?>
</div>
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
                                    <li><a href="schedule.php">Scheduling Flignts</a></li>
                                    <li><a href="passenger.php">View Passenger Listt</a></li>
                                    <li><a href="viewuser.php">View the User</a></li>
                                    <li><a href="feedback.php">View Feedback</a></li>
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