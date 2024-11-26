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

   <title>Gallery</title>
</head>

<body>

   <!--navbar-->
   <?php
      include 'assets/links/nav.php';
   ?>
   <!--navbar-->
   
   <!--banner-->
   <section class="sub-banner-sec generic-banner w-100 float-left d-table position-relative">
      <div class="d-table-cell align-middle">
         <div class="container">
            <div class="banner-inner-con text-white text-center wow bounceInUp" data-wow-duration="2s">
               <h1 class="position-relative">Our Gallery</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb d-inline-block">
                    <li class="breadcrumb-item d-inline-block"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item active d-inline-block" aria-current="page">Gallery</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </section>
 <!--banner-->
   <!--gallery-sec-->
   <div class="gallery-sec w-100 float-left padding-top padding-bottom text-center">
      <div class="container">
         <div class="masonry">
            <div class="masonry-item cell cell-1 panel-body wow bounceInUp" data-wow-duration="2s">
               <a href="#" class="zoom" data-toggle="modal" data-target="#lightbox">
                  <img src="assets/images/gallery-image1.jpg" alt="">
                  <span class="overlay"><i class="fa-light fa-plus-large"></i></span>
               </a>
            </div>
            <div class="masonry-item cell cell-2 panel-body wow bounceInUp" data-wow-duration="2s">
               <a href="#" class="zoom" data-toggle="modal" data-target="#lightbox">
                  <img src="assets/images/gallery-image3.jpg" alt="">
                  <span class="overlay"><i class="fa-light fa-plus-large"></i></span>
               </a>
            </div>
            <div class="masonry-item cell cell-3 panel-body wow bounceInUp" data-wow-duration="2s">
               <a href="#" class="zoom" data-toggle="modal" data-target="#lightbox">
                  <img src="assets/images/gallery-image4.jpg" alt="">
                  <span class="overlay"><i class="fa-light fa-plus-large"></i></span>
               </a>
            </div>
            <div class="masonry-item cell cell-4 panel-body wow bounceInUp" data-wow-duration="2s">
               <a href="#" class="zoom" data-toggle="modal" data-target="#lightbox">
                  <img src="assets/images/gallery-image5.jpg" alt="">
                  <span class="overlay"><i class="fa-light fa-plus-large"></i></span>
               </a>
            </div>
            <div class="masonry-item cell cell-5 panel-body wow bounceInUp" data-wow-duration="2s">
               <a href="#" class="zoom" data-toggle="modal" data-target="#lightbox">
                  <img src="assets/images/gallery-image2.jpg" alt="">
                  <span class="overlay"><i class="fa-light fa-plus-large"></i></span>
               </a>
            </div>
         </div>
         <div class="generic-button red-btn d-inline-block">
            <a href="speakers.php">LOAD MORE <i class="fas fa-angle-right"></i></a>
         </div>
      </div>
   </div>
   <!--gallery-sec-->
   <!--blog-sec-->
   <section class="blog-main-sec w-100 float-left padding-top position-relative">
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
                     <p class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Officia deserunt mollitia animi res est laborum et dolorum fugaharum quide rerum facilis expedia distinctio.</p>
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
                     <p class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Officia deserunt mollitia animi res est laborum et dolorum fugaharum quide rerum facilis expedia distinctio.</p>
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
                     <p class="wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">Officia deserunt mollitia animi res est laborum et dolorum fugaharum quide rerum facilis expedia distinctio.</p>
                     <div class="blog-arrow wow bounceInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInUp;">
                        <a class="d-inline-block" href="#" data-toggle="modal" data-target="#blog3"><i class="fas fa-angle-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--blog-sec-->
   
   <!--footer-sec-->
   <?php
   include 'assets/links/footer.php';
   ?>
   <!--footer-sec-->

   <!--modal-->
   <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <div class="modal-body">
                  <img src="" alt="" />
              </div>
          </div>
      </div>
  </div>
  <!--blog1 modal-->
  <div id="blog1" class="modal fade" tabindex="-1">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
         </div>
         <div class="modal-body text-center blog-model-content">
            <figure class="text-center">
               <img src="assets/images/blog-img1.jpg" alt="blog-img1" class="img-fluid">
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
</div>
<!--blog1 modal-->
<!--blog2 modal-->
<div id="blog2" class="modal fade" tabindex="-1">
<div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
      </div>
      <div class="modal-body text-center blog-model-content">
         <figure class="text-center">
            <img src="assets/images/blog-img2.jpg" alt="blog-img2" class="img-fluid">
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
</div>
<!--blog2 modal-->
<!--blog3 modal-->
<div id="blog3" class="modal fade" tabindex="-1">
<div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
      </div>
      <div class="modal-body text-center blog-model-content">
         <figure class="text-center">
            <img src="assets/images/blog-img3.jpg" alt="blog-img3" class="img-fluid">
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
</div>
<!--blog3 modal-->
   <!--js-->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <!-- <script src="assets/js/jquery-3.2.1.slim.min.js"></script> -->
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/wow.js"></script>
   <script>
      new WOW().init();
   </script>
   <script>
      $(document).ready(function() {
         var $lightbox = $('#lightbox');
         $('[data-target="#lightbox"]').on('click', function(event) {
            var $img = $(this).find('img'), 
               src = $img.attr('src'),
               alt = $img.attr('alt'),
               css = {
                  'maxWidth': $(window).width() - 100,
                  'maxHeight': $(window).height() - 100
               };
            $lightbox.find('img').attr('src', src);
            $lightbox.find('img').attr('alt', alt);
            $lightbox.find('img').css(css);
         });
         $lightbox.on('shown.bs.modal', function (e) {
            var $img = $lightbox.find('img');
            $lightbox.find('.modal-dialog').css({'width': $img.width()});
            $lightbox.find('.close').removeClass('hidden');
            });
      });
   </script>


</body>
</html>