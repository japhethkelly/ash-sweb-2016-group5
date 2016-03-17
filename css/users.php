<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            tr:nth-child(odd) {background-color: #90C3D4}
            tr:nth-child(even) {background-color: #4BA6C4}
            table {border: 0}
            #nav{background-color: #3B6796; color: white; border-color: #4BA6C4;}
        </style>
    </head>
    <body>
        <?php
        $mysqli = new mysqli('166.62.103.147','ashesics_kjt7017','4lr56t17e5v5','ashesics_japheth_kelly');

        if ($mysqli->connect_errno) {
            echo "Error";
            exit();
        }

        if (isset($_REQUEST['test'])) {
            $id = $_REQUEST['test'];
            $result = $mysqli->query("select * from users");
        } elseif (isset($_REQUEST['st'])) {
            $id = $_REQUEST['st'];
            $id= '%'.$id.'%';
            $result = $mysqli->query("select * from users where USERNAME like '$id'");
        } elseif (isset($_REQUEST['sort'])) {
            $check = $_REQUEST['sort'];
            if ($check == '1') {   
                $result = $mysqli->query("SELECT * from users ORDER BY username ASC");
            }
            if ($check == '2') {
                $result = $mysqli->query("SELECT * from users ORDER BY username DESC");
            }
        } elseif (isset($_REQUEST['group'])) {
            $check = $_REQUEST['group'];
            $result = $mysqli->query("select * from users where usergroup='$check'");
        } else {
            $result = $mysqli->query("select * from users");
        }

        if ($result == false) {
            echo $mysqli->error;
            exit();
        }
        echo "<table>";
        echo "<th id=\"nav\">USERCODE</th><th id=\"nav\">USERNAME</th><th id=\"nav\">PWORD</th><th id=\"nav\">FIRSTNAME</th><th id=\"nav\">LASTNAME</th><th id=\"nav\">USERGROUP</th><th id=\"nav\">STATUS</th><th id=\"nav\">PERMISSION</th>";
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td >{$row['USERCODE']}</td>
          <td >{$row['USERNAME']}</td><td >{$row['PWORD']}</td><td >{$row['FIRSTNAME']}</td><td >{$row['LASTNAME']}</td><td >{$row['USERGROUP']}</td><td >{$row['STATUS']}</td><td >{$row['PERMISSION']}</td></tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table>";
        ?>
    </body>
</html>