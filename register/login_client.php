<?php
ini_set('session.save_path', '../session');
if (session_id()) {
	session_unset();
	session_destroy();
} else {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - Ek Ka Double | Insurance Company</title>
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
				<a class="navbar-brand" href="#">Ek Ka Double Insurance Company</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</nav>
	</header>

	<div class="container">
		<div class="row py-5 mt-4 align-items-center">
			<!-- For Demo Purpose -->
			<div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
				<img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
				<h1 class="text-center">Log In To Your Account</h1>
			</div>

			<!-- Registeration Form -->
			<div class="col-md-7 col-lg-6 ml-auto">
				<form method="POST">
					<div class="row">

						<!-- Email Address -->
						<div class="input-group col-lg-12 mb-4">
							<input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
						</div>

						<!-- Password -->
						<div class="input-group col-lg-6 mb-4">
							<input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" autocomplete="off" required>
						</div>

						<!-- Password Error Message -->
						<div id="passErr" class="input-group col-lg-6 mb-4" style="display: none;">
							<p class="alert alert-danger" role="alert">
								<strong>Incorrect Password. Please Try Again!</strong>
							</p>
						</div>

						<!-- Record Not Found Error Message-->
						<div id="recErr" class="input-group col-lg-6 mb-4" style="display: none;">
							<p class="alert alert-danger" role="alert">
								<strong>Email Address Is Not Registered. Please <a href="register_client.php">Create Account</a></strong>
							</p>
						</div>

						<!-- Submit Button -->
						<div class="form-group col-lg-12 mx-auto mb-0">
							<button href="#" class="btn btn-primary btn-block py-2 w-100" type="submit" name="submit">
								<span class="font-weight-bold">Login</span>
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
							<p class="text-muted font-weight-bold">Not Registered? <a href="register_client.php" class="text-primary ml-2">Create Account</a></p>
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
	<?php
	if (isset($_POST['submit'])) {
		try {
			require_once '../dbConfig.php';
			$sql = "Select * From Clients Where email = :email";
			$statement = $dbConnection->prepare($sql);
			$statement->execute(array(':email' => $_POST['email']));
			$row = $statement->fetch(PDO::FETCH_ASSOC);
			if ($row != NULL) {
				if ($_POST['password'] == $row['Password']) {
					$_SESSION['username'] = $row['Username'];
					$_SESSION['firstname'] = $row['Firstname'];
					$_SESSION['lastname'] = $row['Lastname'];
					$_SESSION['mobile'] = $row['Mobile'];
					$_SESSION['emailid'] = $row['Email'];
					echo '<script type="text/javascript">location.href = "../apply/index.php";</script>';
				} else {
					echo '<script>document.getElementById("passErr").style.display = "inline";</script>';
				}
			} else {
				echo '<script>document.getElementById("recErr").style.display = "inline";</script>';
			}
		} catch (Exception $e) {
			echo 'Exception :' . $e;
		}
	}
	?>
</body>

</html>