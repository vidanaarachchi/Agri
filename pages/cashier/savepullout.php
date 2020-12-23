<?php
session_start();
include('connect.php');


$a = $_POST['tid'];
$b = $_POST['ino'];
$j = $_POST['cashier'];
$c = $_POST['date'];
$f = $_POST['type'];
$g = $_POST['amount'];
$h = $_POST['bal'];
$i = $_POST['note'];



$sql = "INSERT INTO return_products 
(trance_id,invoive_no,cashier,date,type,amount,balance,note) VALUES (?,?,?,?,?,?,?,?)";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$j,$c,$f,$g,$h,$i));


$sql1 = "DELETE FROM sales WHERE transaction_id=?";
$q1 = $db->prepare($sql1);
$q1->execute(array($a));




header("location: return.php");


?>