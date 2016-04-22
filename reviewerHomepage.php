




<!--Group 5 (Student Dashboard UI)
•	David Okyere 
•	Ayeley Commodore-Mensah
•	Natasha Mabuza
•	Japheth Kelly
-->
<html>
    <head>
        <title> Dashboard </title>
    </head>
    <link rel="stylesheet" href="css/studentdashboardstyle.css"/>
    <link rel="icon" href="css/Capture1.ico"/>
    <body class="font">
        <div class="main">
            <?php
            // put your code here
            session_start();

            $firstname = $_SESSION['fname'];
            $lastname = $_SESSION['lname'];
            $usercode = $_SESSION['userid'];
            include("session.php");
            if ($_SESSION['type'] == "APPLICANT") {
                header("Location: applicantHomepage.php");
            }
            // echo " Welcome $firstname $lastname";
            ?>

            <div id="sidebar"> <img id="userlogo" src="css/user-icon.png" alt="User logo"><span id="sfont"> Welcome <?php echo "$firstname $lastname" ?> </span>
                <br>
            </div>  
            <div id="left-section">
                <div id="logo"> <img id="logophoto" src="css/Capture.jpg" alt="Ashesilogo"> <span id="lofont"><a href="logOut.php">LogOut</a> </span></div>
                <div id="middle" class="table-wrapper">
                    <?php
                    include_once("functions.php");
                    $user1 = new functions;
                    $usercode = $_SESSION['userid'];
                    $result = $user1->getAllApps();

                    echo "<table id='myTable' style='width:100%'>";
                    echo "<th id='tablefont'>APPLICATION ID </th><th id='tablefont'>APPLICANT NAME </th><th id='tablefont'>VIEW</th><th id='tablefont'>MAKE DECISION</th>";
                    // output data of each row
                    while ($row = $user1->fetch()) {
                        $appid = $row['ApplicationID'];
                        $uid = $row['UserID'];
                        $ast = $row['AppStatus'];
                        echo "<tr><td id='inCent'>{$appid}</td>";
                        echo "<td id='inCent'>{$uid}</td>";
                        echo "<td id='inCent'><a href='viewCompleteApp.php?appid='" . $appid . "'>View Application</a></td>";
                        echo "<td id='inCent'><a href='makeDecisionPage.php?appid=" . $appid . "'>" . $ast . "</a></td></tr>";
                    }
                    echo "</table>";
                    ?>
                    <script type="text/javascript" src="js/jquery-1.12.1.js"></script>
                    <script src="js/formvalidation.js"></script>
                </div>
            </div>
        </div> 
        <div class="footer"><br>(c) Ashesi University College. All rights reserved.
            <br>1 University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330 </div>
    </body>

</html>