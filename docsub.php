<?php
/**
*/
include_once("adb.php");
/**
*Users  class
*/
class docsub extends adb{
	function docsub(){
	}
	/**
	*Adds a new user
	*@param string username login name
	*@param string firstname first name
	*@param string lastname last name
	*@param string password login password
	*@param string usergroup group id
	*@param int permission permission as an int
	*@param int status status of the user account
	*@return boolean returns true if successful or false 
	*/
	function submitDoc($name,$email='none',$researchtitle='none',$researchtype=1,$description='none',$subdate='none'){
		$strQuery="insert into db set
						name='$name',
						email='$email',
						researchtitle='$lastname',
						researchtype=('$password'),
						description=$permission,
						subdate=$status";
		return $this->query($strQuery);				
	}
	
}
?>

name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
researchtitle VARCHAR(100) NOT NULL,
researchtype ENUM ('M', 'F'),
description VARCHAR(1000) NOT NULL,
subdate DATE NOT NULL,