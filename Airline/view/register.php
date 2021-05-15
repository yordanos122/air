<link href="css/bootstrap-reboot.css" rel="stylesheet" id="bootstrap-css">
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/reg.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/log.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<div class="wrapper">
		<header style="height: 30%;">
      <div class="container">
                <img style="position: absolute;left: 5%;top: 2%; height: 20%;width: 20%;" src="../assete/logo.png">
        <div style="position: absolute;top: 20%;" id="logo">Ethio Ticket</div>
        <div style="position: absolute;  left: 80%;" id="logo">ኢትዮ ትኬት</div>
        
        <nav style="position: absolute;top: 18%;left: 45%;">
          <a href="../index/index.php">Home</a>
          <a href="register.php">Registration</a>
          <a href="login.php">About Us</a>
          <a href="login.php">Contact Us</a>
          <a href="login.php">Login</a>
        </nav>
        
      </div>
    </header>
		
	<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Register Form</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action="../controller/registers.php" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="fname" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+251</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="phone" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select name="address" class="form-control">
			<option selected=""> Select Address</option>
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
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
		   <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select name="sex" class="form-control">
			<option selected=""> Sex</option>
			<option>Male</option>
			<option>Female</option>
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="cpassword" class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
        <div style="position: absolute;top: 140%;">
    <img height="70%" width="460%;" src="../assete/pp.jpg"> 
</div>
<!--container end.//-->
<div style="position: absolute;top: 210%; width: 100%;" class="footer-bottom-area bg-dark-light section-padding-sm">
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
                                    <li><a href="../index/index.php">Home</a></li>
                                    <li><a href="register.php">Registration</a></li>
                                    <li><a href="login.php">About Us</a></li>
                                    <li><a href="login.php">Contact Us</a></li>
                                    <li><a href="login.php">Helps</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-quick-links">
                                <h5 class="widget-title">Admin Service</h5>
                                <ul>
                                    <li><a href="login.php">Ticket Booking</a></li>
                                    <li><a href="login.php">View Schedule</a></li>
                                    <li><a href="login.php">View Booked Ticket</a></li>
                                    <li><a href="login.php">Delete The Ticket</a></li>
                                    <li><a href="login.php">Payment</a></li>
                                    <li><a href="login.php">Update The Ticket</a></li>
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
