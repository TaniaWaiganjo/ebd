<?php
//create server and database connection constants
$host = "localhost";
$user = "root";
$pwd = "";
$db = "alphacrm";

$con= new mysqli ($host, $user, $pwd, $db);

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}
//receive  values from user form and trim white spaces
$regno=trim($_POST['registrationnumber']);
$fname=trim($_POST['firstname']);
$sname=trim($_POST['lastname']);
$gender=trim($_POST['gender']);
$course=trim($_POST['course']);
$studyyear=trim($_POST['year']);

//now insert the received values into database using defined variables
$sqli ="INSERT INTO registration(registrationnumber,firstname,surname,gender,course,yearofstudy) VALUES ('$regno','$fname','$sname','$gender','$course',$studyyear)";
if ($con->query($sqli) === TRUE) {
    echo "New farmer record created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); //close the connection for security reasons
?>