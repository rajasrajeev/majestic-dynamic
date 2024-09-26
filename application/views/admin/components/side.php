<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#projects" aria-expanded="false" aria-controls="projects">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Projects</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="projects">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/projects/create">Create</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/projects/index">List</a></li>
              </ul>
            </div>
          </li>
		  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false" aria-controls="gallery">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Gallery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="gallery">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/gallery/create">Create</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/gallery/index">List</a></li>
              </ul>
            </div>
          </li>
		  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/products/create">Create</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/products/index">List</a></li>
              </ul>
            </div>
          </li>
		  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#services" aria-expanded="false" aria-controls="services">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Services</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="services">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/services/create">Create</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/services/index">List</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
