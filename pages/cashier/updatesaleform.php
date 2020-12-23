<?php
    include('connect.php');
    
    $id=$_GET['tid'];
	
	$result = $db->prepare("SELECT *FROM sales WHERE transaction_id");
	
	$result->execute($id);
	for($i=0; $row = $result->fetch(); $i++){
?>

	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<form action="saveupdatesale.php" method="post" class = "form-group">
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Transaction ID : </span><input type="text" name="tid" class = "form-control" value="<?php echo $row['transaction_id']; ?>" />
<span>Invoice Number : </span><input type="text" name="ino" class = "form-control" value="<?php echo $row['invoice_number']; ?>" />
<span>Cashier : </span><input type="text" name="cashier" class = "form-control" value="<?php echo $row['cashier']; ?>" />
<span>Date : </span><input type="text" name="date" class = "form-control" value="<?php echo $row['date']; ?>"> 
<span>Type : </span><input type="text" name="type" class = "form-control" value="<?php echo $row['type']; ?>" />
<span>Amount: </span><input type="text" name="amount" class = "form-control" value="<?php echo $row['amount']; ?>" />
<span>Balance: </span><input type="text" name="bal" class = "form-control" value="<?php echo $row['balance']; ?>" />
<span>Loss: </span><input type="text" name="note" class = "form-control" placeholder="Loss Price" />

<span>&nbsp;</span><input class="btn btn-primary btn-block" type="submit" class = "form-control" value="Pull Out" />
</div>
</form>
<?php
}
?>