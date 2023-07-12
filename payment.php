<?php

include "conn.php";

session_start();

/*If the user is logged in then he can't access this page*/
if (!isset($_SESSION['username'])) {
		// code...
	?>

	<script type="text/javascript">
		alert('You are not logged in.');
		location.replace("index.php");
	</script>

	<?php


}

$api = "rzp_test_k0mAGrWM3stpL9";	

$price = $_GET['price']; 

$nm = $_GET['nm'];

$quantity = $_GET['quantity'];

$cid = $_GET['id'];

?>

<!-- Jquery minified -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<button id="rzp-button1">Pay</button>
<script>

    jQuery.ajax({
        type:'post',
        url:'payment_process.php',
        data:"&amt="+<?php echo $price; ?>+"&name="+'<?php echo $nm; ?>'+"&cid="+<?php echo $cid; ?>+"&quantity="+<?php echo $quantity ?>,
        success:function(result) {

            
            var options = {
                "key": "<?php echo $api; ?>", // Enter the Key ID generated from the Dashboard
                "amount": "<?php echo $price * 100; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "INR",
                "name": "SkyFood Inc.",
                "description": "Fast-Food Delivery",
                "image": "https://example.com/your_logo",
                "handler": function (response){

                    jQuery.ajax({
                        type:'post',
                        url:'payment_process.php',
                        data:"payid=" + response.razorpay_payment_id,
                        success:function(result) {
                            window.location.href = "orders.php";
                        }

                    });


           /*alert(response.razorpay_payment_id);
           alert(response.razorpay_order_id);
           alert(response.razorpay_signature)*/
       }
   };
   var rzp1 = new Razorpay(options);
   rzp1.open();
}

});


</script>


<style>
	#rzp-button1 {
		display: none;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$("#rzp-button1").click(); 
	});
</script>