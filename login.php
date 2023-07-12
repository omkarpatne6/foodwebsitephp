<?php
session_start();

/*If the user is logged in then he can't access this page*/
if (isset($_SESSION['username'])) {
		// code...
	?>

	<script type="text/javascript">
		alert('You are already logged in.');
		location.replace("index.php");
	</script>

	<?php


}

if (isset($_SESSION['admin'])) {

	?>

	<script type="text/javascript">
		alert('You are logged in as an Admin! Kindly logout to login as as user.');
		location.replace("index.php");
	</script>

	<?php
	// code...
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<!-- Bootstrap CDN -->
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Google fonts here -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Nunito font -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;700&display=swap" rel="stylesheet">

	<!-- Inter font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Mulish font -->
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Lato font -->
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- fontawesome icons -->
	<script src="https://kit.fontawesome.com/858dca1c9d.js" crossorigin="anonymous"></script>

	<?php include 'conn.php'  ?>

	<!-- Stylesheet -->
	<style type="text/css">
		<?php include 'assets/css/style.css'; ?>
	</style>

	<style>
		html, body {
			background: #3D80D9;
		}
	</style>
</head>
<body>

	<?php 

	if(isset($_POST['submit'])) {

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		$email_search = "select * from registration where email = '$email' ";
		$query = mysqli_query($conn, $email_search);

		$email_count = mysqli_num_rows($query);

		if($email_count) {
			$email_pass = mysqli_fetch_assoc($query);

			$db_pass = $email_pass['password'];

			$_SESSION['username'] = $email_pass['username'];

			$_SESSION['usid'] = $email_pass['id'];

			$pass_decode = password_verify($password, $db_pass);

			if($pass_decode){
				echo "<div class='spinner-border' role='status'>
				<span class='sr-only'>Loading...</span>
				</div> Loading...Please wait";
				?>

				<script type="text/javascript">
					location.replace("index.php");
				</script>

				<?php
				
			}else {
				?>

				<script type="text/javascript">
					alert('Incorrect password entered');
				</script>

				<?php
			}

		}else {
			?>

			<script type="text/javascript">
				alert('Email is not registered. Please sign up first!');
				location.replace("register.php");
			</script>

			<?php
		}

	}

	?>

	<!-- php code ends here -->


	<!-- Header navbar -->
	<?php include 'header.php'  ?>


	<section class="login">
		<div class="container-fluid" >
			<div class="row h-100">
				<div class="col-md-4 col-sm-3 bluebg my-auto">
					<img src="assets/img/login/man.png" class="img-fluid" alt="man">

				</div>

				<div class="col-md-8 col-sm-9 whitebg " >

					<div class="row height">
						<div class="col-sm-8 col-md-6 m-auto">
							<form  method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

								<div class="form-floating mb-3">
									<input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
									<label for="floatingInput">Email address</label>
								</div>

								<div class="form-floating mb-3" style="position: relative;">
									<input type="password" name="password" class="form-control" id="id_password" placeholder="Password" required>
									<label for="floatingPassword">Password</label>
									<i class="far fa-eye" id="togglePassword" style="position: absolute; right: 20px; bottom: 35%;  cursor: pointer;"></i>
								</div>

								<button type="submit" name="submit" class="mb-3 btn btn-primary hover-underline-animation w-100">Login</button>

								Don't have an account? <a href="register.php">Register Here</a>
							</form>

							
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>



	<script type="text/javascript">
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#id_password');

		togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>	
</body>
</html>