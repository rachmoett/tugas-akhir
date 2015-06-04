<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>rachmad</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo base_url('assets/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url('assets/plugins/iCheck/all.css');?>" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/css/AdminLTE.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url('assets/css/skins/_all-skins.min.css');?>" rel="stylesheet" type="text/css" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue fixed" data-spy="scroll" data-target="#scrollspy">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <?php echo $header;?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php echo $sidebar;?>

      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <?php echo $content;?>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- footer -->
      <?php echo $footer;?>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.3.min.js');?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/js/npm.js');?>" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimScroll.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/docs.js');?>" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.min.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/js/app.min.js" type="text/javascript');?>"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js')?>" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js')?>" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js" type="text/javascript')?>"></script>
        <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {

        //Tables
        $("#example1").dataTable();

        //Flat red color scheme for iCheck
        $('input[type="radio"].flat-red').iCheck({
          radioClass: 'iradio_flat-blue'
        });

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });

      });
    </script>

  </body>
</html>