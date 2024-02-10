<?PHP

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hackthaon";

$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Database connected Sucessfully...";
}

?> 