<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<title>Food For Thought</title>
		</head>
		<?php
			include("remote/db.php");
			$db = new MySQLDatabase();
			$db->connect("webuser", "", "deco3500");
			session_start();
		?>
	<body>
	<nav class="navbar fixed-top navbar-dark bg-dark" style="height:55px;">
			<a class="navbar-brand" id="title" href="#">Making plan with Tray</a>
	</nav>
		<div class="card" style="background-color: #ebebeb; padding: 20px;margin-top:80px">
			<form method="get" action="where.php">
				<label>When are you eating with Tray?</label></br></br>
				<label>DATE: </label>
				<input type="date" id="inputMDEx1" name="date" max="3000-12-31" min="1000-01-01" class="form-control" required>
				</br>
				<label>TIME: </label>
				<input type="time" id="inputMDEx1" name="time" class="form-control" required>
				</br>
				<div class="text-right mb-3" style="margin-right: 20px">
					<button type="submit" class="btn btn-primary">Next</button>
				</div>
			</form> 
		</div>
		<nav class="navbar fixed-bottom navbar-dark bg-dark" style="padding-left:8%;padding-right:8%;height:55px;">
			<a class="btn btn-light" href="index.php" style="font-size:11px;">WHEN</a>
			<a class="btn btn-dark" href="where.php" style="font-size:11px;">WHERE</a>
			<a class="btn btn-dark" href="confirm.php" style="font-size:11px;">CONFIRM</a>
		</nav>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>