<html>
	<head>
		<title>Add New User</title>
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
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" >page menu 1</span>
						<input type="text" id="txtSearch" />
						<span class="menuitem">search</span>		
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
						Search User
					<form action="" method="GET">
						<input type="text" name="txtSearch">
						<input type="submit" value="search" >		
					</form>	
                        Filter by Group
                    <div><form action="" method="GET">
						<input type="text" name="group">
						<input type="submit" value="search" >		
					</form>	
                    </div>
<?php

	//1) Create object of users class
        include_once("user.php");
        $obj=new users();	
	//2) Call the object's getUsers method and check for error
	    if (isset ($_REQUEST['proposal'])){
	        $valid=array(['proposal']);
	    }
        if (isset ($_REQUEST['group'])){
            $r=$obj->filterUser($_REQUEST['group']);
        }else{
	        $r=$obj->getUsers();
	    }
        if (!$r){
            echo "Error while getting data";
        }
	
	//3) show the result
    $r=$obj->fetch();
	echo "<table>";
    echo "<tr style='background-color:red'><th>Username</th><th>First Name</th><th>Last Name</th><th>Usergroup</th><th>User status</th><td></td><td></td><td></td></tr>"; 
        $i=0;
    while($r){
//        print_r ($r);
        if ($i%2!=0)
            $color="#ADD8E6"; //alternating colors
        else
            $color="#659EC7";
       $update="";
      if ($r['USERSTATUS']=="enabled")
      {
          $update="disabled";
      }
      else{
        $update="enabled";
      }
          
        echo "<tr style='background-color:$color;'>
            <td>{$r['USERNAME']}</td>
            <td>{$r['FIRSTNAME']}</td>
            <td>{$r['LASTNAME']}</td>
            <td>{$r['USERGROUP']}</td>
            <td>{$r['USERSTATUS']}</td>
            <td><a href='usersdelete.php?id={$r['USERCODE']}'>Delete</a></td>
            <td><a href='updatestatus.php?status={$r['USERSTATUS']}&usercode={$r['USERCODE']}'>$update</a></td>
            <td><a href='usersedit.php?username={$r['USERNAME']}&firstname={$r['FIRSTNAME']}&lastname={$r['LASTNAME']}&pword={$r['PWORD']}&usercode={$r['USERCODE']}&status={$r['USERSTATUS']}&usergroup={$r['USERGROUP']}'>Edit</a></td>
            </tr>";
            $i++;
        
        $r=$obj->fetch();
            }
        echo "</table>";

?>						
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	
