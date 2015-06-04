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
    <?php echo form_open_multipart('admin/dosen/update',array('class'=>'form-horizontal')); 
    foreach($dosen as $d) { ?>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nip </label>
        <div class="col-sm-9">
          <input type="text" name="nip" value="<?php echo $d->nip;?>" readonly class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
        <div class="col-sm-9">
          <input type="text" name="nama_dosen" value="<?php echo $d->nama_dosen;?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>
        <div class="col-sm-9">
          <input type="text" name="alamat_dosen" value="<?php echo $d->alamat_dosen;?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Foto </label>
        <div class="col-sm-6">
          <input type="file" name="foto_dosen" value="<?php echo base_url('assets/img dosen/'.$d->foto_dosen);?>" id="id-input-file-3" />
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