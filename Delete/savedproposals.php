<?php
/**@author David Okyere*(74092017)
 *A class that represents all saved proposals and the operations that can be run on them
 **/

include_once("adb.php");

class savedproposals extends adb{
	/**
	 * constructor
	 * @param none
	 **/
	function savedproposals(){
	}
	
	/**
	*This gets all the records saved in the proposals database
	*@param none
	*@returns boolean for success or failure
	**/
	function getAllProposals(){
		$strQuery="select Proposal_ID, Proposal_Name, Date_submitted, Details from irb_proposals";
		return $this->query($strQuery);
	}
	
	/**
	*Deletes specific proposal
	*@param ID of the specific proposal
    *@returns boolean for success or failure
    **/	
	function deleteProposal($procode='none'){
	$strQuery = "Delete from irb_proposals where Proposal_ID = $procode";
    return $this->query($strQuery);		
	}

}

?>