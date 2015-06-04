            <div id="sidebar" class="sidebar responsive">
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                </script>

                <ul class="nav nav-list">
                    <li class="<?php if (!empty($home)): echo $home; elseif (empty($home)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/home');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Home </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($adminn)): echo $adminn; elseif (empty($adminn)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/admin');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Admin </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($dosenn)): echo $dosenn; elseif (empty($dosenn)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/dosen');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dosen </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($mahasiswaa)): echo $mahasiswaa; elseif (empty($mahasiswaa)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/mahasiswa');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Mahasiswa </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($jurusann)): echo $jurusann; elseif (empty($jurusann)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/jurusan');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Jurusan </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($kelass)): echo $kelass; elseif (empty($kelass)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/kelas');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Kelas </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($dikelass)): echo $dikelass; elseif (empty($dikelass)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/dikelas');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Anggota Kelas </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($matakuliahh)): echo $matakuliahh; elseif (empty($matakuliahh)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/matakuliah');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Matakuliah </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($mengajarr)): echo $mengajarr; elseif (empty($mengajarr)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/mengajar');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Mengajar </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($ujiann)): echo $ujiann; elseif (empty($ujiann)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/ujian');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Ujian </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($soall)): echo $soall; elseif (empty($soall)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/soal');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Soal </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if (!empty($nilaii)): echo $nilaii; elseif (empty($nilaii)): echo 'noactive'; endif ?>">
                        <a href="<?php echo site_url('admin/nilai');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> nilai </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul><!-- /.nav-list -->

                <!-- #section:basics/sidebar.layout.minimize -->
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <!-- /section:basics/sidebar.layout.minimize -->
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
            </div>