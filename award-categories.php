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

   <title>Award Categories</title>
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
               <h1 class="position-relative">Award Categories</h1>
               <nav aria-label="breadcrumb breadcrumb-col ">
                  <ol class="breadcrumb d-inline-block">
                     <li class="breadcrumb-item d-inline-block"><a class="text-white" href="index.php">Home</a></li>
                     <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Award Categories</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!--banner-->

   <!--about-sec-->
   <section class="about-us-main-sec w-100 float-left d-flex padding-top padding-bottom">
      <div class="about-text-con wow bounceInUp" data-wow-duration="2s">
         <h3>Award Categories</h3>
         <br>
         <ul style="margin-left: 20px;">
            <li>Innovator of the year</li>

            <li>Community service award</li>

            <li>Outstanding contribution of industry award</li>

            <li>Sustainability award</li>
         </ul>
      </div>
      <div class="about-us-image-sec wow bounceInUp" data-wow-duration="2s">
      </div>
   </section>
   <!--about-sec-->



   <!--footer-sec-->
   <?php
   include 'assets/links/footer.php';
   ?>
   <!--footer-sec-->

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