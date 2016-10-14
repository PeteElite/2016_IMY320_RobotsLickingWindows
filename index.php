<?php 
  session_start();
 
?>
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
    margin-bottom:0px;
  }
    .navbar-inner{
    min-height: 0px;
  }
  .navbar-brand, .navbar-nav li a {
    line-height: 60px;
    height: 60px;
    padding-top: 0;
  }
  </style>
  
  

  <link rel="stylesheet/less" type="text/css" href="css/clndr.less" />
  
  <script src="js/less.js" type="text/javascript"></script>


  <script src="js/prism.js" type="text/javascript"></script>
  <script src="js/underscore.js" type="text/javascript"></script>
  <script src="js/moment.js" type="text/javascript"></script>
  <script src="js/clndr.js" type="text/javascript"></script>
  
  
<?php 
      include "connect.php";
  

    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 

    $sql       = "SELECT * FROM Events ORDER BY Date";
    $result    = $conn->query($sql);
    $dates     = array();
    $ids       = array();
    $names     = array();
    $locations = array();

    $pr    = array();
    $decor = array();
    $staff = array();

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $dates[]     = $row["Date"]; 
        $ids[]       = $row["ID"]; 
        $names[]     = $row["Name"];
        $locations[] =  $row["Location"];
        $pr[]          = $row["PR"];
        $decor[]       = $row["Decor"];
        $staff[]       = $row["Staff"];
      }
    }
    $isUser = false;
    $isTitle = "non";
    if (isset($_SESSION["username"])) {
      $isUser = true;
      $isTitle = $_SESSION["Title"]; 
    }
  
   ?>
  <script language="JavaScript">  
      var clndr = {};

$( function() {

  // PARDON ME while I do a little magic to keep these events relevant for the rest of time...
  var currentMonth = moment().format('YYYY-MM');
  var nextMonth    = moment().add('month', 1).format('YYYY-MM');
  
  var dates     = <?php echo json_encode($dates)?>;
  var ids       = <?php echo json_encode($ids)?>;
  var names     = <?php echo json_encode($names)?>;
  var locations = <?php echo json_encode($locations)?>;
  var decor     = <?php echo json_encode($decor)?>;
  var pr        = <?php echo json_encode($pr)?>;
  var staff     = <?php echo json_encode($staff)?>;
  

    var comma = "";
  var stringEvents = '[';
  var isUser = <?php echo json_encode($isUser)?>; 
  var title = <?php echo json_encode($isTitle)?>;

  

  
  if (isUser == true) {
    
    if (title == "PR") {

      for (var x in dates) {
        if (pr[x] == true) {
          
          stringEvents += comma + '{"date": "' + dates[x] + '", "title": "' + names[x] + '", "location": "' + locations[x] + '", "url": "events.php?ID='+ ids[x] +'"}'; 
          comma = ","; 
        }
      }
    } else if (title == "Decor") {
      for (var x in dates) {
        if (decor[x] == 1) {
          stringEvents += comma + '{"date": "' + dates[x] + '", "title": "' + names[x] + '", "location": "' + locations[x] + '", "url": "events.php?ID='+ ids[x] +'"}'; 
          comma = ","; 
        }
      }
    } else if (title == "Staff") {
      for (var x in dates) {
        if (staff[x] == 1) {
          stringEvents += comma + '{"date": "' + dates[x] + '", "title": "' + names[x] + '", "location": "' + locations[x] + '", "url": "events.php?ID='+ ids[x] +'"}'; 
          comma = ","; 
        }
      }
    } else {
      for (var x in dates) {
          stringEvents += comma + '{"date": "' + dates[x] + '", "title": "' + names[x] + '", "location": "' + locations[x] + '", "url": "events.php?ID='+ ids[x] +'"}'; 
          comma = ","; 
      }
    }

  }
  
  stringEvents += ']';


  var events = JSON.parse(stringEvents);

    clndr = $('#full-clndr').clndr({
    template: $('#full-clndr-template').html(),
      events: events,
      forceSixRows: true
  });
  });
   </script>
    <!-- DATE PICKER CODE --> 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
   <link rel="stylesheet" href="date.css">
  
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


  </head>
  <body  style = "height: 100%; ">
  <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium" >
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>
  <div class="top-bar" id="main-menu" >
  <div class="top-bar-left" >
  
    <ul class="dropdown menu" data-dropdown-menu >
  <li style="color:#2199e8; background-color:#2199e8"></li>
    <li class="menu-text"></li>
    <li class="menu-text"><img style="padding:0px;" height="30px" width="100px" src="Pictures/logo.png" alt="probs"/></li>
    </ul>
  </div>
  <div class="top-bar-right"style="padding-top:6px;" >
    <ul class="menu" data-responsive-menu="drilldown medium-dropdown">
     <li class="barItem"><a href="index.php" class="active"><span >Home</span></a></li>
  <li class="barItem"><a href="about.php"><span>About Us</span></a></li>
  <li class="barItem"><a href="contact.php"><span >Contact Us</span></a></li>
  <?php
    
    if (!isset($_SESSION["username"])) {

      echo '<li class="barItem"><a data-open= "exampleModal1"> <span>Login/Register</span></a></li>';
    }

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

