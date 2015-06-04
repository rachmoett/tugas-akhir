<section class="content">
    <div class="row">
    	<?php foreach($daftar_teman as $m) { ?>
			<div class="col-lg-4">
				<div class="box box-primary">
		            <div class="box-header with-border">
		              <h3 class="box-title"><?php echo $m->nama_mahasiswa ?></h3>
		              <div class="box-tools pull-right">
		                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
		                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		            	<a href="<?php echo 'daftar_matakuliah/'.$m->nim.'/'.$m->nama_mahasiswa ?>" >
		              		<img src="<?php echo base_url("assets/img mahasiswa/$m->foto_mahasiswa") ;?>" class="img-responsive">
		            	</a>
		            </div>
		        </div>
		    </div>
        <?php } ?>
    </div>
</section>