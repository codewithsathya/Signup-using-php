<?php

$servername="sql113.epizy.com";
$dBUsername="epiz_26463865";
$dBPassword="N0ZBZiZzqmQ6b";
$dBName="epiz_26463865_signup";

$conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
