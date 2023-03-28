<?php

    phpinfo();
//comments Remember the commas

/*block <comments></comments>*/
//connecting to alphacrm database


$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "alphacrm";

//mysqli i- for improved
$connect =  mysqli_connect ($host, $user, $pwd, $dbname);

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}


//$dbConnected = mysqli_connect($hostname, $username, $password);

//$dbConnected = mysql_select_db($databaseName,$dbConnected);








echo "First index page";
echo "<br />";
echo "by:Tania Waiganjo ";

        echo "<table>";
            echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>COMPANY</td>";
                echo "<td>POSTCODE</td>";
               
            echo "</tr>";

            echo "<tr>";
                echo "<td>8560</td>";
                echo "<td>Candle Gallery</td>";
                echo "<td>3232</td>";
               
            echo "</tr>";

            echo "<tr>";
                echo "<td>5955</td>";
                echo "<td>Post Office</td>";
                echo "<td>5496</td>";
               
            echo "</tr>";

        echo "</table>";
?>

