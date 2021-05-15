<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ticket.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<header style="height: 30%;">
      <div class="container">
                <img style="position: absolute;left: 5%;top: 2%; height: 20%;width: 20%;" src="../assete/logo.png">
        <div style="position: absolute;top: 20%;" id="logo">Ethio Ticket</div>
        <div style="position: absolute;  left: 80%;" id="logo">ኢትዮ ትኬት</div>
        
        <nav style="position: absolute;top: 18%;left: 45%;">
          <a href="customer.php">Home</a>
          <a href="register.php">Registration</a>
          <a href="about.php">About Us</a>
          <a href="contact.phph">Contact Us</a>
          <a href="login.php">Login</a>
        </nav>
        
      </div>
    </header>
    
  </div>
<!------ Include the above in your HEAD tag ---------->
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
<!------ Include the above in your HEAD tag ---------->
<div>
  <form style="position: absolute;top: 35%;left: 25%; width: 80%;" action="../controller/ticketbook.php" method="POST">
<div class="yass">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <div class="container-fluid">
                      <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="form-group ">
                          <label style="color: black;" class="control-label requiredField" for="name">
                           Full Name: 
                           <span class="asteriskField">
                           </span>
                          </label>
                          <input class="form-control" id="name" name="fname" placeholder="Enter First Name" type="text"/>
                         </div>
                        <div class="form-group ">
                          <label style="color: black;" class="control-label " for="select">
                           Sex:
                          </label>
                          <select style="height: 40px;" class="select form-control" id="select" name="sex">
                            <option>
                            Select Sex
                           </option>
                           <option value="Male">
                            Male
                           </option>
                           <option value="Fmale">
                            Female
                           </option>
                          </select>
                         </div>
                         <div class="form-group ">
                         <div class="form-group ">
                          <label style="color: black;" class="control-label " for="select">
                           Address:
                          </label>
                            <select style="height: 40px;" name="address" class="form-control">
      <option>Select Your Address</option>
      <option>Addis Ababa</option>
      <option>Hawassa</option>
      <option>Gondar</option>
      <option>Jimma</option>
      <option>Bahir Dar</option>
      <option>Mekele</option>
      <option>Asossa</option>
      <option>Gambella</option>
      <option>Teppi</option>
      <option>Adama</option>
      <option>Semera</option>
      <option>Debre markos</option>
    </select>
                         </div>
                         <div class="form-group ">
                          <label style="color: black;" class="control-label requiredField" for="date">
                           Phone Number:
                           <span class="asteriskField">
                           </span>
                          </label>
                          <input class="form-control" id="date" name="phone" placeholder="Phone Number" type="number"/>
                         </div>
                       </div>
                      </div>
                     </div>
    </div>
  </div>
</div>
</div>
<div>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <div  class="container-fluid">
                      <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="form-group ">
                          <label style="color: black;" class="control-label requiredField" for="name">
                           Ticket Number:
                           <span class="asteriskField">
                           </span>
                          </label>
                          <input class="form-control" id="name" name="ticketno" placeholder="Enter Ticket Number" type="number"/>
                         </div>
                         <div class="form-group ">
                          <label style="color: black;" class="control-label requiredField" for="tel">
                           Plane Type:
                         </label>
                        <select style="height: 40px;" name="Plane" class="form-control">
        <option value="">Select Plane Type</option>
        <option value="Boeing 747-8">Boeing 747-8</option>
        <option value="Boeing 747-8">Boeing 777-300</option>
        <option value="Airbus A350-900">Airbus A350-900</option>
        <option value="Airbus A340-500">Airbus A340-500</option>
      </select>
                         </div>
                         <div style="position: absolute;left: 105%;top: -191%;width: 80%;">
                         <div class="form-group ">
                          <label style="color: black;" class="control-label " for="select">
                           Source Place:
                          </label>
                          
                            <select style="height: 40px;" name="source" class="form-control">
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
                         <div class="form-group ">
                          <label style="color: black;" class="control-label requiredField" for="city">
                           Destination Place:
                          </label>
                         <select style="height: 40px;" name="destination" class="form-control">
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
                         <div class="form-group ">
                          <label style="color: black;" class="control-label requiredField" for="pincode">
                          Destination Date:
                          </label>
                          <input class="form-control" id="pincode" name="ddate" placeholder="Destination Date" type="Date"/>
                         </div>
                         <div class="form-group">
                          <div>
                            <input class="btn btn-primary" type="submit" name="" value="Save">
                          </div>
                         </div>
                          </div>
                          
                       </div>
                      </div>
                     </div>
    </div>
  </div>
</div>
</div>
</form>
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
                                    <li><a href="help">Helps</a></li>
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