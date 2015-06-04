<?php echo form_open("mahasiswa/tahap1/tambah_nilai"); ?>
	<input type="hidden" name="id_ujian" value="<?php echo $id_ujian;?>" />
	<table>
		<tr>
			<td>Benar</td>
			<td>:</td>
			<td><?php echo $isi1;?></td>
		</tr>
		<tr>
			<td>Salah</td>
			<td>:</td>
			<td><?php echo $isi2;?></td>
		</tr>
		<tr>
			<td>Kosong</td>
			<td>:</td>
			<td><?php echo $isi3;?></td>
		</tr>
		<tr>
			<td>Nilai</td>
			<td>:</td>
			<td><?php echo $isi4;?></td>
		</tr>
		<tr>
			<td>Pesan</td>
			<td>:</td>
			<?php if ($isi1 > 90) { ?>
				<td>jangan belajar terlalu giat</td>
			<?php } elseif ($isi1 > 60) { ?>
				<td>natural</td>
			<?php } else { ?>
				<td>harus belajar lebih giat</td>
			<?php } ?>
		</tr>
	</table>
<button type="submite">simpan nilai</button>
</form>