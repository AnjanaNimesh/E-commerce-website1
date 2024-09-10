<?php 
    //get a username on the navigation bar in DB
    session_start();
    require "database.php";
    $displayText1 = "NULL";


   if(isset($_GET['username'])){
      $displayText1 = $_GET['username'];
    }
    else{
      $displayText1 = "";
    }
?>



<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

  ..    <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>E-WATCH</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav-container">
            <a href="index.php" class="nav__logo">
               <img src="assets/img/logo.png" alt="logo">E-WATCH
            </a>

            <div class="nav__menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="#home" class="nav__link active-link">
                        <i class="ri-home-line"></i>
                        
                        <span>Home</span>
                     </a>
                  </li>
                  <li class="nav__item">
                     <a href="#featured" class="nav__link ">
                     <i class="ri-thumb-up-line"></i>
                        <span>Most Popular</span>
                     </a>
                  </li>
                  <li class="nav__item">
                     <a href="#discount" class="nav__link ">
                     <i class="ri-percent-line"></i>
                        <span>Discount</span>
                     </a>
                  </li>
                  <li class="nav__item">
                     <a href="#new" class="nav__link">
                     <i class="ri-time-line"></i>
                        <span>New Watches</span>
                     </a>
                  </li>
                  <li class="nav__item">
                     <a href="Menpage/index.html" class="nav__link">
                     <i class="ri-men-line"></i>
                        <span>Men</span>
                     </a>
                  </li>
                  <li class="nav__item">
                     <a href="Womenpage/index.html" class="nav__link">
                     <i class="ri-women-line"></i>
                        <span>Women</span>
                     </a>
                  </li>
                  <li class="nav__item">
                     <a href="Smatwatchpage/index.html" class="nav__link">
                     <i class="ri-device-line"></i>
                        <span>Smart Watches</span>
                     </a>
                  </li>
                  
               </ul>
            </div>

            <div class="nav__actions">
                <!-- serach button   -->
               <i class="ri-search-line search-button " id="search-button"></i>

               <!-- signup button -->
               <a href="register.php"><i class="ri-user-add-line signup-button" id="signup-button"></i></a>

               <!-- login button  -->
               <a href="login.php"><i class="ri-user-line login-button" id="login-button"></i></a>

               <!-- theme button  -->
               <i class="ri-moon-line change-theme" id="theme-button"></i>
            </div>
         </nav>
      </header>

      <!--==================== SEARCH ====================-->
      <div class="search" id="search-content">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you loooking for?" class="search__input">
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <div class="home section" id="home">
               <div class="home__container container grid">
                  <div class="home__data">
                     <h2>Welcome, <?php echo $displayText1; ?></h2>
                     <h1 class="home__title">
                       Incomparable<br>Timepieces
                     </h1>

                     <p class="home__description">
                        Find the latest arrival of the new imported watches, with a modern and resistant design.
                     </p>

                     <a href="about.html" class="button">About Us</a>
                  </div>

                  <div class="home__images">
                     <div class="home__swiper swiper">
                        <div class="swiper-wrapper">
                           <article class="home__article swiper-slide">
                              <img src="assets/img/watches-1.png" alt="image" class="home__img">
                           </article>
                           <article class="home__article swiper-slide">
                              <img src="assets/img/watches-2.png" alt="image" class="home__img">
                           </article>
                           <article class="home__article swiper-slide">
                              <img src="assets/img/watches-3.png" alt="image" class="home__img">
                           </article>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== SERVICES ====================-->
         <section class="services section">
            <div class="services__container container grid">
               <article class="services__card">
                  <i class="ri-truck-line"></i>
                  <h3 class="services__title">Free Shipping</h3>
                  <p class="services__description">Order More Than $100</p>
               </article>

               <article class="services__card">
                  <i class="ri-lock-2-line"></i>
                  <h3 class="services__title">Secure Payment</h3>
                  <p class="services__description">100% Secure Payment</p>
               </article>

               <article class="services__card">
                  <i class="ri-customer-service-2-line"></i>
                  <h3 class="services__title">24/7 Support</h3>
                  <p class="services__description">Call us anytime</p>
               </article>
            </div>
         </section>

         <!--==================== FEATURED ====================-->
         <section class="featured section" id="featured">
            <h2 class="section__title">
               Most Popular
            </h2>

            <div class="featured__container container">
               <div class="featured__swiper swiper">
                  <div class="swiper-wrapper">
                     <article class="featured__card swiper-slide">
                        <img src="Womenpage/women2.webp" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Balmain Madrigal</h2>
                        <div class="featured__prices">
                           <!-- <span class="featured_discount">$11.99</span> -->
                           <span class="featured_price">$102</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                        
                     </article>
   
                     <article class="featured__card swiper-slide">
                        <img src="Menpage/2.webp" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Expendition Brown</h2>
                        <div class="featured__prices">
                           <!-- <span class="featured_discount">$11.99</span> -->
                           <span class="featured_price">$199</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                     </article>
   
                     <article class="featured__card swiper-slide">
                        <img src="Smatwatchpage/sw1.jpg" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Amazfit GTR 3 Pro</h2>
                        <div class="featured__prices">
                           <!-- <span class="featured_discount">$11.99</span> -->
                           <span class="featured_price">$200</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                       
                     </article>
   
                     <article class="featured__card swiper-slide">
                        <img src="Menpage/1.webp" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Transcend Leather</h2>
                        <div class="featured__prices">
                           <!-- <span class="featured_discount">$11.99</span> -->
                           <span class="featured_price">$149</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                       
                     </article>
   
                     <article class="featured__card swiper-slide">
                        <img src="Menpage/3.webp" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Q Marmont Archive</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$199</span>
                           <span class="featured__price">$230</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                       
                     </article>
   
                     <article class="featured__card swiper-slide">
                        <img src="Smatwatchpage/sw2.jpg" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Haylou RS4 Plus</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$156</span>
                           <span class="featured__price">$170</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                       
                     </article>
   
                     <article class="featured__card swiper-slide">
                        <img src="Womenpage/women4.webp" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Iissot Carson</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$155</span>
                           <span class="featured__price">$160</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                        
                     </article>
   
                     <article class="featured__card swiper-slide">
                        <img src="Smatwatchpage/sw3.jpg" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Amazfit GTS 4</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$189</span>
                           <span class="featured__price">$200</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                       
                     </article>
   
                     <article class="featured__card swiper-slide">
                        <img src="Menpage/5.webp" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Fairfield Chronograph</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$99</span>
                           <span class="featured__price">$130</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                       
                     </article>
   
                     <article class="featured__card swiper-slide">
                        <img src="Womenpage/women3.webp" alt="image" class="featured__img">
   
                        <h2 class="featured__title">Rado Magrita</h2>
                        <div class="featured__prices">
                           <!-- <span class="featured_discount">$200</span> -->
                           <span class="featured_price">$189</span>
                        </div>
   
                        <button class="button">Add To Cart</button>
   
                      
                     </article>
                  </div>
                  
                  <!-- <div class="swiper-button-prev">
                     <i class="ri-arrow-left-s-line"></i>
                  </div> -->
                  <div class="swiper-button-next">
                     <i class="ri-arrow-right-s-line"></i>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== DISCOUNT ====================-->
         <section class="discount section" id="discount">
            <div class="discount__container container grid">
               <div class="discount__data">
                  <h2 class="discount__title section__title">
                     Up To 50% Discount 
                  </h2>

                  <p class="discount__description">
                     Take advantage of the discount days we 
                     have for you, buy the best watches from our store
               , the more you buy, the more 
                     discounts we have for you.
                  </p>

                  <a href="" class="button">Shop Now</a>
               </div>

               <div class="discount__images">
                  <img src="assets/img/s2.png" alt="image" class="discount__img-1">
                  <img src="assets/img/s1.png" alt="image" class="discount__img-2">
               </div>
            </div>
         </section>

         <!--==================== NEW ARRIVALS ====================-->
         <section class="new section" id="new">
            <h2 class="section__title">
               New Arrivals
            </h2>

            <div class="new__container container">
               <div class="new__swiper swiper">
                  <div class="swiper-wrapper">
                     <a href="" class="new__card swiper-slide">
                        <img src="assets/img/new1.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Hagrid Ladies</h2>
                           <div class="new__prices">
                              <!-- <span class="new__discount">$7.99</span> -->
                              <span class="new_price">$149</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="" class="new__card swiper-slide">
                        <img src="assets/img/new2.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Fossil Rye Gold and Silver</h2>
                           <div class="new__prices">
                              <!-- <span class="new__discount">$7.99</span> -->
                              <span class="new_price">$233</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="" class="new__card swiper-slide">
                        <img src="assets/img/new3.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Olivia Burton Celestial</h2>
                           <div class="new__prices">
                              <!-- <span class="new__discount">$7.99</span> -->
                              <span class="new_price">$159</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>              

                   
                  </div>
               </div>

               <div class="new__swiper swiper">
                  <div class="swiper-wrapper">
                     <a href="" class="new__card swiper-slide">
                        <img src="assets/img/new4.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Patek Philippe</h2>
                           <div class="new__prices">
                              <span class="new__discount">$159</span>
                              <span class="new__price">$170</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="" class="new__card swiper-slide">
                        <img src="assets/img/new5.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Caiser Omega</h2>
                           <div class="new__prices">
                              <span class="new__discount">$179</span>
                              <span class="new__price">$199</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="" class="new__card swiper-slide">
                        <img src="assets/img/new6.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Vacheron Constantin</h2>
                           <div class="new__prices">
                              <span class="new__discount">$199</span>
                              <span class="new__price">$205</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     
                  </div>
               </div>
            </div>
         </section>

         <!--==================== JOIN ====================-->
         <section class="join section">
            <div class="join__container">
               <img src="assets/img/c7.jpg" alt="image" class="join__bg">

               <div class="join__data container grid">
                  <h2 class="join__title section__title">
                     Shop with Confidence,<br>
                      experience top-notch customer service!
                  </h2>

                  <form action="" class="join__form">
                     <input type="email" placeholder="Enter Email" class="join__input">
                     <a href="contact.html" class="button">Contact Us</a>
                  </form>
               </div>
            </div>
         </section>

         <!--==================== home info ====================-->

         <div class="home__info">
                  <img src="assets/img/watches-border.png" alt="image" class="home__info-img">
                  
                  <div class="home__info-content">
                     <p class="home__info-description">
                        Personalized watches are a job of quality 
                        and commitment. Each piece is the result of a 
                        work of co-creation of innovation and responsible 
                        sensitivity for users.
                     </p>

                     <a href="about.html" class="home__button-link">About Us
                     </a>
                  </div>
         </div>


      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="index.php" class="footer__logo">
               <img src="assets/img/logo.png" alt="logo">E-WATCH
                  </a>
               <p class="footer__description">
                  Find and explore the best <br>
                  watches crafted with precision  <br>
                  and elegance.
               </p>
            </div>

            <div class="footer__data grid">
               <div>
                  <h3 class="footer__title">About</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="" class="footer__link"> Awards</a>
                     </li>

                     <li>
                        <a href="" class="footer__link">FAQs</a>
                     </li>

                     <li>
                        <a href="" class="footer__link">Privacy policy</a>
                     </li>

                     <li>
                        <a href="" class="footer__link">Terms of services</a>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Company</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="" class="footer__link"> Blogs</a>
                     </li>

                     <li>
                        <a href="" class="footer__link"> Community</a>
                     </li>

                     <li>
                        <a href="" class="footer__link">Our team</a>
                     </li>

                     <li>
                        <a href="" class="footer__link">Help Center</a>
                     </li>
                  </ul>
               </div>

               
               <div>
                  <h3 class="footer__title">Contact</h3>

                  <ul class="footer__links">
                     <li>
                        <address class="footer__info">
                           e-watch,comany <br>
                           Colombo 7
                        </address>
                     </li>

                     <li>
                        <address class="footer__info">
                           e.watch@email.com <br>
                           0117-654-321
                        </address>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Social</h3>

                  <div class="footer__social">
                     <a href=" https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-line"></i>
                     </a>

                     <a href=" https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                     </a>

                     <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-x-line"></i>
                     </a>
                  </div>
               </div>
               
            </div>
         </div>

         <span class="footer__copy">
            &#169; All Rights Reserved | 2024
         </span>
      </footer>

      <!--========== SCROLL UP ==========-->
      <a href="" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>

      <!--=============== SCROLLREVEAL ===============-->
      <script src="assets/js/scrollreveal.min.js"></script>

      <!--=============== SWIPER JS ===============-->
      <script src="assets/js/swiper-bundle.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>