<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #slider_heading {
            color: #fff;
            font-size: 20px;
            font-weight: 400;
            font-family: "Inter", sans-serif;
            width: fit-content;
            display: inline-block;
            background-color: #198754;
            padding: 6px;
            border-radius: 20px 20px 0px 0px;
            line-height: 25px;
            text-align: center;
        }

        #slider_content {
            color: #fff;
            font-size: 15px;
            font-weight: 400;
            line-height: 30px;
            background: #0000006e;
            width: fit-content;
            border-radius: 25px;
            padding: 5px;
        }

        .home_event {

            overflow-y: scroll;
            scrollbar-width: thin;
            scrollbar-color: #007 #fea116;
            height: 420px;
            overflow: auto;
        }

        .action-box {
            height: auto !important;
        }
    </style>

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

        <!-- header END -->
        <div class="action-area marquee-head marquee">
            <ul>
                <?php
                if (!empty($event)) {
                    foreach ($event as $key => $value) {
                ?>
                        <li><a href="<?php echo base_url('event') ?>"><?php echo $value['heading'] . " " . $value['event_date'] . " " . $value['month'] ?></a></li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider Banner -->
            <!-- Main Slider -->
            <div class="owl-slider owl-carousel owl-theme owl-btn-center-lr dots-none ">
                <?php
                if (!empty($home_scrollbar)) {
                    foreach ($home_scrollbar as $key => $value) { ?>
                        <div class="item slide-item">
                            <div class="slide-item-img"><img src="<?php echo base_url() ?>uploads/home_slider/<?php echo $value['img1'] ?>" class="" alt="" /></div>
                            <div class="slide-content">
                                <div class="slide-content-box container">
                                    <div class="slide-content-area">
                                        <h2 class="slider-title" id="slider_heading"><?php echo $value['heading'] ?></h2>
                                        <p id="slider_content"><?php echo $value['content'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>

            </div>

            <!-- Slider Banner -->
            <div class="content-block">

                <!-- About Us -->

                <div class="section-full content-inner-2 bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 home_event">
                                <div class="action-box">
                                    <div class="head">
                                        <h4 class="title">Notification</h4>
                                    </div>
                                    <div class="action-area marquee1">
                                        <ul>
                                            <?php
                                            if (!empty($event)) {
                                                foreach ($event as $key => $value) {
                                            ?>
                                                    <li><a href="<?php echo base_url('event') ?>"><?php echo $value['heading'] . " " . $value['event_date'] ?></a></li>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 home_event">
                                <div class="action-box">
                                    <div class="head">
                                        <h4 class="title">Events</h4>
                                    </div>
                                    <div class="action-area">
                                        <ul class="event-bx">

                                            <?php
                                            if (!empty($event)) {
                                                foreach ($event as $key => $value) {
                                            ?>
                                                    <li><a href="<?php echo base_url('event') ?>"><?php echo $value['content'] ?></a></li>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 home_event">
                                <div class="action-box">
                                    <div class="head">
                                        <h4 class="title">Blog / Artical</h4>
                                    </div>
                                    <div class="action-area">
                                        <ul class="blog-artical">
                                            <?php
                                            if (!empty($event)) {
                                                foreach ($event as $key => $value) {
                                            ?>
                                                    <li>
                                                        <a href="<?php echo base_url('event') ?>">
                                                            <div class="date">
                                                                <span><?php echo $value['event_date'] ?></span>
                                                                <strong><?php echo $value['month'] ?></strong>
                                                            </div>
                                                            <h5 class="title"><?php echo $value['heading'] ?></h5>
                                                        </a>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </ul>
                                        <a href="<?php echo base_url('event') ?>" class="btn btn-sm">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full content-inner bg-white" style="background-image:url(<?php echo base_url('assets/') ?>images/background/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 student-bx">
                                <div class="section-head">
                                    <h2 class="title">Student Testimonial</h2>
                                    <div class="dlab-separator bg-primary"></div>
                                </div>
                                <div class="client-carousel owl-carousel owl-theme owl-none">
                                    <div class="item">
                                        <div class="client-box">
                                            <div class="testimonial-text">
                                                <p><?php echo $testimonial[0]['content'] ?></p>
                                            </div>
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic radius">
                                                    <img src="<?php echo base_url() ?>uploads/testimonials/<?php echo $testimonial[0]['img1'] ?>" width="100" height="100" alt="">
                                                </div>
                                                <h5 class="testimonial-name m-t0 m-b5"><?php echo $testimonial[0]['name'] ?></h5>
                                                <span>Student</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="section-head">
                                    <h2 class="title">Meet our Teachers</h2>
                                    <div class="dlab-separator bg-primary"></div>
                                </div>
                                <div class="row">
                                    <?php
                                    if (!empty($teachers)) {
                                        foreach ($teachers as $key => $value) {
                                    ?>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="team-box">
                                                    <div class="media"><img src="<?php echo base_url() ?>uploads/teachers/<?php echo $value['img1'] ?>" alt=""> </div>
                                                    <div class="team-info">
                                                        <h4 class="title"><a href="<?php echo  base_url('teachers') ?>"><?php echo $value['name'] ?></a></h4>
                                                        <span>Teacher</span>
                                                        <p><?php echo $value['discription'] ?></p>

                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full bg-white content-inner-2 enquiry-area" style="background-image:url(<?php echo base_url('assets/') ?>images/background/bg2.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <div class="enquiry-bx">
                                    <div class="head">
                                        <h2 class="title">Quicky Enquiry</h2>
                                        <p>Please fill the below form.</p>
                                    </div>
                                    <form method="post" class="" action="" id="homefrm">
                                        <input type="hidden" value="Contact" name="dzToDo">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="name" type="text" required class="form-control" placeholder="Your Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="email" type="email" class="form-control" required placeholder="Your Email Id">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <textarea name="message" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <button name="submit" type="submit" value="Submit" class="btn"> <span>Submit</span> </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full bg-gray content-inner-2">
                    <div class="container">
                        <div class="client-logo-bx owl-carousel owl-btn-center-lr owl-btn-3">
                            <?php
                            if (!empty($gallery_grid)) {
                                foreach ($gallery_grid as $key => $value) {
                            ?>
                                    <div class="item">
                                        <div class="client-bx">
                                            <a href="<?php echo base_url('gallery_grid') ?>">
                                                <img src="<?php echo base_url() ?>uploads/gallery_grid/<?php echo $value['img1'] ?>" alt="" />
                                            </a>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>

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

    <!-- LOADING JS -->
    <script>
        $(function() {
            $('.marquee').marquee({
                speed: 100,
                gap: 0,
                delayBeforeStart: 0,
                direction: 'left',
                duplicated: true,
                pauseOnHover: true
            });
            $('.marquee1').marquee({
                speed: 50,
                gap: 0,
                delayBeforeStart: 0,
                direction: 'up',
                duplicated: true,
                pauseOnHover: true
            });
        });




        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1, // Number of items you want to display
                loop: true, // Infinite loop
                margin: 10, // Margin between items
                nav: true, // Show next and prev buttons
                dots: false, // Hide pagination dots
                autoplay: true, // Enable auto-play
                autoplayTimeout: 3000, // Time in ms between transitions
                autoplayHoverPause: true // Pause on hover
            });
        });




        $("#homefrm").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var actionUrl = form.attr('action');
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>add_home_enquiry",
                data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    Swal.fire({
                        title: "Success!",
                        text: "Data saved successfully.",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then(function() {
                        // Reload the page
                        location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    // Handle errors (optional)
                    console.error(xhr.responseText);
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred.',
                        icon: 'error'
                    });
                }
            });

        });
    </script>
</body>

</html>