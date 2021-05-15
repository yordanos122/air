<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
<div style="position: absolute;left: 30%; width: 100%;" class="yyy">
  <form action="../controller/schedules.php" method="POST">
    <div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3" id="setMeeting" style="padding:10px;">
    <div style="margin-bottom:30px;">
         <div class="margin-bottom:30px;">
          <div>
            <p style="color: black;">Plane Photo:</p>
      <input type="hidden" name="pix" value="yaikobtadele">
      <input type="file" name="photo" size="20">
          </div>

      <label style="color: black;">Plane Type</label>
      <select name="plane" class="form-control input-lg" id="meetingType" style="height: 50px;">
        <option value="">Select Plane Type</option>
        <option value="Boeing 747-8">Boeing 747-8</option>
        <option value="Boeing 747-8">Boeing 777-300</option>
        <option value="Airbus A350-900">Airbus A350-900</option>
        <option value="Airbus A340-500">Airbus A340-500</option>
      </select>
    </div>
     <label style="color: black;">Seat Size</label>
      <input type="number" class="form-control input-lg"  id="datepicker" name="seat">
 
      <label style="color: black;">Denstination Date</label>
      <input type="Date" class="form-control input-lg" data-format="dddd, MMMM Do YYYY, h:mm p" id="datepicker" name="ddate">
    </div>
    <div style="margin-top:30px;">
      <label style="color: black;">Price</label>
      <input type="number"name="price" class="form-control input-lg">
    </div>
     <div style="margin-bottom:30px;">
      <label style="color: black;">Source Place</label>
      <select name="splace" class="form-control input-lg" style="height: 50px;">
       <option value="">Select Source Place</option>
        <option value="Adis Ababa">Adis Ababa</option>
        <option value="Gondar">Gondar</option>
        <option value="Mekele">Mekele</option>
         <option value="Hawassa">Hawassa</option>
        <option value="Bahir Dar">Bahir Dar</option>
        <option value="Gambella">Gambella</option>
         <option value="Jimma">Jimma</option>
        <option value="Jijiga">Jijiga</option>
        <option value="Dir Dawa">Dir Dawa</option>
      </select>
    </div>
     <div style="margin-bottom:30px;">
      <label style="color: black;">Select Detination Place</label>
      <select name="dplace" class="form-control input-lg"  style="height: 50px;">
        <option value="">Detination Place</option>
        <option value="Adis Ababa">Adis Ababa</option>
        <option value="Gondar">Gondar</option>
        <option value="Mekele">Mekele</option>
         <option value="Hawassa">Hawassa</option>
        <option value="Bahir Dar">Bahir Dar</option>
        <option value="Gambella">Gambella</option>
         <option value="Jimma">Jimma</option>
        <option value="Jijiga">Jijiga</option>
        <option value="Dir Dawa">Dir Dawa</option>
      </select>
    </div>
    <br><br>
    <p class="text-center"><button class="btn btn-primary" id="scheduleBtn">Save 
      <i class="fa fa-time"></i></button></p>
  </div>
  </div>
</div>
  </form>
  </div>
  
  
<!------ Include the above in your HEAD tag ---------->
<div style="position: absolute;top: 200%;width: 100%;" class="footer-bottom-area bg-dark-light section-padding-sm">
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

