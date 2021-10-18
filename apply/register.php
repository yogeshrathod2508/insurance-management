<?php
ini_set('session.save_path', '../session');
session_start();
$firstName = ucfirst($_SESSION['firstname']);
$lastName = ucfirst($_SESSION['lastname']);
$mobno = $_SESSION['mobile'];
$email = $_SESSION['emailid'];
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register · IMS</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
	<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
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
	<link href="https://getbootstrap.com/docs/5.1/examples/checkout/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="check" viewBox="0 0 16 16">
			<title>Check</title>
			<path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
		</symbol>
	</svg>
	<div class="container py-3">
		<header>
			<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
				<a href="#" class="d-flex align-items-center text-dark text-decoration-none">
					<span class="fs-4">&nbsp;Ek Ka Double Insurance Comapny</span>
				</a>
				<nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
					<a class="me-3 py-2 text-dark text-decoration-none" href="../register/login_client.php">Log Out</a>
				</nav>
			</div>
		</header>
		<main>
			<div class="py-5 text-center">
				<h2><?php echo $_POST['insuranceType']; ?> Insurance Package</h2>
				<p class="lead">Configure your details below in order to purchase the insurance policy for the desired time period starting at just INR <?php echo $_POST['insurancePrice']; ?>.00 per month.</p>
			</div>
			<div class="row g-5">
				<div class="col-md-5 col-lg-4 order-md-last">
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="text-primary">Billing Summary</span>
					</h4>
					<ul class="list-group mb-3">
						<li class="list-group-item d-flex justify-content-between lh-sm">
							<div>
								<h6 class="my-0"><?php echo $_POST['insuranceType']; ?> Insurance</h6> <small class="text-muted">Package</small>
							</div>
							<span class="text-muted">₹<span id="price"><?php echo $_POST['insurancePrice']; ?>.00</span></span>
						</li>
						<li class="list-group-item d-flex justify-content-between bg-light">
							<div class="text">
								<h6 class="my-0">Validity</h6> <small>in years</small>
							</div>
							<span class="text"><span id="years">1</span> year(s)</span>
						</li>
					</ul>
					<form class="card p-2">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Total (INR)" disabled>
							<button type="submit" class="btn btn-secondary"><strong>₹<span id="amount"><?php echo 12 * (int)$_POST['insurancePrice']; ?>.00</span></strong></button>
						</div>
					</form>
				</div>
				<div class="col-md-7 col-lg-8">
					<h4 class="mb-3">Policy Period</h4>
					<form class="needs-validation" action="confirm.php" method="post" novalidate>
						<div class="row g-3">
							<div class="form-check">
								<select class="form-select" name="period" aria-label="Choose your policy period" required>
									<option selected disabled value="">Choose your policy period</option>
									<option value="1">One year</option>
									<option value="2">Two years</option>
									<option value="3">Three years</option>
								</select>
								<div class="invalid-feedback"> Policy Period is required. </div>
							</div>
						</div>
						<hr class="my-4">
						<h4 class="mb-3">Proposer Details</h4>
						<div class="row g-3">
							<div class="col-sm-6">
								<input type="hidden" name="insuranceType" value="<?php echo $_POST['insuranceType']; ?>">
								<input type="hidden" name="amount" id="amt" value="<?php echo 12 * (int)$_POST['insurancePrice']; ?>">
								<label for="firstName" class="form-label">First name</label>
								<input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="<?php echo $firstName; ?>" required>
								<div class="invalid-feedback"> Valid first name is required. </div>
							</div>
							<div class="col-sm-6">
								<label for="lastName" class="form-label">Last name</label>
								<input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="<?php echo $lastName; ?>" required>
								<div class="invalid-feedback"> Valid last name is required. </div>
							</div>
							<div class="col-12">
								<label for="mobile" class="form-label">Mobile</label>
								<input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="XXXXXXXXXX" value="<?php echo $mobno; ?>">
							</div>
							<div class="col-12">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?php echo $email; ?>">
								<div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
							</div>
							<div class="col-12">
								<label for="address" class="form-label">Address</label>
								<input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
								<div class="invalid-feedback"> Please enter your shipping address. </div>
							</div>
							<div class="col-12">
								<label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
								<input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
							</div>
							<div class="col-md-5">
								<label for="country" class="form-label">Country</label>
								<input type="text" class="form-control" name="country" id="country" value="India">
								<div class="invalid-feedback"> Please select a valid country. </div>
							</div>
							<div class="col-md-4">
								<label for="state" class="form-label">State</label>
								<select class="form-select" id="state" name="state" required>
									<option selected disabled>Choose your state</option>
									<option value="Andra Pradesh">Andra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madya Pradesh">Madya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
									<option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Lakshadeep">Lakshadeep</option>
									<option value="Pondicherry">Pondicherry</option>
								</select>
								<div class="invalid-feedback"> Please provide a valid state. </div>
							</div>
							<div class="col-md-3">
								<label for="zip" class="form-label">Zip</label>
								<input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
								<div class="invalid-feedback"> Zip code required. </div>
							</div>
						</div>
						<hr class="my-4">
						<h4 class="mb-3">Payment</h4>
						<div class="my-3">
							<div class="form-check">
								<input id="credit" name="paymentMethod" type="radio" value="Credit Card" class="form-check-input" checked required>
								<label class="form-check-label" for="credit">Credit card</label>
							</div>
							<div class="form-check">
								<input id="debit" name="paymentMethod" type="radio" value="Debit Card" class="form-check-input" required>
								<label class="form-check-label" for="debit">Debit card</label>
							</div>
						</div>
						<div class="row gy-3">
							<div class="col-md-6">
								<label for="cc-name" class="form-label">Name on card</label>
								<input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="" required> <small class="text-muted">Full name as displayed on card</small>
								<div class="invalid-feedback"> Name on card is required </div>
							</div>
							<div class="col-md-6">
								<label for="cc-number" class="form-label">Card number</label>
								<input type="text" class="form-control" id="cc-number" name="cc-number" placeholder="" required>
								<div class="invalid-feedback"> Credit card number is required </div>
							</div>
							<div class="col-md-6">
								<label for="cc-expiration" class="form-label">Expiration Date</label>
								<input type="month" class="form-control" id="cc-expiration" name="cc-expiration" placeholder="" required>
								<div class="invalid-feedback"> Expiration date required </div>
							</div>
							<div class="col-md-3">
								<label for="cc-cvv" class="form-label">CVV</label>
								<input type="password" class="form-control" id="cc-cvv" name="cc-cvv" placeholder="" required>
								<div class="invalid-feedback"> Security code required </div>
							</div>
						</div>
						<hr class="my-4">
						<button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
					</form>
				</div>
			</div>
		</main>
		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">&copy; 2021 Insurance Management System</p>
		</footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/5.1/examples/checkout/form-validation.js"></script>
	<script src="register.js" defer></script>
</body>

</html>