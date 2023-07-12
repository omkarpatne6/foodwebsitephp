<?php


include "conn.php";



/*$delete  = "DELETE FROM `products` WHERE id = '$id' ";

$dquery = mysqli_query($conn, $delete);

if ($dquery) {
	header('location:crud.php');
	// code...
}else {
	echo "error deleting the error"; 
}*/

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

	<!-- Jquery minified -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- Google fonts here -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Inter font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Stylesheet -->
	<style type="text/css">
		<?php include 'assets/css/style.css'; ?>
	</style>

	<style>
		html, body {
			background: #fff;
		}
	</style>
</head>
<body>


	<?php

	$nm = $_GET['nm'];
	$cat = $_GET['cat'];
	$pr = $_GET['pr'];



	if (isset($_POST['submit'])) {
		// code...
		$id = $_GET['id']; 
		$name = $_POST['name'];
		$price = $_POST['price'];
		$category = $_POST['category'];

		$sql = "UPDATE `products` SET `category`='$category',`name`='$name', `price`='$price' WHERE id = $id";

		$query = mysqli_query($conn, $sql);

		if ($query) {
			?>

			<script type="text/javascript">
				alert('Data updated successfully');
				location.replace("../products.php");
			</script>


			<?php
		}else {
			echo "Couldn't update data";
		}
	}


	?>
	

	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 m-auto">
					<form action="" method="post">
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Name</label>
							<input type="text" name="name" value="<?php echo $nm = $_GET['nm'];  ?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Price</label>
							<input type="text" name="price" value="<?php echo $nm = $_GET['pr'];  ?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Category</label>

							<select name="category" value="<?php echo $cat = $_GET['cat'];  ?>" class="form-control" id="exampleFormControlInput1" placeholder="Category">
								<option>Pizza</option>
								<option>Burger</option>
								<option>Desert</option>
							</select>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>


		</div>
	</section>

	<hr>



</body>
</html>