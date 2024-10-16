<?php $this->load->view("landing/components/top"); ?>

<body>
	<!-- <div class="preloader"></div> -->
    <div class="page-wrapper">

		<!-- space for preloader -->
		<header class="site-header header-one">
			<div class="top-header">
				<div class="container clearfix">
					<div class="logo-box float-left">
						<a href="<?= base_url() ?>">
							<img style="height: 4rem;" src="<?php echo base_url(); ?>assets/images/logo.png">
							<!-- s -->
						</a>
					</div><!-- /.logo-box -->
					<div class="float-right right-contact-block">
						<div class="single-right-contact">
							<div class="icon-block">
								<i class="carevan-icon-placeholder"></i><!-- /.Carivon-icon-placeholder -->
							</div><!-- /.icon-block -->
							<div class="text-block">
								<p><span>Industrial Area-Zayed City <br/>Al Dhafra Region</span> Abu Dhabi- UAE</p>
							</div><!-- /.text-block -->
						</div><!-- /.single-right-contact -->
						<div class="single-right-contact">
							<div class="icon-block">
								<i class="carevan-icon-phone-call"></i><!-- /.Carivon-icon-placeholder -->
							</div><!-- /.icon-block -->
							<div class="text-block">
								<p><span>+971561011153</span> Phone line</p>
							</div><!-- /.text-block -->
						</div><!-- /.single-right-contact -->
						<div class="single-right-contact">
							<div class="icon-block">
								<i class="carevan-icon-clock"></i><!-- /.Carivon-icon-placeholder -->
							</div><!-- /.icon-block -->
							<div class="text-block">
								<p><span>Mon-Sat: 8am - 7pm</span> Opening Time</p>
							</div><!-- /.text-block -->
						</div><!-- /.single-right-contact -->
						<div class="single-right-contact">
							<a href="#contact" class="header-btn">Contact Us</a><!-- /.header-btn -->
						</div><!-- /.single-right-contact -->
					</div><!-- /.float-right -->					
				</div><!-- /.container -->
			</div><!-- /.top-header -->
			<nav class="navbar navbar-expand-lg navbar-light header-navigation stricky header-style-one">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <button class="menu-toggler" data-target="#main-nav-bar">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation" id="main-nav-bar">
					<ul class="navigation-box">
					<li <?= ($this->uri->segment(1) == '') ? 'class="current"' : '' ?> ><a href="<?= base_url() ?>" data-toggle="">Home</a></li>
                        <li <?= ($this->uri->segment(1) == 'about') ? 'class="current"' : '' ?> ><a href="<?= base_url() . 'about' ?>" data-toggle="">About</a></li>
                        <li <?= ($this->uri->segment(1) == 'products') ? 'class="current"' : '' ?> ><a href="<?= base_url() . 'products' ?>" data-toggle="">Products</a></li>
                        <li <?= ($this->uri->segment(1) == 'services') ? 'class="current"' : '' ?> ><a href="<?= base_url() . 'services' ?>" data-toggle="">Services</a></li>
                        <li <?= ($this->uri->segment(1) == 'projects') ? 'class="current"' : '' ?> ><a href="<?= base_url() . 'projects' ?>" data-toggle="">Our Projects</a></li>
                        <li <?= ($this->uri->segment(1) == 'gallery') ? 'class="current"' : '' ?> ><a href="<?= base_url() . 'gallery' ?>" data-toggle="">Gallery</a></li>
					</ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <div class="social">
							<a href="#"><i class="fa fa-twitter"></i></a><!--
                            --><a href="#"><i class="fa fa-facebook-f"></i></a><!--
                            --><a href="#"><i class="fa fa-youtube-play"></i></a><!--                            
                            --><a href="#"><i class="fa fa-google-plus"></i></a>
                        </div><!-- /.social -->
                    </div>
                    <!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
		</header><!-- /.site-header -->
		<?php if (!empty($success_message)): ?>
		<div class="alert alert-success" role="alert">
			<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><strong>
				<?= $success_message; ?>
			</strong>
		</div>
		<?php endif; ?>
