		<section class="">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Daftar Nilai</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
							<th>No</th><th>Ujian</th><th>Benar</th><th>Salah</th><th>Nilai</th>
						</tr>
					</thead>
					<tbody>
						<?php
						 $no=1; 
						 foreach($daftar_nilai as $n) {
						?>
						  <tr>
							  <td><?php echo $no; ?></td> 
							  <td><?php echo $n->nama_ujian;?></td>
							  <td><?php echo $n->benar;?></td>
							  <td><?php echo $n->salah;?></td>
							  <td><?php echo $n->nilai;?></td>
						  </tr>
						<?php	
						$no++; }
						?>
					</tbody>
					</table>
				</div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

			<center><h3><?php echo anchor("mahasiswa/pertama/grafik","Lihat Menggunakan Grafik"); ?></h3></center>
