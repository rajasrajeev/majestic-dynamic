
<?php $this->load->view("landing/components/top"); ?>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
              <span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" style="display: flex;height: 55px;" href="<?= base_url(). 'home'?>"><img src="<?=base_url()?>assets/images/logo_icon.jpg" alt=""><img src="<?=base_url()?>assets/images/logo_text.jpg" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <!-- <li class=""><a class="" href="<?= base_url() . 'home' ?>" data-toggle="dropdown">Home</a>
              </li> -->
              <li class=""><a class="" href="<?= base_url() . 'about' ?>" data-toggle="">About</a>
              </li>
              <li class=""><a class="" href="<?= base_url() . 'products' ?>" data-toggle="">Products</a>
              </li>
               <li class=""><a class="" href="<?= base_url() . 'services' ?>" data-toggle="">Services</a>
              </li>
                <li class=""><a class="" href="<?= base_url() . 'projects' ?>" data-toggle="">Our Projects</a> 
              </li>
                <li class=""><a class="" href="<?= base_url() . 'gallery' ?>" data-toggle="">Gallery</a> 
              </li>
              </li>
              <li class=""><a class="" href="<?= base_url() . 'clients' ?>" data-toggle="">Clients</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
			<?php if (!empty($success_message)): ?>
        <div class="alert alert-success" role="alert">
                  <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><strong><?= $success_message; ?></strong> 
                </div>
    <?php endif; ?>
			
