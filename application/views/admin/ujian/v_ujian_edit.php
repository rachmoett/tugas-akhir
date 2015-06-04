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
    <?php echo form_open('admin/ujian/update',array('class'=>'form-horizontal')); 
    foreach($ujian as $u) { ?>
      <input type="hidden" name="id_ujian" value="<?php echo $u->id_ujian;?>" />
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Ujian </label>
        <div class="col-sm-9">
          <input type="text" name="nama_ujian" value="<?php echo $u->nama_ujian;?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3"> Nama Matakuliah </label>
        <div class="col-sm-6">
          <select class="chosen-select form-control" id="form-field-select-3" name="id_matakuliah">
            <?php foreach($matakuliah as $m) { ?>
              <option <?php if($m->id_matakuliah==$u->id_matakuliah){echo "selected='selected'";} ?> value="<?php echo $m->id_matakuliah ?>"><?php echo $m->nama_matakuliah ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Kelas </label>
        <div class="col-sm-6">
          <select class="form-control" id="form-field-select-3" name="id_kelas">
            <?php foreach($kelas as $k) { ?>
              <option <?php if($k->id_kelas==$u->id_kelas){echo "selected='selected'";} ?> value="<?php echo $k->id_kelas ?>"><?php echo $k->nama_kelas ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal </label>
        <div class="col-sm-6">
          <input type="text" name="tanggal" value="<?php echo $u->tanggal;?>" id="id-date-picker-1" data-date-format="yyyy-mm-dd" class="form-control date-picker" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Waktu </label>
        <div class="col-sm-9">
          <input type="text" name="waktu" value="<?php echo $u->waktu;?>" class="col-xs-10 col-sm-8" />
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