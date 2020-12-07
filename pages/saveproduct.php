<?php
session_start();
include('connect.php');
$a = $_POST['code'];
$b = $_POST['bname'];
$c = $_POST['cost'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$g = $_POST['categ'];
$h = $_POST['date_del'];
$i = $_POST['ex_date'];
$j = $_POST['dname'];
$k = $_POST['unit'];
$sql = "INSERT INTO products (product_code,product_name,cost,price,supplier,qty_left,category,date_delivered,expiration_date,description_name,unit) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k));
header("location: products.php");


?>