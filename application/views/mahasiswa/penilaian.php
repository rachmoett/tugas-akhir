	   <?php 
       if(isset($_POST['submit'])){
			$pilihan=$_POST["pilihan"];
			$id_soal=$_POST["id"];
			$id_matakuliah=$_POST["id_matakuliah"];
			$jumlah=$_POST['jumlah'];
			
			$score=0;
			$benar=0;
			$salah=0;
			$kosong=0;
			
			for ($i=0;$i<$jumlah;$i++){
				//id nomor soal
				$nomor=$id_soal[$i];
				
				//jika user tidak memilih jawaban
				if (empty($pilihan[$nomor])){
					$kosong++;
				}else{
					//jawaban dari user
					$jawaban=$pilihan[$nomor];
					
					//cocokan jawaban user dengan jawaban di database
					$query=mysql_query("select * from soal where id_soal='$nomor' and jawaban='$jawaban'");
					
					$cek=mysql_num_rows($query);
					
					if($cek){
						//jika jawaban cocok (benar)
						$benar++;
					}else{
						//jika salah
						$salah++;
					}
					
				} 
				$score = $benar*50;
			}
		}
		?>
		
<div class="spacy">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>grafik nilai ujian</h2>
				<hr class="star-primary">
			</div>
		</div>
		<div class="row">
		
			<form action="nilai" method="post">
			<table width="100%" border="0">
			<tr>
				<td width="12%">Benar</td><td width="88%">= <?php echo $benar;?> soal x 50 point</td>
			</tr>
			<tr>
				<td>Salah</td><td>= <?php echo $salah;?> soal </td>
			</tr>
			<tr>
				<td>Kosong</td><td>= <?php echo $kosong;?> soal </td>
			</tr>
			<tr>
				<td><b>Score</b></td><td>= <b><?php echo $score;?></b> Point</td>
			</tr>
			</table> 
			
			<input type="hidden" name="nim" value="<?php echo $nim;?>" />
			<input type="hidden" name="benar" value="<?php echo $benar;?>" />
			<input type="hidden" name="salah" value="<?php echo $salah;?>" />
			<input type="hidden" name="kosong" value="<?php echo $kosong;?>" />
			<input type="hidden" name="nilai" value="<?php echo $score;?>" />
			<input type="hidden" name="id_matakuliah" value="<?php echo $id_matakuliah;?>" />
			<p></p>
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan Nilai"/>
			</form>
			
		</div>
	</div>
</div>