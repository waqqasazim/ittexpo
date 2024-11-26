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

   <title>Speaker Registration</title>
</head>

<body>

   <!--navbar-->
   <?php
   include 'assets/links/nav.php';
   ?>
   <!--navbar-->

   <!--banner-->
   <section class="sub-banner-sec generic-banner w-100 float-left d-table position-relative">
      <div class="gradient-overlay"></div>
      <div class="d-table-cell align-middle">
         <div class="container">
            <div class="banner-inner-con text-white text-center wow bounceInUp" data-wow-duration="2s">
               <h1 class="position-relative">Speaker Registration</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb d-inline-block">
                     <li class="breadcrumb-item d-inline-block"><a class="text-white" href="index.php">Home</a></li>
                     <li class="breadcrumb-item active d-inline-block" aria-current="page">Speaker Registration</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <!--banner-->

   <!--contact-sec-->
   <section class="contact-main-sec w-100 float-left padding-top padding-bottom">
      <div class="container">
         <div class="generic-title text-center wow bounceInUp" data-wow-duration="2s">
            <h2>Drop us a Line</h2>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <br> sint occaecat cupidatat non proident incididunt utabama.</p>
            <?php
            include 'assets/links/registration-form.php';
            ?>
         </div>
      </div>
   </section>
   <!--contact-sec-->


   <!--footer-sec-->
   <?php
   include 'assets/links/footer.php';
   ?>
   <!--footer-sec-->

   <!-- <script src="assets/js/jquery-3.2.1.slim.min.js"></script> -->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/wow.js"></script>
   <script>
      new WOW().init();
   </script>
</body>

</html>