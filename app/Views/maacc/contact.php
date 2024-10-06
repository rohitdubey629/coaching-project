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
						<h1 class="text-white">Contact Us</h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="<?php echo base_url('home') ?>"><i class="fa fa-home"></i>
								<li>Home</li></a></li>
								<li>Contact Us</li>
							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<!-- inner page banner END -->
			<div class="content-block">
				<div class="section-full bg-gray">
					<div class="container">
						<div class="row align-items-center content-inner">
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="icon-bx-wraper m-b30 left">
									<div class="icon-md m-b20 m-t5">
										<a href="javascript:void(0)" class="icon-cell text-blue">
											<i class="ti-headphone-alt"></i>
										</a>
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte m-b5">Phone</h4>
										<p>Phone 01: <a href="tel:<?php echo $links[0]['phone1'] ?>" onclick="totalCall()"><?php echo $links[0]['phone1'] ?> </a> <br> Phone 02: <a href="tel:<?php echo $links[0]['phone2'] ?>" onclick="totalCall()"><?php echo $links[0]['phone2'] ?> </a></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="icon-bx-wraper m-b30 left">
									<div class="icon-md m-b20 m-t5">
										<a href="#" class="icon-cell text-green">
											<i class="ti-location-pin"></i>
										</a>
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte m-b5">Address</h4>
										<p><?php echo $links[0]['address'] ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="icon-bx-wraper m-b30 left">
									<div class="icon-md m-b20 m-t5">
										<a href="javascript:void(0)" class="icon-cell text-orange">
											<i class="ti-email"></i>
										</a>
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte m-b5">Email</h4>
										<p> <a href="mailto:<?php echo $links[0]['email'] ?>"><?php echo $links[0]['email'] ?></a> <br> <a href="mailto:<?php echo $links[0]['email2'] ?>"><?php echo $links[0]['email2'] ?></a></p>
									</div>
								</div>
							</div>
						</div>

						<div class="row contact-box content-inner-5">
							<div class="section-head text-center col-md-12">
								<h2 class="title text-secondry">Contact Me</h2>
								<p class="ext m-b0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum quia accusantium omnis </p>
							</div>

							<form method="post" class=" col-md-12" action="" id="contactfrm">
								<input type="hidden" value="Contact" name="dzToDo">
								<div class="row">
									<div class="col-md-4 col-sm-4">
										<div class="form-group">
											<input name="name" type="text" required="" class="form-control" placeholder="Enter your name">
											<span><?php //echo form_error('name'); 
													?></span>
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="form-group">
											<input name="email" type="email" class="form-control" placeholder="Your Email Address">
											<span><?php //echo form_error('email'); 
													?></span>

										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="form-group">
											<input name="phone" type="text" required="" class="form-control" placeholder="Phone">
											<span><?php //echo form_error('phone'); 
													?></span>

										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<textarea name="message" rows="4" class="form-control" required="" placeholder="Your message here"></textarea>
											<span><?php //echo form_error('message'); 
													?></span>

										</div>
									</div>

									<div class="col-md-12 col-sm-12 text-center">
										<button name="submit" type="submit" value="Submit" class="btn radius-xl btn-lg">Send Message<span></span></button>
									</div>
								</div>
							</form>
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





		$("#contactfrm").submit(function(e) {

			e.preventDefault(); // avoid to execute the actual submit of the form.

			var form = $(this);
			var actionUrl = form.attr('action');
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>add_contact",
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