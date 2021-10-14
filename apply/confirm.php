<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once '../dbConfig.php';
date_default_timezone_set('Asia/Kolkata');

$insuranceType = $_POST['insuranceType'];
$period = $_POST['period'];
$name = $_POST['firstName'] . " " . $_POST['lastName'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$country = $_POST['country'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$paymentMethod = $_POST['paymentMethod'];
$ccname = $_POST['cc-name'];
$number = $_POST['cc-number'];
$expiration = $_POST['cc-expiration'];
$cvv = $_POST['cc-cvv'];

if ($_POST['insuranceType'] == "Lite")
    $packageCost = 549;
else if ($_POST['insuranceType'] == "Premium")
    $packageCost = 1499;
else
    $packageCost = 3999;
$amount = 12 * $packageCost * (int)$_POST['period'];
$timeStamp = date("D d.m.Y h:i:s A");

$sqlStatement = $dbConnection->prepare("INSERT INTO insurance (Name, Mobile, Email, Address, Address2, Country, State, ZIP, Package, Period, PaymentMethod, CardName, CardNumber, CardExpiry, CardCVV, Amount, TimeStamp) VALUES (:Name, :Mobile, :Email, :Address, :Address2, :Country, :State, :ZIP, :Package, :Period, :PaymentMethod, :CardName, :CardNumber, :CardExpiry, :CardCVV, :Amount, :TimeStamp)");
$sqlStatement->bindParam(':Name', $name);
$sqlStatement->bindParam(':Mobile', $mobile);
$sqlStatement->bindParam(':Email', $email);
$sqlStatement->bindParam(':Address', $address);
$sqlStatement->bindParam(':Address2', $address2);
$sqlStatement->bindParam(':Country', $country);
$sqlStatement->bindParam(':State', $state);
$sqlStatement->bindParam(':ZIP', $zip);
$sqlStatement->bindParam(':Package', $insuranceType);
$sqlStatement->bindParam(':Period', $period);
$sqlStatement->bindParam(':PaymentMethod', $paymentMethod);
$sqlStatement->bindParam(':CardName', $ccname);
$sqlStatement->bindParam(':CardNumber', $number);
$sqlStatement->bindParam(':CardExpiry', $expiration);
$sqlStatement->bindParam(':CardCVV', $cvv);
$sqlStatement->bindParam(':Amount', $amount);
$sqlStatement->bindParam(':TimeStamp', $timeStamp);
// $sqlStatement->execute();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Apply · IMS</title>
		<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">
		<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
		<link rel="icon" href="../assets/img/Logo.png" type="image/png">
		<meta name="theme-color" content="#7952b3">
		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				user-select: none;
			}
			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
		</style>
		<link href="https://getbootstrap.com/docs/5.1/examples/pricing/pricing.css" rel="stylesheet">
	</head>
	<body>
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			<symbol id="check" viewBox="0 0 16 16">
				<title>Check</title>
				<path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
			</symbol>
		</svg>
		<div class="container py-3">
			<header>
				<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
					<a href="https://getbootstrap.com/" class="d-flex align-items-center text-dark text-decoration-none">
						<img src="../assets/img/Logo.png" height="32">
						<span class="fs-4">&nbsp;Insurance Management System</span>
					</a>
					<nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
						<a class="me-3 py-2 text-dark text-decoration-none" href="../index.php">Home</a>
						<a class="me-3 py-2 text-dark text-decoration-none" href="index.php">Apply</a>
					</nav>
				</div>
				<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
					<h1 class="display-4 fw-normal">Thank you <?php echo $name; ?></h1>
					<p class="fs-5 text-muted">We have successfully received your request for <?php echo $insuranceType; ?> Insurance Package for a period of <?php echo $period; ?> year(s).</p>
				</div>
			</header>
			<main>
				<div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
					<div class="col" style="margin-right: auto; margin-left: auto;">
                        <p class="fs-6 text-muted">Please review the below mentioned details for future use.</p>
                        <table class="table table-hover">
                            <tr>
                                <th>Name</th>
                                <td><?php echo $name; ?></td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td><?php echo $mobile; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <th>Address Line 1:</th>
                                <td><?php echo $address; ?></td>
                            </tr>
                            <tr>
                                <th>Address Line 2:</th>
                                <td><?php echo $address2; ?></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td><?php echo $country; ?></td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td><?php echo $state; ?></td>
                            </tr>
                            <tr>
                                <th>ZIP</th>
                                <td><?php echo $zip; ?></td>
                            </tr>
                            <tr>
                                <th>Package</th>
                                <td><?php echo $insuranceType; ?></td>
                            </tr>
                            <tr>
                                <th>Period</th>
                                <td><?php echo $period; ?> year(s)</td>
                            </tr>
                            <tr>
                                <th>Payment Method</th>
                                <td><?php echo $paymentMethod; ?></td>
                            </tr>
                            <tr>
                                <th>Amount</th>
                                <td>INR <?php echo number_format($amount, 2); ?></td>
                            </tr>
                            <tr>
                                <th>Time Stamp</th>
                                <td><?php echo $timeStamp; ?></td>
                            </tr>
                        </table>
					</div>
				</div>
			</main>
			<footer class="my-5 pt-5 text-muted text-center text-small">
				<p class="mb-1">&copy; 2021 Insurance Management System</p>
			</footer>
		</div>
	</body>
</html>
