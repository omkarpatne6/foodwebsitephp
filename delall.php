<?php

include "conn.php";

session_start();

$id = $_GET['id']; 

$user = $_SESSION['usid'];

$cid = $_GET['cid'];

$delete  = "DELETE FROM `cart` WHERE uid = $user AND cid = $cid";

$dquery = mysqli_query($conn, $delete);

if ($dquery) {
	echo "Redirecting";
	
	?>

	<script type="text/javascript">
		location.replace("shoppingcart.php");
	</script>
	// code...

	<?php
	
}else {
	echo "error deleting the error";
}

?>