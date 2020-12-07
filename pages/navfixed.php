<?php
require_once('auth.php');
?>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color: #004d1a; height: 50px" >
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>


		<ul class="navbar-left ">
		<img src="agrilo.jpg" width="50px" height="50px">
		</ul>
		<a  class="navbar-brand" style="color: white" href="home.php">SAMARAKOON AGRI-SERVICE </a>
	</div>
	<!-- /.navbar-header -->

	
	<ul class="nav navbar-top-links navbar-right"> 
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li><a  href="#myModal" data-toggle="modal"><i class="fa fa-user fa-fw"></i> Add User</a>
					<li><a href="Logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					</li>
				</ul>
				<!-- /.dropdown-user -->
			</li>
			<!-- /.dropdown -->
		</ul>
		<!-- /.navbar-top-links -->




		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li >
						<a href="home.php" style="color: #004d1a;"><i class="fa fa-home fa-fw"></i> Home</a>
					</li>
					<!-- <li>
						<a href="#"><i class="fa fa-money fa-fw"></i> Select payment method<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>">Cash</a>
							</li>
							<li>
								<a href="sales.php?id=credit&invoice=<?php echo $finalcode ?>">Credit</a>
							</li>
						</ul>
					</li> -->
					<li>
						<a href="products.php" style="color: #004d1a;"><i class="fa fa-table fa-fw"></i> Product</a>
					</li>
					<li>
						<a href="customer.php" style="color: #004d1a;"><i class="fa fa-user fa-fw"></i> Customer</a>
					</li>
					<li>
						<a href="purchaseslist.php" style="color: #004d1a;"><i class="fa fa-list-alt fa-fw"></i> Purchase Order List</a>
					</li>
					<li>
						<a href="orderpo.php" style="color: #004d1a;"><i class="fa fa-list-alt fa-fw"></i> Purchase Order Form</a>
					</li>
					<li>
						<a href="supplier.php" style="color: #004d1a;"><i class="fa fa-truck fa-fw"></i> Supplier</a>
					</li>

					<li>
						<a rel="facebox" href="select_customer.php" style="color: #004d1a;"><i class="fa fa-book fa-fw"></i> Customer Ledger</a>
					</li>
					<li>
						<a href="#" style="color: #004d1a;"><i class="fa fa-files-o fa-fw"></i> REPORTS<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="accountreceivables.php" style="color: #004d1a;">Accounts Receivables Report</a>
							</li>
							<li>
								<a href="collection.php" style="color: #004d1a;">Collection Report</a>
							</li>
							<li>
								<a href="salesreport.php" style="color: #004d1a;">Sales Report</a>
							</li>
							<li>
								<a href="inventory.php" style="color: #004d1a;">Inventory Report</a>
							</li>
							<li>
								<a  href="product_lose.php" style="color: #004d1a;"> List of Product Expired</a>
							</li>
							<li>
								<a  href="returned.php" style="color: #004d1a;"> Report of Returned Products</a>
							</li>
							<li>
								<a  href="search_customer.php" style="color: #004d1a;"> Customer Transaction Record</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" style="color: #004d1a;"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="chart.php" style="color: #004d1a;"> Graph By Category</a>
							</li>
							<li>
								<a href="charts.php" style="color: #004d1a;"> Graph For Cash and Credit</a>
							</li>
							<li>
								<a href="lose.php" style="color: #004d1a;"> Graph For Losses </a>
							</li>
							<li>
								<a href="month_chart.php" style="color: #004d1a;"> Monthly Sales Chart</a>
							</li>
							<li>
								<a href="yearly_chart.php" style="color: #004d1a;"> Yearly Sales Chart</a>
							</li>
						</ul>
					</li>

				</div>
			</div>
			<!-- /.navbar-static-side -->
		</nav>

		<?php include('adduser.php'); ?>