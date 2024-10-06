     <!-- Footer -->

     <style>
         .scrollbarLink {

             overflow-y: scroll;
             scrollbar-width: thin;
             scrollbar-color: #007 #fea116;
             height: 270px;
             overflow: auto;
         }
     </style>

     <footer class="site-footer">
         <div class="footer-top">
             <div class="container">
                 <div class="row">
                     <div class="col-md-6 col-sm-6 col-lg-3 footer-col-4">
                         <div class="widget widget_getintuch">
                             <h4 class="footer-title">Contact Us</h4>
                             <div class="dlab-separator bg-primary"></div>
                             <ul class="info-contact">
                                 <?php
                                    if (!empty($links)) {
                                        foreach ($links as $key => $value) {
                                    ?>
                                         <li>
                                             <span>
                                                 <i class="fa fa-map-marker"></i><?php echo $value['address'] ?>
                                             </span>
                                         </li>

                                         <li>
                                             <span>
                                                 <i class="fa fa-phone"></i>Mobile: +<a href="tel:<?php echo $value['phone1'] ?>" onclick="totalCall()"><?php echo $value['phone1'] ?></a>
                                             </span>
                                         </li>
                                         <li>
                                             <span>
                                                 <i class="fa fa-whatsapp"></i>Whatsapp: +<a href="tel:<?php echo $value['wphone1'] ?>" onclick="totalCall()"><?php echo $value['wphone1'] ?></a>
                                             </span>
                                         </li>
                                         <li>
                                             <span>
                                                 <i class="fa fa-envelope-o"></i>Mail: <a href="mailto:<?php echo $value['email'] ?>"><?php echo $value['email'] ?></a>
                                             </span>
                                         </li>
                                 <?php
                                        }
                                    }
                                    ?>


                             </ul>
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-lg-3 footer-col-4 ">
                         <div class="widget widget_services">
                             <h4 class="footer-title">Useful Links</h4>
                             <div class="dlab-separator bg-primary"></div>
                             <ul class="scrollbarLink">
                                 <?php
                                    if (!empty($courses)) {
                                        foreach ($courses as $key => $value) {
                                    ?>
                                         <li><a href="<?php echo base_url('course_details/' . $value['id']) ?>"><?php echo $value['heading'] ?></a></li>

                                 <?php
                                        }
                                    }
                                    ?>

                             </ul>
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-lg-6 footer-col-4">
                         <div class="footer-widget footer-widget--blog">
                             <h5 class="footer-widget__title">Map Location</h5>
                             <div class="footer-widget__post-wrap">
                                 <div class="footer-widget__post-col">

                                     <iframe src="<?php echo $links[0]['direction'] ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                                     </iframe>

                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
                 <div class="clearfix">
                     <ul class="full-social-icon row">
                         <li class="fb col-lg-3 col-md-6 col-sm-6 m-b30">
                             <a href="<?php echo $links[0]['facebook'] ?>" target="_blank"><i class="fa fa-facebook"></i> Share On Facebook </a>
                         </li>
                         <li class="tw col-lg-3 col-md-6 col-sm-6 m-b30">
                             <a href="<?php echo $links[0]['insta'] ?>" target="_blank"><i class="fa fa-instagram"></i> Instagram </a>
                         </li>

                     </ul>
                 </div>
             </div>
         </div>
         <!-- footer bottom part -->
         <div class="footer-bottom">
             <div class="container">
                 <div class="row">
                     <div class="col-md-6 col-sm-6 text-left">Copyright © 2024 rohit. All right reserved </div>
                     <div class="col-md-6 col-sm-6 text-right ">
                         <ul class="fb-list">
                             <li><a href="<?php echo base_url('home/'); ?>">Home</a></li>
                             <li><a href="<?php echo base_url('about/'); ?>">About Us</a></li>
                             <li><a href="<?php echo base_url('courses') ?>">Courses</a></li>
                             <li><a href="<?php echo base_url('teachers/'); ?>">Teachers</a></li>
                             <li><a href="<?php echo base_url('gallery_grid/'); ?>">Gallery</a></li>
                             <li><a href="<?php echo base_url('contact') ?>">Contact Us</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <!-- Footer END-->

     <!-- JAVASCRIPT FILES ========================================= -->
     <script src="<?php echo base_url('assets/') ?>js/combining.js"></script>
     <!-- Combining JS  -->
     <script src="https://maps.google.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68&sensor=false"></script>
     <!-- GOOGLE MAP -->
     <script src='https://www.google.com/recaptcha/api.js'></script>
     <!-- Google API For Recaptcha  -->
     <script src="<?php echo base_url('assets/') ?>js/jquery.marquee.js"></script>

     <!-- Include SweetAlert JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
     <!-- <script type="module">
         import lightgallery from 'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/+esm'
     </script> -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js" integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.es5.min.js" integrity="sha512-xPornSaRBKohncxY0H+JB6LbTInb8sIegiKvJ3sYLylBOmPB0NXjzcboKxW9+dhDFBDPnVrVEanBydMrx1ygWQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script>
         function totalCall() {
             $.ajax({
                 type: "POST",
                 url: "<?php echo base_url('totalCall') ?>",
                 dataType: "json",
                 success: function(responce) {

                 }
             });
         }
     </script>