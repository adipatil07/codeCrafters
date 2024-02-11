<?php

$user_id = $_GET['id'];
$sql = "SELECT * FROM tbl_register WHERE reg_id = '$user_id'";
$result = $con->query($sql);
if ($result) {
    if ($result->num_rows == 1) { 
        $row = $result->fetch_assoc();
        $currentDate = date('d/m/Y');
        $var1=$currentDate; 
$var3="default3"; 
    $var3 = $row['reg_fname']."  ".$row['reg_lname'];

$var4 =$row['reg_event_name']; 
$var5 ="default5"; 
$var6 ="default6"; 
$var7= $row['reg_tk_id'];  
$var8 = "devault enrollemt id"; 
$var9 = "default trainee id"; 
$var10 = "devault program id"; 
        
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


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full Page Border Example</title>
  <style>
    body {
      margin: 0; 
      padding: 0;
      border: 5px solid #3498db; 
      border-radius: 10px; 
      box-sizing: border-box; 
    }

    .tksi_logo {
      margin: 10px; 
      color: #2c3e50;
      font-size: 18px;
    }
     @font-face {
      font-family: 'Algerian';
      src: url('Algerian.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

  
  </style>
</head>
<body>

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
