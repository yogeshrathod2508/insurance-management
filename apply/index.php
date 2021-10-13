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
					<h1 class="display-4 fw-normal">Welcome <?php echo $userName; ?></h1>
					<p class="fs-5 text-muted">IMS is the largest partner for most Health Insurers and a Platinum partner, which means your policy and claims will be treated on a priority. We make Health insurance more affordable for you through various monthly payment options and discounts provided by our Partners.</p>
				</div>
			</header>
			<main>
				<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
					<div class="col">
						<div class="card mb-4 rounded-3 shadow-sm">
							<div class="card-header py-3">
								<h4 class="my-0 fw-normal">Lite</h4>
							</div>
							<div class="card-body">
								<h1 class="card-title pricing-card-title">₹549<small class="text-muted fw-light">/mo</small></h1>
								<ul class="list-unstyled mt-3 mb-4">
									<li>90% claim settlement ratio</li>
									<li>Coverage for COVID 19</li>
									<li>Mid term inclusion</li>
									<li>Existing illness waiting period</li>
								</ul>
								<form method="post" action="register.php">
									<input type="hidden" name="insuranceType" value="Lite">
									<input type="hidden" name="insurancePrice" value="549">
									<input type="submit" name="submitLite" class="w-100 btn btn-lg btn-outline-primary" value="Register today!">
								</form>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card mb-4 rounded-3 shadow-sm border-primary">
							<div class="card-header py-3 text-white bg-primary border-primary">
								<h4 class="my-0 fw-normal">Premium</h4>
							</div>
							<div class="card-body">
								<h1 class="card-title pricing-card-title">₹1,499<small class="text-muted fw-light">/mo</small></h1>
								<ul class="list-unstyled mt-3 mb-4">
									<li>96% claim settlement ratio</li>
									<li>Coverage for COVID 19</li>
									<li>Faster claim processing</li>
									<li>No room rent capping</li>
								</ul>
								<form method="post" action="register.php">
									<input type="hidden" name="insuranceType" value="Premium">
									<input type="hidden" name="insurancePrice" value="1499">
									<input type="submit" name="submitPrem" class="w-100 btn btn-lg btn-primary" value="Register today!">
								</form>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card mb-4 rounded-3 shadow-sm">
							<div class="card-header py-3">
								<h4 class="my-0 fw-normal">Executive</h4>
							</div>
							<div class="card-body">
								<h1 class="card-title pricing-card-title">₹3,999<small class="text-muted fw-light">/mo</small></h1>
								<ul class="list-unstyled mt-3 mb-4">
									<li>95% claim settlement ratio</li>
									<li>Coverage for COVID 19</li>
									<li>4900+ network hospitals</li>
									<li>Day care treatments</li>
								</ul>
								<form method="post" action="register.php">
									<input type="hidden" name="insuranceType" value="Executive">
									<input type="hidden" name="insurancePrice" value="3999">
									<input type="submit" name="submitLte" class="w-100 btn btn-lg btn-outline-primary" value="Register today!">
								</form>
							</div>
						</div>
					</div>
				</div>
			</main>
			<footer class="my-5 pt-5 text-muted text-center text-small">
				<p class="mb-1">&copy; 2021 Insurance Management System</p>
			</footer>
		</div>
	</body>
</html>
