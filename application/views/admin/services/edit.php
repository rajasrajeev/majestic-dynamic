<?php $this->load->view("admin/components/header"); ?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php $this->load->view("admin/components/nav"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php $this->load->view("admin/components/side"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		  <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Services</h4>
                  <form enctype="multipart/form-data" class="forms-sample" action="<?= base_url() ?>admin/services/updateservice_post" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="title" value="<?= $projects['title']; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Content</label>
                      <textarea type="email" class="form-control" id="exampleInputEmail3" placeholder="content"  name="content"><?= $projects['content']; ?></textarea>
                    </div>

                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="image" class="form-control" name="image">
					  <?php if (!empty($projects['image'])): ?>
							<img src="<?= base_url() . $projects['image']; ?>" alt="Project Image" style="width: 100px; margin-top: 10px;">
						<?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  <?php $this->load->view("admin/components/bottom"); ?>

  <script type="text/javascript">
    CKEDITOR.replace('content');
    <?php if (isset($_SESSION['error'])): ?>
        alert('<?php echo $_SESSION['error']; ?>');
        <?php unset($_SESSION['error']); // Clear the message to prevent it from showing again ?>
    <?php endif; ?>
</script>

