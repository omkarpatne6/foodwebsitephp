<?php 

include 'conn.php'; 

session_start();

$uid = $_SESSION['usid'];

$cid = $_POST['cid'];

if(isset($_POST['amt']) && isset($_POST['name'])) {
	$amt = $_POST['amt'];
	$name = $_POST['name'];
	$quantity = $_POST['quantity'];
	$paystatus = "pending";

	$insert = "INSERT INTO `payment`(`name`, `amount`,`quantity`, `paystatus`, `uid`, `cid`) VALUES ('$name', '$amt','$quantity', '$paystatus', '$uid', '$cid')";

	$iquery = mysqli_query($conn, $insert);

	$_SESSION['OID'] = mysqli_insert_id($conn);


}


if(isset($_POST['payid']) && isset($_SESSION['OID'])) {
	$payment_id = $_POST['payid'];

	$update = "UPDATE `payment` SET `paystatus`='complete',`payid`='$payment_id' WHERE id = '".$_SESSION['OID']."'";

	$iquerys = mysqli_query($conn, $update);


}

$to = "omkarpatne6@gmail.com";
$subject = "Test email";
$message = "Your order of " .$_POST['name']. "for Rs." .$_POST['amt']. " has been successfully placed. Order ID is " .$_POST['payid']. "Thank you for shopping with us..";
$header = "From: omkar@gmail.com";

if (mail($to, $subject, $message, $header)) {
	// code...
	echo "success";
}


$delete  = "DELETE FROM `cart` WHERE uid = $uid AND cid = $cid";

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