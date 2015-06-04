		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              Selamat Datang 

            <?php echo $this->session->userdata('nama_mahasiswa') ?> 

			  DiHalaman web Ujian Online Lp3i
            </div><!-- /.box-body -->
            <div class="box-footer">
              <?php echo anchor("mahasiswa/tahap1/daftar_matakuliah","Lakukan Ujian"); ?>
            </div><!-- /.box-footer-->
        </div><!-- /.box -->
	
	