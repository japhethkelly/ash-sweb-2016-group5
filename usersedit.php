<html>
	<head>
		<title>Edit User</title>
		<link rel="stylesheet" href="css/style.css">
		<script>
			<!--add validation js script here
		</script>
	</head>
	<body>
		<table>
			<tr>
				<td colspan="2" id="pageheader">
					Application Header
				</td>
			</tr>
			<tr>
				<td id="mainnav">
					<div class="menuitem">menu 1</div>
					<div class="menuitem">menu 2</div>
					<div class="menuitem">menu 3</div>
					<div class="menuitem">menu 4</div>
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" >page menu 1</span>
						<span class="menuitem" >page menu 2</span>
						<span class="menuitem" >page menu 3</span>
						<input type="text" id="txtSearch" />
						<span class="menuitem">search</span>		
					</div>
<?php
			//initialize
                    
			$strStatusMessage ="Edit existing user";
            $usercode="";
			$username="";
			$firstname="";
			$lastname="";
            $password="";
			$usergroup=0;
			$status="";
			//1) what is the purpose of this if block
			if(isset($_REQUEST['username'])){
                $usercode=$_REQUEST['usercode'];
				$username=$_REQUEST['username'];
				$firstname=$_REQUEST['firstname'];
                $lastname=$_REQUEST['lastname'];
				$password=$_REQUEST['pword'];
                $status=$_REQUEST['status'];
				$usergroup=$_REQUEST['usergroup'];
				$permission=3;
				
				include_once("users.php");
				$obj=new users();
				$r=$obj->editUser($usercode, $username,$firstname,$lastname,$password,$usergroup,$permission,$status);
				// what is the purpose of this if block
				if(isset($_REQUEST['sub']) && $r){
				    header("Location:userslist.php");	
				}

			}
?>
					<div id="divStatus" class="status">
						<?php echo  $strStatusMessage ?>
					</div>
					<div id="divContent">
						Content space
                        
						<form action="usersedit.php" method="GET">
            <input type="hidden" name="usercode" value="<?php echo $usercode; ?>"/>
			<div>Username: <input type="text" name="username" value="<?php echo $username;  ?>"/></div>
			<div>First Name: <input type="text" name="firstname" value="<?php echo $firstname ?>"/>
			<div>Last Name: <input type="text" name="lastname" value="<?php echo $lastname ?>"/>
			<div>Password: <input type="password" name="pword"/></div>
			<div>
	<!--In this example the checkboxes are grouped as an array-->		
				Permission :<input type="checkbox" value="1" name="permission[]"> View
<input type="checkbox" value="2" name="permission[]"> Edit
<input type="checkbox" value="4" name="permission[]"> Delete				
			</div>
			<div>
				Account Status: <input type="radio" name="status" value="2"> Enabled
				<input type="radio" name="status" value="1"> Disabled
			</div>
			<div>User Group: 
				<select name="usergroup">
<?php
	//a call to the class
	include_once("usergroups.php");
	$usergroup= new usergroups();
	$result=$usergroup->getAllUserGroups();
	//echo $strQuery;
	if($result==false){
		//
		echo "result is false";
	}else{
		while($row=$usergroup->fetch()){
			echo "<option value='{$row['USERGROUP_ID']}'>{$row['GROUPNAME']}</option>";
		}
	}
	
	//display in loop
?>				
				</select>
			</div>
			<input type="submit" value="Edit" name='sub'>
		</form>							
					</div>
				</td>
			</tr>
		</table>
	</body>
        <a href= "userslist.php">Return</a> 
</html>	
