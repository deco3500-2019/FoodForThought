<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<script type="text/javascript" src="js/main.js"></script>
  <style type="text/css">
  	#canvas{
	    background:#eeeeee;
	}
	</style>
  
  </head>
  <body>
  <div class="text-center">
    <p>Making plan with tray</p>
  </div>
      <article class="htmleaf-container">
		      <header class="htmleaf-header">
		      </header>
		  <div style="width:500px;margin:30px auto 0 auto;text-align:center;">

			<canvas id="canvas" width="500px" height="500px"></canvas>
			<button id="btn" style="margin-top:20px;">start</button>

		  </div>
		
	    </article>


    <!-- <nav class="navbar fixed-bottom navbar-light" style="background-color: #ebebeb;padding-left:13%;padding-right:8%;height:55px;">
        <a class="navbar-brand" href="ShiftPicker.php" style="font-size:11px;">WHEN</a>
        <a class="navbar-brand" href="profile.php" style="font-size:11px;">WHERE</a>
        <a class="navbar-brand" href="#" style="font-size:11px;">CONFIRM</a>
        
    </nav> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

  <script>// Cache our elements.
var wheel = document.querySelector("#wheel"),
    button = document.querySelector("#button"),
    
    // Initialise a random number variable. As zero.
    rando = 0;

// When we click the button...
var spin_wheel = function () {
  
  // Generate a random number that'll determine how many degrees the wheel spins.
  // We want it to spin 8 times (2880 degrees) and then land somewhere, so we'll add between 0 and 360 degrees to that.
  // We add this to the already-created "rando" variable so that we can spin the wheel multiple times.
  rando += (Math.random() * 360) + 2880;
  
  // And spin the wheel to the random position we just generated!
  // Gotta cover ourselves with vendor prefixes.
  wheel.style.webkitTransform = "rotate(" + rando + "deg)";
  wheel.style.mozTransform = "rotate(" + rando + "deg)";
  wheel.style.msTransform = "rotate(" + rando + "deg)";
  wheel.style.transform = "rotate(" + rando + "deg)";
  
}

button.addEventListener("click", spin_wheel, false);
<script>
</html>