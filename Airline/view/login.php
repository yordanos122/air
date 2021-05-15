<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
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
		
	</div>

<!------ Include the above in your HEAD tag ---------->
<div style="position: absolute;top: 30%;left: 10%;">
    <p><h2>Login Here</h2></p>
</div>
<div style="position: absolute;top: 50%;left: 4%;" class="container">    
    <div class="row">
        
<div  class="col-md-6 col-md-offset-3" id="login">  

<form action="../controller/login.php" method="POST"> 
    <select style="font-size: 20px;height: 40px;width: 150px; position: absolute;top: 0%;left: 70%;" name="user">
            <option selected=""> Selec User</option>
            <option>Admin</option>
            <option>Customer</option>
        </select>
<div class="form-group">
<label class="user"> UserName  </label>
<div class="input-group">
    <span class="input-group-addon" id="iconn"> <i class="glyphicon glyphicon-user"></i></span>
<input style="font-size: 20px;" type="email" class="form-control" id="text1" name="email" placeholder="Enter Email">
</div>
</div>
<div class="form-group">
<label class="user"> Password </label>
<div class="input-group">
    <span class="input-group-addon" id="iconn1"> <i class="glyphicon glyphicon-lock"></i></span>
<input style="font-size: 20px;" type="password" class="form-control" id="text2" name="password" placeholder=" Enter Password">
</div>
</div>
<div class="form-group">
<input style="font-size: 20px;" type="submit" class="btn btn-success" value="login" style="border-radius:0px;">
<input style="font-size: 20px;" type="reset" class="btn btn-danger" value="reset" style="border-radius:0px;">

    </div>
    <br/><br/><br/>
    <a href="#" style="color: white; font-size: 20px; float: right; margin-right: 10px;"> Forget Password </a>
    <a href="register.php" style=" color: white; font-size: 20px; float: right; margin-right: 10px;"> Register </a>
</form>
  </div>
    </div>
</div>
<div style="position: absolute;top: 49%;left: 43%;">
    <img height="80%" width="250%" src="../assete/people.jpg">
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
                                        <p><a href="#">+251965313283</a></p>
                                    </li>
                                    <li class="fax">
                                        <span class="icon"><i class="fa fa-fax"></i></span>
                                        <p><a href="#">+251930707972</a></p>
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

