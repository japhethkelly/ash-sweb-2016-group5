<?php
//@author David Okyere(74092017)
//Reference page that creates an object of the proposal class and runs the delete function


	if (isset($_REQUEST['procode'])){
		$procode = $_REQUEST['procode'];
	}
	
	//include savedproposals.php
	include_once("savedproposals.php");
	
	//create an object of savedproposals and delete the particular saved proposal
	$proposal = new savedproposals();
	$result = $proposal->deleteProposal($procode);
	
	
	//redirect to list
	header("Location:proposallist.php");	
	
	
		
?>