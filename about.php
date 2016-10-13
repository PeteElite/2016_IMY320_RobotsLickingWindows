<!doctype html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPCA - Login Prototype</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
     <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </head>
  <body>
      <div class="row">
      <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium" >
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="main-menu" style = "background-color:black">
  <div class="top-bar-left" >
    <ul class="dropdown menu" data-dropdown-menu style = "color: white;background-color:black">
      <li class="menu-text">SPCA</li>
    </ul>
  </div>
  <div class="top-bar-right" >
    <ul class="menu" data-responsive-menu="drilldown medium-dropdown" style = "background-color:black">
     	<li><a href="index.php"><span style = "color: white">Home</span></a></li>
	<li><a href="news.php"><span style = "color: white">News</span></a></li>
	<li ><a href="about.php"><span style = "color: #0277BD;font-weight: bold;">About Us</span></a></li>
	<li><a href="contact.php"><span style = "color: white">Contact Us</span></a></li>
	<?php
		session_start();
		if (!isset($_SESSION["username"]))
			echo '<li><a data-open= "exampleModal1"> <span style = "color:white">Login/Register</span></a></li>';
		else
		{
			echo '<li><a href="files.php"> <span style = "color:white">Files</span></a></li>';
			echo '<li><a href="Calender.php"> <span style = "color:white">Calendar</span></a></li>';
			echo '<li><a href="logout.php"> <span style = "color:white">Logout</span></a></li>';
		}
	?>
      
    </ul>
  </div>
</div>
      </div>
      
      
      
      <div class="row">
          <div class="large-6 columns">
              <h3>ABOUT US</h3>
              <p>Established in 1872, the Cape of Good Hope SPCA (Society for the Prevention of Cruelty to Animals) is the founding society of the SPCA movement in South Africa and is the oldest animal welfare organisation in the country. A registered non-profit organisation (NPO 003-244) and Public Benefit Organisation (PBO 930004317), the society relies on the support of concerned individuals and corporates to continue operating.</p>
              <p>We are affiliated to the Royal Society for the Protection of Animals (RSPCA) and are Executive Members of the National Council of SPCAs South Africa (NSPCA), and previously a member of the World Society for the Protection of Animals (WSPA) before it’s dissolution.</p>
              <p>Over the past 143 years we have diligently carried out our mission to prevent cruelty to animals. This is done through education, law enforcement, veterinary care services (operating an animal hospital, and four mobile clinics serving impoverished communities), an Animal Care Centre, Horse Care Unit, and Wildlife Centre.</p>
              <p>Our area of operation is vast and covers approximately 11 000km² excluding the coastline. Last year alone the society sterilized over 5000 animals, thus reducing the region’s animal over-population problem. By providing primary veterinary care, we not only helped thousands of individual animals, but also improved the health of their human family by reducing the spread of Zoonosis such as mange (human scabies) and worms.</p>
              <p>Steadfast in our determination to raise awareness of animal welfare and to significantly reduce and prevent animal cruelty, we provide veterinary care to those communities most in need and a qualified team of experienced inspectors, ready to prevent animal cruelty, 24 hours a day, seven days a week, 365 days a year.</p>

          </div>
          <div class="large-6 columns">
               
                <img src= "puppy.jpg">
              
          </div>
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

    <script>
      $(document).ready(function() {
        $(document).foundation();
      })
    </script>

  </body>
</html>