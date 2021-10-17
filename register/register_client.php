<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ek Ka Double | Insurance Company</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../public/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
	<!-- Navbar-->
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Insurance Company</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a href="../apply/index.php" class="nav-link">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Dropdown
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Login</a></li>
							</ul>
						</li>
					</ul>
					<!-- <ul class="navbar-nav me-0 mb-2 mb-lg-0">
						<li class="nav-item mr-4">
							<button class="btn btn-outline-success">Login</button>
						</li>&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="nav-item">
							<button class="btn btn-outline-success">Sign Up</button>
						</li>
					</ul> -->
				</div>
			</div>
		</nav>
	</header>


	<div class="container">
		<div class="row py-5 mt-4 align-items-center">
			<!-- For Demo Purpose -->
			<div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
				<img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
				<h1 class="text-center">Create an Account</h1>
			</div>

			<!-- Registeration Form -->
			<div class="col-md-7 col-lg-6 ml-auto">
				<form method="POST">
					<div class="row">
						<!-- Email Address -->
						<div class="input-group col-lg-12 mb-4">
							<input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" autocomplete="off">
						</div>
						<!-- Username -->
						<div class="input-group col-lg-12 mb-4">
							<input id="username" type="text" name="username" placeholder="Username" class="form-control bg-white border-left-0 border-md" autocomplete="off">
						</div>

						<!-- Phone Number -->
						<div class="input-group col-lg-12 mb-4">
							<select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
								<option value="">+91</option>
								<option value="">+510</option>
								<option value="">+49</option>
							</select>
							<input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
						</div>.

						<!-- Password -->
						<div class="input-group col-lg-6 mb-4">
							<input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
						</div>

						<!-- Password Confirmation -->
						<div class="input-group col-lg-6 mb-4">
							<input id="passwordConfirmation" type="text" name="confirm_password" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
						</div>

						<!-- Submit Button -->
						<div class="form-group col-lg-12 mx-auto mb-0">
							<button href="#" class="btn btn-primary btn-block py-2 w-100" type="submit">
								<span class="font-weight-bold">Create your account</span>
							</button>
						</div>

						<!-- Divider Text -->
						<div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
							<div class="border-bottom w-100 ml-5"></div>
							<span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
							<div class="border-bottom w-100 mr-5"></div>
						</div>
						<!-- Already Registered -->
						<div class="text-center w-100">
							<p class="text-muted font-weight-bold">Already Registered? <a href="login_client.php" class="text-primary ml-2">Login</a></p>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		// For Demo Purpose [Changing input group text on focus]
		$(function() {
			$('input, select').on('focus', function() {
				$(this).parent().find('.input-group-text').css('border-color', '#80bdff');
			});
			$('input, select').on('blur', function() {
				$(this).parent().find('.input-group-text').css('border-color', '#ced4da');
			});
		});
	</script>
</body>

</html>