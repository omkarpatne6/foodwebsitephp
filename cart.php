<?php  

include "conn.php";

session_start();

$id = $_GET['id']; 

$price = $_GET['pr'];

$uid = $_SESSION['usid'];

$cinsert = "INSERT INTO `cart`(`cid`, `uid`, `price`) VALUES ('$id', '$uid', '$price')";

$cquery = mysqli_query($conn, $cinsert);

if ($cquery) {
	// code...
	echo "Loading...";
	?>

	<script type="text/javascript">
		location.replace("shoppingcart.php");
	</script>

	<?php
}




?>