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
							<?php
							if (!empty($courses)) {
								foreach ($courses as $key => $value) {
							?>
									<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
										<div class="courses-bx-2 m-b30">
											<img src="<?php echo base_url() ?>uploads/courses/<?php echo $value['img1'] ?>" alt="">
											<div class="info">
												<h2 class="title"><a href="<?php echo base_url('course_details/' . $value['id']) ?>"><?php echo $value['name'] ?></a></h2>
												<p><?php echo $value['content'] ?></p>
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

		<!-- Footer -->
		<?php echo view('maacc/layout/footer.php'); ?>

		<!-- Footer END-->
		<button class="scroltop fa fa-chevron-up"></button>
	</div>


</body>

</html>