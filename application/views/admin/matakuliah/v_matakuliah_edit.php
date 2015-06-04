<div class="page-header">
  <h1>
    Form Elements
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Common form elements and layouts
    </small>
  </h1>
</div><!-- /.page-header -->

<div class="row">
  <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
    <?php echo form_open('admin/matakuliah/update',array('class'=>'form-horizontal')); 
    foreach($matakuliah as $m) { ?>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Matakuliah </label>
        <div class="col-sm-9">
          <input type="text" name="id_matakuliah" value="<?php echo $m->id_matakuliah;?>" readonly class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Matakuliah </label>
        <div class="col-sm-9">
          <input type="text" name="nama_matakuliah" value="<?php echo $m->nama_matakuliah;?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>

      <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
          <button class="btn btn-info" type="submit">
            <i class="ace-icon fa fa-check bigger-110"></i>
            Submit
          </button>

          &nbsp; &nbsp; &nbsp;
          <button class="btn" type="reset">
            <i class="ace-icon fa fa-undo bigger-110"></i>
            Reset
          </button>
        </div>
      </div>
    <?php }; echo form_close();?>

  </div>
</div>


<div class="module">
  <div class="module-head">
    <h3>Edit Data Matakuliah</h3>
  </div>
  <div class="module-body">
    <?php echo form_open('admin/matakuliah/update',array('class'=>'form-horizontal row-fluid')); 
      foreach ($matakuliah as $m) { ?>
      <input type="hidden" class="form-control" name="id_matakuliah" value="<?php echo $m->id_matakuliah ?>" >
      <div class="control-group">
        <label class="control-label">Nama Matakuliah</label>
          <div class="controls">
            <input type="text" name="nama_kelas" value="<?php echo $m->nama_matakuliah ?>" class="span9">
          </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn btn-primary">Save</button> 
          <button class="btn">Cancel</button>
        </div>
      </div>
    <?php }; echo form_close();?>
  </div>
</div>