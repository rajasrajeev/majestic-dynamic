
	<?php $this->load->view("landing/components/header"); ?>
	<div class="op-header">
            <div class="thm-header text-center">
                <ul class="pb-10">
                    <li><a href="#" class="c1">Home</a></li>
                    <li class="c1">Projects</li>
                </ul>
                <h1 class="c3">Our Projects</h1>
            </div><!-- /.thm-header -->
        </div><!-- /.op-header -->

        <div class="service">
            <div class="container">
                <div class="row">
				<?php foreach ($projects as $product): ?>
					<div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <figure>
                                <img src="<?= base_url('' . $product['image']); ?>" alt="Service Thumb">
                            </figure>
                            <div class="service-card-body">
                                <h2><a href=""><?= $product['title']; ?></a></h2>
                                <p><?= $product['content']; ?></p>
                            </div><!-- /.service-card-body -->
                        </div><!-- /.service-card -->
                    </div><!-- /.col-lg-4 -->
				<?php endforeach; ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.service -->
	<?php $this->load->view("landing/components/footer"); ?>
	<?php $this->load->view("landing/components/bottom"); ?>
