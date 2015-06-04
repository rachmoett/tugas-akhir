<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview <?php if (!empty($nilai)): echo $nilai; elseif (empty($nilai)): echo 'noactive'; endif ?>">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Nilai</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if (!empty($nilai_table)): echo $nilai_table; elseif (empty($nilai_table)): echo 'noactive'; endif ?>"><a href="<?php echo site_url('mahasiswa/tahap1/nilai');?>"><i class="fa fa-circle-o"></i> Table</a></li>
                <li><a href="<?php echo site_url('mahasiswa/pertama/grafik');?>"><i class="fa fa-circle-o"></i> Grafik</a></li>
              </ul>
            </li>
            <li class="treeview <?php if (!empty($ujian)): echo $ujian; elseif (empty($ujian)): echo 'noactive'; endif ?>">
              <a href="<?php echo site_url('mahasiswa/tahap1/daftar_matakuliah');?>">
                <i class="fa fa-edit"></i> <span>Ujian</span>
              </a>
            </li>
            <li class="treeview <?php if (!empty($teman)): echo $teman; elseif (empty($teman)): echo 'noactive'; endif ?>">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Teman</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if (!empty($teman_kelas)): echo $teman_kelas; elseif (empty($teman_kelas)): echo 'noactive'; endif ?>"><a href="<?php echo site_url('mahasiswa/tahap1/teman_kelas');?>"><i class="fa fa-circle-o"></i>Teman Sekelas</a></li>
                <li class="<?php if (!empty($teman_semua)): echo $teman_semua; elseif (empty($teman_semua)): echo 'noactive'; endif ?>"><a href="<?php echo site_url('mahasiswa/tahap1/teman_semua');?>"><i class="fa fa-circle-o"></i>Semua Teman</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>