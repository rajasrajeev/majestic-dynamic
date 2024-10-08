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
		  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Projects List</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="projects-table">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Content
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                    </table>
                  </div>
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

  <!-- <script>
$(document).ready(function () {
    $('#projects-table').DataTable({
        "ajax": {
            url: "<?= base_url() . 'admin/projects/get_projects' ?>",
            type: 'GET'
        },
        "columnDefs": [
            {
                "targets": -1, // Assuming you want the icons in the last column
                "data": null,
                "render": function (data, type, row) {
                    return "<a href='<?= base_url() . 'admin/projects/edit/' ?>" + row[4] + "'><i class='ti-pencil'></i></a> / <a href='#' class='delete-project' data-url='<?= base_url() . 'admin/projects/delete_project/' ?>" + row[4] + "'><i style='color: red;' class='ti-trash'></i></a>";
                },
                "width": "10%"
            },
        ]
    });

    // Event delegation to handle dynamic content
    $(document).on('click', '.delete-project', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        if (confirm('Are you sure you want to delete this project?')) {
            window.location.href = url;
        }
    });
});
</script> -->
<script type="text/javascript">
    // Display error message if it exists
    <?php if ($this->session->flashdata('error')): ?>
        alert('<?php echo $this->session->flashdata('error'); ?>');
    <?php endif; ?>
</script>
<script>
$(document).ready(function () {
    $('#projects-table').DataTable({
        "ajax": {
            url: "<?= base_url() . 'admin/projects/get_projects' ?>",
            type: 'GET',
            dataSrc: 'data'  // Ensure you're mapping the correct data key from your API response
        },
        "columnDefs": [
            {
                // Third column (Image)
                "targets": 2,
                "data": "image", // The image data from the database
                "render": function (data, type, row) {
                    // Constructing the image URL and returning an <img> tag
                    return '<img src="<?= base_url() ?>' + row[2] + '" alt="Project Image" style="width: 100px; height: auto;border-radius:2px;">';
                }
            },
            {
                // Action buttons (Edit/Delete) in the last column
                "targets": 4,
                "data": null, // No specific data needed
                "render": function (data, type, row) {
                    return "<a href='<?= base_url() . 'admin/projects/edit/' ?>" + row[4] + "'><i class='ti-pencil'></i></a> / <a href='#' class='delete-project' data-url='<?= base_url() . 'admin/projects/delete_project/' ?>" + row[4] + "'><i style='color: red;' class='ti-trash'></i></a>";
                },
                "width": "10%" // Adjust the width of the action column
            }
        ]
    });

    // Event delegation to handle dynamic content (for delete action)
    $(document).on('click', '.delete-project', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        if (confirm('Are you sure you want to delete this project?')) {
            window.location.href = url;
        }
    });
});
</script>

