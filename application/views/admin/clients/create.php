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
                  <h4 class="card-title">Add Clients</h4>
                  <form enctype="multipart/form-data" class="forms-sample" action="<?= base_url() ?>admin/clients/addclients_post" method="post">

                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="image" class="form-control" name="image"></th>
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

