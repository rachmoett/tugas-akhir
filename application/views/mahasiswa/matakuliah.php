<section class="content">
    <div class="row">
        <div class="col-md-12">
           	<div class="box box-primary">
	            <div class="box-body">
	            	<div class="row">	            		
	            		
	            		<div class="col-md-6">
	            			<div id="foto">
	            				<img src="<?php echo base_url("assets/img dosen/avatar5.png") ;?>" class="img-responsive">
	            			</div>
	            		</div>

	            		<div class="col-md-6">
	            			<?php echo form_open("mahasiswa/tahap1/tampil_soal", array ('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label class="col-sm-3 control-label">Nama Dosen :</label>
									<div class="col-sm-9">
										<?php
											$style_dosen='class="form-control" id="nip" onChange="tampilMatakuliah()"';
											echo form_dropdown('nip',$daftar_dosen,'',$style_dosen);
										?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Matakuliah :</label>
									<div class="col-sm-9">
										<?php
											$style_matakuliah='class="form-control" id="id_matakuliah" onChange="tampilUjian()"';
											echo form_dropdown("id_matakuliah",array('Pilih Matakuliah'=>'- Pilih Matakuliah -'),'',$style_matakuliah);
										?>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Ujian :</label>
									<div class="col-sm-9">
										<?php
											$style_ujian='class="form-control" id="id_ujian"';
											echo form_dropdown("id_ujian",array('Pilih Ujian'=>'- Pilih Ujian -'),'',$style_ujian);
										?>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-12">
										<button type="submite" class="btn btn-lg btn-primary btn-block">LAKUKAN UJIAN</button>
									</div>
								</div>
							<?php echo form_close() ?>
						</div>


					</div>
				</div>
			</div>
		</div>
			
	</div>
</section>

<script src="<?php echo base_url('assets/js/jquery-2.1.1.js');?>"></script>
  <script>
	  function tampilMatakuliah()
	  {
		 kdproq = document.getElementById("nip").value;
		 $.ajax({
			 url:"<?php echo base_url();?>mahasiswa/tahap1/pilih_matakuliah/"+kdproq+"",
			 success: function(response){
			 $("#id_matakuliah").html(response);
			 },
			 dataType:"html"
		 });
		 return false;
	  }

	  function tampilNm()
	  {
		 kdproq = document.getElementById("nip").value;
		 $.ajax({
			 url:"<?php echo base_url();?>mahasiswa/tahap1/pilih_foto/"+kdproq+"",
			 success: function(response){
			 $("#foto").html(response);
			 },
			 dataType:"html"
		 });
		 return false;
	  }

	  function tampilUjian()
	  {
		 kdproq = document.getElementById("id_matakuliah").value;
		 $.ajax({
			 url:"<?php echo base_url();?>mahasiswa/tahap1/pilih_ujian/"+kdproq+"",
			 success: function(response){
			 $("#id_ujian").html(response);
			 },
			 dataType:"html"
		 });
		 return false;
	  }
  </script>