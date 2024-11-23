<!doctype html>
<html lang="">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--head.php-->
   <?php
   include 'assets/links/head-links.php';
   ?>
   <!--head.php-->

   <title>About</title>
</head>

<body>

   <!--navbar-->
   <?php
   include 'assets/links/nav.php';
   ?>
   <!--navbar-->

   <!--banner-->
   <section class="sub-banner-sec w-100 float-left d-table position-relative">
      <div class="gradient-overlay"></div>
      <div class="d-table-cell align-middle">
         <div class="container">
            <div class="banner-inner-con text-white text-center wow bounceInUp" data-wow-duration="2s">
               <h1 class="position-relative">About Us</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb d-inline-block">
                     <li class="breadcrumb-item d-inline-block"><a class="text-white" href="index.php">Home</a></li>
                     <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">About</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!--banner-->
   <!--conference-sec-->
   <section class="conference-main-sec w-100 float-left padding-top padding-bottom position-relative">
      <div class="container">
         <div class="generic-title text-center wow bounceInUp" data-wow-duration="2s">
            <h2>Why Attend Our Conference</h2>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
               sint occaecat cupidatat non proident.</p>
         </div>
         <div class="row">
            <div class="col-lg-3">
               <div class="conference-left-sec">
                  <div class="facility-con text-right wow bounceInUp" data-wow-duration="2s">
                     <figure>
                        <img src="assets/images/time-table-icon.png" alt="time-table-icon">
                     </figure>
                     <h3>Time Table</h3>
                     <p>Porro quisquam est, aui
                        dolorem isum ruia zero sit amet conseur
                        adieisci omnis</p>
                  </div>
                  <div class="facility-con text-right wow bounceInUp" data-wow-duration="2s">
                     <figure>
                        <img src="assets/images/drinks-icon.png" alt="drinks-icon.png">
                     </figure>
                     <h3>Fresh Drinks</h3>
                     <p class="mb-0">Porro quisquam est, aui
                        dolorem isum ruia zero sit amet conseur
                        adieisci omnis</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="conference-inner-sec position-relative">
                  <div class="conference-video-con text-center wow bounceInUp" data-wow-duration="2s">
                     <figure class="mb-0 d-inline-block">
                        <img src="assets/images/video-poster.jpg" alt="video-poster">
                     </figure>
                  </div>
                  <div id="light">
                     <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                     <video id="VisaChipCardVideo" width="600" controls>
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        <!--Browser does not support <video> tag -->
                     </video>
                  </div>

                  <div id="fade" onClick="lightbox_close();"></div>

                  <div class="video-play-icon d-inline-block">
                     <a href="javascript:void(0)" onclick="lightbox_open();">
                        <figure class="mb-0 d-inline-block">
                           <img src="assets/images/video-play-icon.png" alt="video-play-icon">
                        </figure>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="conference-right-sec">
                  <div class="facility-con wow bounceInUp" data-wow-duration="2s">
                     <figure>
                        <img src="assets/images/games-icon.png" alt="games-icon">
                     </figure>
                     <h3>Different Games</h3>
                     <p>Porro quisquam est, aui
                        dolorem isum ruia zero sit amet conseur
                        adieisci omnis</p>
                  </div>
                  <div class="facility-con wow bounceInUp" data-wow-duration="2s">
                     <figure>
                        <img src="assets/images/facility-icon.png" alt="facility-icon">
                     </figure>
                     <h3>Music Facility</h3>
                     <p class="mb-0">Porro quisquam est, aui
                        dolorem isum ruia zero sit amet conseur
                        adieisci omnis</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--conference-sec-->
   <!--countdown-sec-->
   <section class="countdown-sec w-100 float-left padding-top padding-bottom">
      <div class="container">
         <h2 class="text-white text-center wow bounceInUp" data-wow-duration="2s" id="headline">Remaining Time For Event Start</h2>
         <div id="countdown">
            <ul class="text-center mb-0 wow bounceInUp" data-wow-duration="2s">
               <li class="position-relative"><span id="days"></span>Days</li>
               <li class="position-relative"><span id="hours"></span>Hours</li>
               <li class="position-relative"><span id="minutes"></span>Minutes</li>
               <li class="position-relative"><span id="seconds"></span>Seconds</li>
            </ul>
         </div>
      </div>
   </section>
   <!--countdown-sec-->
   <!--about-sec-->
   <section class="info-main-sec w-100 float-left d-flex align-items-center">
      <div class="info-img-sec wow bounceInUp" data-wow-duration="2s">
      </div>
      <div class="info-text-con wow bounceInUp" data-wow-duration="2s">
         <h2>Who We Are</h2>
         <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur
            odit aut fugit, sed quia consequuntur magni dolores eos ratione voluptatem sequi nesciunt nerue porro ruisnuam
            dolorem ipsum quia dolor sit amet.</p>
         <p>Repellendus temporibus autem quibusdam et aut officiis
            debitis aut rerum necessitatibus saepe eveniet ut et volua
            repudiandae sint et molestiae non recusandae incidunt ua labore et dolore magnam aliquam minima veniam, auis nostrum exercitationem ullam.</p>
         <div class="generic-button red-btn">
            <a href="contact.php">BUY TICKET<i class="fas fa-angle-right"></i></a>
         </div>
      </div>
   </section>
   <!--about-sec-->
   <!--about-sec-->
   <section class="about-us-main-sec w-100 float-left d-flex align-items-center">
      <div class="about-text-con wow bounceInUp" data-wow-duration="2s">
         <h2>What We Do?</h2>
         <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur
            odit aut fugit, sed quia consequuntur magni dolores eos ratione voluptatem sequi nesciunt nerue porro ruisnuam
            dolorem ipsum quia dolor sit amet.</p>
         <p>Repellendus temporibus autem quibusdam et aut officiis
            debitis aut rerum necessitatibus saepe eveniet ut et volua
            repudiandae sint et molestiae non recusandae incidunt ua labore et dolore magnam aliquam minima veniam, auis nostrum exercitationem ullam.</p>
         <div class="generic-button red-btn">
            <a href="contact.php">BUY TICKET<i class="fas fa-angle-right"></i></a>
         </div>
      </div>
      <div class="about-us-image-sec wow bounceInUp" data-wow-duration="2s">
      </div>
   </section>
   <!--about-sec-->

   <!--sponsors-->
   <section class="sponsers-sec blog-main-sec w-100 float-left padding-top position-relative">
      <div class="container">
         <div class="generic-title text-center wow bounceInUp" data-wow-duration="2s">
            <h2>Our Event Sponsors</h2>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <br>
               sint occaecat cupidatat non proident.</p>
         </div>
         <div class="sponsers-images">
            <ul class="mb-0 list-unstyled float-left wow bounceInUp" data-wow-duration="2s">
               <li class="float-left pl-0">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon1.png" alt="sponser-icon1">
                  </figure>
               </li>
               <li class="float-left">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon2.png" alt="sponser-icon2">
                  </figure>
               </li>
               <li class="float-left">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon3.png" alt="sponser-icon3">
                  </figure>
               </li>
               <li class="float-left">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon4.png" alt="sponser-icon4">
                  </figure>
               </li>
               <!-- <li class="float-left pr-0">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon5.png" alt="sponser-icon5">
                  </figure>
               </li> -->
            </ul>
         </div>
         <div class="sponsers-images padding-top">
            <ul class="mb-0 list-unstyled float-left wow bounceInUp" data-wow-duration="2s">
               <li class="float-left pl-0">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon5.png" alt="sponser-icon1">
                  </figure>
               </li>
               <li class="float-left">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon6.png" alt="sponser-icon2">
                  </figure>
               </li>
               <li class="float-left">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon7.png" alt="sponser-icon3">
                  </figure>
               </li>
               <li class="float-left">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon8.png" alt="sponser-icon4">
                  </figure>
               </li>
            </ul>
         </div>
         <div class="sponsers-images padding-top">
            <ul class="mb-0 list-unstyled float-left wow bounceInUp" data-wow-duration="2s">
               <li class="float-left pl-0">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon9.png" alt="sponser-icon1">
                  </figure>
               </li>
               <li class="float-left">
                  <figure class="mb-0">
                     <img src="assets/images/sponser-icon010.png" alt="sponser-icon2">
                  </figure>
               </li>

            </ul>
         </div>
      </div>
   </section>
   <!--sponsors-->

   <!-- <section class="blog-main-sec w-100 float-left padding-top position-relative">
      <div class="container">
         <div class="generic-title text-center">
            <h2 class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Upcoming Events</h2>
            <p class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <br>
               sint occaecat cupidatat non proident.</p>
         </div>
         <div class="row">
            <div class="col-lg-4">
               <div class="blog-con">
                  <div class="blog-img">
                     <a href="#" data-toggle="modal" data-target="#blog1">
                        <figure class="mb-0 wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                           <img src="assets/images/blog-img1.jpg" alt="blog-img1">
                        </figure>
                     </a>
                     <div class="date text-white wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;"><span>18</span><small>Apr</small></div>
                  </div>
                  <div class="blog-inner-con">
                     <div class="admin-con wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                        <ul class="list-unstyled d-inline-block">
                           <li class="d-inline-block">
                              <i class="fas fa-user"></i>
                              <span>Jonahtan Rem</span>
                           </li>
                           <li class="d-inline-block">
                              <i class="fas fa-map-marker-alt"></i>
                              <span>Prism Club, Canada</span>
                           </li>
                        </ul>
                     </div>
                     <a href="#" data-toggle="modal" data-target="#blog1">
                        <h5 class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Maiores alias conseuatur aut
                           nerferendis eveniet</h5>
                     </a>
                     <p class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Officia deserunt mollitia animi res est laborum et dolorum fugaharum quide rerum facilis expedia distinctio. </p>
                     <div class="blog-arrow wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                        <a class="d-inline-block" href="#" data-toggle="modal" data-target="#blog1"><i class="fas fa-angle-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog-con">
                  <div class="blog-img blog-left-img">
                     <a href="#" data-toggle="modal" data-target="#blog2">
                        <figure class="mb-0 wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                           <img src="assets/images/blog-img2.jpg" alt="blog-img2">
                        </figure>
                     </a>
                     <div class="date text-white wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;"><span>21</span><small>Apr</small></div>
                  </div>
                  <div class="blog-inner-con blog-right-con">
                     <div class="admin-con wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                        <ul class="list-unstyled d-inline-block">
                           <li class="d-inline-block">
                              <i class="fas fa-user"></i>
                              <span>Jonahtan Rem</span>
                           </li>
                           <li class="d-inline-block">
                              <i class="fas fa-map-marker-alt"></i>
                              <span>Prism Club, Canada</span>
                           </li>
                        </ul>
                     </div>
                     <a href="#" data-toggle="modal" data-target="#blog2">
                        <h5 class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Maiores alias conseuatur aut
                           nerferendis eveniet</h5>
                     </a>
                     <p class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Officia deserunt mollitia animi res est laborum et dolorum fugaharum quide rerum facilis expedia distinctio. </p>
                     <div class="blog-arrow wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                        <a class="d-inline-block" href="#" data-toggle="modal" data-target="#blog2"><i class="fas fa-angle-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog-con">
                  <div class="blog-img">
                     <a href="#" data-toggle="modal" data-target="#blog3">
                        <figure class="mb-0 wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                           <img src="assets/images/blog-img3.jpg" alt="blog-img3">
                        </figure>
                     </a>
                     <div class="date text-white wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;"><span>26</span><small>Apr</small></div>
                  </div>
                  <div class="blog-inner-con">
                     <div class="admin-con wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                        <ul class="list-unstyled d-inline-block">
                           <li class="d-inline-block">
                              <i class="fas fa-user"></i>
                              <span>Jonahtan Rem</span>
                           </li>
                           <li class="d-inline-block">
                              <i class="fas fa-map-marker-alt"></i>
                              <span>Prism Club, Canada</span>
                           </li>
                        </ul>
                     </div>
                     <a href="#" data-toggle="modal" data-target="#blog3">
                        <h5 class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Maiores alias conseuatur aut
                           nerferendis eveniet</h5>
                     </a>
                     <p class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Officia deserunt mollitia animi res est laborum et dolorum fugaharum quide rerum facilis expedia distinctio. </p>
                     <div class="blog-arrow wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                        <a class="d-inline-block" href="#" data-toggle="modal" data-target="#blog3"><i class="fas fa-angle-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--blog-sec-->

   <!--footer-sec-->
   <?php
   include 'assets/links/footer.php';
   ?>
   <!--footer-sec-->

   <!--blog1 modal-->
   <!-- <div id="blog1" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
            </div>
            <div class="modal-body text-center blog-model-content">
               <figure class="text-center">
                  <img src="assets/images/bog-modal-img3.png" alt="bog-modal-img3" class="img-fluid">
               </figure>
               <div class="admin-con">
                  <ul class="list-unstyled d-inline-block">
                     <li class="d-inline-block">
                        <i class="fas fa-user"></i>
                        <span>Jonahtan Rem</span>
                     </li>
                     <li class="d-inline-block">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Prism Club, Canada</span>
                     </li>
                  </ul>
               </div>
               <h4>Maiores alias conseuatur aut nerferendis eveniet</h4>
               <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus in ante in vestibulum. Mauris tempor sem sed neque rutrum faucibus. Nam in nunc semper, porttitor justo id, feugiat enim. Donec pharetra, mi non suscipit fermentum, lectus velit tincidunt nibh, non molestie lacus erat id justo. Ut nec lacus id justo condimentum tristique. Maecenas ac arcu luctus, dignissim libero ac, tristique ipsum. Nunc commodo pharetra odio maximus volutpat. Praesent a tristique ligula. Nulla sed tellus eget ligula consectetur convallis. Praesent at tortor neque. Nam vel purus sem. Nulla auctor mi sapien, ac tempus metus fringilla ut. Vestibulum placerat purus ac bibendum facilisis. Nulla eu orci lectus. Cras interdum tellus a interdum malesuada. Duis consectetur posuere sem sed rutrum.</p>
               <ul class="list-unstyled model-list mb-md-3 mb-2">
                  <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscn elit.</li>
                  <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscn elit.</li>
                  <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscn elit.</li>
               </ul>
               <div class="contact-form">
                  <form>
                     <ul class="list-unstyled mb-0">
                        <li class="float-left"><input class="w-100" placeholder="Your Name" type="text" name="name" id="name"></li>
                        <li class="float-left"><input class="w-100" type="text" placeholder="Your Email" name="email" id="email"></li>
                        <li class="float-left"><input class="w-100" type="text" placeholder="Phone Number" name="phone" id="phone"></li>
                        <li class="float-left"><input class="w-100" type="text" placeholder="Subject" name="address" id="address"></li>
                        <li class="w-100"><textarea class="w-100" placeholder="Message"></textarea></li>
                        <li class="mb-0 w-100 d-inline-block form-btn red-btn">
                           <button>SUBMIT NOW<i class="fas fa-angle-right"></i></button>
                        </li>
                     </ul>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!--blog1 modal-->
   <!--blog2 modal-->
   <!-- <div id="blog2" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
            </div>
            <div class="modal-body text-center blog-model-content">
               <figure class="text-center">
                  <img src="assets/images/bog-modal-img1.png" alt="bog-modal-img1" class="img-fluid">
               </figure>
               <div class="admin-con">
                  <ul class="list-unstyled d-inline-block">
                     <li class="d-inline-block">
                        <i class="fas fa-user"></i>
                        <span>Jonahtan Rem</span>
                     </li>
                     <li class="d-inline-block">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Prism Club, Canada</span>
                     </li>
                  </ul>
               </div>
               <h4>Maiores alias conseuatur aut nerferendis eveniet</h4>
               <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus in ante in vestibulum. Mauris tempor sem sed neque rutrum faucibus. Nam in nunc semper, porttitor justo id, feugiat enim. Donec pharetra, mi non suscipit fermentum, lectus velit tincidunt nibh, non molestie lacus erat id justo. Ut nec lacus id justo condimentum tristique. Maecenas ac arcu luctus, dignissim libero ac, tristique ipsum. Nunc commodo pharetra odio maximus volutpat. Praesent a tristique ligula. Nulla sed tellus eget ligula consectetur convallis. Praesent at tortor neque. Nam vel purus sem. Nulla auctor mi sapien, ac tempus metus fringilla ut. Vestibulum placerat purus ac bibendum facilisis. Nulla eu orci lectus. Cras interdum tellus a interdum malesuada. Duis consectetur posuere sem sed rutrum.</p>
               <ul class="list-unstyled model-list mb-md-3 mb-2">
                  <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscn elit.</li>
                  <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscn elit.</li>
                  <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscn elit.</li>
               </ul>
               <div class="contact-form">
                  <form>
                     <ul class="list-unstyled mb-0">
                        <li class="float-left"><input class="w-100" placeholder="Your Name" type="text" name="name" id="name"></li>
                        <li class="float-left"><input class="w-100" type="text" placeholder="Your Email" name="email" id="email"></li>
                        <li class="float-left"><input class="w-100" type="text" placeholder="Phone Number" name="phone" id="phone"></li>
                        <li class="float-left"><input class="w-100" type="text" placeholder="Subject" name="address" id="address"></li>
                        <li class="w-100"><textarea class="w-100" placeholder="Message"></textarea></li>
                        <li class="mb-0 w-100 d-inline-block form-btn red-btn">
                           <button>SUBMIT NOW<i class="fas fa-angle-right"></i></button>
                        </li>
                     </ul>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!--blog2 modal-->
   <!--blog3 modal-->
   <!-- <div id="blog3" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
            </div>
            <div class="modal-body text-center blog-model-content">
               <figure class="text-center">
                  <img src="assets/images/bog-modal-img2.png" alt="bog-modal-img2" class="img-fluid">
               </figure>
               <div class="admin-con">
                  <ul class="list-unstyled d-inline-block">
                     <li class="d-inline-block">
                        <i class="fas fa-user"></i>
                        <span>Jonahtan Rem</span>
                     </li>
                     <li class="d-inline-block">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Prism Club, Canada</span>
                     </li>
                  </ul>
               </div>
               <h4>Maiores alias conseuatur aut nerferendis eveniet</h4>
               <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempus in ante in vestibulum. Mauris tempor sem sed neque rutrum faucibus. Nam in nunc semper, porttitor justo id, feugiat enim. Donec pharetra, mi non suscipit fermentum, lectus velit tincidunt nibh, non molestie lacus erat id justo. Ut nec lacus id justo condimentum tristique. Maecenas ac arcu luctus, dignissim libero ac, tristique ipsum. Nunc commodo pharetra odio maximus volutpat. Praesent a tristique ligula. Nulla sed tellus eget ligula consectetur convallis. Praesent at tortor neque. Nam vel purus sem. Nulla auctor mi sapien, ac tempus metus fringilla ut. Vestibulum placerat purus ac bibendum facilisis. Nulla eu orci lectus. Cras interdum tellus a interdum malesuada. Duis consectetur posuere sem sed rutrum.</p>
               <ul class="list-unstyled model-list mb-md-3 mb-2">
                  <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscn elit.</li>
                  <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscn elit.</li>
                  <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscn elit.</li>
               </ul>
               <div class="contact-form">
                  <form>
                     <ul class="list-unstyled mb-0">
                        <li class="float-left"><input class="w-100" placeholder="Your Name" type="text" name="name" id="name"></li>
                        <li class="float-left"><input class="w-100" type="text" placeholder="Your Email" name="email" id="email"></li>
                        <li class="float-left"><input class="w-100" type="text" placeholder="Phone Number" name="phone" id="phone"></li>
                        <li class="float-left"><input class="w-100" type="text" placeholder="Subject" name="address" id="address"></li>
                        <li class="w-100"><textarea class="w-100" placeholder="Message"></textarea></li>
                        <li class="mb-0 w-100 d-inline-block form-btn red-btn">
                           <button>SUBMIT NOW<i class="fas fa-angle-right"></i></button>
                        </li>
                     </ul>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!--blog3 modal-->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <!-- <script src="assets/js/jquery-3.2.1.slim.min.js"></script> -->
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/wow.js"></script>
   <script>
      new WOW().init();
   </script>

   <script>
      window.document.onkeydown = function(e) {
         if (!e) {
            e = event;
         }
         if (e.keyCode == 27) {
            lightbox_close();
         }
      }

      function lightbox_open() {
         var lightBoxVideo = document.getElementById("VisaChipCardVideo");
         document.getElementById('light').style.display = 'block';
         document.getElementById('fade').style.display = 'block';
         lightBoxVideo.play();
      }

      function lightbox_close() {
         var lightBoxVideo = document.getElementById("VisaChipCardVideo");
         document.getElementById('light').style.display = 'none';
         document.getElementById('fade').style.display = 'none';
         lightBoxVideo.pause();
      }
   </script>

   <script>
      (function() {
         const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

         let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "05/03/",
            birthday = dayMonth + yyyy;

         today = mm + "/" + dd + "/" + yyyy;
         if (today > birthday) {
            birthday = dayMonth + nextYear;
         }
         //end

         const countDown = new Date(birthday).getTime(),
            x = setInterval(function() {

               const now = new Date().getTime(),
                  distance = countDown - now;

               document.getElementById("days").innerText = Math.floor(distance / (day)),
                  document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                  document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                  document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

               //do something later when date is reached
               if (distance < 0) {
                  document.getElementById("headline").innerText = "It's my birthday!";
                  document.getElementById("countdown").style.display = "none";
                  document.getElementById("content").style.display = "block";
                  clearInterval(x);
               }
               //seconds
            }, 0)
      }());
   </script>
</body>

</html>