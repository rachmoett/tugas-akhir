<div id="id_soal"></div>
	<div class="box box-primary">
		<div class="box-body">		 
		    
		<?php echo form_open("mahasiswa/tahap1/hasil_soal"); ?>

		<?php
		  $no = 0;
		  foreach($soal as $r) { ?>
		
		  	<input type="hidden" name="id_soal[<?php echo $r->id_soal; ?>]" value="<?php echo $r->id_soal; ?>">
		  	<input type="hidden" name="id_ujian" value="<?php echo $r->id_soal;?>">

			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">
				  <?php echo ++$no; ?>. <?php echo "$r->pertanyaan"; ?>
				</h3>
			  </div>
			  <div class="panel-body">
				<div class="radio">
				  <label>
					<input type="radio" name="soal[<?php echo $r->id_soal; ?>]" class="flat-red" value="A">
					<?php echo "$r->pilihan_a";?>
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="soal[<?php echo $r->id_soal; ?>]" class="flat-red" value="B">
					<?php echo "$r->pilihan_b";?>
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="soal[<?php echo $r->id_soal; ?>]" class="flat-red" value="C">
					<?php echo "$r->pilihan_c";?>
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="soal[<?php echo $r->id_soal; ?>]" class="flat-red" value="D">
					<?php echo "$r->pilihan_d";?>
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="soal[<?php echo $r->id_soal; ?>]" class="flat-red" value="E">
					<?php echo "$r->pilihan_e";?>
				  </label>
				</div>
			  </div>
			</div>
						
		<?php
		  }
		?>

	    </div>	
	    <div class="box-footer">
	    	<input type="hidden" name="jumlah_soal" value="<?php echo $no ?>">
	    	<button type="submite" class="btn btn-lg btn-primary btn-block">LAKUKAN UJIAN</button>
	    </div>	
	    <?php echo form_close() ?>
	</div><!-- /.form group -->
</div><!-- /.box-body -->
