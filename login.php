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
    form{
      margin-top: 16vh;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark nv">
  <a href="index.php" class="navbar-brand"><h1 color="white">Qwissenaire</h1></a>
    
  </nav>
<div class="waveWrapper waveAnimation anim">
    <div class="waveWrapperInner bgTop">
      <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')">
      </div>
    </div>
    <div class="waveWrapperInner bgMiddle">
      <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')">
      </div>
    </div>
    <div class="waveWrapperInner bgBottom">
      <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')">
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-0 col-xs-0 col-lg-6 svgdiv">
        <img class="img mx-auto d-block" src="images/login.svg" alt="login" />
      </div>
      <div class="col-sm-12 col-xs-12 col-lg-6">
        <div class="row">
          <div class="col">
            <form action="includes1/login.inc.php" method="post">
              <center>
                <h4>User login</h4>
              </center>
              <div>
                <i class="fas fa-user"></i>
                <center><input type="text" name="userid" placeholder="Email/Mobile number" value="<?php $_GET['userid'] ?>"></center>
              </div>
              <div>
                <i class="fas fa-lock"></i>
                <center><input type="password" name="pwd" placeholder="Password"></center>
                <center><a href="#" class="forgot" style="text-decoration:none">Forgot password?</a></center>
              </div>
              <div>
                <center><button name="login" class="btn">Login</button></center>
                <center><a href="signup.php" class="forgot" style="text-decoration:none">Create Account</a></center>
                <?php
                  if($_GET['error']=='nouser'){
                      $str='<center><p class="error">*User not found</p></center>';
                      echo $str;
                  }elseif($_GET['error']=='wrongpassword') {
                    $str='<center><p class="error">*Incorrect password</p></center>';
                    echo $str;
                  }
                ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>