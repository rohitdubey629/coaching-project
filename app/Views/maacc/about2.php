<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area">
            <h1 class="ml4">
                <span class="letters letters-1">Ready</span>
                <span class="letters letters-2">Set</span>
                <span class="letters letters-3">Go</span>
            </h1>
        </div>
        <!-- header -->


        <?php echo view('maacc/layout/header.php'); ?>
        <div class="page-content">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url(<?php echo base_url('assets/') ?>images/banner/bnr1.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">About Us 2</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li>Home</li>
                                <li>About Us 2</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- inner page banner END -->
            <div class="content-block">
                <!-- <div class="section-full bg-white content-inner-2 about-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 m-b15">
                                <div class="section-head">
                                    <h2 class="title text-secondry">World Class Facilities</h2>
                                    <p class="ext">The concept of school and pre-school education consists of 3 programs of development and training in our academy.The concept of school and pre-school education consists of 3 programs of development.</p>
                                </div>
                                <div class="accordion faq-box" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <a class="collapsed" href="javascript:;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                500 new items in the toy collection
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <a class="collapsed" href="javascript:;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Throwing birthday parties is fun and easy
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <a class="collapsed" href="javascript:;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Multiple benefits from buying a membership
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFor">
                                            <a class="collapsed" href="javascript:;" data-toggle="collapse" data-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                                                Fresh snacks and beverages for everyone
                                            </a>
                                        </div>
                                        <div id="collapseFor" class="collapse" aria-labelledby="headingFor" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFive">
                                            <a class="collapsed" href="javascript:;" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Over 1 000 visitors for the last year
                                            </a>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 teacher-content">
                                <div class="split-box">
                                    <div class="about-media">
                                        <img src="<?php echo base_url('assets/') ?>images/about/about-1.jpg" class="radius-sm" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="section-full bg-white content-inner-2 about-content bg-img-fix" style="background-image:url(<?php echo base_url() ?>uploads/about/<?php echo $about[0]['img2'] ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 wow fadeIn about-text" data-wow-delay="0.2s" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
                                <div class="text-center">
                                    <div class="video-play">
                                        <a href="<?php echo $about[0]['event_url'] ?>" class="popup-youtube video"><i class="fa fa-play"></i></a>
                                    </div>
                                    <h2>Let Your Kids Have an Amazing<br>Time at the Park</h2>
                                    <a href="contact-us.html" class="btn btn-md radius-xl">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio  -->
                <div class="section-full content-inner">
                    <div class="container">
                        <div class="section-head text-center">
                            <h2 class="title text-secondry">Gallery of our events</h2>
                            <p class="ext">We provide three classes with nine to twenty children each aged twelve months to six years of age.</p>
                        </div>
                        <div class="clearfix" id="lightgallery">
                            <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery" style="position: relative; height: 619.75px;">
                                <?php
                                if (!empty($event)) {
                                    foreach ($event as $key => $value) {
                                ?>
                                        <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="position: absolute; left: 0px; top: 0px;">
                                            <div class="dlab-box frame-box m-b30">
                                                <div class="dlab-thum dlab-img-overlay1">
                                                    <a href="javascript:void(0);">
                                                        <img src="<?php echo base_url(); ?>uploads/event/<?php echo $value['img1']; ?>" alt="">
                                                    </a>
                                                    <div class="overlay-bx">
                                                        <div class="overlay-icon">
                                                            <span data-exthumbimage="<?php echo base_url(); ?>uploads/event/<?php echo $value['img1']; ?>" data-src="<?php echo base_url(); ?>uploads/event/<?php echo $value['img1']; ?>" class="check-km" title="Image 1 Title will come here">
                                                                <i class="fa fa-search icon-bx-xs"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                <?php
                                    }
                                }
                                ?>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section-full bg-white content-inner-2 about-content bg-img-fix overlay-black-middle" style="background-image:url(<?php echo base_url() ?>uploads/about/<?php echo $about[0]['img3'] ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 wow fadeIn about-text" data-wow-delay="0.2s" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
                                <div class="text-center">
                                    <h4 class="text-white">Join Our New Session</h4>
                                    <h2>Call To Enrol Your Child <br><span class="text-yellow"><?php echo $links[0]['phone1'] ?></span></h2>
                                    <a href="tel:<?php echo $links[0]['phone1'] ?>" class="btn" onclick="totalCall()">Call Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full bg-white content-inner-2">
                    <div class="container">
                        <div class="section-head text-center">
                            <h2 class="title text-secondry">Testimonials about student</h2>
                            <p class="ext">We have an excellent teacher to child ratio at our Kindergarten to ensure that each child receives the attention he or she needs</p>
                        </div>
                        <div class="client-box2">
                            <div class="client-carousel-3 owl-carousel owl-theme sprite-nav owl-loaded owl-drag">
                                <!-- <div class="owl-stage-outer"> -->
                                <div class="owl-stage" style="transform: translate3d(-1170px, 0px, 0px); transition: all 0s ease 0s; width: 4095px;">
                                    <?php
                                    if (!empty($testimonial)) {
                                        foreach ($testimonial as $key => $value) {
                                    ?>
                                            <div class="owl-item cloned" style="width: 585px;">
                                                <div class="item">
                                                    <div class="client-box style-2">
                                                        <div class="testimonial-pic">
                                                            <img src="<?php echo base_url() ?>uploads/testimonials/<?php echo $value['img1']; ?>" alt="">
                                                        </div>
                                                        <div class="testimonial-text">
                                                            <p><?php echo $value['content'] ?></p>
                                                            <div class="testimonial-detail clearfix">
                                                                <h5 class="testimonial-name m-t0 m-b5"><?php echo $value['name'] ?></h5>
                                                                <span><?php echo $value['year'] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <!-- </div> -->
                                <div class="owl-nav disabled">
                                    <div class="owl-prev"><i class="la la-arrow-left"></i></div>
                                    <div class="owl-next"><i class="la la-arrow-right"></i></div>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content END-->
        <!-- Footer -->
        <?php echo view('maacc/layout/footer.php'); ?>

        <!-- Footer END-->
        <button class="scroltop fa fa-chevron-up"></button>
    </div>


</body>

</html>

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