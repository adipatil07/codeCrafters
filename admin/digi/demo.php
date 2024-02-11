<?php

$user_id = $_GET['id'];

$var1="default1"; //date of certificate
$var2 ="default gender"; //Gender male or femaile
$var3="default3"; //name of the sudent fname m name l name
$var4 ="default4"; // duration +  name of gragrom 
$var5 ="default5"; // date of Start
$var6 ="default6"; // date of end
$var7="Default Certificate Number";  // certificate number
$var8 = "devault enrollemt id"; // enrollemnt id.
$var9 = "default trainee id"; //trainee id.
$var10 = "devault program id"; //program id 

//database variable
//$conn
include '../include/config.php';

$sql = "SELECT * FROM tbl_register WHERE reg_id = '$user_id'";
// Execute query
$result = $con->query($sql);

if ($result) {
    // Check if any rows were returned
    if ($result->num_rows == 1) { // Check if only 1 row is returned
        // Fetch data
        $row = $result->fetch_assoc();
        // Process the fetched row
        // $row contains data from the table where reg_id = $user_id
        $currentDate = date('d/m/Y');

// Print the current date
        $var1=$currentDate; //date of certificate
$var3="default3"; //name of the sudent fname m name l name
    $var3 = $row['reg_fname']."  ".$row['reg_lname'];

$var4 =$row['reg_event_name']; // duration +  name of gragrom 
$var5 ="default5"; // date of Start
$var6 ="default6"; // date of end
$var7= $row['reg_tk_id'];  // certificate number
$var8 = "devault enrollemt id"; // enrollemnt id.
$var9 = "default trainee id"; //trainee id.
$var10 = "devault program id"; //program id 
        
    } elseif ($result->num_rows == 0) {
        echo "No results found.";
    } else {
        echo "More than one result found. This should not happen!";
    }
} else {
    echo "Error executing SQL query: " . $conn->error;
}

  $var9 =  "trainee_id";
  $var8 =  "enrollment_id";



    $var2 =  "gender";
    $var10 = "program_id";

//$date = new DateTime($var6);

// Add one day
//$date->modify('+1 day');





/*$originalFormat = "Y-m-d";
$newFormat = "d-M-Y";
$var1 = DateTime::createFromFormat($originalFormat, $var1);
$var1 = $var1->format($newFormat);
$var5 = DateTime::createFromFormat($originalFormat, $var5);
$var5 = $var5->format($newFormat);
$var6 = DateTime::createFromFormat($originalFormat, $var6);
$var6 = $var6->format($newFormat);*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full Page Border Example</title>
  <style>
    /* Apply styles to the body element for a full-page border */
    body {
      margin: 0; /* Remove default margin */
      padding: 0; /* Remove default padding */
      border: 5px solid #3498db; /* Border color and width */
      border-radius: 10px; /* Rounded corners */
      box-sizing: border-box; /* Include border in the element's total width and height */
    }

    /* Additional styles for content inside the border */
    .tksi_logo {
      margin: 10px; /* Add margin inside the border */
      color: #2c3e50;
      font-size: 18px;
    }
     @font-face {
      font-family: 'Algerian';
      src: url('Algerian.ttf') format('truetype'); /* Replace with the actual path to your font file */
      font-weight: normal;
      font-style: normal;
    }

    /* Use the custom font for h1 */
  
  </style>
</head>
<body>
  <!-- Content inside the full-page border -->

    <div class="tksi_logo">
        <center>
                <img src="cc.png" width="415px" height="100px">

        </center>
  </div>
  <center>
       <h1>CERTIFICATE OF PARTICIPATION</h1>
  </center>
<h2 style="text-align: right; margin-right: 22px;">Date : <b><u><?php echo $var1;?></u></b></h2>

<p style="font-size: 28px;margin: 30px; text-align: justify;">
This certifies that
    <b>
      
        
<?php echo $var3; ?>
</b> has participated in

<b><?php echo $var4; ?></b> organized by <b>Sinhgad Groups Of Institutes</b>
Throughout the duration of the event, <?php echo $var3;?> demonstrated enthusiasm, dedication, and a commitment to excellence. Their active engagement and valuable contributions greatly enriched the experience for all participants.

    </p>
    
      <table style="      width: 100%;">
            <tr> 
        
            <td>    <h2>Certificate ID : <?php echo $var7; ?></h2>
            </td>
            <td>
                <img src="sign.jpeg" width="300px" height="174px">
            </td>
            </tr>
        </table>
</body>
</html>
