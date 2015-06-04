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
    <?php echo form_open('admin/soal/update',array('class'=>'form-horizontal', 'id' => 'myform'));
    foreach ($soal as $s) { ?>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Soal </label>
        <div class="col-sm-9">
          <input type="text" name="id_soal" value="<?php echo $s->id_soal ?>" readonly class="col-xs-10 col-sm-4" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Ujian </label>
        <div class="col-sm-6">
          <select class="chosen-select form-control" id="form-field-select-3" name="id_ujian">
            <?php foreach($ujian as $u) { ?>
              <option <?php if($u->id_ujian==$s->id_ujian){echo "selected='selected'";} ?> value="<?php echo $u->id_ujian ?>"><?php echo $u->nama_ujian ?></option>
            <?php } ?>
            </select>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pertanyaan </label>
        <div class="col-sm-8">
          <div class="wysiwyg-editor" id="editor1"><?php echo $s->pertanyaan ?>"</div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilihan A </label>
        <div class="col-sm-9">
          <input type="text" name="pilihan_a" value="<?php echo $s->pilihan_a ?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilihan B </label>
        <div class="col-sm-9">
          <input type="text" name="pilihan_b" value="<?php echo $s->pilihan_b ?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilihan C </label>
        <div class="col-sm-9">
          <input type="text" name="pilihan_c" value="<?php echo $s->pilihan_c ?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilihan D </label>
        <div class="col-sm-9">
          <input type="text" name="pilihan_d" value="<?php echo $s->pilihan_d ?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilihan E </label>
        <div class="col-sm-9">
          <input type="text" name="pilihan_e" value="<?php echo $s->pilihan_e ?>" class="col-xs-10 col-sm-8" />
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kunci Jawaban </label>
        <div class="col-sm-6">
          <select class="chosen-select form-control" id="form-field-select-3" name="jawaban">
            <?php for($pil=A;$pil<=E;$pil++){ ?>
              <option <?php if($s->jawaban==$pil){ echo 'selected="selected"'; } ?> value="<?php echo $pil ?>"><?php echo $pil ?></option>
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
    <?php }; echo form_close();?>

  </div>
</div>