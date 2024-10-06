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
                        <h1 class="text-white">Courses</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-home"></i>
                                <li>Home</li></a></li>
                                <li>Courses</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- inner page banner END -->
            <div class="content-block">
                <div class="section-full bg-white content-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 m-b15">
                                <div class="classes-details">
                                    <div class="class-media m-b20">
                                        <img src="<?php echo base_url() ?>uploads/courses/<?php echo $course_details[0]['img1'] ?>" class="radius-sm" alt="">
                                    </div>
                                    <div class="class-info">
                                        <div class="dlab-post-title ">
                                            <h2 class="post-title m-t0"><a href="#"><?php echo $course_details[0]['heading'] ?></a></h2>
                                        </div>
                                        <div class="dlab-post-meta m-b20">
                                            <ul class="d-flex align-items-center">
                                                <li class="post-date"> <i class="la la-calendar-o"></i><strong><?php echo $course_details[0]['name'] ?></strong> </li>

                                            </ul>
                                        </div>
                                        <div class="dlab-post-text">
                                            <p><?php echo $course_details[0]['content'] ?></p>

                                            <!-- <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been specimencenturies.</blockquote> -->


                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="details-tbl widget">
                                    <ul class="class-details">
                                        <li>
                                            <div class="name"><i class="la la-clock-o"></i>Start Date</div>
                                            <div class="info"><?php echo $course_details[0]['start_date'] ?></div>
                                        </li>
                                        <li>
                                            <div class="name"><i class="la la-calendar-check-o"></i>Years Old</div>
                                            <div class="info"><?php echo $course_details[0]['year_old'] ?></div>
                                        </li>
                                        <li>
                                            <div class="name"><i class="la la-arrows"></i>Class Size</div>
                                            <div class="info"><?php echo $course_details[0]['class_size'] ?></div>
                                        </li>

                                        <li>
                                            <div class="name"><i class="la la-history"></i>Coures Duration</div>
                                            <div class="info"><?php echo $course_details[0]['course_duration'] ?></div>
                                        </li>
                                        <li>
                                            <div class="name"><i class="la la-clock-o"></i>Class Time</div>
                                            <div class="info"><?php echo $course_details[0]['class_time'] ?></div>
                                        </li>

                                        <li>
                                            <div class="name"><i class="la la-user"></i>Tution Free</div>
                                            <div class="info">&#8377; <?php echo $course_details[0]['tution_fees'] ?></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php echo view('maacc/layout/footer.php'); ?>

        <!-- Footer END-->
        <button class="scroltop fa fa-chevron-up"></button>
    </div>


</body>

</html>