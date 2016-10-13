<!doctype html>
<html lang="en" dir="ltr" style = "height: 100%">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <script src="./jquery-2.1.3.min.js"></script>
      <title>SPCA Homepage</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
     <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    
    
    <style>
  .navbar{
    width:100%;
	background-color:#fff !important;
	color:black;
  }
    .navbar-inner{
   
  }
  .navbar-brand, .navbar-nav li a {
  
  }
  </style>
  
  </head>
  <body  style = "height: 100%; ">
  
  
  <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium" >
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="main-menu" >
  <div class="top-bar-left" >
  
    <ul class="dropdown menu" data-dropdown-menu >
	<li style="color:#2199e8; background-color:#2199e8"> <span style="color:#2199e8; background-color:#2199e8"> -------------- --------------  --------------  --------------  --------------   </span></li>
	  <li class="menu-text"></li>
	  <li class="menu-text"><img style="padding:0px;" height="30px"width="100px"src="Pictures/logo.png" alt="probs"/></li>
    </ul>
  </div>
  <div class="top-bar-right"style="padding-top:6px;" >
    <ul class="menu" data-responsive-menu="drilldown medium-dropdown">
     <li class="barItem"><a href="index.php" class="active"><span >Home</span></a></li>
	<li class="barItem"><a href="about.php"><span>About Us</span></a></li>
	<li class="barItem"><a href="contact.php"><span >Contact Us</span></a></li>
	<li style="color:#2199e8; background-color:#2199e8"> <span style="color:#2199e8; background-color:#2199e8"> ------------- --------------  --------------  --------------  --------------   </span></li>

    </ul>
  </div>
</div>
    <div class="row">
      <div class="large-12 columns">



<br>

<div >
  <img src="home.png" alt="SPCA home image" style = "width:100%"/>
</div>
<br>

<div style="height:49%;width:60%;float:left">
  <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit >
<ul class="orbit-container" style="height: 150px">
  <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
  <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

  <li class="orbit-slide" style = "position: relative;height:100%">
    <div style = "float: left; width:33.333%; height: 100%;background-color:#E0F7FA">
    <img class="orbit-image" src="1.png" alt="Space" style = "float: left; width:100%; height: 80%">
    <p style = "padding:2%">Latest dog news</p>
    </div>
    <div style = "float: left; width:33.333%; height: 100%;background-color:#E0F2F1">
    <img class="orbit-image" src="1.png" alt="Space" style = "float: left; width:100%; height: 80%">
    <p style = "padding:2%">Cool stuff happened</p>
    </div>
   <div style = "float: left; width:33.333%; height: 100%;background-color:#E3F2FD">
    <img class="orbit-image" src="1.png" alt="Space" style = "float: left; width:100%; height: 80%">
    <p style = "padding:2%">News</p>
    </div>
  </li>


    <li class="orbit-slide" style = "position: relative;height:100%;background-color:#E0F7FA">
     <div style = "float: left; width:33.333%; height: 100%;background-color:#E0F7FA">
    <img class="orbit-image" src="1.png" alt="Space" style = "float: left; width:100%; height: 80%">
    <p style = "padding:2%">Free vaccines</p>
    </div>
    <div style = "float: left; width:33.333%; height: 100%;background-color:#E0F2F1">
    <img class="orbit-image" src="1.png" alt="Space" style = "float: left; width:100%; height: 80%">
    <p style = "padding:2%">SPCA Watloo rated #1</p>
    </div>
   <div style = "float: left; width:33.333%; height: 100%;background-color:#E3F2FD">
    <img class="orbit-image" src="1.png" alt="Space" style = "float: left; width:100%; height: 80%">
    <p style = "padding:2%">iPad winners</p>
    </div>
    </li>

  </ul>

</div>

    <?php
    		if (isset($_SESSION["username"])) 
			echo '<a data-open="AddNews"><input type="submit" class="btn btn-primary btn-block" value="Add"></a>';
	?>

</div>

 


  <div style = "float: right;  position: relative; width: 37%; height: 100%; border-style: solid; border-width: 2px 2px 2px 2px; padding: 5px;overflow: auto;">
  <p style = "width: 100%;"> <center> <span style = "font-size: 30px; padding: 10px">Announcements:</span></center></p>


