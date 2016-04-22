<?php
include("logInFunctions.php");
session_start();
$attempt = new logInFunctions;
$logInErr=false;

    // username and password sent from form 

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $result = $attempt->logInAttempt($username, $password);
    $row = $attempt->fetch();

    //$count = mysqli_num_rows($row);
    //print_r($row);
    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($row) {
//         session_register("username");
        $_SESSION['uname'] = $username;
        $_SESSION['userid'] = $row['USERID'];
        $_SESSION['fname'] = $row['FIRSTNAME'];
        $_SESSION['lname'] = $row['LASTNAME'];
        $_SESSION['type'] = $row['USERTYPE'];
//         $test = $_SESSION['userid'];
//         echo "Session working : $test";
        if ($row['USERTYPE'] == "APPLICANT") {
            echo "app";
            //header("location: applicantHomepage.php");
        } else {
            //header("location: reviewerHomepage.php");
            echo "rev";
        }
    } else {
       $logInErr=true;
    }

?>