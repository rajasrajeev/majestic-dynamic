
<?php $this->load->view("landing/components/top"); ?>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
              <span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Majestic</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class=""><a class="" href="#" data-toggle="dropdown">Home</a>
                
              </li>
              <li class=""><a class="" href="#story" data-toggle="">About</a>
                
              </li>
              <!-- <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Products</a> -->
              <li class=""><a class="" href="#products" data-toggle="">Products</a>
                <!-- <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">About</a>
                    <ul class="dropdown-menu">
                      <li><a href="about1.html">About 1</a></li>
                      <li><a href="about2.html">About 2</a></li>
                      <li><a href="about3.html">About 3</a></li>
                      <li><a href="about4.html">About 4</a></li>
                      <li><a href="about5.html">About 5</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                      <li><a href="service1.html">Service 1</a></li>
                      <li><a href="service2.html">Service 2</a></li>
                      <li><a href="service3.html">Service 3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pricing</a>
                    <ul class="dropdown-menu">
                      <li><a href="pricing1.html">Pricing 1</a></li>
                      <li><a href="pricing2.html">Pricing 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gallery</a>
                    <ul class="dropdown-menu">
                      <li><a href="gallery_col_2.html">2 Columns</a></li>
                      <li><a href="gallery_col_3.html">3 Columns</a></li>
                      <li><a href="gallery_col_4.html">4 Columns</a></li>
                      <li><a href="gallery_col_6.html">6 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Contact</a>
                    <ul class="dropdown-menu">
                      <li><a href="contact1.html">Contact 1</a></li>
                      <li><a href="contact2.html">Contact 2</a></li>
                      <li><a href="contact3.html">Contact 3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Restaurant menu</a>
                    <ul class="dropdown-menu">
                      <li><a href="restaurant_menu1.html">Menu 2 Columns</a></li>
                      <li><a href="restaurant_menu2.html">Menu 3 Columns</a></li>
                    </ul>
                  </li>
                  <li><a href="login_register.html">Login / Register</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="404.html">Page 404</a></li>
                </ul> -->
              </li>
             
               <li class=""><a class="" href="#services" data-toggle="">Services</a>
                <!--<ul class="dropdown-menu" role="menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                    <ul class="dropdown-menu">
                      <li><a href="portfolio_boxed_col_2.html">2 Columns</a></li>
                      <li><a href="portfolio_boxed_col_3.html">3 Columns</a></li>
                      <li><a href="portfolio_boxed_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed - Gutter</a>
                    <ul class="dropdown-menu">
                      <li><a href="portfolio_boxed_gutter_col_2.html">2 Columns</a></li>
                      <li><a href="portfolio_boxed_gutter_col_3.html">3 Columns</a></li>
                      <li><a href="portfolio_boxed_gutter_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                    <ul class="dropdown-menu">
                      <li><a href="portfolio_full_width_col_2.html">2 Columns</a></li>
                      <li><a href="portfolio_full_width_col_3.html">3 Columns</a></li>
                      <li><a href="portfolio_full_width_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width - Gutter</a>
                    <ul class="dropdown-menu">
                      <li><a href="portfolio_full_width_gutter_col_2.html">2 Columns</a></li>
                      <li><a href="portfolio_full_width_gutter_col_3.html">3 Columns</a></li>
                      <li><a href="portfolio_full_width_gutter_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Masonry</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_masonry_boxed_col_2.html">2 Columns</a></li>
                          <li><a href="portfolio_masonry_boxed_col_3.html">3 Columns</a></li>
                          <li><a href="portfolio_masonry_boxed_col_4.html">4 Columns</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_masonry_full_width_col_2.html">2 Columns</a></li>
                          <li><a href="portfolio_masonry_full_width_col_3.html">3 Columns</a></li>
                          <li><a href="portfolio_masonry_full_width_col_4.html">4 Columns</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Hover Style</a>
                    <ul class="dropdown-menu">
                      <li><a href="portfolio_hover_black.html">Black</a></li>
                      <li><a href="portfolio_hover_gradient.html">Gradient</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Image</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_single_featured_image1.html">Style 1</a></li>
                          <li><a href="portfolio_single_featured_image2.html">Style 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Slider</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_single_featured_slider1.html">Style 1</a></li>
                          <li><a href="portfolio_single_featured_slider2.html">Style 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Video</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_single_featured_video1.html">Style 1</a></li>
                          <li><a href="portfolio_single_featured_video2.html">Style 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul> -->
              </li>
              <!-- <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Our Projects</a> -->
                <li class=""><a class="" href="#projects" data-toggle="">Our Projects</a> 
                <!-- <ul class="dropdown-menu" role="menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Standard</a>
                    <ul class="dropdown-menu">
                      <li><a href="blog_standard_left_sidebar.html">Left Sidebar</a></li>
                      <li><a href="blog_standard_right_sidebar.html">Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Grid</a>
                    <ul class="dropdown-menu">
                      <li><a href="blog_grid_col_2.html">2 Columns</a></li>
                      <li><a href="blog_grid_col_3.html">3 Columns</a></li>
                      <li><a href="blog_grid_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Masonry</a>
                    <ul class="dropdown-menu">
                      <li><a href="blog_grid_masonry_col_2.html">2 Columns</a></li>
                      <li><a href="blog_grid_masonry_col_3.html">3 Columns</a></li>
                      <li><a href="blog_grid_masonry_col_4.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single</a>
                    <ul class="dropdown-menu">
                      <li><a href="blog_single_left_sidebar.html">Left Sidebar</a></li>
                      <li><a href="blog_single_right_sidebar.html">Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul> -->
              </li>
              <!-- <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gallery</a>
                 <ul class="dropdown-menu" role="menu">
                  <li><a href="alerts-and-wells.html"><i class="fa fa-bolt"></i> Alerts and Wells</a></li>
                  <li><a href="buttons.html"><i class="fa fa-link fa-sm"></i> Buttons</a></li>
                  <li><a href="tabs_and_accordions.html"><i class="fa fa-tasks"></i> Tabs &amp; Accordions</a></li>
                  <li><a href="content_box.html"><i class="fa fa-list-alt"></i> Contents Box</a></li>
                  <li><a href="forms.html"><i class="fa fa-check-square-o"></i> Forms</a></li>
                  <li><a href="icons.html"><i class="fa fa-star"></i> Icons</a></li>
                  <li><a href="progress-bars.html"><i class="fa fa-server"></i> Progress Bars</a></li>
                  <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                </ul> -->
              </li>
              <li class=""><a class="" href="#clients" data-toggle="">Clients</a>
                <!-- <ul class="dropdown-menu" role="menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Product</a>
                    <ul class="dropdown-menu">
                      <li><a href="shop_product_col_3.html">3 columns</a></li>
                      <li><a href="shop_product_col_4.html">4 columns</a></li>
                    </ul>
                  </li>
                  <li><a href="shop_single_product.html">Single Product</a></li>
                  <li><a href="shop_checkout.html">Checkout</a></li>
                </ul> -->
              </li>

              <!-- <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a href="documentation.html#contact">Contact Form</a></li>
                  <li><a href="documentation.html#reservation">Reservation Form</a></li>
                  <li><a href="documentation.html#mailchimp">Mailchimp</a></li>
                  <li><a href="documentation.html#gmap">Google Map</a></li>
                  <li><a href="documentation.html#plugin">Plugins</a></li>
                  <li><a href="documentation.html#changelog">Changelog</a></li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
