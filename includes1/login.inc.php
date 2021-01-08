<?php

if(isset($_POST['login'])){
    require 'dbh.inc.php';

    $userid=$_POST['userid'];
    $pwd=$_POST['pwd'];

    if(empty($userid)){
        header("Location: ../login.php?error=emptyfields");
        exit();
    }elseif(empty($pwd)){
        header("Location: ../login.php?error=emptyfields&userid=".$userid);
        exit();
    }else{
        $sql="SELECT * FROM users  WHERE mobileno=? OR mailid=?;";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../login.php?error=sqlerror");
        }else{
            mysqli_stmt_bind_param($stmt, "ss",$userid,$userid);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $pwdcheck=password_verify($pwd,$row['pwduser']);
                if($pwdcheck==false){
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }elseif($pwdcheck==true){
                    session_start();
                    $_SESSION['id']=$row['id'];
                    $_SESSION['userid']=$row['fullname'];
                    $_SESSION['mailid']=$row['mailid'];

                    header("Location: ../index.php?login=success");
                    exit();
                }else{
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
            }else{
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
}else{
    header("Location: ../login.php");
	exit();
}
