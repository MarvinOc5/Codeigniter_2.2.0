<html>
<head>
	<title>Login</title>
</head>
<body>
	
	
	Login Form: <?php if($this->session->flashdata('error')){ echo $this->session->flashdata('error'); } ?></p>
	
	<?php echo form_open('clogin/authenticate'); ?>
			
	
	<p>		
		<label for="username">Username: </label>
		
		<?php echo form_input('username',set_value('username')); ?> <?php echo form_error('username'); ?>
	</p>
	<p>
		<label for="password">Password: </label>
		<?php echo form_password('password',set_value('password')); ?> <?php echo form_error('password'); ?>
	</p>
	<p>
		<?php echo form_submit('submit','Login');?>
          
	</p>
	<?php echo form_close(); ?>
	<p>
		<?php echo anchor('cregister/registerUser','Register'); ?>
	</p>

</body>
</html>
