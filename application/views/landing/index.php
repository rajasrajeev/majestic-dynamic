<?php $this->load->view("landing/components/header"); ?>

<section class="home-section home-full-height bg-dark-30" id="home"
	data-background="<?php echo base_url(); ?>assets/landing/assets/images/new/1.jpeg">
	<!-- <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=bNucJgetMjE', containment:'.home-section', startAt:18, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        <div class="video-controls-box">
          <div class="container">
            <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
          </div>
        </div> -->
	<!-- <div class="titan-caption">
		<div class="caption-content">
			<div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
			<div class="font-alt mb-40 titan-title-size-4">We are Majestic</div><a
				class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
		</div>
	</div> -->
</section>
<div class="main">
	<section class="module" id="story">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Our Story </h2>
					<div class="module-subtitle font-serif">Founded by Mr Abdulla Butty Salem mousa al qubaisi, MAJESTIC embarked
						on a journey to redefine manufacturing standards. From our beginnings as a small workshop, local enterprise,
						we have grown into a leading manufacturer renowned for our commitment to quality and customer satisfaction.

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="alt-features-item">
						<div class="alt-features-icon"><span class="icon-tools-2"></span></div>
						<h3 class="alt-features-title font-alt">Expert Craftsmanship</h3>Our skilled team employs advanced
						techniques and strict quality control to deliver exceptional results
					</div>
					<div class="alt-features-item">
						<div class="alt-features-icon"><span class="icon-target"></span></div>
						<h3 class="alt-features-title font-alt">Customer-Centric Approach</h3>We are committed to providing
						outstanding service from the initial consultation through to project completion and support.
					</div>
					<div class="alt-features-item">
						<div class="alt-features-icon"><span class="icon-tools"></span></div>
						<h3 class="alt-features-title font-alt">Innovative Design</h3>Our products are crafted using the latest
						technologies and design trends, ensuring they meet both functional and aesthetic needs.
					</div>
				</div>
				<div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
					<div class="alt-services-image align-center"><img
							src="<?php echo base_url(); ?>assets/landing/assets/images/new/about.png" alt="Feature Image"></div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="alt-features-item">
						<div class="alt-features-icon"><span class="icon-camera"></span></div>
						<h3 class="alt-features-title font-alt">Custom Fabrication</h3>Our expertise in steel and aluminum work
						allows us to deliver tailored solutions that meet specific project requirements.
					</div>
					<div class="alt-features-item">
						<div class="alt-features-icon"><span class="icon-linegraph"></span></div>
						<h3 class="alt-features-title font-alt">High-Quality Materials</h3>We use premium materials to ensure
						durability and long-lasting performance across all our products.

					</div>
					<div class="alt-features-item">
						<div class="alt-features-icon"><span class="icon-basket"></span></div>
						<h3 class="alt-features-title font-alt">Comprehensive Product Range</h3>We offer a broad selection of
						products, from outdoor shading solutions and mobile homes to structural projects and custom metalwork.

					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- <section class="module bg-dark-60"
		data-background="<?php echo base_url(); ?>assets/landing/assets/images/section-6.jpg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="video-box">
						<div class="video-box-icon"><a class="video-pop-up" href="https://www.youtube.com/watch?v=TTxZj3DZiIM"><span
									class="icon-video"></span></a></div>
						<div class="video-title font-alt">Presentation</div>
						<div class="video-subtitle font-alt">Watch the video about our new products</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- Mission and Vission -->
	<section class="module pb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 module-title font-alt">Our Mission
					<img src="<?php echo base_url(); ?>assets/landing/assets/images/favicons/next.png" width="100" height="50" />
				</div>
				<div class="col-md-6 alt-features-title font-alt">
					Our mission is to exceed customer expectations by providing superior products and services. We are dedicated
					to blending innovation, high-quality materials, and expert craftsmanship to create solutions that are both
					functional and aesthetically pleasing.
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-12 order-1 order-md-2 module-title font-alt">
					<img src="<?php echo base_url(); ?>assets/landing/assets/images/favicons/next.png" width="100" height="50" />
					Our Vision
				</div>
				<div class="col-md-6 col-12 order-2 order-md-1 alt-features-title font-alt">
					Looking to the future, we strive to continue leading the industry with innovative solutions and unparalleled
					service.
					We are committed to expanding our capabilities and product offerings to better meet the evolving needs of our
					customers and the market.
				</div>
			</div>
		</div>
	</section>


	<section class="module pb-0" id="products">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Our Products</h2>
					<div class="module-subtitle font-serif"></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<ul class="works-grid works-grid-gut works-grid-3 works-hover-w">
					<?php foreach ($products as $product): ?>
					<li class="work-item illustration webdesign">
						<a href="portfolio_single_featured_image<?= $product['id']; ?>.html">
							<div class="work-image">
								<img src="<?= base_url('' . $product['image']); ?>" alt="<?= $product['title']; ?>" />
							</div>
							<div class="work-caption font-alt">
								<h3 class="work-title">
									<?= $product['title']; ?>
								</h3> <!-- Product name -->
							</div>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="row bg-dark" style="padding-top: 2rem;">
			<div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
				<div class="callout-text font-alt">
					<h3 class="callout-title bg-dark">Want to see more products?</h3>
					<p>We are always open to interesting projects.</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2">
				<div class="callout-btn-box">
					<a class="btn btn-w btn-round" href="<?= base_url() . 'products' ?>">Let's view products</a>
				</div>
			</div>
		</div>
	</section>


	<!-- <section class="module-small bg-dark"> -->


	<section class="module" id="services">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Our Services</h2>
					<div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like
						these sweet mornings of spring which I enjoy with my whole heart.</div>
				</div>
			</div>
			<div class="row multi-columns-row">
				<?php foreach ($services as $service): ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="features-item">
						<!-- <div class="features-icon"><span class="icon-lightbulb"></span></div> -->
						<h3 class="features-title font-alt">
							<?= $service['title']; ?>
						</h3>
						<p>
							<?= $service['content']; ?>
						</p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="module pb-0" id="projects">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Our Works</h2>
					<div class="module-subtitle font-serif"></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>
		</div>
		<ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
			<?php foreach ($projects as $project): ?>
			<li class="work-item illustration webdesign">
				<a href="portfolio_single_featured_image<?= $project['id']; ?>.html">
					<div class="work-image">
						<img src="<?= base_url('' . $project['image']); ?>" alt="<?= $project['title']; ?>" />
					</div>
					<div class="work-caption font-alt">
						<h3 class="work-title">
							<?= $project['title']; ?>
						</h3> <!-- Product name -->
					</div>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</section>

	<section class="module-small bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
					<div class="callout-text font-alt">
						<h3 class="callout-title">Want to see more works?</h3>
						<p>We are always open to interesting projects.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2">
					<div class="callout-btn-box"><a class="btn btn-w btn-round" href="<?= base_url() . 'projects' ?>">Lets view
							portfolio</a></div>
				</div>
			</div>
		</div>
	</section>

	<!-- <hr class="divider-w">
	<section class="module" id="team">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Meet Our Team</h2>
					<div class="module-subtitle font-serif">
						Our team comprises experienced professionals who are passionate about manufacturing excellence. With a
						diverse range of skills and a commitment to quality,
						we work collaboratively to bring your vision to life and achieve superior results.
					</div>
				</div>
			</div>
			<div class="row">
				<div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
					<div class="team-item">
						<div class="team-image"><img src="<?php echo base_url(); ?>assets/landing/assets/images/team-1.jpg"
								alt="Member Photo" />
							<div class="team-detail">
								<h5 class="font-alt">Hi all</h5>
								<p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis
									diam.</p>
								<div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
											class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i
											class="fa fa-skype"></i></a></div>
							</div>
						</div>
						<div class="team-descr font-alt">
							<div class="team-name">Jim Stone</div>
							<div class="team-role">Art Director</div>
						</div>
					</div>
				</div>
				<div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
					<div class="team-item">
						<div class="team-image"><img src="<?php echo base_url(); ?>assets/landing/assets/images/team-2.jpg"
								alt="Member Photo" />
							<div class="team-detail">
								<h5 class="font-alt">Good day</h5>
								<p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis
									diam.</p>
								<div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
											class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i
											class="fa fa-skype"></i></a></div>
							</div>
						</div>
						<div class="team-descr font-alt">
							<div class="team-name">Andy River</div>
							<div class="team-role">Creative director</div>
						</div>
					</div>
				</div>
				<div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
					<div class="team-item">
						<div class="team-image"><img src="<?php echo base_url(); ?>assets/landing/assets/images/team-3.jpg"
								alt="Member Photo" />
							<div class="team-detail">
								<h5 class="font-alt">Hello</h5>
								<p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis
									diam.</p>
								<div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
											class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i
											class="fa fa-skype"></i></a></div>
							</div>
						</div>
						<div class="team-descr font-alt">
							<div class="team-name">Adele Snow</div>
							<div class="team-role">Account manager</div>
						</div>
					</div>
				</div>
				<div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
					<div class="team-item">
						<div class="team-image"><img src="<?php echo base_url(); ?>assets/landing/assets/images/team-4.jpg"
								alt="Member Photo" />
							<div class="team-detail">
								<h5 class="font-alt">Yes, it's me</h5>
								<p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis
									diam.</p>
								<div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
											class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i
											class="fa fa-skype"></i></a></div>
							</div>
						</div>
						<div class="team-descr font-alt">
							<div class="team-name">Dylan Woods</div>
							<div class="team-role">Developer</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<section id="clients" class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial"
		data-background="<?php echo base_url(); ?>assets/landing/assets/images/new/2.jpeg">
		<div class="testimonials-slider pt-140 pb-140">
			<ul class="slides">
				<li>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="module-icon"><span class="icon-quote"></span></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<blockquote class="testimonial-text font-alt">I am alone, and feel the charm of existence in this spot,
									which was created for the bliss of souls like mine.</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<div class="testimonial-author">
									<div class="testimonial-caption font-alt">
										<div class="testimonial-title">Jack Woods</div>
										<div class="testimonial-descr">SomeCompany INC, CEO</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="module-icon"><span class="icon-quote"></span></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<blockquote class="testimonial-text font-alt">I should be incapable of drawing a single stroke at the
									present moment; and yet I feel that I never was a greater artist than now.</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<div class="testimonial-author">
									<div class="testimonial-caption font-alt">
										<div class="testimonial-title">Jim Stone</div>
										<div class="testimonial-descr">SomeCompany INC, CEO</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="module-icon"><span class="icon-quote"></span></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<blockquote class="testimonial-text font-alt">I am so happy, my dear friend, so absorbed in the
									exquisite sense of mere tranquil existence, that I neglect my talents.</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<div class="testimonial-author">
									<div class="testimonial-caption font-alt">
										<div class="testimonial-title">Adele Snow</div>
										<div class="testimonial-descr">SomeCompany INC, CEO</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<div class="module-small bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
					<div class="callout-text font-alt">
						<h3 class="callout-title">Subscribe now</h3>
						<p>We will not spam your email.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="callout-btn-box">
						<form method="post" action="<?= base_url() ?>home/subscribe_now">
							<div class="input-group">
								<input class="form-control" type="email" id="semail" name="email" placeholder="Your Email"
									data-validation-required-message="Please enter your email address." required="required" /><span
									class="input-group-btn">
									<button class="btn btn-g btn-round" id="subscription-form-submit" type="submit">Submit</button></span>
							</div>
						</form>
						<div class="text-center" id="subscription-response"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="module" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Get in touch</h2>
					<div class="module-subtitle font-serif"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<form id="contactForm" role="form" method="post" action="<?= base_url() ?>home/get_in_touch">
						<div class="form-group">
							<label class="sr-only" for="name">Name</label>
							<input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required"
								data-validation-required-message="Please enter your name." />
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<label class="sr-only" for="email">Email</label>
							<input class="form-control" type="email" id="email" name="email" placeholder="Your Email*"
								required="required" data-validation-required-message="Please enter your email address." />
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*"
								required="required" data-validation-required-message="Please enter your message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
						<div class="text-center">
							<button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
						</div>
					</form>
					<div class="ajax-response font-alt" id="contactFormResponse"></div>
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view("landing/components/footer"); ?>
	<div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
	<?php $this->load->view("landing/components/bottom"); ?>

	
