<!DOCTYPE html>
<html lang="zxx">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--head.php-->
   <?php
   include 'assets/links/head-links.php';
   ?>
   <!--head.php-->

   <title>ITTExpo</title>
</head>

<body>
   <!--banner-->
   <section class="banner-main-sec w-100 float-left d-table position-relative hero -type-6">
      <!--navbar-->
      <?php
      include 'assets/links/nav.php';
      ?>
      <!--navbar-->
      <div class="hero__bg rounded-16">
         <video loop autoplay muted>
            <source src="assets/images/banner.mp4" type="video/mp4">
         </video>
         <!-- <div class="gradient-overlay"></div> -->
      </div>
      <div class="d-table-cell align-middle">
         <!-- <div class="container">
            <div class="banner-inner-sec text-white d-inline-block">
               <ul class="list-unstyled wow bounceInUp" data-wow-duration="2s">
                  <li class="d-inline-block"><i class="fas fa-calendar-alt"></i> 15 April 2025</li>
                  <li class="d-inline-block"><i class="fas fa-map-marker-alt"></i> India Expo Mart, Greater Noida</li>
               </ul>
               <span class="wow bounceInUp d-inline-block" data-wow-duration="2s">WORLD'S BIGGEST</span>
               <h1 class="position-relative wow bounceInUp" data-wow-duration="2s">BUSINESS <br> CONFERENCE</h1>
               <p class="wow bounceInUp" data-wow-duration="2s">Discover Behind India's Biggest Holidays
                  <br>Sale & Business Horizon
               </p>
               <div class="generic-button white-btn d-inline-block wow bounceInUp" data-wow-duration="2s">
                  <a href="contact.php">BUY TICKET <i class="fas fa-angle-right"></i></a>
               </div>
            </div>
         </div> -->
         <div class="banner-social-icons">
            <ul class="list-unstyled p-0 text-center mb-0">
               <li target="_blank" class="wow bounceInUp" data-wow-duration="2s"><a class="d-inline-block" href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a></li>
               <li target="_blank" class="wow bounceInUp" data-wow-duration="2s"><a class="d-inline-block" href="https://www.instagram.com/itt.expo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a></li>
               <li target="_blank" class="wow bounceInUp" data-wow-duration="2s"><a class="d-inline-block mb-0" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
         </div>
      </div>
   </section>
   <!--banner-->

   <!--conference-sec-->
   <section class="conference-sec w-100 float-left padding-top padding-bottom">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="confernce-text-sec">
                  <h2 class="wow bounceInUp" data-wow-duration="2s">International Travel &<br>
                     Trade Expo 2024</h2>
                  <p class="wow bounceInUp" data-wow-duration="2s">The International Travel & Trade Expo is set to be a landmark gathering for travel professionals, tour operators, hospitality experts, and tourism boards from around the globe.</p>
                  <p class="wow bounceInUp" data-wow-duration="2s">This event is designed to foster networking, collaboration, and innovation within the travel industry, providing a unique platform to explore new business opportunities and forge lasting partnerships. It also offers the opportunity to showcase products and services, establish relationships with potential customers, and expand business networks.</p>
                  <div class="generic-button red-btn d-inline-block wow bounceInUp" data-wow-duration="2s">
                     <a href="about.php">READ MORE <i class="fas fa-angle-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="confernce-static-sec">
                  <ul class="mb-0 list-unstyled">
                     <li>
                        <div class="static-con text-center wow bounceInUp" data-wow-duration="2s">
                           <span></span>
                           <figure>
                              <img src="assets/images/expo1.png" alt="static-img">
                           </figure>
                           <div class="value">10 k+</div>
                           <span>Registered Candidates</span>
                        </div>
                     </li>
                     <li>
                        <div class="static-con text-center wow bounceInUp" data-wow-duration="2s">
                           <span></span>
                           <figure>
                              <img src="assets/images/expo2.png" alt="static-img">
                           </figure>
                           <div class="value">40 +</div>
                           <span>Top Notch Speakers</span>
                        </div>
                     </li>
                     <li>
                        <div class="static-con text-center mb-0 wow bounceInUp" data-wow-duration="2s">
                           <span></span>
                           <figure>
                              <img src="assets/images/expo3.png" alt="static-img">
                           </figure>
                           <div class="value">12 +</div>
                           <span>Conference Session</span>
                        </div>
                     </li>
                     <li>
                        <div class="static-con text-center mb-0 wow bounceInUp" data-wow-duration="2s">
                           <span></span>
                           <figure>
                              <img src="assets/images/expo4.png" alt="static-img">
                           </figure>
                           <div class="value">150 +</div>
                           <span>Startups</span>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--conference-sec-->

   <!--countdown-sec-->
   <section class="countdown-sec w-100 float-left padding-top padding-bottom ">
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

   <!--speakers-sec-->
   <section class="speakers-sec w-100 float-left padding-top padding-bottom position-relative">
      <div class="container">
         <div class="generic-title text-center">
            <h2 class="wow bounceInUp" data-wow-duration="2s">Best Experienced Speakers</h2>
            <p class="wow bounceInUp" data-wow-duration="2s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint <br> occaecat cupidatat non proident incididunt utabama.</p>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
               <a href="speakers.php">
                  <div class="speaker-con position-relative w-100 float-left">
                     <figure class="mb-0 wow bounceInUp" data-wow-duration="2s">
                        <img class="imgsize" src="assets/images/speaker1.jpg" alt="petey-img">
                     </figure>
                     <div class="speaker-detail w-100 d-flex align-items-center justify-content-between">
                        <div class="speaker-status text-white wow bounceInUp" data-wow-duration="2s">
                           <h6>Mr. Bishnu Pandey</h6>
                           <span>Founder & Chairman Nepal International Tourism Expo, Secretary - Association Of Tour & Travel Agents Nepal</span>
                        </div>
                        <!-- <div class="speaker-btn d-inline-block wow bounceInUp" data-wow-duration="2s">
                           <i class="fas fa-angle-right"></i>
                        </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <a href="speakers.php">
                  <div class="speaker-con position-relative w-100 float-left">
                     <figure class="mb-0 wow bounceInUp" data-wow-duration="2s">
                        <img class="imgsize" src="assets/images/speaker2.png" alt="bob-img">
                     </figure>
                     <div class="speaker-detail w-100 d-flex align-items-center justify-content-between">
                        <div class="speaker-status text-white wow bounceInUp" data-wow-duration="2s">
                           <h6>Mr. Deepak Upadhyay</h6>
                           <span>General Secretary Worldwide Travel & Tourism Association (WTTA)</span>
                        </div>
                        <!-- <div class="speaker-btn d-inline-block wow bounceInUp" data-wow-duration="2s">
                           <i class="fas fa-angle-right"></i>
                        </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <a href="speakers.php">
                  <div class="speaker-con position-relative w-100 float-left">
                     <figure class="mb-0 wow bounceInUp" data-wow-duration="2s">
                        <img class="imgsize" src="assets/images/speaker3.jpg" alt="shonda-img">
                     </figure>
                     <div class="speaker-detail w-100 d-flex align-items-center justify-content-between">
                        <div class="speaker-status text-white wow bounceInUp" data-wow-duration="2s">
                           <h6>Dr. Kaulesh Kumar</h6>
                           <span>Secretary General (Founder) Association Of Buddhist Tour Operators (ABTO)</span>
                        </div>
                        <!-- <div class="speaker-btn d-inline-block wow bounceInUp" data-wow-duration="2s">
                           <i class="fas fa-angle-right"></i>
                        </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <a href="speakers.php">
                  <div class="speaker-con position-relative w-100 float-left mb-sm-0">
                     <figure class="mb-0 wow bounceInUp" data-wow-duration="2s">
                        <img class="imgsize" src="assets/images/speaker4.jpg" alt="cliff-img">
                     </figure>
                     <div class="speaker-detail w-100 d-flex align-items-center justify-content-between">
                        <div class="speaker-status text-white wow bounceInUp" data-wow-duration="2s">
                           <h6>Dr. Himanshu Talwar</h6>
                           <span>Executive Board Member - AIMA Young Leaders Council (YLC)</span>
                        </div>
                        <!-- <div class="speaker-btn d-inline-block wow bounceInUp" data-wow-duration="2s">
                           <i class="fas fa-angle-right"></i>
                        </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <a href="speakers.php">
                  <div class="speaker-con position-relative w-100 float-left mb-sm-0">
                     <figure class="mb-0 wow bounceInUp" data-wow-duration="2s">
                        <img class="imgsize" src="assets/images/speaker5.jpg" alt="barry-img">
                     </figure>
                     <div class="speaker-detail w-100 d-flex align-items-center justify-content-between">
                        <div class="speaker-status text-white wow bounceInUp" data-wow-duration="2s">
                           <h6>Mr. Varun Mehta</h6>
                           <span>Executive Director - Worldways Tours & Travels Nepal (DMC)</span>
                        </div>
                        <!-- <div class="speaker-btn d-inline-block wow bounceInUp" data-wow-duration="2s">
                           <i class="fas fa-angle-right"></i>
                        </div> -->
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <a href="speakers.php">
                  <div class="speaker-con position-relative w-100 float-left mb-0">
                     <figure class="mb-0 wow bounceInUp" data-wow-duration="2s">
                        <img class="imgsize" src="assets/images/speaker6.jpg" alt="samantha-img">
                     </figure>
                     <div class="speaker-detail w-100 d-flex align-items-center justify-content-between">
                        <div class="speaker-status text-white wow bounceInUp" data-wow-duration="2s">
                           <h6>Samantha Zoe</h6>
                           <span>Laboris nisi</span>
                        </div>
                        <!-- <div class="speaker-btn d-inline-block wow bounceInUp" data-wow-duration="2s">
                           <i class="fas fa-angle-right"></i>
                        </div> -->
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
   <!--speakers-sec-->

   <!--registration-sec-->
   <section class="registration-sec w-100 float-left padding-top padding-bottom">
      <div class="container">
         <div class="registration-inner-sec text-center">
            <div class="generic-title text-white">
               <h2 class="text-white wow bounceInUp" data-wow-duration="2s">Are You Good Speaker?</h2>
               <p class="wow bounceInUp" data-wow-duration="2s">Join our community and share your toughts with the one who need to strech their limits aute irure <br> dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
            </div>
            <div class="generic-button white-btn d-inline-block wow bounceInUp" data-wow-duration="2s">
               <a href="contact.php">REGISTER NOW <i class="fas fa-angle-right"></i></a>
            </div>
         </div>
      </div>
   </section>
   <!--registration-sec-->

   <!--schedules-sec-->
   <section class="schedule-sec w-100 float-left padding-top padding-bottom">
      <div class="container">
         <div class="schedule-inner-sec text-center">
            <div class="generic-title">
               <h2 class="wow bounceInUp" data-wow-duration="2s">Our Event Schedules</h2>
               <p class="wow bounceInUp" data-wow-duration="2s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <br>
                  sint occaecat cupidatat non proident.</p>
            </div>
            <div id="tsum-tabs">
               <input id="tab1" type="radio" name="tabs" checked>
               <label for="tab1" class="Effective-sec-item mb-lg-0 Effective-sec-item-title wow bounceInUp Effective-sec-item-img" data-wow-duration="2s">
                  <span class="mb-0 d-block">Day 1</span>
                  <small>May 03, 2025</small>
               </label>
               <input id="tab2" type="radio" name="tabs">
               <label for="tab2" class="Effective-sec-item mb-lg-0 Effective-sec-item-title wow bounceInUp Effective-sec-item-img" data-wow-duration="2s">
                  <span class="mb-0 d-block">Day 2</span>
                  <small>May 04, 2025</small>
               </label>
               <!-- <input id="tab3" type="radio" name="tabs">
               <label for="tab3" class="Effective-sec-item mb-0 Effective-sec-item-title wow bounceInUp Effective-sec-item-img" data-wow-duration="2s">
                  <span class="mb-0 d-block">Day 3</span>
                  <small>Apr 01, 2021</small>
               </label>
               <input id="tab4" type="radio" name="tabs">
               <label for="tab4" class="Effective-sec-item mb-0 Effective-sec-item-title wow bounceInUp Effective-sec-item-img" data-wow-duration="2s">
                  <span class="mb-0 d-block">Day 4</span>
                  <small>Apr 02, 2021</small>
               </label> -->
               <section id="content1">
                  <div class="tabs-content d-flex align-items-center wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 03 </div>
                        <div class="date-con d-inline-block">
                           <span>May</span>
                           <small class="d-block">8:00 AM - 08:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-details.png" alt="admin-details">
                        </figure>
                        <div class="admin-con">
                           <h5>Nobis est eligendi oatio cumrue</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="tabs-content d-flex align-items-center wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 03 </div>
                        <div class="date-con d-inline-block">
                           <span>May</span>
                           <small class="d-block">9:00 AM - 09:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-detail2.png" alt="admin-detail2">
                        </figure>
                        <div class="admin-con">
                           <h5>Exercitationem ullam cororis suse</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="tabs-content d-flex align-items-center mb-0 wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 03 </div>
                        <div class="date-con d-inline-block">
                           <span>May</span>
                           <small class="d-block">10:00 AM - 10:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-detail3.png" alt="admin-detail3">
                        </figure>
                        <div class="admin-con">
                           <h5>Reprehenderit rui in ea volutate</h5>
                           <ul class="mb-0 list-unstyled d-inline-block">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
               </section>
               <section id="content2">

                  <div class="tabs-content d-flex align-items-center wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 04 </div>
                        <div class="date-con d-inline-block">
                           <span>May</span>
                           <small class="d-block">9:00 AM - 09:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-detail3.png" alt="admin-detail2">
                        </figure>
                        <div class="admin-con">
                           <h5>Reprehenderit rui in ea volutate</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="tabs-content d-flex align-items-center wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 04 </div>
                        <div class="date-con d-inline-block">
                           <span>May</span>
                           <small class="d-block">9:00 AM - 09:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-detail2.png" alt="admin-detail2">
                        </figure>
                        <div class="admin-con">
                           <h5>Exercitationem ullam cororis suse</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="tabs-content d-flex align-items-center mb-0 wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 04 </div>
                        <div class="date-con d-inline-block">
                           <span>May</span>
                           <small class="d-block">8:00 AM - 08:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-details.png" alt="admin-details">
                        </figure>
                        <div class="admin-con">
                           <h5>Nobis est eligendi oatio cumrue</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- <section id="content3">
                  <div class="tabs-content d-flex align-items-center wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 30 </div>
                        <div class="date-con d-inline-block">
                           <span>March</span>
                           <small class="d-block">8:00 AM - 08:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-details.png" alt="admin-details">
                        </figure>
                        <div class="admin-con">
                           <h5>Nobis est eligendi oatio cumrue</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="tabs-content d-flex align-items-center wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 30 </div>
                        <div class="date-con d-inline-block">
                           <span>March</span>
                           <small class="d-block">9:00 AM - 09:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-detail2.png" alt="admin-detail2">
                        </figure>
                        <div class="admin-con">
                           <h5>Exercitationem ullam cororis suse</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="tabs-content d-flex align-items-center mb-0 wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 30 </div>
                        <div class="date-con d-inline-block">
                           <span>March</span>
                           <small class="d-block">10:00 AM - 10:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-detail3.png" alt="admin-detail3">
                        </figure>
                        <div class="admin-con">
                           <h5>Reprehenderit rui in ea volutate</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
               </section>
               <section id="content4">
                  <div class="tabs-content d-flex align-items-center wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 30 </div>
                        <div class="date-con d-inline-block">
                           <span>March</span>
                           <small class="d-block">10:00 AM - 10:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-detail3.png" alt="admin-detail3">
                        </figure>
                        <div class="admin-con">
                           <h5>Reprehenderit rui in ea volutate</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="tabs-content d-flex align-items-center wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 30 </div>
                        <div class="date-con d-inline-block">
                           <span>March</span>
                           <small class="d-block">9:00 AM - 09:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-detail2.png" alt="admin-detail2">
                        </figure>
                        <div class="admin-con">
                           <h5>Exercitationem ullam cororis suse</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="tabs-content d-flex align-items-center mb-0 wow bounceInUp" data-wow-duration="2s">
                     <div class="value-sec float-left">
                        <div class="count float-left"> 30 </div>
                        <div class="date-con d-inline-block">
                           <span>March</span>
                           <small class="d-block">8:00 AM - 08:45 AM</small>
                        </div>
                     </div>
                     <div class="detail-sec d-flex align-items-center">
                        <figure class="mb-0">
                           <img src="assets/images/admin-details.png" alt="admin-details">
                        </figure>
                        <div class="admin-con">
                           <h5>Nobis est eligendi oatio cumrue</h5>
                           <ul class="mb-0 list-unstyled">
                              <li class="d-inline-block">
                                 <i class="fas fa-user"></i>
                                 <span>By: Jonahtan Andrew</span>
                              </li>
                              <li class="d-inline-block">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>At: Prism Club, Canada</span>
                              </li>
                           </ul>
                        </div>
                        <div class="generic-button red-btn d-inline-block">
                           <a href="event-detail.php">READ MORE <i class="fas fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
               </section> -->
            </div>
         </div>
      </div>
   </section>
   <!--schedules-sec-->

   <!--service-sec-->
   <section class="service-main-sec w-100 float-left padding-top padding-bottom">
      <div class="container">
         <div class="generic-title text-center">
            <h2 class="wow bounceInUp" data-wow-duration="2s">Benefits of Participation</h2>
            <p class="wow bounceInUp" data-wow-duration="2s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <br>
               sint occaecat cupidatat non proident.</p>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="service-box text-center">
                  <figure class="wow bounceInUp" data-wow-duration="2s">
                     <img src="assets/images/benefits1.png" alt="service-icon1">
                  </figure>
                  <h4 class="wow bounceInUp" data-wow-duration="2s">Network with Industry Professionals</h4>
                  <!-- <p class="mb-0 wow bounceInUp" data-wow-duration="2s">Porro quisquam est, aui dolorem <br> isum ruia zero sit amet conseur <br>
                     adieisci omnis</p> -->
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="service-box text-center mb-0">
                  <figure class="wow bounceInUp" data-wow-duration="2s">
                     <img src="assets/images/benefits4.png" alt="service-icon4">
                  </figure>
                  <h4 class="wow bounceInUp" data-wow-duration="2s">Brand building opportunity among the industry</h4>
                  <!-- <p class="mb-0 wow bounceInUp" data-wow-duration="2s">Porro quisquam est, aui dolorem <br> isum ruia zero sit amet conseur <br>
                     adieisci omnis</p> -->
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="service-box text-center">
                  <figure class="wow bounceInUp" data-wow-duration="2s">
                     <img src="assets/images/benefits2.png" alt="service-icon2">
                  </figure>
                  <h4 class="wow bounceInUp" data-wow-duration="2s">A platform to launch new products</h4>
                  <!-- <p class="mb-0 wow bounceInUp" data-wow-duration="2s">Porro quisquam est, aui dolorem <br> isum ruia zero sit amet conseur <br>
                     adieisci omnis</p> -->
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="service-box text-center">
                  <figure class="wow bounceInUp" data-wow-duration="2s">
                     <img src="assets/images/benefits3.png" alt="service-icon3">
                  </figure>
                  <h4 class="wow bounceInUp" data-wow-duration="2s">Explore joint venture & partnerships.</h4>
                  <!-- <p class="mb-0 wow bounceInUp" data-wow-duration="2s">Porro quisquam est, aui dolorem <br> isum ruia zero sit amet conseur <br>
                     adieisci omnis</p> -->
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="service-box text-center mb-0">
                  <figure class="wow bounceInUp" data-wow-duration="2s">
                     <img src="assets/images/benefits5.png" alt="service-icon5">
                  </figure>
                  <h4 class="wow bounceInUp" data-wow-duration="2s">Direct interaction with industry expert, leaders, and agencies</h4>
                  <!-- <p class="mb-0 wow bounceInUp" data-wow-duration="2s">Porro quisquam est, aui dolorem <br> isum ruia zero sit amet conseur <br>
                     adieisci omnis</p> -->
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="service-box text-center mb-0">
                  <figure class="wow bounceInUp" data-wow-duration="2s">
                     <img src="assets/images/benefits6.png" alt="service-icon6">
                  </figure>
                  <h4 class="wow bounceInUp" data-wow-duration="2s">Meet high quality prospects and decision makers.</h4>
                  <!-- <p class="mb-0 wow bounceInUp" data-wow-duration="2s">Porro quisquam est, aui dolorem <br> isum ruia zero sit amet conseur <br>
                     adieisci omnis</p> -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--service-sec-->

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

   <!--footer-sec-->
   <?php
   include 'assets/links/footer.php';
   ?>
   <!--footer-sec-->

   <!--blog1 modal-->
   <!-- <div id="blog1" class="modal fade pr-0" tabindex="-1">
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
   <!-- <div id="blog2" class="modal fade pr-0" tabindex="-1">
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
   <!-- <div id="blog3" class="modal fade pr-0" tabindex="-1">
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
   <!-- //================ Circular Progress Bar ================// -->
   <a>
      <div class="progress-container" id="progressContainer">
         <svg class="progress-ring" width="60" height="60">
            <circle class="progress-ring__circle" cx="30" cy="30" r="25"></circle>
         </svg>
         <div class="progress-text" id="progressText">0%</div>
      </div>
   </a>

   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <!-- <script src="assets/js/jquery-3.2.1.slim.min.js"></script> -->
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/wow.js"></script>
   <script>
      new WOW().init();
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
   <script src="assets/js/scrollup.js"></script>
</body>

</html>