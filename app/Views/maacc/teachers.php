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
						<h1 class="text-white">Teachers</h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="<?php echo base_url('home') ?>"><i class="fa fa-home"></i>
								<li>Home</li></a></li>
								<li>Teachers</li>
							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<div class="content-block">
				<div class="section-full bg-white content-inner">
					<div class="container">
						<div class="section-head text-center">
							<h2 class="title text-secondry">About the Teachers</h2>
							<p class="ext">We have an excellent teacher to child ratio at our Kindergarten to ensure that each child receives the attention he or she needs</p>
						</div>
						<div class="row">
							<?php
							if (!empty($teachers)) {
								foreach ($teachers as $key => $value) {
							?>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
										<div class="team-box">
											<div class="media">
												<img src="<?php echo base_url() ?>uploads/teachers/<?php echo $value['img1'] ?>" alt="">
												<div class="media-info">
													<h4 class="title"><a href="#"><?php echo $value['name'] ?></a></h4>
													<span><?php echo $value['qualification'] ?></span>
												</div>
											</div>
											<div class="team-info">
												<h4 class="title"><a href="#"><?php echo $value['name'] ?></a></h4>
												<span><?php echo $value['qualification'] ?></span>
												<p><?php echo $value['discription'] ?></p>
												<!-- <ul class="list-inline">
										<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
									</ul> -->
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


		<!-- Footer -->
		<?php echo view('maacc/layout/footer.php'); ?>

		<!-- Footer END-->
		<button class="scroltop fa fa-chevron-up"></button>
	</div>


</body>

</html>