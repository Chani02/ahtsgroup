<?php
switch ($_SERVER['PHP_SELF']) {
   case '/index.php':
      $title = 'Accueil';
      break;
   
   case '/about.php':
      $title = 'A propos';
      break;
   case '/service.php':
      $title = 'Services';
      break;
   
   case '/blog.php':
      $title = 'Blog';
      break;
      
   case '/contact.php':
      $title = 'Contact';
      break;
      
   default:
      $title = "";
      break;
}

?>

<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.hixstudio.net/technix-prv/technix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 00:28:57 GMT -->
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title> <?=$title?> American High Technology Services Group</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.ico">

      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/splide.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nouislider.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="assets/css/spacing.css">
      <link rel="stylesheet" href="assets/css/main.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- pre loader area start -->
         <!-- <div id="loading">
            <div id="loading-center">
               <div id="loading-center-absolute">
                  <div class="object" id="object_four"></div>
                  <div class="object" id="object_three"></div>
                  <div class="object" id="object_two"></div>
                  <div class="object" id="object_one"></div>
               </div>
            </div>
         </div> -->
      <!-- pre loader area end -->
      

      <!-- back to top start -->
         <div class="back-to-top-wrapper">
            <button id="back_to_top" type="button" class="back-to-top-btn">
               <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>               
            </button>
         </div>
      <!-- back to top end -->

      <!-- search popup start -->
         <div class="search__popup">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="search__wrapper">
                        <div class="search__top d-flex justify-content-between align-items-center">
                           <div class="search__logo">
                              <a href="home-main.html">
                                 <img src="assets/img/logo/footer-logo.png" alt="logo">
                              </a>
                           </div>
                           <div class="search__close">
                              <button type="button" class="search__close-btn search-close-btn">
                                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>                                 
                              </button>
                           </div>
                        </div>
                        <div class="search__form">
                           <form action="#">
                              <div class="search__input">
                                 <input class="search-input-field" type="text" placeholder="Type here to search...">
                                 <span class="search-focus-border"></span>
                                 <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="search-popup-overlay"></div>
      <!-- search popup end -->

      
      <!-- offcanvas area start -->
         <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
               <div class="offcanvas__close">
                  <button class="offcanvas__close-btn offcanvas-close-btn">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>
                  </button>
               </div>
               <div class="offcanvas__content">
                  <div class="offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                     <div class="offcanvas__logo logo">
                        <a href="home-main.html">
                           <img src="assets/img/logo/logo.png" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="mobile-menu fix d-lg-none"></div>
                  <div class="tp-mobile-menu-pos"></div>
                  <div class="offcanvas__popup">
                     <p style="text-align: justify;">American High Technology Services, nous vous fournissons le meilleur de l'Amérique.</p>
                     <!-- <div class="offcanvas__popup-gallery">
                        <h4 class="offcanvas__title">Gallery</h4>
                        <a class="popup-image" href="assets/img/portfolio/img-1.jpg">
                           <img src="assets/img/portfolio/img-1.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/img-2.jpg">
                           <img src="assets/img/portfolio/img-2.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/img-3.jpg">
                           <img src="assets/img/portfolio/img-3.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/img-4.jpg">
                           <img src="assets/img/portfolio/img-4.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/img-5.jpg">
                           <img src="assets/img/portfolio/img-5.jpg" alt="">
                        </a>
                        <a class="popup-image" href="assets/img/portfolio/img-6.jpg">
                           <img src="assets/img/portfolio/img-6.jpg" alt="">
                        </a>
                     </div> -->
                  </div>
                  <div class="offcanvas__contact">
                     <h4 class="offcanvas__title">Contacts</h4>
                     <div class="offcanvas__contact-content d-flex">
                        <div class="offcanvas__contact-content-icon">
                           <i class="fa-sharp fa-solid fa-location-dot"></i>
                        </div>
                        <div class="offcanvas__contact-content-content">
                           <a href="https://maps.app.goo.gl/yWiyohPXG944xnTn8">3061 W 92nd Ave Westminster CO 80031</a>
                        </div>
                     </div>
                     <div class="offcanvas__contact-content d-flex">
                        <div class="offcanvas__contact-content-icon">
                           <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-content-content">
                           <a href="mailto:contact@ahtsgroup.com"> contact@ahtsgroup.com</a>
                        </div>
                     </div>
                     <div class="offcanvas__contact-content d-flex">
                        <div class="offcanvas__contact-content-icon">
                           <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-content-content">
                           <a href="tel:+17208389047">+1 720 838 9047</a>
                        </div> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="body-overlay"></div>
      <!-- offcanvas area end -->

