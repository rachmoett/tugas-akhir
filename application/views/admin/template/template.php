<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Blank Page - Ace Admin</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.css');?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/font-awesome.css');?>" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/chosen.css');?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/datepicker.css');?>" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/ace-fonts.css');?>" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/ace.css');?>" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="../assets/css/ace-ie.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url('assets/admin/js/ace-extra.js');?>"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="../assets/js/html5shiv.js"></script>
        <script src="../assets/js/respond.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">
        <!-- Headrer -->
        <?php echo $header ?>

        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <!-- #section:basics/sidebar -->
            <?php echo $sidebar ?>

            <!-- /section:basics/sidebar -->
            <div class="main-content">
                <div class="main-content-inner">
                    <!-- /section:basics/content.breadcrumbs -->
                    <div class="page-content">
                        <!-- /section:settings.box -->
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <?php echo $content ;?>
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <!-- Footer -->
            <?php echo $footer ?>
        </div><!-- /.main-container -->

        <!-- basic scripts -->
        <?php echo $imbuhan ?>

        
    </body>
</html>