<?php

include "conn.php";

session_start();

$id = $_GET['id']; 

$delete  = "DELETE FROM `products` WHERE id = $id";

$dquery = mysqli_query($conn, $delete);

if ($dquery) {
	echo "Redirecting";
	
	?>

	<script type="text/javascript">
		location.replace("../products.php");
	</script>
	// code...

	<?php
	
}else {
	echo "error deleting the error";
}

?>