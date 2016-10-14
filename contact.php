<?php   session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <script src="http://maps.googleapis.com/maps/api/js"> </script>
  
  
      <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
     <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
 
  
  <script>
  var myCenter=new google.maps.LatLng(-25.7249687,28.3114243);

function initialize() {
  var mapProp = {
    center:myCenter,
    zoom:19,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

  <body  style = "height: 100%; ">
  <div class="top-bar" id="main-menu" >
  <div class="top-bar-left" >
  
    <ul class="dropdown menu" data-dropdown-menu >
	
	  <li class="menu-text"></li>
	  <li class="menu-text"><img style="padding:0px;" height="30px"width="100px"src="Pictures/logo.png" alt="probs"/></li>
    </ul>
  </div>
  <div class="top-bar-right"style="padding-top:6px;" >
    <ul class="menu" data-responsive-menu="drilldown medium-dropdown">
     <li class="barItem"><a href="index.php" ><span >Home</span></a></li>
	<li class="barItem"><a href="about.php"><span>About Us</span></a></li>
	<li class="barItem"><a href="contact.php" class="active"><span >Contact Us</span></a></li>
	<?php
  
    if (!isset($_SESSION["username"]))
      echo '<li class="barItem"><a data-open= "exampleModal1"> <span>Login/Register</span></a></li>';

    else
    {
      echo '<li class="barItem"><a href="news.php"> <span>News</span></a></li>';
      echo '<li class="barItem"><a href="files.php"> <span >Files</span></a></li>';
      echo '<li class="barItem"><a href="logout.php"> <span>Logout</span></a></li>';
    }
  ?>
    </ul>
  </div>
</div>
    <div class="row">
      <div class="large-12 columns">



	<h1 style="text-align:center;">Map to our location </h1>
	<div id="googleMap" style="width:100%;height:380px;">
  </div> 
  <br>
  <div  class="card" style = "width: 50%; background-color:#0277BD; color: white;padding:1%; font-size: 20px; float: left; height: 50%">
			<p> <h3>Address: </h3>316 Petroleum Street, Waltloo, Tshwane. </p> 
			<p> <h3>Phone: </h3>  012 803 5219 / 083 268 5613 / 071 698 7294 </p> 
			<p> <h3>Email Address: </h3>reception@spcapta.org.za </p>
	</div>

  <div style = "width: 40%; float: right"> 
  <img src = "s.png" alt = "spca image"> 
  </div>
  
  
  
  
  
  
  
        <!-- LOGIN MODAL -->
        <div data-animation-in="hinge-in-from-middle-x" data-animation-out="hinge-out-from-middle-x" class="reveal" id="exampleModal1" data-reveal>
          <div class="row">
            <div class="small-1 small-offset-11 columns">
              <button class="close-button stat" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              
              <!-- ACTION IS CURRENTLY login.php -->
              <form data-abide novalidate action="login.php" method="post">


                <div data-abide-error class="alert callout" style="display: none;">
                  <p><i class="fi-alert"></i> There are some errors in your login.</p>
               </div>
                <div class="row">
                  <div class="medium-6 columns">
                    <label class="text-center">Username
                      <input type="text" name="loginUser" placeholder="username" required pattern="alpha_numeric">
                    </label>
                  </div>
                  <div class="medium-6 columns">
                    <label class="text-center">Password
                      <input type="password" name="loginPass" placeholder="password" required pattern="alpha_numeric">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="small-12 text-center">
                    <button style="width:95%" class="success button" type="submit" value="Submit">Login</button>
                  </div>
                </div>
                <div class="row">
                  <p class="text-center">Not registered? <a data-open="registerModal">Click here to register.</a></p>
                </div>
              </form>
            </div>
           </div>
        </div>


        <!-- Names of things that are posted when registering
             Username: registerUser
             Work Group: workGroup
             Email: registerEmail
             Password: registerPass  
	    Confirm Password: confirmPass
        --> 

        <!-- REGISTER MODAL --> 
        <div data-animation-in="hinge-in-from-middle-y" class="reveal" id="registerModal" data-reveal>

          <div class="row">
            <div class="small-1 small-offset-11 columns">
              <button class="close-button stat" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>

          <div class="row">
            <div class="small-12 columns">
              <!-- ACTION IS CURRENTLY register.php -->
              <form data-abide novalidate action="register.php" method="post">
                <div data-abide-error class="alert callout" style="display: none;">
                  <p><i class="fi-alert"></i> There are some errors in your form.</p>
               </div>

               
                <div class="row">
                  <!-- USERNAME -->
                  <div class="medium-6 columns">
                    <label>Username
                      <input name="registerUser" type="text" placeholder="username" required pattern="alpha_numeric">
                      <span class="form-error">
                        Alphanumeric username is required
                      </span>
                    </label>
                  </div>

                  <!-- WORKGROUP -->
                  <div class="medium-6 columns">
                    <label>Work group
                      <select name="workGroup" required>
                        <option value=""></option>
                        <option value="Admin">Admin</option>
                        <option value="Decor">Decor</option>
                        <option value="PR">PR</option>
                        <option value="Staff">Staff</option>
                      </select>
                      <span class="form-error">
                        Please select a work-group
                      </span>
                    </label>
                  </div>
                </div>

                <!-- EMAIL --> 
                <div class="row">                  
                  <div class="small-12 columns"> 
                    <label>Email:
                      <input id="email" type="text" name="registerEmail" required pattern="email" placeholder="yourname@spca.co.za">
                      <span class="form-error">
                        Please type in a valid email address
                      </span>
                    </label>
                  </div>
                </div>

                <div class="row">  
                  <div class="small-12 columns"> 
                    <label>Confirm Email:
                      <input type="email" required pattern="email" data-equalto="email" placeholder="yourname@spca.co.za">
                      <span class="form-error">
                        Email addresses must match
                      </span>
                    </label>
                  </div>  
                </div>

                <!-- PASSWORD --> 
                <div class="row">

                  <div class="small-6 columns">
                    <label>Password
                      <input id="regPassword" name="registerPass" type="password" required pattern="alpha_numeric" placeholder="password">
                      <span class="form-error">Alphanumeric password required</span>
                    </label>
                  </div>

                  <div class="small-6 columns">
                    <label>Re-enter password
                      <input type="password" name="confirmPass" required pattern="alpha_numeric" data-equalto="regPassword" placeholder="password">
                      <span class="form-error">Passwords must match</span>
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="small-12 text-center">
                    <button style="width:95%" class="button" type="submit" value="Submit">Register</button>
                  </div>
                </div>                
              </form>
            
            </div>
           </div>
        </div>

        
      </div>

    </div>
    <br><br>
    
  
  
  
  
  
    <script>
      $(document).ready(function() {
        $(document).foundation();
      })
    </script>

</body>
<footer> <div style="background-color:#2199e8;"class="small-12 large-12 columns"><img style="padding:0px;" height="30px"width="100px"src="Pictures/logo.png" alt="probs"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel: 012 358 9999 &nbsp;&nbsp;&nbsp;&nbsp;  Address: Petroleum St, Pretoria, 0127</p></div> </footer>
</html>