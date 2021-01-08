<?php
session_start();
?>
<?php
  require_once 'header.php';
  ?>
  
  <?php
  if (isset($_SESSION['userid'])){
    echo "Logged in";
    echo "<br>";
    echo $_SESSION['userid'];
  }
  else{
    header("Location: login.php");
  }
  ?>
  </body>
  </html>