<div class="small-centered small-8 columns" style="padding:0;text-align:center;">
  <img src="logo.png" alt="SPCA home image" />
  <h3>A Society for the Prevention of Cruelty to Animals</h3>
</div>
    <div class="row">
      <div class="large-12 columns">
    <br>
<div class="wrap">

    

      <div class="row">
      <div class="small-centered small-6 columns">
      
        
        <div data-animation-in="hinge-in-from-top" data-animation-out="hinge-out-from-top" class="reveal" id="exampleModal2" data-reveal>
          <div class="row">
            <div class="small-1 small-offset-11 columns">
              <button class="close-button stat" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="create.php" method="post">
                <!-- I need: name, location, date, groups, description -->
                <label>Event name
                  <input type="text" required name="name" placeholder="Puppies are people too">
                </label>
                <label>Location
                  <input type="text" required name="location" placeholder="Cape Town">
                </label>
                <label>Event date
                  <input type="text" name="date" id="datepicker" >
                </label>
                
                  <fieldset class="fieldset">
                    <legend>Work groups</legend>
                    <input name="decor" id="checkbox12" type="checkbox"><label for="checkbox12">Decor</label><br>
                    <input name="pr" id="checkbox22" type="checkbox"><label for="checkbox22">PR</label><br>
                    <input name="staff" id="checkbox32" type="checkbox"><label for="checkbox32">Staff</label><br>
                  </fieldset>
                <label>Event description
                  <textarea type="text" name="des" rows="4" > </textarea>
                </label>
                <input class="button" type="submit" style="width:100%; " value="Create New Event" />
                
            </form>
          </div>
        
        </div>
        </div>
        <div class="row">
        
        <div class="small-8 columns">
      <div class="inner" >
          
        <div id="full-clndr" class="clearfix" >
          <script type="text/template" id="full-clndr-template">
            <div class="clndr-controls">
              <div class="clndr-previous-button">&lt;</div>
              <div class="clndr-next-button">&gt;</div>
              <div class="current-month" style="color:white;"><%= month %> <%= year %></div>

            </div>
            <div class="clndr-grid">
              <div class="days-of-the-week clearfix">
                <% _.each(daysOfTheWeek, function(day) { %>
                  <div class="header-day"><%= day %></div>
                <% }); %>
              </div>
              <div class="days">
                <% _.each(days, function(day) { %>
                  <div class="<%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div>
                <% }); %>
              </div>
            </div>
            <div class="event-listing" id="event-listing" style="height: 465px;overflow-y: scroll;">
              <div class="event-listing-title">EVENTS THIS MONTH</div>
              <% _.each(eventsThisMonth, function(event) { %>
                  <div class="event-item">
                  <div class="event-item-name"><%= moment(event.date).format('MMMM Do') %><br></div>
                    <a  href="<%= event.url %>"><%= event.title %></a>
                    <div class="event-item-location"><%= event.location %></div>
                  </div>
                <% }); %>
            </div>
          </script>
        </div>

        <!-- TODO: ONLY IF ADMIN --> 
        <?php if (isset($_SESSION["Title"])) {
          if ($_SESSION["Title"] == "Admin") {
            echo '<a class="button" data-open= "exampleModal2" style="width:100%;"> Create New Event</a>';    
          }
        }
        ?>
      </div>

      </div>

      <div class="small-4 columns">
        <div class="card" style = "border-style: solid; border-width: 2px 0px 4px 0px; padding: 0px;overflow: auto; background-color:#EBEBEB;height:524px;">
          <div style="background-color:#414141;color:white;padding:14px;text-align:center;"><b>ANNOUNCEMENTS</b></div>


        <?php
          include  "connect.php";
            if ($result = mysqli_query($conn, "SELECT * from announcements order by Ann_Id desc LIMIT 0,10"))
            {
              while($row = mysqli_fetch_assoc($result))
              {
                $myString = "";
                $myString .= "<div style='background-color:#71BBD2;border:white 1px solid;margin:5px;margin-bottom:20px;padding:10px'> <div style='float:left;color:white; font-weight: bold;'> ".$row['Ann_Title']."</div><div style='float:right;font-weight:bold;color:white;'>  " . $row['Ann_Date'] . "</div> <br>" . $row['Ann_Mess'] . "<br><div style='float:right;font-weight:bold;color:#0277BD;padding:10px'>Posted by: ". $row['Ann_User'] ."</div> </div>";
                echo $myString;
              }
            }

            
          ?>



        </div>
        <?php if (isset($_SESSION["username"])) {
          if ($_SESSION["Title"] == "Admin") {
                echo '<a data-open="AddAnn" class="button" style="width:100%;top:9px;position:relative;">Add announcement</a>';
          }
            }?>
      </div>  
      </div>

        </div>

        
      
      
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
                  <p class="text-center" >Not registered? <a data-open="registerModal"id="reg">Click here to register.</a></p>
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
    <br><Br><BR><Br>
    <footer >
    <div style="background-color:#2199e8;" class="small-12 large-12 columns"><img style="padding:0px;" height="30px" width="100px"src="Pictures/logo.png" alt="probs"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel: 012 358 9999 &nbsp;&nbsp;&nbsp;&nbsp;  Address: Petroleum St, Pretoria, 0127</p></div>
  </footer>
  </body>
 
</html>
