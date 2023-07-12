<?php

include 'conn.php';

session_start();


if (isset($_POST['submit']) && isset($_FILES['file'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$files = $_FILES['file'];

	$filename = $files['name'];
	$fileerror = $files['error'];
	$filetemp = $files['tmp_name'];

	$fileext = explode('.', $filename);
	$filecheck = strtolower(end($fileext));

	$fileextstored = array('png', 'jpg', 'jpeg');

	if (in_array($filecheck, $fileextstored)) {

		$location = 'upload/';
		$destinationfile = $location .$filename;
		move_uploaded_file($filetemp, $destinationfile);

		$insert = "INSERT INTO `products`(`name`, `price`, `category`, `image`) VALUES ('$name', '$price', '$category', '$destinationfile')";

		$query = mysqli_query($conn, $insert);

		if ($query) {
			?>

			<script type="text/javascript">
				alert('Item added into menu successfully.');
				location.replace("products.php");
			</script>

			<?php
		}else {
			echo mysql_error();
		}
	}

	// code...
}



?>