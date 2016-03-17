<?php
	//check for user code
	if (!isset ($_REQUEST['id'])){
       header("Location:userslist.php");	
       exit();
	}
	$usercode=$_REQUEST['id'];
	//include users.php
	include_once("users.php");
	//create an object of users and delete the user
	$obj=new users();
    $obj->deleteUser($usercode);
    
	
	//redirect to list
	header("Location:userslist.php");	
?>