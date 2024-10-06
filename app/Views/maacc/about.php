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
						<h1 class="text-white">About Us </h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="<?php echo base_url('home') ?>"><i class="fa fa-home"></i>
								<li>Home</li></a></li>
								<li>About Us </li>
							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<!-- inner page banner END -->
			<div class="content-block">
				<div class="section-full bg-white content-inner-2" style="background-image:url(<?php echo base_url('assets/') ?>images/pattern/pt1.png);">
					<div class="container">
						<div class="section-head text-center">
							<h2 class="title"><?php echo $about[0]['heading'] ?></h2>
							<p class="ext"><?php echo $about[0]['paragraph'] ?></p>
						</div>
						<div class="row align-items-center about-bx2">
							<div class="col-lg-6 col-md-12 col-sm-12 col-12">
								<img src="<?php echo base_url() ?>uploads/about/<?php echo $about[0]['img1'] ?>" class="img" alt="">
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="about-box">
									<h3 class="title"><?php echo $about[0]['heading2'] ?></h3>
									<p class="ext"><?php echo $about[0]['paragraph2'] ?></p>
									<ul class="list-check">
										<?php echo $about[0]['option'] ?>
									</ul>
									<!-- <div class="about-mamber">
										<img src="<?php echo base_url('assets/') ?>images/testimonials/pic2.jpg" class="user" alt="">
										<img src="<?php echo base_url('assets/') ?>images/sign.png" class="sign" alt="">
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="section-full bg-white content-inner-2 about-content bg-img-fix" style="background-image:url(<?php echo base_url() ?>uploads/about/<?php echo $about[0]['img2'] ?>">
					<div class="about-overlay-box"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12 wow fadeIn about-text" data-wow-delay="0.2s" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
								<div class="text-center">
									<div class="video-play">
										<a href="<?php echo $about[0]['url'] ?>" class="popup-youtube video"><i class="fa fa-play"></i></a>
									</div>
									<h2><?php echo $about[0]['url_heading'] ?></h2>
									<a href="<?php echo base_url('contact') ?>" class="btn btn-md radius-xl">Read More</a>
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
								<div class="client-box2">
									<div class="client-carousel-2 owl-carousel owl-theme owl-loaded owl-drag">
										<!-- <div class="owl-stage-outer"> -->
										<div class="owl-stage" style=" transition: all 0s ease 0s; width: 3510px;">
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
										<div class="owl-nav">
											<div class="owl-prev"><i class="la la-arrow-left"></i></div>
											<div class="owl-next"><i class="la la-arrow-right"></i></div>
										</div>
										<!-- <div class="owl-dots disabled"></div> -->
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="section-head">
									<h2 class="title">Meet our Teachers</h2>
									<div class="dlab-separator bg-primary"></div>
								</div>
								<div class="row sp20">
									<?php
									// if (!empty($teachers)) {
									// 	foreach ($teachers as $key => $value) {
									?>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="team-box">
											<div class="media">
												<img src="<?php echo base_url() ?>uploads/teachers/<?php echo $teachers[0]['img1'] ?>" alt="">
												<div class="media-info">
													<h4 class="title"><a href="teachers-details.html"><?php echo $teachers[0]['name'] ?></a></h4>
													<span><?php echo $teachers[0]['qualification'] ?></span>
												</div>
											</div>
											<div class="team-info">
												<h4 class="title"><a href="teachers-details.html"><?php echo $teachers[0]['name'] ?></a></h4>
												<span>Teacher</span>
												<p><?php echo $teachers[0]['discription'] ?></p>

											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="team-box">
											<div class="media">
												<img src="<?php echo base_url() ?>uploads/teachers/<?php echo $teachers[1]['img1'] ?>" alt="">
												<div class="media-info">
													<h4 class="title"><a href="teachers-details.html"><?php echo $teachers[1]['name'] ?></a></h4>
													<span><?php echo $teachers[1]['qualification'] ?></span>
												</div>
											</div>
											<div class="team-info">
												<h4 class="title"><a href="teachers-details.html"><?php echo $teachers[1]['name'] ?></a></h4>
												<span>Teacher</span>
												<p><?php echo $teachers[1]['discription'] ?></p>

											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="team-box">
											<div class="media">
												<img src="<?php echo base_url() ?>uploads/teachers/<?php echo $teachers[2]['img1'] ?>" alt="">
												<div class="media-info">
													<h4 class="title"><a href="teachers-details.html"><?php echo $teachers[2]['name'] ?></a></h4>
													<span><?php echo $teachers[2]['qualification'] ?></span>
												</div>
											</div>
											<div class="team-info">
												<h4 class="title"><a href="teachers-details.html"><?php echo $teachers[2]['name'] ?></a></h4>
												<span>Teacher</span>
												<p><?php echo $teachers[2]['discription'] ?></p>

											</div>
										</div>
									</div>
									<?php


									// 	}
									// } 
									?>

								</div>
							</div>
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

</body>

</html>