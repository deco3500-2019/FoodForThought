<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Plan</title>
  </head>
  <body>
    <h1>Making plan with tray</h1>

    <form method="get" action="">
        <label>When are you eating with Tray?</label>
        <label>DATE</label>
        <input type="date" name="bday" max="3000-12-31" 
        min="1000-01-01" class="form-control">
        <label>TIME</label>
        <input placeholder="Selected time" type="text" id="input_starttime" class="form-control timepicker">

    </form> 

    <nav class="navbar fixed-bottom navbar-light" style="background-color: #ebebeb;padding-left:13%;padding-right:8%;height:55px;">
        <a class="navbar-brand" href="ShiftPicker.php" style="font-size:11px;">WHEN</a>
        <a class="navbar-brand" href="profile.php" style="font-size:11px;">WHERE</a>
        <a class="navbar-brand" href="#" style="font-size:11px;">CONFIRM</a>
        
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>