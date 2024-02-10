<?PHP

$servername = "89.117.157.103";
$username = "u119271849_user_hakathon";
$password = "Admin@#54321";
$dbname = "u119271849_db_hakathon";

$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Database connected Sucessfully...";
}

?> 