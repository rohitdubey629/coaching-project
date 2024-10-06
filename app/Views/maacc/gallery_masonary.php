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

		<!-- header END -->

		<div class="page-content">
			<!-- inner page banner -->
			<div class="dlab-bnr-inr overlay-black-dark" style="background-image:url(<?php echo base_url('assets/') ?>images/banner/bnr1.jpg);">
				<div class="container">
					<div class="dlab-bnr-inr-entry">
						<h1 class="text-white">Gallery Masonary</h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="<?php echo base_url('home') ?>"><i class="fa fa-home"></i>
								<li>Home</li></a></li>
								<li>Gallery Masonary</li>
							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<!-- inner page banner END -->
			<div class="content-block">
				<div class="section-full content-inner bg-gray">
					<div class="container">
						<div class="section-head text-center">
							<h2 class="title text-secondry">Gallery of our classes</h2>
							<p class="ext">We provide three classes with nine to twenty children each aged twelve months to six years of age.</p>
						</div>
						<div class="row">
							<div class="clearfix col-md-12 p-lr0" id="lightgallery">
								<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery masonry-gallery" style="position: relative; height: 1622.03px;">
									<?php
									if (!empty($gallery_masonary)) {
										foreach ($gallery_masonary as $key => $value) {
									?>
											<li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="position: absolute; left: 0px; top: 0px;">
												<div class="dlab-box frame-box m-b30">
													<div class="dlab-thum dlab-img-overlay1 ">
														<a href="javascript:void(0);">
															<img src="<?php echo base_url(); ?>uploads/gallery_masonary/<?php echo $value['img1']; ?>" alt="">
														</a>
														<div class="overlay-bx">
															<div class="overlay-icon">
																<span data-exthumbimage="<?php echo base_url(); ?>uploads/gallery_masonary/<?php echo $value['img1']; ?>" data-src="<?php echo base_url(); ?>uploads/gallery_masonary/<?php echo $value['img1']; ?>" class="check-km" title="<?php echo $value['title'] ?>">
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
	</script>
</body>

</html>