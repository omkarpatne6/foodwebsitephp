<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
	?>

	<script type="text/javascript">
		alert("Connection to the database failed")
	</script>

	<?php
}


?>