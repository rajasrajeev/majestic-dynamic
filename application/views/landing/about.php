<?php $this->load->view("landing/components/header"); ?>
<div class="op-header">
            <div class="thm-header text-center">
                <ul class="pb-10">
                    <li><a href="#" class="c1">Home</a></li>
                    <li class="c1">about us</li>
                </ul>
                <h1 class="c3">Our Story</h1>
            </div><!-- /.thm-header -->
        </div><!-- /.op-header -->

        <div class="about-page f1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header>
                            <figure>
                                <img src="<?php echo base_url(); ?>assets/landing/img/about-3-1.jpg" alt="About us">
                                <figcaption>
                                    <p class="f1 fw-3">
                                    Founded by Mr Abdulla Butty Salem mousa al qubaisi, MAJESTIC embarked on a journey to redefine manufacturing standards. From our beginnings as a 
                                    small workshop, local enterprise, we have grown into a leading manufacturer renowned for our commitment to quality and customer satisfaction.

                                </p>
                                </figcaption>
                            </figure>
                        </header>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
                <div class="row mb-4">
                <div class="col-md-6">
                <h1>Our mission</h1>
                <p>
                Our mission is to exceed customer expectations by providing superior products and services. We are dedicated to blending innovation, high-quality materials, and expert craftsmanship to create solutions that are both functional and aesthetically pleasing.

                </p>
                </div>
                <div  class="col-md-6">
                <h1>Our Vision
                </h1>
                <p>
                Looking to the future, we strive to continue leading the industry with innovative solutions and unparalleled service. We are committed to expanding our capabilities and product offerings to better meet the evolving needs of our customers and the market.

                </p>
                </div>
                </div>
            </div><!-- /.container -->
            <!-- /.faqs -->
            <div class="testimony text-white text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="thm-header text-center text-white">
                                <p class="pb-10">our feedbacks</p>
                                <h1>What People Say</h1>
                            </div><!-- /.thm-header -->
                        </div><!-- /.col-12 -->
                        <div class="col-xl-8 col-lg-8 col-md-10">
                            <div class="rating-area">
                                <div class="testi-pager d-flex justify-content-center align-items-end mb-55" id="testi-pager">
                                    <a href="#" class="pager-item active" data-slide-index="0">
                                        <div class="testi-thumb">
                                            <img src="<?php echo base_url(); ?>assets/landing/img/testi-1-1.jpg" alt="rating" title="">
                                        </div>
                                    </a>
                                    <a href="#" class="pager-item" data-slide-index="1">
                                        <div class="testi-thumb">
                                            <img src="<?php echo base_url(); ?>assets/landing/img/testi-1-2.jpg" alt="rating" title="">
                                        </div>
                                    </a>
                                    <a href="#" class="pager-item" data-slide-index="2">
                                        <div class="testi-thumb">
                                            <img src="<?php echo base_url(); ?>assets/landing/img/testi-1-3.jpg" alt="rating" title="">
                                        </div>
                                    </a>
                                </div>

                                <!--Slider-->
                                <ul class="rating-slider f1">
                                    <li class="slide-item">
                                        <div class="slide-text">
                                            <p>This is due to their excellent service, competitive pricing and customer
                                                support. It’s throughly refresing to get such a personal touch.</p>
                                            <h4 class="mt-30">Mike Hardson</h4>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div><!-- /.rating -->
                                        </div>
                                    </li>
                                    <li class="slide-item">
                                        <div class="slide-text">
                                            <p>This is due to their excellent service, competitive pricing and customer
                                                support. It’s throughly refresing to get such a personal touch.</p>
                                            <h4 class="mt-30">Mike Hardson</h4>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div><!-- /.rating -->
                                        </div>
                                    </li>
                                    <li class="slide-item">
                                        <div class="slide-text">
                                            <p>This is due to their excellent service, competitive pricing and customer
                                                support. It’s throughly refresing to get such a personal touch.</p>
                                            <h4 class="mt-30">Mike Hardson</h4>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div><!-- /.rating -->
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /.rating-area -->
                        </div><!-- /.col-xl-6 col-lg-8 col-md-10 offset-xl-3 offset-lg-2 offset-md-1 offset-sm-0 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.testimony -->
            <div class="sec-team text-center clearfix">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="thm-header text-center">
                                <p class="c1 pb-10">Services</p>
                                <h1 class="c3">Our Services</h1>
                            </div><!-- /.thm-header -->
                        </div><!-- /.col-12 -->
						<?php foreach ($services as $product): ?>
                        	<!-- <a href="#"><img src="" alt="Partners"></a> -->
							<div class="col-md-4">
								<div class="member-card bg-white">
									<figure>
										<div class="text-md-right text-center">
											<img src="<?= base_url('' . $product['image']); ?>" alt="Team Member">
										</div>
										<figcaption>
											<div class="member-info f1">
												<h2 class="fw-6 c3"><a href="#"><?= $product['title']; ?></a></h2>
												<p class="fw-6"><?= $product['content']; ?></p>
											</div><!-- /.member-info -->
										</figcaption>
									</figure>
								</div><!-- /.member-card -->
							</div><!-- /.col-lg-4 -->
						<?php endforeach; ?>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.sec-team -->
			<div class="testimony text-white text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12">
							<div class="thm-header text-center text-white">
								<p class="pb-10">What Sets Us Apart</p>
								<h1>Our Products</h1>
							</div><!-- /.thm-header -->
						</div><!-- /.col-12 -->
						<div class="col-xl-8 col-lg-8 col-md-10">
							<div class="rating-area">
								<div class="testi-pager d-flex justify-content-center align-items-end mb-55" id="testi-pager">
								<?php foreach ($products as $key=>$product): ?>
									<a href="#" class="pager-item active" data-slide-index="<?= $key; ?>">
										<div class="testi-thumb">
											<img src="<?= base_url('' . $product['image']); ?>" alt="rating" title="">
										</div>
									</a>
								<?php endforeach; ?>
									
								</div>

								<!--Slider-->
								<ul class="rating-slider f1">
								<?php foreach ($products as $key=>$product): ?>
									<li class="slide-item">
										<div class="slide-text">
											<p><?= $product['content']; ?></p>
											<h4 class="mt-30"><?= $product['title']; ?></h4>
										</div>
									</li>
								<?php endforeach; ?>
								</ul>
							</div><!-- /.rating-area -->
						</div><!-- /.col-xl-6 col-lg-8 col-md-10 offset-xl-3 offset-lg-2 offset-md-1 offset-sm-0 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.testimony -->
            <div class="partners bg4">
                <div class="container">
                    <div class="partner-carousel owl-carousel">
						<?php foreach ($clients as $product): ?>
                        	<a href="#"><img src="<?= base_url('' . $product['image']); ?>" alt="Partners"></a>
						<?php endforeach; ?>
                    </div><!-- /.partner-carousel -->
                </div><!-- /.container -->
            </div><!-- /.partners -->
        </div><!-- /.about-page -->
	<?php $this->load->view("landing/components/footer"); ?>
	<?php $this->load->view("landing/components/bottom"); ?>