<?php
	include  "connect.php";
		if ($result = mysqli_query($conn, "SELECT * from announcements order by Ann_Id desc LIMIT 0,10"))
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$myString = "";
				$myString .= "<div style='border:black 1px solid;margin:5px;margin-bottom:20px;padding:10px'> <div style='float:left;color:#0277BD; font-weight: bold;'> ".$row['Ann_Title']."</div><div style='float:right;font-weight:bold;color:#0277BD;'>  " . $row['Ann_Date'] . "</div> <br>" . $row['Ann_Mess'] . "<br><div style='float:right;font-weight:bold;color:#0277BD;padding:8px'>Posted by: ". $row['Ann_User'] ."</div> </div>";
				echo $myString;
			}
		}

		if (isset($_SESSION["username"]))
			echo '<a data-open="AddAnn"><input type="submit" class="btn btn-primary btn-block" value="Add announcement"></a>';
	?>



</div>


<div data-animation-in="hinge-in-from-middle-x" data-animation-out="hinge-out-from-middle-x" class="reveal" id="AddNews" data-reveal>
          <div class="row">
            <div class="small-1 small-offset-11 columns">
              <button class="close-button stat" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              
              <!-- ACTION IS CURRENTLY post.php -->
              <form data-abide novalidate action="post1.php" method="post">


                <div data-abide-error class="alert callout" style="display: none;">
                  <p><i class="fi-alert"></i> There are some errors in your news post.</p>
               </div>
	       
                <div class="row">
                  <div class="medium-12 columns">
                    <label class="text-center">Heading
                      <input type="text" name="NEWS_Heading" placeholder="Title" required >
                    </label>
                  </div>
		  </div>
		  
		  
		  
                <div class="row">
                  <div class="medium-12 columns">
                    <label class="text-center">Article
                      <textarea  name="NEWS_Artical" placeholder="Article" required> </textarea>
                    </label>
                  </div>
		  
		  </div>
		
		
                <div class="row">
                  <div class="small-12 text-center">
                    <button style="width:95%" class="success button" type="submit" value="Submit">Add news event</button>
                  </div>
                </div>
		
              </form>
            </div>
           </div>
        </div>

  </div>

  <div data-animation-in="hinge-in-from-middle-x" data-animation-out="hinge-out-from-middle-x" class="reveal" id="AddAnn" data-reveal>
          <div class="row">
            <div class="small-1 small-offset-11 columns">
              <button class="close-button stat" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              
              <!-- ACTION IS CURRENTLY post.php -->
              <form data-abide novalidate action="post.php" method="post">


                <div data-abide-error class="alert callout" style="display: none;">
                  <p><i class="fi-alert"></i> There are some errors in your announcemnt post.</p>
               </div>
	       
                <div class="row">
                  <div class="medium-12 columns">
                    <label class="text-center">Heading
                      <input type="text" name="Title" placeholder="Title" required >
                    </label>
                  </div>
		  </div>
		  
                <div class="row">
                  <div class="medium-12 columns">
                    <label class="text-center">Message
                      <textarea  name="Ann_Mess" placeholder="Announcement Message " required> </textarea>
                    </label>
                  </div>
		  
		  </div>
		
		
                <div class="row">
                  <div class="small-12 text-center">
                    <button style="width:95%" class="success button" type="submit" value="Submit">Add announcement</button>
                  </div>
                </div>
		
              </form>
            </div>
           </div>
        </div>

  </div>

  

   

        <!-- Names of things that are posted when logging in
             Username: loginUser
             Password: loginPass  
        --> 

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
<footer>

  <div style="background-color:#2199e8;"class="small-12 large-12 columns"><img style="padding:0px;" height="30px"width="100px"src="Pictures/logo.png" alt="probs"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel: 012 358 9999 &nbsp;&nbsp;&nbsp;&nbsp;	Address: Petroleum St, Pretoria, 0127</p></div>
                       
            

</footer><!-- /.footer -->
  </body>
</html>
