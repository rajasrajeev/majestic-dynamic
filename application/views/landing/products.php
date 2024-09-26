<?php $this->load->view("landing/components/header"); ?>
<div class="main">
	<section class="module bg-dark-60 shop-page-header" data-background="assets/images/shop/product-page-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Our Products</h2>
					<div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul,
						like these sweet mornings of spring which I enjoy with my whole heart.</div>
				</div>
			</div>
		</div>
	</section>
	<hr class="divider-w">
	<section class="module-small">
		<div class="container">
			<div class="row multi-columns-row">
				<?php foreach ($products as $product): ?>
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="shop-item">
						<div class="shop-item-image"><img src="<?= base_url('' . $product['image']); ?>"
								alt="Accessories Pack" />
							<div class="shop-item-detail"><a class="btn btn-round btn-b">
										<?= $product['content']; ?>
									</a></div>
						</div>
						<h4 class="shop-item-title font-alt"><a href="#">
								<?= $product['title']; ?>
							</a></h4>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<div class="module-small bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="widget">
						<h5 class="widget-title font-alt">About Majestic</h5>
						<p>Welcome to MAJESTIC, where quality meets innovation in the realm of manufacturing.
							Since 2006, we have been committed to delivering exceptional products across a diverse range
							of categories, including shades, canopies, caravans, hangars,
							steel structures, doors and gates, car parking shades, panel work, and comprehensive steel
							and aluminum solutions.

						</p>
						<p>Phone: +971563337317</p>whatsapp: +971563337317
						<p>Email:<a href="#">somecompany@example.com</a></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="widget">
						<h5 class="widget-title font-alt">Our Address</h5>
						<ul class="icon-list">
							<li>Comapny name on <a href="#">Majestic</a></li>
							<li>Street <a href="#">Realistic Business Card Mockup</a></li>
							<li>District <a href="#">hhhh</a></li>
							<li>Country <a href="#"> Qatar</a></li>
							<li>Pin Code <a href="#">6888</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="widget">
						<h5 class="widget-title font-alt">Useful Links</h5>
						<ul class="icon-list">
							<li><a href="#">Home </a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Project </a></li>
							<li><a href="#">Product</a></li>
							<li><a href="#">Service</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="divider-d">
	<?php $this->load->view("landing/components/footer"); ?>
	<div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
	<?php $this->load->view("landing/components/bottom"); ?>
