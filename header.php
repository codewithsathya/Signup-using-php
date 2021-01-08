<!DOCTYPE html>
<html>

<head>
  <title>Manage Tasks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo.png">
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark nv">
    <a href="index.php" class="navbar-brand"><h1 color="white">Qwissenaire</h1></a>
    <?php
      if (isset($_SESSION['userid'])) {
        $str='<form action="includes1/logout.inc.php" method="post"><button id="logoutbtn" type="submit" name="logout">Logout</button></form>';
        echo $str;
      }
    ?>
  </nav>