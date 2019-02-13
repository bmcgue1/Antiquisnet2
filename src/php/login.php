<?php
/**Gets the users credntial input */
$eMail = $_POST['signup_email'];
$upassword = $_POST['signup_password'];
/**imports the config credentails  */
include "dbconfig_register.php";
/**Lines 8-12 connects to database, does a querey, gets the results, rows and number of rows */
$con = mysqli_connect($host, $username, $password, $dbname) or die("Cannot connect to DB: $dbname on $host\n");
$query = " SELECT fName, lName, uName, eMail, companyName, pWord  FROM User WHERE eMail = '$eMail'";
$result = mysqli_query($con, $query);
// $row = mysql_fetch_array($result);

/**While there are actually results, this gets the values in the row and assigns it to varaibles */
while($row = mysqli_fetch_array($result)) {
    $fName = $row["fName"]; 
    $lName = $row["lName"];
    $mail  = $row["eMail"];
    $pWord = $row["pWord"]; 
    $cName = $row["companyName"];  
  }

// Successful Login
if($eMail == $mail and $upassword == $pWord){
    echo "Youa are logged in ";
    echo "my email ". $eMail;
    echo "  db email ". $mail;
    echo "  my password ". $upassword;
    echo "  db password ". $pWord;

    // loggedIn("$name", "$role");
}
// Wrong password
if($eMail == $mail and $upassword != $pWord){
    echo "Wrong  password";
    echo "my email ". $eMail;
    echo "  db email ". $mail;
    echo "  my password ". $upassword;
    echo "  db password ". $pWord;
    // wrongPassword("$mail");
}
// Wrong Username
if($upassword == $pWord and $eMail != $mail){
    echo "Wrong username ";
    echo "my email ". $eMail;
    echo "  db email ". $mail;
    echo "  my password ". $upassword;
    echo "  db password ". $pWord;
//   wrongUserName("$mail");
}

// function loggedIn($name, $role){
//     echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/logout.php">Logout</a>';
//     echo "<br>Welcome user: $name <br>";
//     echo "Role: $role <br>";
//     echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/vendors.php">View vendors </a>';
//     setcookie("name",$name,time() + 36000);

// }
// function wrongPassword($mail){
//     echo "User $mail is in the database, but wrong password was entered <br> Please click ";
//     echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/phase1.html">here</a>';
//     echo " to login.";
// }
// function wrongUserName($mail){
//     echo "User $mail is not in the database. <br> Please click ";
//     echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/phase1.html">here</a>';
//     echo " to login.";
// }

// function logout($mail){
//     ob_end_clean();
//     echo "$mail has been successfully logged out";
//     echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/phase1.html">Project home page</a>';
// }

mysqli_free_result($result);
mysqli_close($con);
?>
