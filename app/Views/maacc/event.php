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
						<h1 class="text-white">News/Event</h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="<?php echo base_url('home') ?>"><i class="fa fa-home"></i>
								<li>Home</li></a></li>
								<li>Event</li>
							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<div class="content-block">
				<div class="section-full bg-gray content-inner">
					<div class="container">
						<div class="row">

							<?php
							if (!empty($event)) {
								foreach ($event as $key => $value) {
							?>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-box">
											<div class="event-media"><a href="<?php echo base_url('about2') ?>">
													<img src="<?php echo base_url() ?>uploads/event/<?php echo $value['img1'] ?>" alt=""></a>
											</div>
											<div class="event-info">
												<div class="dlab-post-title">
													<h3 class="post-title"><a href="#"><?php echo $value['heading'] ?></a></h3>
												</div>
												<div class="event-meta">
													<ul>
														<li class="post-date"><strong><?php echo $value['event_date'] ?></strong><span><?php echo $value['month'] ?></span></li>
														<!-- <li class="post-author"><i class="fa fa-map-marker"></i> 89 Newyork City.</li> -->
													</ul>
												</div>
												<div class="dlab-post-text">
													<p><?php echo $value['content'] ?></p>
												</div>
											</div>
										</div>
									</div>
							<?php
								}
							}
							?>


						</div>

						<!-- <div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination-bx rounded pagination-lg clearfix primary">
									<ul class="pagination justify-content-center">
										<li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i> Prev</a></li>
										<li class="active"><a href="javascript:void(0);">1</a></li>
										<li><a href="javascript:void(0);">2</a></li>
										<li><a href="javascript:void(0);">3</a></li>
										<li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div> -->
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