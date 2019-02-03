<?php
/**Get the users Info and resigns it to varibles */
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$uName = $_POST['uName'];
$eMail = $_POST['eMail'];
$pWord = $_POST['pWord'];
$rpWord = $_POST['rpWord'];
$indus = $_POST['industry'];
/**Import db config */
include "dbconfig_register.php";
/** assign connection varible  */
$conn = mysqli_connect($host, $username, $password, $dbname) or die("Cannot connect to DB: $dbname on $host\n");
/**  query */

$query = "INSERT INTO `antiquis_testRepo`.`Users` (`fName`, `lName`, `uName`, `eMail`, `pWord`, `rpWord`, `industry`) VALUES ('$fName', '$lName', '$uName', '$eMail', '$pWord', '$rpWord', '$indus')";
// $query = "  INSERT INTO Users (fName, lName, uName, eMail, pWord, rpWord, industry) VALUES ('hey', 'eee', 'heee', 'heee@gmail.com', 'hhh', 'hhh, clothoing)";
if (!$query) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)){
 echo 'results fetched';
  }
  echo $firtName;

// echo $fName;
// echo $lname;
// echo $uName;
// echo $eMail;
// echo $pWord;
// echo $rpWor;
// echo $gende;
mysqli_free_result($result);
mysqli_close($con);
?>