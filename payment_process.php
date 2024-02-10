<?php
session_start();
include 'admin/include/config.php';
if(isset($_POST['pti']) && isset($_POST['mobno'])){
    $traking_no=$_POST['pti'];
    $payment_status_updates="processing";
    mysqli_query($con,"update tbl_register set reg_payment_status='$payment_status_updates' where reg_tk_id='$traking_no'");
    $_SESSION['OID']=$traking_no;
}


if(isset($_POST['pyid']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['pyid']; 
    $traking_no=$_SESSION['OID'];
        $payment_status_updates1="complete";

    mysqli_query($con,"update tbl_register set reg_payment_status='$payment_status_updates1',reg_raz_pay_id='$payment_id' where reg_tk_id='$traking_no'");
}
?>