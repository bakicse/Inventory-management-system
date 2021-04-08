<?php
session_start();
$uname=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		</style>
</head>
<body>
	<body style = "background: blue">
	<div class="header">
		<ul>
				<li>	<a href="category.php"> Category</a></li>
				<li>	<a href="brand.php"> Brand</a></li>
				<li>	<a href="product.php"> Products</a></li>
				<li>	<a href="buying.php"> Buying</a></li>
				<li>	<a href="selling.php"> Selling</a></li>
				<li>	<a href="report.php"> Report</a></li>
		</ul>

			<div class="user_info">
			Logged in as <?php echo "$uname"; ?>
			<a href="logout.php">Logout</a>
	   		</div>
		</div>

	<div class="clock" style="text-align:left">
		<br><iframe src="https://free.timeanddate.com/clock/i7qstp38/n948/szw210/szh210/hoc222/hbw6/cf100/hgr0/hcw2/hcd88/fan2/fas20/fdi70/mqc000/mqs3/mql13/mqw4/mqd94/mhc000/mhs3/mhl13/mhw4/mhd94/mmc000/mml5/mmw1/mmd94/hhs2/hhb18/hms2/hml80/hmb18/hmr7/hscf09/hss1/hsl90/hsr5" frameborder="0" width="210" height="210" ></iframe>
</div>

</body>
</html>
