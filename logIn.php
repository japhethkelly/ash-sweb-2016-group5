<!--Group 5 (Homepage UI)
•	David Okyere 
•	Ayeley Commodore-Mensah
•	Natasha Mabuza
•	Japheth Kelly
-->
<html>
    <head>
        <title>IRB Application Login</title>
    </head>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="icon" href="css/Capture1.ico"/>
    <script type="text/javascript" src="js/jquery-1.12.1.js"></script>
    <script src="js/logInJS.js"></script> 
    <body class="font">
        <div id="header"> <img id="logo" src="css/Capture.jpg" alt="Ashesi logo"><span id="hfont"> Institutional Review Board </span></div>
        <div class="middle"> 
            <p id='pfont'>
                <br>Research conducted by Ashesi University students  
                <br>using human participants is overseen by 
                <br>Ashesi University's Institutional Review Board (IRB).
                <br>
                <br>Its purpose is to facilitate human subjects research 
                <br>and to ensure the rights and welfare of human subjects 
                <br>are protected during their participation.
            </p>
            <span id="lfont">Log In</span> 
            <form id='form'>
                <input id='size' type="text" name = "username" placeholder="UserName"><br>
                <br>
                <input id='size' type="password" name = "password" placeholder="Password">
            </form>
            <button type="submit" id='button' onclick='logInAjax();return false;' form="form" name="submit" value="Submit">Log In</button><br>
            <span id='ffont2'> FAQs </span>  
        </div> 
        <div class="footer"><br>(c) Ashesi University College. All rights reserved.
            <br>1 University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330 </div>
    </body>
</html>
