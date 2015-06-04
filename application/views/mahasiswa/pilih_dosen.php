<section class="content">
    <div class="row">
    	<?php foreach($daftar_dosen as $d) { ?>
			<div class="col-lg-4">
				<div class="box box-primary">
		            <div class="box-header with-border">
		              <h3 class="box-title"><?php echo $d->nama_dosen ?></h3>
		              <div class="box-tools pull-right">
		                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
		                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		            	<a href="<?php echo 'daftar_matakuliah/'.$d->nip.'/'.$d->nama_dosen ?>" >
		              		<img src="<?php echo base_url("assets/img dosen/$d->foto_dosen") ;?>" class="img-responsive">
		            	</a>
		            </div><!-- /.box-body -->
		        </div><!-- /.box -->
		    </div>
        <?php } ?>
    </div>
</section>