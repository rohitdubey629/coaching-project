

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


        <?php echo view('maacc/layout/header.php');?>

        <!-- header END -->

        <div class="page-content">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url(<?php echo base_url('assets/')?>images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Gallery Filter</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="<?php echo base_url('home')?>"><i class="fa fa-home"></i>
							<li>Home</li></a></li>
							<li>Gallery Filter</li>
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
				<div class="container-fluid">
					<div class="section-head text-center">
						<h2 class="title text-secondry">Gallery of our classes</h2>
						<p class="ext">We provide three classes with nine to twenty children each aged twelve months to six years of age.</p>
					</div>
					<div class="clearfix" id="lightgallery">
						<div class="row">
							<div class="col-lg-12 text-center">
								<div class="site-filters filter-style1 clearfix m-b20">
									<ul class="filters" data-toggle="buttons">
										<li data-filter="" class="btn active"><input type="radio"><a href="#"><span>Show All</span></a></li>
										<li data-filter="drawing" class="btn"><input type="radio"><a href="#"><span>Drawing</span></a></li>
										<li data-filter="education" class="btn"><input type="radio"><a href="#"><span>Education</span></a></li>
										<li data-filter="game" class="btn"><input type="radio"><a href="#"><span>Game</span></a></li>
										<li data-filter="lunch" class="btn"><input type="radio"><a href="#"><span>Lunch</span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery col-md-12 p-lr0" style="position: relative; height: 1006.12px;">
								<li class="drawing card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="position: absolute; left: 0px; top: 0px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1 "> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic1.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="<?php echo base_url('assets/')?>images/gallery/pic1.jpg" data-src="images/gallery/pic1.jpg" class="check-km" title="Image 1 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="game card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="position: absolute; left: 305px; top: 0px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic2.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic2.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic2.jpg" class="check-km" title="Image 2 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span> 
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="education card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s" style="position: absolute; left: 611px; top: 0px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic3.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic3.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic3.jpg" class="check-km" title="Image 3 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="lunch card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="position: absolute; left: 0px; top: 251px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic4.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic4.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic4.jpg" class="check-km" title="Image 4 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="drawing card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="position: absolute; left: 305px; top: 251px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic5.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic5.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic5.jpg" class="check-km" title="Image 5 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="game card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn " data-wow-delay="0.6s" style="position: absolute; left: 611px; top: 251px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic6.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic6.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic6.jpg" class="check-km" title="Image 6 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="lunch card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="position: absolute; left: 0px; top: 503px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1 "> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic1.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic1.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic1.jpg" class="check-km" title="Image 7 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="education card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="position: absolute; left: 305px; top: 503px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic2.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic2.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic2.jpg" class="check-km" title="Image 8 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="game card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s" style="position: absolute; left: 611px; top: 503px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic3.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic3.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic3.jpg" class="check-km" title="Image 9 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="drawing card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="position: absolute; left: 0px; top: 754px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic4.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic4.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic4.jpg" class="check-km" title="Image 10 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="education card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="position: absolute; left: 305px; top: 754px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic5.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic5.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic5.jpg" class="check-km" title="Image 11 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="game card-container col-lg-3 col-md-6 col-sm-6 wow zoomIn " data-wow-delay="0.6s" style="position: absolute; left: 611px; top: 754px;">
									<div class="dlab-box frame-box m-b30">
										<div class="dlab-thum dlab-img-overlay1"> 
											<a href="javascript:void(0);">
												<img src="<?php echo base_url('assets/')?>images/gallery/pic6.jpg" alt="">
											</a>
											<div class="overlay-bx">
												<div class="overlay-icon"> 
													<span data-exthumbimage="images/gallery/pic6.jpg" data-src="<?php echo base_url('assets/')?>images/gallery/pic6.jpg" class="check-km" title="Image 12 Title will come here">
														<i class="fa fa-search icon-bx-xs"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
        <!-- Content END-->
        <!-- Footer -->
        <?php echo view('maacc/layout/footer.php');?>

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