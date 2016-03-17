<?php
	//check for user code
	if (!isset ($_REQUEST['usercode'])){
     //   header("Location:userslist.php");	
       // exit();
	}
	$usercode=$_REQUEST['usercode'];
	//include users.php
	include_once("users.php");
	//create an object of users and delete the user
	$obj=new users();
    if ($_REQUEST['status']=='disabled'){
        $obj->enableUser('enabled', $usercode); 
    }
    else{
     $obj->disableUser('disabled', $usercode);  
    }
    
	
	//redirect to list
    header("Location:userslist.php");	
?>