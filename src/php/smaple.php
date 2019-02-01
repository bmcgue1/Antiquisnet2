
<?php
/**Gets the users credntial input */
$login = $_POST['username'];
$passwd = $_POST['password'];
/**imports the config credentails  */
include "dbConfig.php";
/**Lines 8-12 connects to database, does a querey, gets the results, rows and number of rows */
$con = mysqli_connect($host, $username, $password, $dbname) or die("Cannot connect to DB: $dbname on $host\n");
$query = "SELECT name, login, password, role FROM TECH3720.EMPLOYEE Where login='$login' ";
$result = mysqli_query($con, $query);
$row = mysql_fetch_array($result);
$num=mysqli_num_rows($result);
/**While there are actually results, this gets the values in the row and assigns it to varaibles */
while($row = mysqli_fetch_array($result)) {
    $eid = $row["employee_id"];
    $eve_login = $row["login"];
    $eve_password = $row["password"];
    $name = $row["name"];
    $role = $row["role"];
  }

// Successful Login
if($eve_login == $login and $eve_password == $passwd){
    loggedIn("$name", "$role");
}
// Wrong password
if($eve_login == $login and $eve_password != $passwd){
    wrongPassword("$login");
}
// Wrong Username
if($eve_password == $passwd and $eve_login != $login){
  wrongUserName("$login");
}

function loggedIn($name, $role){
    echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/logout.php">Logout</a>';
    echo "<br>Welcome user: $name <br>";
    echo "Role: $role <br>";
    echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/vendors.php">View vendors </a>';
    setcookie("name",$name,time() + 36000);

}
function wrongPassword($login){
    echo "User $login is in the database, but wrong password was entered <br> Please click ";
    echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/phase1.html">here</a>';
    echo " to login.";
}
function wrongUserName($login){
    echo "User $login is not in the database. <br> Please click ";
    echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/phase1.html">here</a>';
    echo " to login.";
}

function logout($login){
    ob_end_clean();
    echo "$login has been successfully logged out";
    echo '<a href="http://eve.kean.edu/~baggiem/TECH3720/phase1.html">Project home page</a>';
}

mysqli_free_result($result);
mysqli_close($con);
?>









<html>
    <h1>Welcome to Michael's TECH 3720 project phase 1.</h1>
    <body>


            <ul>
                <li>
                    <a href="http://eve.kean.edu/~baggiem/TECH3720/vall.php">View all employees</a>
                </li>
            </ul>



        <form action="eall.php" method="POST">
            <br> Login ID:
            <input type="text" name="username" required="required">

            <br>Password
            <input type="password" name="password" required="required">

            <br>
            <input type="submit" value="Login">
        </form>


    </body>
</html>
[baggiem@eve TECH3720]$ more index.html
<html>
    <body>
        <h1>Welcome to Michael's TECH 3720 projects</h1>
        <a href="http://eve.kean.edu/~baggiem/TECH3720/phase1.html">Phase 1</a>
        <br>
        <a href="http://eve.kean.edu/~baggiem/TECH3720/Project2/login.html">Phase 2</a>
    </body>


</html>
