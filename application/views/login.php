<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login - Ujian Online</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
	<link href="<?php echo base_url('assets/login/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/login/css/bootstrap-responsive.min.css');?>" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url('assets/font-awesome/css/css/font-awesome.css');?>" rel="stylesheet" />
    
	<link href="<?php echo base_url('assets/login/css/signin.css');?>" rel="stylesheet" type="text/css" />

</head>
<body>

<body>	
	<div class="account-container">
		<?php echo $error ?>
		<div class="content clearfix">	
			<?php echo form_open('welcome/cek_login');?>			
				<h1>Member Login</h1>						
				<div class="login-fields">					
					<div class="field">
						<label for="username">Username</label>
						<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
					</div> <!-- /field -->					
					<div class="field">
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
					</div> <!-- /password -->					
				</div> <!-- /login-fields -->				
				<div class="login-actions">	
					<span class="login-checkbox">
						<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
						<label class="choice" for="Field">Keep me signed in</label>
					</span>									
					<button class="button btn btn-primary btn-large">Sign In</button>					
				</div> <!-- .actions -->					
			<?php echo form_close();?>			
		</div> <!-- /content -->		
	</div> <!-- /account-container -->

	<script src="<?php echo base_url('assets/js/jquery-2.1.1.js');?>"></script>
	<script src="<?php echo base_url('assets/login/js/bootstrap.js');?>"></script>

	<script src="<?php echo base_url('assets/login/js/signin.js');?>"></script>
</body>
</html>