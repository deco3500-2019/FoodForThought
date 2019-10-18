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

    <title>Plan</title>
  </head>
  <?php
    include("remote/db.php");
    $db = new MySQLDatabase();
    $db->connect("webuser", "", "deco3500");
    session_start();
     ?>
  <body>
  <div class="text-center">
    <p>Making plan with tray</p>
  </div>

  <form method="get" action="confirm.php">
  <select name="house" class="form-control mt-3 mb-1">
     <option value="" disabled selected>Select the place</option>
        <option value = 'Mary'>Mary</option>;
         <option value = 'Jack'>Jack</option>;
         <option value = 'Kevin'>Kevin</option>;
  </select>
  <button type="submit">Submit</button>
</form>


    <nav class="navbar fixed-bottom navbar-light" style="background-color: #ebebeb;padding-left:13%;padding-right:8%;height:55px;">
        <a class="navbar-brand" style="font-size:11px;">WHEN</a>
        <a class="navbar-brand" style="font-size:11px;">WHERE</a>
        <a class="navbar-brand bg-dark"  style="font-size:11px;">CONFIRM</a>
        
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>