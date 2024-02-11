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
<<<<<<< HEAD
//    echo "Database connected Sucessfully...";
=======
//   echo "Database connected Sucessfully...";
>>>>>>> f3a89168220ecf98eef578479bd320a9540eaad0
}
date_default_timezone_set('Asia/Kolkata'); // Set the default timezone to Kolkata

// Create a DateTime object with current date and time
$date = new DateTime('now');

// Format the DateTime object as a string with desired format
$time_stamp = $date->format('Y-m-d H:i:s');

//echo $timestamp;
?> 