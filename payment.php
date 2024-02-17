<?php
include("connection/connect.php");
if(isset($_POST['payment_id']) && isset($_POST['amt']) && isset($_POST['name']))
{
    $payment_id=$_POST['payment_id'];
    $amt=$_POST['amt'];
    $productname=$_POST['d_id'];
    $add_on=date('y-m-d');
    mysqli_query($conn,"insert into orders(product_id,payment_id,date) values ('$payment_id','$product_id',$add_on)");
}
?>