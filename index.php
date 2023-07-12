
<?php

session_start();

include 'conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyFood - Fast Food Delivery</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Lato font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome icons CDN -->
    <script src="https://kit.fontawesome.com/87d90c68b6.js" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <style type="text/css">
        <?php include 'style.css' ?>;
    </style>

</head>
<body>

    <div id="menu-bar" class="d-none"></div>
    <!-- header section starts  -->

    <?php  include 'header.php'; ?>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>food made with love</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas accusamus tempore temporibus rem amet laudantium animi optio voluptatum. Natus obcaecati unde porro nostrum ipsam itaque impedit incidunt rem quisquam eos!</p>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="image">
            <img src="images/home-img.png" alt="">
        </div>

    </section>

    <!-- home section ends -->

    <!-- speciality section starts  -->

    <section class="speciality bg-dark" id="speciality">

        <h1 class="heading"> our <span>speciality</span> </h1>

        <div class="container">

            <div class="row gy-5">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <img class="image" src="images/s-img-1.jpg" alt="">
                        <div class="content">
                            <img src="images/s-1.png" alt="">
                            <h3>tasty burger</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <img class="image" src="images/s-img-2.jpg" alt="">
                        <div class="content">
                            <img src="images/s-2.png" alt="">
                            <h3>tasty pizza</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <img class="image" src="images/s-img-3.jpg" alt="">
                        <div class="content">
                            <img src="images/s-3.png" alt="">
                            <h3>cold ice-cream</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <img class="image" src="images/s-img-4.jpg" alt="">
                        <div class="content">
                            <img src="images/s-4.png" alt="">
                            <h3>cold drinks</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <img class="image" src="images/s-img-5.jpg" alt="">
                        <div class="content">
                            <img src="images/s-5.png" alt="">
                            <h3>tasty sweets</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                        </div>
                    </div> 
                </div>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <img class="image" src="images/s-img-6.jpg" alt="">
                        <div class="content">
                            <img src="images/s-6.png" alt="">
                            <h3>healty breakfast</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </section>

    <!-- speciality section ends -->

    <!-- popular section starts  -->

    <section class="popular" id="popular">

        <h1 class="heading"> most <span>popular</span> foods </h1>

        <div>

            <?php

            $display = "SELECT * FROM `products`";

            $dquery = mysqli_query($conn, $display);

            echo "<div class='row gy-4 gx-md-3 my-5'>";

            while ($rows = mysqli_fetch_array($dquery)) {

            ?>  <!-- These cards are being fetched from the database -->
            <div class="col-md-4 col-sm-6 col-12 col-lg-3 ">
                <div class="box h-100">
                    <span class="price">Rs. <?php  echo $rows['price']   ?></span>
                    <img src="<?php echo $rows['image']; ?>" class="img-fluid" style="width: 15rem; height: 15rem;">
                    <h4 class="mt-2"><?php  echo $rows['name']   ?></h4>
                    <h5><?php  echo $rows['category']   ?></h5>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="d-flex mt-auto">
                        <a href="cart.php?nm=<?php echo $rows['name'] ?> & id=<?php echo $rows['id'] ?> &  cat=<?php echo $rows['category'] ?> & pr=<?php echo $rows['price'] ?>" class="btn flex-fill">Add to cart</a>
                        <a href="payment.php?nm=<?php echo $rows['name'] ?> & id=<?php echo $rows['id'] ?> &  cat=<?php echo $rows['category'] ?> & pr=<?php echo $rows['price'] ?>" class="btn flex-fill">Buy Now</a>
                    </div>
                </div>
            </div>


            <?php
            // end...
        }

        echo "</div>";


        ?>
 
        

    </div>

</section>

<!-- popular section ends -->

<!-- steps section starts  -->

<div class="step-container  py-5" style="background-image: url('https://wallpapercave.com/wp/wp2815529.jpg'); background-size: cover; background-repeat: no-repeat;">

    <h1 class="heading">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="images/step-1.jpg" alt="">
            <h3>choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="images/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-3.jpg" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.jpg" alt="">
            <h3>and finally, enjoy your food</h3>
        </div>

    </section>

</div>

<!-- steps section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">order now</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> our customers <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic1.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>
        <div class="box">
            <img src="images/pic2.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>
        <div class="box">
            <img src="images/pic3.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading"> <span>order</span> now </h1>

    <div class="row">

        <div class="image">
            <img src="images/order-img.jpg" alt="">
        </div>

        <?php 

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $userid = $_SESSION['usid'];

            $feedback = "INSERT INTO `feedback`(`userid`,`name`, `email`, `message`) VALUES ('$userid','$name', '$email', '$message')";

            $feedbackquery = mysqli_query($conn, $feedback);

            if ($feedbackquery) {

                ?> 

                <script>
                    alert('Feedback has been successfully')
                </script>

                <?php
            }else {

                ?> 

                <script>
                    alert('Feedback has been successfully')
                </script>

                <?php

            }
            // code...
        }





        ?>

        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

            <div class="inputBox">
                <input type="text" placeholder="name" name="name">
                <input type="email" placeholder="email" name="email">
            </div>

            <textarea placeholder="address" name="message" cols="30" rows="10"></textarea>

            <button type="submit" name="submit" class="mb-3 btn btn-primary hover-underline-animation w-100">Login</button>

        </form>

    </div>

</section>

<!-- order section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>

    <h1 class="credit"> created by <span> mr. web designer </span> | all rights reserved! </h1>

</section>

<!-- scroll top button  -->
<a href="#home" class="fa-solid fa-angles-up" id="scroll-top"></a>

<!-- loader  -->
<!-- <div class="loader-container">
    <img src="images/loader.gif" alt="loader">
</div> -->

<script type="text/javascript" src="script.js"></script>

</body>
</html>