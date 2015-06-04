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
    <?php echo form_open_multipart('admin/mahasiswa/update',array('class'=>'form-horizontal')); 
    foreach($mahasiswa as $m) { ?>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> nim </label>
        <div class="col-sm-9">
          <input type="text" name="nim" value="<?php echo $m->nim;?>" readonly class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
        <div class="col-sm-9">
          <input type="text" name="nama_mahasiswa" value="<?php echo $m->nama_mahasiswa;?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal </label>
        <div class="col-sm-6">
          <input type="text" name="tgl_lahir" value="<?php echo $m->tgl_lahir;?>" id="id-date-picker-1" data-date-format="yyyy-mm-dd" class="form-control date-picker" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>
        <div class="col-sm-9">
          <input type="text" name="alamat_mahasiswa" value="<?php echo $m->alamat_mahasiswa;?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Foto </label>
        <div class="col-sm-6">
          <input type="file" name="foto_mahasiswa" value="<?php echo base_url('assets/img mahasiswa/'.$m->foto_mahasiswa);?>" id="id-input-file-3" />
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