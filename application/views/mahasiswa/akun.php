<section class="content">
    <div class="row">
      <div class="col-xs-12">
		<div class="box box-primary">
		  <div class="box-header with-border">
		    <h3 class="box-title">Collapsable</h3>
		    <div class="box-tools pull-right">
		      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		    </div><!-- /.box-tools -->
		  </div><!-- /.box-header -->
		  <div class="box-body">
		  	<div class="row">
			    <?php foreach($profile as $v_mahasiswa) { ?>
			    	<div class="col-md-8">
						<img class="img-responsive img-rounded" src="<?php echo base_url("assets/img mahasiswa/$v_mahasiswa->foto_mahasiswa") ;?>"><br/>
					</div>
					<div class="col-md-4">
						Nim : <?php echo $nim ?><br/>
						Nama : <?php echo $v_mahasiswa->nama_mahasiswa; ?><br/>
						Tanggal Lahir : <?php echo $v_mahasiswa->tgl_lahir; ?><br/>
						Jurusan : <?php echo $v_mahasiswa->nama_jurusan; ?><br/>
					</div>
				<?php } ?>
			</div>
		  </div><!-- /.box-body -->
		</div><!-- /.box -->
	  </div>
	</div>
</section>