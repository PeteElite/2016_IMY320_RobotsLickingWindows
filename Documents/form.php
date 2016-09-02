<!DOCTYPE html>
<!-- PETERS WORK u14056136 -->
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
   <link rel="stylesheet" href="date.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
			<form action="create.php" method="post" class="contact-form ajax-form">

						<div class="row">

							<div class="form-group col-md-6">
							<p>Event Name</p>
	                            <input type="text" name="name" class="form-control" placeholder="Event Name*" required>
	                        </div>
		<br>
	                         <div class="form-group col-md-6">
							 <p>Event Location</p>
	                            <input type="text" name="location" class="form-control" placeholder="Location" required>
	                        </div>
							<br>
							<p>Event Date </p>
							<input type="text" name="date" id="datepicker" >
						</div>
<br>
                        <div class="form-group">
						<p>Event Description</p>
                            <textarea name="des" rows="5" class="form-control" placeholder="Description*" required></textarea>
                        </div>

                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							  
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							
                        </div>	
<br>
                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Create Event</button>
                        </div>

                        <div class="clearfix"></div>

					</form>
</body>