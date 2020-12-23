<?php
// configuration
include('connect.php');

// new data
$id = $_POST['tid'];
$aa = $_POST['ino'];
$bb = $_POST['cashier'];
$cc = $_POST['date'];
$dd = $_POST['type'];
$ee = $_POST['amount'];
$ff = $_POST['bal'];
$gg = $_POST['dis'];


// query
$sql = "UPDATE sales 
SET invoice_number=?, cashier=?, date=?, type=?, amount=?, balance=?, discountloss=? 
WHERE transaction_id=?";
$q = $db->prepare($sql);
$q->execute(array($aa,$bb,$cc,$dd,$ee,$ff,$gg,$_POST['tid']));
header("location: discount.php");

?>