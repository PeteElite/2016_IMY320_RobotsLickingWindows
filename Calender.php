<!DOCTYPE html>
<?php session_start(); ?>
<!-- GREGS CALENDAR 14039712 -->
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="icon" type="image/ico" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/prism.css" />

  <!--[if lte IE 8]>
      <script src="js/jquery1.10.js"></script>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" type="text/css" href="css/clndr.css" />
  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet/less" type="text/css" href="css/clndr.less" />
  <script src="js/jquery2.js" type="text/javascript"></script>
  <script src="js/less.js" type="text/javascript"></script>
  <!--<![endif]-->

  <script src="js/prism.js" type="text/javascript"></script>
  <script src="js/underscore.js" type="text/javascript"></script>
  <script src="js/moment.js" type="text/javascript"></script>
  <script src="js/clndr.js" type="text/javascript"></script>
  
  <title>CLNDR.js</title>
<?php 
$title = $_SESSION["Title"];
  		include  "connect.php";

		if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 

		$sql       = "SELECT * FROM Events WHERE Title = '$title' ORDER BY Date";
		$result    = $conn->query($sql);
		$dates     = array();
		$ids       = array();
		$names     = array();
		$locations = array();
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$dates[]     = $row["Date"]; 
				$ids[]       = $row["ID"]; 
				$names[]     = $row["Name"];
				$locations[] =  $row["Location"];
			}
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
   	var comma = "";
	var stringEvents = '[';
	for (var x in dates) {
	  stringEvents += comma + '{"date": "' + dates[x] + '", "title": "' + names[x] + '", "location": "' + locations[x] + '", "url": "events.php?ID='+ ids[x] +'"}'; 
	  comma = ","
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
</head>
<body>

  <div class="wrap">

    <div class="block bg-gray">
      <div style="text-align:center;padding-bottom:20px;">

	<a href="index.php">Home</span></a>
	<a href="about.php">About Us</span></a>
	<a href="contact.php">Contact Us</span></a>
	<?php
		
		  if (isset($_SESSION["username"]))
		{
		
			echo '<a href="files.php"> files</span></a>';
			echo '<a href="Calender.php"> Calender</span></a>';
			echo '<a href="logout.php">Logout</span></a>';
		}
	?>



      </div>
      <div class="inner">

        

        <div id="full-clndr" class="clearfix">
          <script type="text/template" id="full-clndr-template">
            <div class="clndr-controls">
              <div class="clndr-previous-button">&lt;</div>
              <div class="clndr-next-button">&gt;</div>
              <div class="current-month"><%= month %> <%= year %></div>

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
            <div class="event-listing">
              <div class="event-listing-title">EVENTS THIS MONTH</div>
              <% _.each(eventsThisMonth, function(event) { %>
                  <div class="event-item">
                  <div class="event-item-name"><%= moment(event.date).format('MMMM Do') %><br></div>
                    <a href="<%= event.url %>"><%= event.title %></a>
                    <div class="event-item-location"><%= event.location %></div>
                  </div>
                <% }); %>
            </div>
          </script>
        </div>
      </div>
      <div style="text-align:center;"><a href="form.php">Create New Event</a></div>
    </div>

  </div>
    

  

</body>
</html>
