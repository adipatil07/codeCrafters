<?php

$host = "localhost";
$username = "u119271849_user_test1";
$password = "Abhi@22082004";
$database = "u119271849_db_test1";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
   // echo "done..!";
}

use Dompdf\Dompdf;
use Dompdf\Options;
require_once "dompdf/autoload.inc.php";
$options = new Options();
$options->set('chroot',realpath(''));

$pdf = new Dompdf($options);

$pdf->set_option('isRemoteEnabled', true);
$pdf->set_option('isPhpEnabled', true);
//$pdf->set_option('defaultFont', 'Helvetica');
$pdf->set_option('isHtml5ParserEnabled', true);

$page_id = $_GET['id'];

//$page_id = 1;

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
$var11 = "filename"; //file name for thhe server file


$sql1 = "SELECT * FROM tbl_digital_certificate where id = $page_id";
$result1 = $conn->query($sql1);
if ($result1->num_rows == 1) {
  $row1 = $result1->fetch_assoc();
  $var7 =  $row1["certificate_no"];
  $var9 =  $row1["trainee_id"];
  $var8 =  $row1["enrollment_id"];
  $var11 =  $row1["file_name"];
} 
else {
}


$sql2 = "SELECT * FROM tbl_trainee where user_id = $var9";
$result2 = $conn->query($sql2);
if ($result2->num_rows == 1) {
  $row2 = $result2->fetch_assoc();
    $var3 = $row2["f_name"]."  ".$row2["m_name"]." ".$row2["l_name"];
    $var2 =  $row2["gender"];
} 
else {
}

$sql3 = "SELECT * FROM tbl_enrollment where id = $var8";
$result3 = $conn->query($sql3);
if ($result3->num_rows == 1) {
  $row3 = $result3->fetch_assoc();
    $var10 = $row3["program_id"];
} 
else {
}

$sql4 = "SELECT * FROM tbl_program where id = $var10";
$result4 = $conn->query($sql4);
if ($result4->num_rows == 1) {
  $row4 = $result4->fetch_assoc();
    $var4 = $row4["duration"]." - ".$row4["name"];
    $var5 =  $row4["started"];
    $var6 =  $row4["ended"];
} 
else {
}

$date = new DateTime($var6);

// Add one day
$date->modify('+1 day');

// Get the modified date and store it in $var1
$var1 = $date->format('Y-m-d');




$originalFormat = "Y-m-d";
$newFormat = "d-M-Y";
$var1 = DateTime::createFromFormat($originalFormat, $var1);
$var1 = $var1->format($newFormat);
$var5 = DateTime::createFromFormat($originalFormat, $var5);
$var5 = $var5->format($newFormat);
$var6 = DateTime::createFromFormat($originalFormat, $var6);
$var6 = $var6->format($newFormat);



$html='
<html>
<head>
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
      font-family: "Algerian";
      src: url("Algerian.ttf") format("truetype"); 
      font-weight: normal;
      font-style: normal;
    }
  </style>
</head>
<body>
    <div class="tksi_logo">
        <center>
        <table style="      width: 100%;">
            <tr> 
            <td>
                <img src="msme.jpg" width="217px" height="100px">
            </td>
            <td>
                <img src="tksi.jpg" width="415px" height="100px">

            </td>
            <td>
                <img src="iso.jpg" width="224px" height="100px">
            </td>
            </tr>
        </table>
        </center>
  </div>
  <center>
       <h1>CERTIFICATE OF COMPLETION</h1>
  </center>
<h2 style="text-align: right; margin-right: 22px;">Date : <b><u>'.$var1.'</u></b></h2>

<p style="font-size: 28px;margin: 30px; text-align: justify;">
    Proudly presented to 
    <b>';
        
?>  
        
        <?php
        if($var2=="Male" || $var2=="male"){
            $html = $html."Mr.";
        }
        elseif($var2=="Female" || $var2=="female"){
            $html = $html."Miss.";
        }else{
            $html = $html."Invalid";
        }
        
        
        ?>
        
<?php $html = $html.$var3; ?>
<?php

$html = $html."</b>,";


        if($var2=="Male" || $var2=="male"){
            $html = $html." He ";
        }
        elseif($var2=="Female" || $var2=="female"){
            $html = $html." She ";
        }else{
            $html = $html." Invalid";
        }
        
        
        ?>
<?php
$html = $html." has completed a <b>";
    ?>
    <?php $html = $html.$var4; ?>
    <?php
    
    
    $html = $html.'</b> at Techking Solutions India From <u><b>'.$var5.'</b></u> to <u><b>'.$var6.'</b></u>. In recognition of your exceptional dedication and valuable contributions during the internship period, we extend our heartfelt appreciation and gratitude.
    <br>    

    </p>
    
      <table style="      width: 100%;">
            <tr> 
            <td>
               <img src="qr.png" width="252px" height="172px">
            </td>
            <td>    <h2>Certificate ID : '. $var7.'</h2>
<p>Please use the following link to verify this certificate: <br>https://techking.in.net/verify_certificate</p>
            </td>
            <td>
                <img src="abhi.png" width="300px" height="174px">
            </td>
            </tr>
        </table>
</body>
</html>';

?>




<?php




$pdf->loadHtml($html);

$pdf->setPaper('A4', 'landscape');

$pdf->render();


$outputFile = '../../img/digital_certificate/'.$var11;
if(file_put_contents($outputFile, $pdf->output())){
    echo "<script>";
    echo "alert('Sucess ... File Uploaded on Server completed');";
        echo '        window.location.href = "../view_digital_certificate.php";';

    echo "</script>";
}else{
     echo "<script>";
    echo "alert('fail ... File Uploaded on Server failed');";
    echo '        window.location.href = "../view_digital_certificate.php";';
    echo "</script>";
}

//$file="admin";
//$pdf->stream($file,array("Attachments"=>0));

?>