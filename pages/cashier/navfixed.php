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
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0 ; background-color: #004d1a; height:50px;">
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
		<a class="navbar-brand" href="#" style="color: white;">SAMARAKOON AGRI-SERVICE Cashier</a>

	</div>
	<!-- /.navbar-header -->

	<ul class="nav navbar-top-links navbar-right" style="color: white">
	Welcome:<strong> <?php echo $session_cashier_name; ?></strong>      
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
					<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
					<li>
						<a href="#" style="color: #004d1a;"><i class="fa fa-money fa-fw"></i> Select payment method<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"style="color: #004d1a;">Cash</a>
							</li>
							<li>
								<a href="sales.php?id=credit&invoice=<?php echo $finalcode ?>"style="color: #004d1a;">Credit</a>
							</li>

                          <!-- Return Product-->
							<li>
								<a href="return.php?id=Return"style="color: #004d1a;">Return Product</a>
							</li>

                          <!--Discount Loss--> 
							<li>
								<a href="discount.php?id=Return"style="color: #004d1a;">Discount</a>
							</li>


						</ul>
					</li>
				</div>
			</div>
			<!-- /.navbar-static-side -->
		</nav>
