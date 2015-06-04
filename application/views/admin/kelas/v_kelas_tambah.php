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
    <?php echo form_open('admin/kelas/input',array('class'=>'form-horizontal')); ?>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Kelas </label>
        <div class="col-sm-9">
          <input type="text" name="id_kelas" value="<?php echo $id_kelas ?>" readonly class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Kelas </label>
        <div class="col-sm-9">
          <input type="text" name="nama_kelas" placeholder="Nama Kelas.." class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Jurusan </label>
        <div class="col-sm-6">
          <select class="chosen-select form-control" id="form-field-select-3" name="id_jurusan">
            <option value="">- Pilih Jurusan -</option>
            <?php foreach($jurusan as $j) { ?>
              <option value="<?php echo $j->id_jurusan ?>"><?php echo $j->nama_jurusan ?></option>
            <?php } ?>
          </select>
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
    <?php echo form_close();?>

  </div>
</div>