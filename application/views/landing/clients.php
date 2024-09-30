<?php $this->load->view("landing/components/header"); ?>
<div class="main">
	<section class="module bg-dark-60 shop-page-header" data-background="assets/images/shop/product-page-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Our Gallery</h2>
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
				<?php foreach ($clients as $product): ?>
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="gallery-item">
						<div class="gallery-image"><a class="gallery" href="<?= base_url('' . $product['image']); ?>" title="Title 1"><img src="<?= base_url('' . $product['image']); ?>" alt="Gallery Image 1"/>
							<div class="gallery-caption">
								<div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
							</div></a></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php $this->load->view("landing/components/footer"); ?>
	<div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
	<?php $this->load->view("landing/components/bottom"); ?>
