<?php
add_js(base_url("assets/vendors/dropzone/dist/min/dropzone.min.js"));
add_js(base_url('assets/vendors/select2/dist/js/select2.full.min.js'));
add_js(base_url('assets/js/breaking.js'));
add_js(base_url('assets/js/gallery.js'));
?>
<link href="/assets/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage Photo Gallery</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <p class="alert alert-warning">
          Pilih 1 / 4 berita sekaligus
        </p>
        <?php echo modules::run('alert/show'); ?>
        <?php if (validation_errors()): ?>
          <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
          </div>
        <?php endif; ?>
        <?php echo form_open_multipart('myadmin/gallery/new', array('name' => 'ci_form', 'id' => 'myAwesomeDropzone', 'class' => 'dropzone')); ?>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              Pilih berita
            </div>
            <div class="col-md-9">
              <select class="select2-single form-control" name="news_list[]" required>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-offset-3">
              <button type="submit" class="btn btn-pimary">Update</button>
            </div>
          </div>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
