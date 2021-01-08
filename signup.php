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
      margin-top: 8vh;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark nv">
  <a href="index.php" class="navbar-brand"><h1 color="white">Qwissenaire</h1></a>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=#navbarResponsive>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" target="includes1/logout.inc.php" method="post">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="includes1/logout.inc.php" method="post">Logout</a>
        </li>
      </ul>
    </div>-->
    
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
        <img class="img mx-auto d-block" src="images/signup.svg" alt="login" />
      </div>
      <div class="col-sm-12 col-xs-12 col-lg-6">
        <div class="row">
          <div class="col">
            <form action="includes1/signup.inc.php" method="post">
              <center>
                <h4>Create Account</h4>
              </center>
              <div>
                <i class="fas fa-user"></i>
                <center><input type="text" name="userid" placeholder="Full Name" value="<?php echo $_GET['name']?>"></center>
              </div>
              <div>
                <i class="fas fa-envelope"></i>
                <center><input type="text" name="mailid" placeholder="Email" value="<?php echo $_GET['mailid']?>"></center>
              </div>
              <div>
                <i class="fas fa-phone-alt"></i>
                <center><input type="text" name="number" placeholder="Mobile Number" value="<?php echo $_GET['number']?>"></center>
              </div>
              <div>
                <i class="fas fa-university"></i>
                <center><input type="text" name="schoolname" placeholder="Name of School/College" value="<?php echo $_GET['schoolname']?>"></center>
              </div>
              <div>
                <i class="fas fa-lock"></i>
                <center><input type="password" name="pwd" placeholder="Enter Password"></center>
              </div>
              <div>
                <i class="fas fa-unlock"></i>
                <center><input type="password" name="pwdrepeat" placeholder="Confirm Password"></center>
              </div>
              <div>
                <center><button name="signup" class="btn">Register</button></center>
                <?php
                  if($_GET['error']=='emptyfields'){
                      $str='<center><p class="error">*Fill in all the fields</p></center>';
                      echo $str;
                  }elseif($_GET['error']=='invalidemail') {
                    $str='<center><p class="error">*Enter valid mail</p></center>';
                    echo $str;
                  }elseif($_GET['error']=='invalidnumber') {
                    $str='<center><p class="error">*Enter valid mobile number</p></center>';
                    echo $str;
                  }elseif($_GET['error']=='invalidpassword') {
                    $str='<center><p class="error">*The password must have minimum length of eight characters</p></center>';
                    echo $str;
                  }elseif($_GET['error']=='passwordcheck') {
                    $str='<center><p class="error">*Repeat same password</p></center>';
                    echo $str;
                  }elseif($_GET['error']=='alreadyregistered') {
                    $str='<center><p class="error">This account has been already registered</p></center>';
                    echo $str;
                  }elseif($_GET['error']=='mobilenotaken') {
                    $str='<center><p class="error">This mobile number has been already registered</p></center>';
                    echo $str;
                  }elseif($_GET['error']=='mailregistered') {
                    $str='<center><p class="error">This email has been already registered</p></center>';
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