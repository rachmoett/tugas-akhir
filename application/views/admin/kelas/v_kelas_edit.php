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
    <?php echo form_open('admin/kelas/update',array('class'=>'form-horizontal')); 
    foreach($kelas as $k) { ?>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Kelas </label>
        <div class="col-sm-9">
          <input type="text" name="id_kelas" value="<?php echo $k->id_kelas;?>" readonly class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Kelas </label>
        <div class="col-sm-9">
          <input type="text" name="nama_kelas" value="<?php echo $k->nama_kelas;?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Jurusan </label>
        <div class="col-sm-6">
          <select class="form-control" id="form-field-select-3" name="id_jurusan">
            <?php foreach($jurusan as $j) { ?>
              <option <?php if($j->id_jurusan==$k->id_jurusan){echo "selected='selected'";} ?> value="<?php echo $j->id_jurusan ?>"><?php echo $j->nama_jurusan ?></option>
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
          <button class="btn" type="undo">
            <i class="ace-icon fa fa-reply bigger-110"></i>
            Back
          </button>
        </div>
      </div>
    <?php }; echo form_close();?>

  </div>
</div>