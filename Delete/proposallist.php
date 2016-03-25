<?php
//@author David Okyere(70492017)
//To display all items in the saved proposals database

include_once("savedproposals.php");
	//1) Create object of savedproposals class
	$newproposal = new savedproposals();
	$result = $newproposal->getAllProposals();

	if($result==false){
    echo "error";
    exit();
	}
	
	
	$row = $newproposal->fetch();
	
	//2) show the result
	echo "<table border = 1>
	       <tr>
		   <td> Proposal ID </td>
		   <td> Proposal Name </td>
		   <td> Date submitted </td>
	       <td> Details </td>
		   </tr>";
		   
	while ($row!=false){
		 $procode=$row['Proposal_ID'];
	     $proname=$row['Proposal_Name'];
		 $datesubmitted=$row['Date_submitted'];
		 $details=$row['Details'];
		 
		echo "<tr>
		   <td> {$row['Proposal_ID']}</td>
	       <td> {$row['Proposal_Name']}</td>
		   <td> {$row['Date_submitted']}</td>
		   <td> <a href='deleteproposal.php?details=$details&procode=$procode'>{$row['Details']}</a></td>
		   </tr>";
	$row = $newproposal->fetch();	  
	}			
		   echo "<table>";
?>	
					
