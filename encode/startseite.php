<?php include ("php/dbconnect.php"); ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <title>Startseite</title>
   </head>
   <body>

      <header><h1>Das ist ein Test Heade</h1></header>
      
      <div class="container-fluid">
	 <div class="row">
	    <div class="col-lg-6">
	       <form role="form" action="php/api.php">
		  <div class="form-group">
		     <h3>Name:</h3>
		     <input type="text" name="name" placeholder="Enter Name">
		  </div>
		  <div class="form-group">
		     <h3>Email:</h3>
		     <input type="email" name="email" placeholder="Enter Email">
		  </div>
		  <div class="form-group">
		     <h3>Telefonnummer:</h3>
		     <input type="text" name="tele" placeholder="Enter Telefonnummer">
		  </div>
		  <div class="form-group">
		     <h3>Strasse:</h3>
		     <input type="text" name="strasse" placeholder="Enter Strasse">
		  </div>
		  <div class="form-group">
		     <h3>Postleitzahl:</h3>
		     <input type="text" name="postleitzahl" placeholder="Enter Postleitzahl">
		  </div>
		  <div class="form-group">
		     <h3>Stadt:</h3>
		     <input type="text" nam="stadt" placeholder="Enter Stadt">
		  </div>
		  <div class="form-group">
		     <h3>Land:</h3>
		     <input type="text" name="land" placeholder="Enter Land">
		  </div>
		  <button type="submit" class="btn btn-default">Speichern</button>
	       </form>
	    </div>
	    <div class="col-lg-6" id="id01">
	       <button onclick="dboutput()" class="btn">Anzeigen</button>
	    </div>
	 </div>
      </div>

      <footer><h1>Das ist ein Test Footer</h1></footer>
      
      <script src="bootstrap-3/js/bootstrap.min.js"></script>
      <script src="javascript/client.js"></script>
   </body>	
</html>
	
