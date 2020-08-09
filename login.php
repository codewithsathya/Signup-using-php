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
  <style>
    body {
      font-family: poppins, 'sans serif';
    }

    .btn {
      display: block;
      background-color: #648fff;
      color: #fff;
      padding: 20px;
      border-radius: 50px;
      margin-top: 25px;
      font-size: 1.2rem;
      font-weight: bolder;
      letter-spacing: 2px;
    }

    a,
    input {
      display: block;
      text-decoration: none;
    }

    i {
      margin-left: 19%;
      position: relative;
      bottom: -45px;
    }

    input {
      border: none;
      outline: none;
      padding: 20px;
      padding-left: 60px;
      border-radius: 50px;
      background-color: #eee;
      width: 70%;
    }

    .forgot {
      margin-top: 1vh;
      margin-bottom: 3vh;
      color: #ddd;
    }
    .forgot:hover{
      color: #648fff
    }

    form {
      margin-top: 20vh;
    }

    img {
      z-index: -1;
      width: 60%;
      margin-top: 25vh;
    }

    .nv {
      padding: 20px;
      font-weight: bolder;
      letter-spacing: 2px;
    }

    .nav-svg {
      margin-top: 0px;
      height: 8vh;
      padding: 0px;
      width: auto;
    }

    @media screen and (max-width: 992px) {
      .svgdiv {
        display: none;
      }
    }

    @keyframes move_wave {
      0% {
        transform: translateX(0) translateZ(0) scaleY(1)
      }

      50% {
        transform: translateX(-25%) translateZ(0) scaleY(0.55)
      }

      100% {
        transform: translateX(-50%) translateZ(0) scaleY(1)
      }
    }

    .waveWrapper {
      overflow: hidden;
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      margin: auto;
    }

    .waveWrapperInner {
      position: absolute;
      width: 100%;
      overflow: hidden;
      height: 100%;
      bottom: -1px;
      background-image: linear-gradient(to top, #86377b 20%, #27273c 80%);
    }

    .bgTop {
      z-index: 15;
      opacity: 0.5;
    }

    .bgMiddle {
      z-index: 10;
      opacity: 0.75;
    }

    .bgBottom {
      z-index: 5;
    }

    .wave {
      position: absolute;
      left: 0;
      width: 200%;
      height: 100%;
      background-repeat: repeat no-repeat;
      background-position: 0 bottom;
      transform-origin: center bottom;
    }

    .waveTop {
      background-size: 50% 100px;
    }

    .waveAnimation .waveTop {
      animation: move-wave 3s;
      -webkit-animation: move-wave 3s;
      -webkit-animation-delay: 1s;
      animation-delay: 1s;
    }

    .waveMiddle {
      background-size: 50% 120px;
    }

    .waveAnimation .waveMiddle {
      animation: move_wave 10s linear infinite;
    }

    .waveBottom {
      background-size: 50% 100px;
    }

    .waveAnimation .waveBottom {
      animation: move_wave 15s linear infinite;
    }

    .anim {
      z-index: -1;
    }
    h4{
      color: #fff;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark nv">
    <a href="index.php" class="navbar-brand"><img src="images/logo1.png" class="nav-svg" /></a>
    <a href="index.php" class="navbar-brand">Manage Your Tasks</a>

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
            <form>
              <center>
                <h4>Member login</h4>
              </center>
              <div>
                <i class="fas fa-user"></i>
                <center><input type="text" name="userid" placeholder="Username/Email"></center>
              </div>
              <div>
                <i class="fas fa-lock"></i>
                <center><input type="password" name="pwd" placeholder="Password"></center>
              </div>
              <div>
                <center><input type="button" name="login" value="Login" class="btn"></center>
                <center><a href="#" class="forgot" style="text-decoration:none">Forgot password?</a></center>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>