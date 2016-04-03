<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('functions.php');
include("session.php");
$user1 = new functions;
//check for user code
if (isset($_REQUEST['appid'])) {
    $appid = $_REQUEST['appid'];
    // echo "$action";
        $check = $user1->deleteApp($appid);
    }
header("Location :viewAppPage.php");
exit();
?>