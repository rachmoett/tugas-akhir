<header class="main-header fixed">
        <a href="index" class="logo"><b>Ujian online</b> lp3i</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url()?>assets/img mahasiswa/<?php echo $this->session->userdata('foto_mahasiswa');?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $this->session->userdata('nama_mahasiswa') ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url()?>assets/img mahasiswa/<?php echo  $this->session->userdata('foto_mahasiswa');?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $this->session->userdata('nama_mahasiswa') ?>
                      <small><?php echo $this->session->userdata('nim');?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo site_url('mahasiswa/tahap1/akun');?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url('mahasiswa/tahap1/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>