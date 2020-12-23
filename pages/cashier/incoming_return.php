<?php
session_start();
include('connect.php');
$a = $_POST['invoice'];
$b = $_POST['invoice_number'];
$date = date('m/d/Y');
$month = date('F');
$year = date('Y');

$discount = $_POST['discount'];
$result = $db->prepare("SELECT * FROM sales WHERE invoice_number= :userid");
$result->bindParam(':userid', $b);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$asasa=$row['price'];
$name=$row['product_name'];
$dname=$row['description_name'];
$categ=$row['category'];
$qtyleft=$row['qty_left'];
}


// query
$sql = "INSERT INTO sales_order (invoice,product,qty,amount,name,price,discount,category,date,omonth,oyear,qtyleft,dname,vat,total_amount) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:o)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$name,':f'=>$asasa,':g'=>$discount,':h'=>$categ,':i'=>$date,':j'=>$month,':k'=>$year,':l'=>$z,':m'=>$dname,':n'=>$vat,':o'=>$total));
header("location: return.php?id=$w&invoice=$a");



?>