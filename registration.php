<?php

$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "patientregistration";

//mysqli i- for improved
$connect =  mysqli_connect ($host, $user, $pwd, $dbname);

//test connection
/* Tests without reffering to connect_error
if ($connect){

}else{
    die("Failed database connection");
}*/

if ($connect->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}

$biosql= "INSERT INTO bioData";


$PatientID = $_POST['PatientID'];
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$Surname = $_POST["Surname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$county = $_POST["county"];

print_r($_POST);

//var_dump($PatientID,$firstname,$middlename,$Surname,$dob,$gender,$county);
//DA
?>