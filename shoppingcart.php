<?php

session_start();

include 'conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive food website design tutorial </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Lato font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Nova font -->
    <link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- custom css file link  -->
    <style type="text/css">
        <?php include 'style.css' ?>;
    </style>

</head>
<body style="background-color: #eee">

    <!-- header section starts  -->

    <?php  include 'header.php'; ?>

    <section class="h-100 cart" >
        <div class="container h-100 py-5">


            <?php

            if(empty($_SESSION['username']))
            {
                ?>

                <script type="text/javascript">
                    alert("You need to sign in first");
                    location.replace("login.php");
                </script>

                <?php
            }else {

                $uid = $_SESSION['usid'];

                $display = "SELECT * FROM `cart` WHERE uid = $uid GROUP BY cid ORDER BY `date` ASC";

                $total = "SELECT SUM(price) FROM `cart` WHERE uid = $uid";

                $tquery = mysqli_query($conn, $total);

                $dquery = mysqli_query($conn, $display);

                if ($dquery) {

                    echo "<div class='row gy-4 gx-md-3 my-5 d-flex justify-content-center align-items-center h-100'>";

                    if (mysqli_num_rows($dquery) > 0) {

                        echo "<div class='d-flex justify-content-between align-items-center mb-4'>
                        <h2 class='fw-normal mb-0 text-black'><a href='index.php'>Home</a> / Shopping Cart</h2>
                        </div>";

                        while ($rows = mysqli_fetch_array($dquery)) {

                            $id = $rows['cid'];

                            $sdisplay = "SELECT * FROM `products` WHERE id= $id";

                            $sdquery = mysqli_query($conn, $sdisplay);

                            if ($prow = mysqli_fetch_array($sdquery)) {

                                $pid = $prow['id'];

                                ?>  

                                <div class="col-12">

                                    <div class="card rounded-3 mb-4">
                                        <div class="card-body p-4">
                                            <div class="row d-flex justify-content-between align-items-center">
                                              <div class="col-md-2 text-center col-lg-2 col-xl-2">
                                                <img src="<?php echo $prow['image']; ?>" alt="<?php echo $prow['name']; ?>" class="img-fluid" style="width: 10rem; height: 10rem;">
                                            </div>

                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h5 class="lead fw-normal mb-2"><?php  echo $prow['name']   ?></h5>
                                                <p><?php  echo $prow['category']   ?></p>
                                            </div>

                                            <div class="col-md-3 col-6 col-lg-3 col-xl-2 d-flex justify-content-center align-items-center">

                                                <a href="deletefc.php?id=<?php echo $rows['id'] ?>" class="button btn-link px-2"><i class="fas fa-minus"></i></a>

                                                <input id="form1" disabled  min="0" name="quantity" value="<?php 


                                                $uid = $_SESSION['usid'];


                                                $quantity = "SELECT * FROM `cart` WHERE cid = $id AND uid = $uid";

                                                $qquery = mysqli_query($conn, $quantity);

                                                if ($qcount = mysqli_num_rows($qquery)) {

                                                   echo $qcount;

                                                }

                                                ?>" type="number"
                                                class="form-control py-2 form-control-sm" style="font-size: 15px;" />

                                                <a href="cart.php?id=<?php echo $prow['id'] ?> &  pr=<?php echo $prow['price'] ?>" class="button btn-link px-2"><i class="fas fa-plus"></i></a>
                                            </div>

                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h2 class="mb-0"><b>Rs. <?php  echo $prow['price']   ?></b></h2>
                                            </div>

                                            <div class="col-md-1 col-lg-1 col-xl-1 text-md-end">
                                                <a href="delall.php?id=<?php echo $rows['id'] ?> & cid=<?php echo $rows['cid'] ?>" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <?php
            // code...
                            }


                        }

                        /*This is the logic for total price card*/

                        ?>

                        <div class="card">
                            <div class="row">


                                <?php 

                                while ($trows = mysqli_fetch_array($tquery)) {

                                    ?>

                                    <div class="col-md-6 my-auto ps-5">
                                        <h2><b>Total: Rs. </b>
                                            <?php

                                            echo $trows['SUM(price)'];

                                        ?></h2>
                                    </div>

                                    <div class="col-md-6 my-auto text-md-end text-center">
                                        <div class="card-body">

                                            <a href="payment.php?nm=<?php echo $prow['name'] ?> & id=<?php echo $prow['id'] ?> &  cat=<?php echo $prow['category'] ?> & price=<?php echo $trows['SUM(price)'] ?> & quantity=<?php echo $qcount ?>" class="btn btn-block btn-lg m-auto">Buy Now</a>

                                            

                                        </div>
                                    </div>

                                    <?php

                                }



                                ?>




                            </div>


                        </div>



                        <?php 


                    } else {
                        echo "<div class='empty'><h1>Your shopping cart is empty</h1></div>";
                    }



                    echo "</div>";


                };


            }


            ?>
        </div>
    </section>



    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>


    <!-- custom js file link  -->
    <script src="script.js"></script>


</body>
</html>