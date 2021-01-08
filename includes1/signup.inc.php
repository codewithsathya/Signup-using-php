<?php

function validate_phone_number($phone)
{
     if (strlen($phone) < 10 || strlen($phone) > 11) {
    	return false;
     } else {
       return true;
     }
}

if (isset($_POST['signup'])) {
	require 'dbh.inc.php';

	$userid=$_POST['userid'];
	$mailid=$_POST['mailid'];
	$pwd=$_POST['pwd'];
	$pwdd=$_POST['pwdrepeat'];
	$phone = $_POST['number'];
	$filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
	$phone_to_check = str_replace("-", "", $filtered_phone_number);
	$phone_to_check = str_replace(" ", "", $filtered_phone_number);
	$phone = $phone_to_check;
	$schoolname = $_POST['schoolname'];
	if (validate_phone_number($phone) == true) {
   		echo "Phone number is valid";
	} else {
 		echo "Invalid phone number";
	}

	if (empty($userid) ||empty($mailid) ||empty($phone) ||empty($schoolname)||empty($pwd) ||empty($pwdd) ) {
		header("Location: ../signup.php?error=emptyfields&name=".$userid."&mailid=".$mailid."&number=".$phone."&schoolname=".$schoolname);
		exit();
	}/*elseif (!filter_var($mailid,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-z0-9._]*$/",$userid)) {
		header("Location: ../signup.php?error=invalidinputs");
		exit();
	}*/
	elseif (!filter_var($mailid,FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidemail&name=".$userid."&number=".$phone."&schoolname=".$schoolname);
		exit();
	}elseif (!validate_phone_number($phone)){
		header("Location: ../signup.php?error=invalidnumber&name=".$userid."&mailid=".$mailid."&schoolname=".$schoolname);
	}elseif(strlen($pwd)<8) {
		header("Location: ../signup.php?error=invalidpassword&name=".$userid."&mailid=".$mailid."&number=".$phone."&schoolname=".$schoolname);
		exit();
	}/*elseif (!preg_match("/^[a-z0-9._]*$/",$userid)) {
		header("Location: ../signup.php?error=invalidusername&mailid=".$mailid);
		exit();
	}*/elseif ($pwd!==$pwdd) {
		header("Location: ../signup.php?error=passwordcheck&name=".$userid."&mailid=".$mailid."&number=".$phone."&schoolname=".$schoolname);
		exit();
	}else{
		$sql0="SELECT mobileno FROM users WHERE mobileno=?";
		$sql1="SELECT mailid FROM users WHERE mailid=?";
		$stmt0=mysqli_stmt_init($conn);
		$stmt1=mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt0,$sql0)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}elseif (!mysqli_stmt_prepare($stmt1,$sql1)) {
			header("Location: ../signup.php?error=sqlerror1");
			exit;
		}
		else{
			mysqli_stmt_bind_param($stmt0,"s",$phone);
			mysqli_stmt_bind_param($stmt1,"s",$mailid);
			mysqli_stmt_execute($stmt0);
			mysqli_stmt_store_result($stmt0);
			$resultchecknumber=mysqli_stmt_num_rows($stmt0);
			mysqli_stmt_execute($stmt1);
			mysqli_stmt_store_result($stmt1);
			$resultcheckmail=mysqli_stmt_num_rows($stmt1);

			if ($resultchecknumber>0 && $resultcheckmail>0) {
				header("Location: ../signup.php?error=alreadyregistered");
				exit();
			}elseif($resultchecknumber>0){
				header("Location: ../signup.php?error=mobilenumbertaken&mailid=".$mailid);
				exit();
			}elseif ($resultcheckmail>0) {
				header("Location: ../signup.php?error=mailregistered&userid=".$userid);
			}
			else{
				$sql="INSERT INTO users (mailid, fullname, mobileno, schoolname, pwduser) VALUES (?,?,?,?,?);";
				$stmt=mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}else{
					$hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt,"sssss",$mailid,$userid,$phone,$schoolname,$hashedpwd);
					mysqli_stmt_execute($stmt);
					session_start();
                    $_SESSION['userid']=$userid;
                    $_SESSION['mailid']=$mailid;
					header("Location: ../index.php?signup=success");
					exit();
				}
			}
		}
		mysqli_stmt_close($stmt0);
		mysqli_stmt_close($stmt1);
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
}else{
	header("Location: ../signup.php");
	exit();
}
