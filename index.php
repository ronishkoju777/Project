<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mega Canteen</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Mega Canteen</a>

   <nav class="navbar">
     
      <a href="signin.php">sign in</a>
      <a href="signup.php">Sign up</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/slide1.jpg) no-repeat">
            <div class="content">
               <span>Order, Eat, Repeat</span>
               <h3>Order your food instant.</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/slide 2.jpg) no-repeat">
            <div class="content">
               <span>Order, Eat, Repeat</span>
               <h3>Order your food instant.</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Order, Eat, Repeat</span>
               <h3>Order your food instant.</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      
   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Healthy Food</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Instant Serve</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Packing</h3>
      </div>

    

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/slide 2.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>We provide the best foods for students and teachers in Nepal Mega College. Babarmahal, Kathmandu</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Special Items </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/pizza.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pizza</h3>
            <p>"Pizza is not a 'trend' it's a way of life" </p>
            <a href="signin.php" class="btn">Order now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/fried rice.jpg" alt="">
         </div>
         <div class="content">
            <h3>Fried Rice</h3>
            <p>"Fried rice makes your boiled rice taste better!"</p>
            <a href="signin.php" class="btn">Order now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/samosa.jpg" alt="">
         </div>
         <div class="content">
            <h3>Samosa</h3>
            <p>Yeah I’m pretty wholesome. I can fit a wholesome… osa in my mouth.</p>
            <a href="signin.php" class="btn">Order now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="foodlist.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->


<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="order.php"> <i class="fas fa-angle-right"></i> Order</a>
         <a href="contactus.php"> <i class="fas fa-angle-right"></i> Contact Us</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 9843645412 </a>
         <a href="#"> <i class="fas fa-phone"></i> 9867518938 </a>
         <a href="#"> <i class="fas fa-envelope"></i>megacanteen@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Babarmahal, Kathmandu </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit">  <span>Mega Canteen </span> | all rights reserved! 2022 </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>