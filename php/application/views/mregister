<html>
<head>
	Register: <?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?>
</head>
<body>
	
		<?php echo form_open_multipart('cregister/registerUser'); ?>
			
	
	
	<p>		
		<label for="username">Username: </label>
		
		<?php echo form_input('username',set_value('username')); ?> <?php echo form_error('username'); ?>
	</p>
	
	<p>
		<label for="password">Password: </label>
		<?php echo form_password('password',set_value('password')); ?> <?php echo form_error('password'); ?>
	</p>
	
	<p>
		<label for="passcnf">Confirm Password: </label>
		<?php echo form_password('passcnf',set_value('passcnf')); ?> <?php echo form_error('passcnf'); ?>
	</p>
	
	<p>
		<label for="lastname">Lastname: </label>
		<?php echo form_input('lastname',set_value('lastname')); ?> <?php echo form_error('lastname'); ?>
	</p>
	
	<p>
		<label for="firstname">Firstname: </label>
		<?php echo form_input('firstname',set_value('firstname')); ?> <?php echo form_error('firstname'); ?>
	</p>
	
	<p>
		<label for="contact">Contact No.: </label>
		<?php echo form_input('contact',set_value('contact')); ?> <?php echo form_error('contact'); ?>
	</p>
	
	<p>
		<label for="gender">Gender: </label>
		<?php $optionstatus = array('Male'=>'Male','Female'=>'Female');?>
		<?php echo form_dropdown('gender',$optionstatus); ?> <?php echo form_error('gender'); ?>
	</p>
	
	<p>
		<label for="image">Image: </label>
		<?php echo form_upload('image'); ?>
	</p>
	
	<p>
		<?php echo form_submit('submit','Register');?>
          
	</p>
	<?php echo form_close(); ?>
	
	
	
</body>
</html>
