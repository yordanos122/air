<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/contact.css">
<div class="wrapper">
   <header style="height: 30%;">
      <div class="container">
                <img style="position: absolute;left: 5%;top: 2%; height: 20%;width: 20%;" src="../assete/logo.png">
        <div style="position: absolute;top: 20%;" id="logo">Ethio Ticket</div>
        <div style="position: absolute;  left: 80%;" id="logo">ኢትዮ ትኬት</div>
        
        <nav style="position: absolute;top: 18%;left: 45%;">
          <a href="../index/index.php">Home</a>
          <a href="register.php">Registration</a>
          <a href="about.php">About Us</a>
          <a href="contact.php">Contact Us</a>
          <a href="login.php">Login</a>
        </nav>
  
      </div>
    </header>
    
  </div>

<div class="row" id="contatti">
<div class="container mt-5" >

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold text-white">Contact Us</h2>
        <form action="../controller/contact.php" method="POST">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" name="fname" class="form-control mt-2" placeholder="Full Name" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" name="address" class="form-control mt-2" placeholder="Address" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" name="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" name="Phone" class="form-control mt-2" placeholder="Phone number" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" placeholder="Write Your comments" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
            </div>
            <div class="col-12">
              <input style="font-size: 20px;color: white;background-color: black;" type="submit" name="" value="Send">
            </div>
          </div>
        </form>
        <div class="text-white">
        <h2 class="text-uppercase mt-4 font-weight-bold">Information</h2>

        <i class="fas fa-phone mt-3"></i> <a href="tel:+">+251949861658</a><br>
        <i class="fas fa-phone mt-3"></i> <a href="tel:+">+251965313283</a><br>
        <i class="fa fa-envelope mt-3"></i> <a href="">yordanosdagnaw11@gmail.com</a><br>
        <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
        <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
        <div class="my-4">
        <a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
        <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
        </div>
        </div>
      </div>

    </div>
</div>
</div>

  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
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
                                    <li><a href="..index/index.php">Home</a></li>
                                    <li><a href="register.php">Registration</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="help.php>">Helps</a></li>
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
                                    <li><a href="login.php">Payment</a></li>
                                    <li><a href="update.php">Update The Ticket</a></li>
                                    <li><a href="login.php">Logout</a></li>
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
                                        <p><a href="#">+251949861658</a></p>
                                    </li>
                                    <li class="fax">
                                        <span class="icon"><i class="fa fa-fax"></i></span>
                                        <p><a href="#">+251965313283</a></p>
                                    </li>
                                    <li class="email">
                                        <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                        <p><a href="#">yordanosdagnaw11@gmail.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
