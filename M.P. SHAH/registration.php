<?php

echo htmlspecialchars($_SERVER["PHP_SELF"]);

$PatientID = $_POST['PatientID'];
$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$Surname = $_POST["Surname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$county = $_POST["county"];

//print_r($_POST);

var_dump($PatientID,$firstname,$middlename,$Surname,$dob,$gender,$county);
//DA
?>