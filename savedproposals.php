<?php
//@author David Okyere*(74092017)

include_once("adb.php");

class savedproposals extends adb{
	function savedproposals(){
	}
	
	function getAllProposals(){
		$strQuery="select Proposal_ID, Proposal_Name, Date_submitted, Details from irb_proposals";
		return $this->query($strQuery);
	}
	
	function deleteProposal($procode='none'){
	$strQuery = "Delete from irb_proposals where Proposal_ID = $procode";
    return $this->query($strQuery);		
	}

}

?>