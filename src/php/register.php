<?php
/**Get the users Info and resigns it to varibles */
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$uName = $_POST['uName'];
$eMail = $_POST['eMail'];
$pWord = $_POST['pWord'];
$rpWord = $_POST['rpWord'];
$indus = $_POST['industry'];
$cName = $_POST['companyName'];

include "dbconfig_register.php";

$con = mysqli_connect($host, $username, $password, $dbname) or die("Cannot connect to DB: $dbname on $host\n");
$query = "INSERT INTO `antiquis_testRepo`.`User` (`fName`, `lName`, `uName`, `eMail`, `companyName`, `industry`, `pWord`) VALUES ('$fName', '$lName', '$uName', '$eMail', '$cName', '$indus', '$pWord')";

if (!$query) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

mysqli_query($con, $query);
if (mysqli_affected_rows($con) >0 ){
    mysqli_close($con);
    header("Location: https://theantiquisnetwork.com/web_test/src/views/creds.html"); 
exit();
    }
    else{
        echo "Error, no insert";
    }
?>