<?php

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$uName = $_POST['uName'];
$eMail = $_POST['eMail'];
$pWord = $_POST['pWord'];
$rpWord = $_POST['rpWord'];
$indus = $_POST['industry'];
$host="gator4224.hostgator.com";
$username="antiquis_mike";
$password="Julstud1";
$dbname="antiquis_testRepo";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `antiquis_testRepo`.`Users` (`fName`, `lName`, `uName`, `eMail`, `pWord`, `rpWord`, `industry`) VALUES ('$fName', '$lName', '$uName', '$eMail', '$pWord', '$rpWord', '$indus')";
$result = $conn->query($sql);
// if (!$sql) {
//     printf("Error: %s\n", mysqli_error($conn));
//     exit();
// }
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    $firtName = $row["fName"];
    $lastName = $row["lName"];
    $industry = $row["industry"];
   }
   echo $firtName;

$conn->close();
?>