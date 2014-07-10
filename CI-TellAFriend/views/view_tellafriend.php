<?php

$field_input_name = array(
							'name'	=> 'sender_name',
							'id'	=> 'sender_name',
							'maxlength'	=> '255',
							'size'	=> '50'
	
	);



$input_s_email = array(
						'name'	=>	'sender_email',
						'id'	=> 'sender_email',
						'size'	=> '50'
						
	);
	
$input_friend1 = array(
						'name'	=> 'friend1',
						'id'	=> 'friend1',
						'size'	=> '50'
	
	);	
	
$input_friend2 = array(
						'name'	=> 'friend2',
						'id'	=> 'friend2',
						'size'	=> '50'
	
	);	

$input_friend3 = array(
						'name'	=> 'friend3',
						'id'	=> 'friend3',
						'size'	=> '50'
	
	);	

$input_friend4 = array(
						'name'	=> 'friend4',
						'id'	=> 'friend4',
						'size'	=> '50'
	
	);
		
$input_friend5 = array(
						'name'	=> 'friend5',
						'id'	=> 'friend5',
						'size'	=> '50'
	
	);	
	
$tellafriend_button = array(
						'name'	=>	'submit',
						'id'	=>	'submit',
						'value'	=>	'Tell A Friend'
	
	);
	
$input_textarea = array(
					'name'	=>	'personal',
					'id'	=>	'personal',
					'cols'	=>	'50',
					'rows'	=>	'10'
	
	
	);
	
$label_attributes = array(
							'class' => 'label'
	
	)

?>
<html>
<head>
	<title>Designerfoo: CodeIgniter Tutorial - Tell A Friend</title>
</head>
<body>
	<div id="wrapper">
		<h1>Designerfoo: CodeIgniter Tutorial - Tell A Friend</h1>
		
		<?php echo $this->validation->error_string; 
		if(isset($erroremail))
		{
			echo $erroremail;
		}
		
		?>
		<?php 
		echo form_open('tellafriend/send');
		echo form_label('Sender Name:','name',$label_attributes);
		echo "<br/>";
		echo form_input($field_input_name);
		?><br/><br/>
		<?php echo form_label('Sender Email:','sender_email');?><br/>
		<?php echo form_input($input_s_email);?><Br/><br/>
		
		<?php echo form_label('Friend Email 1:','friend1');?><br/>
		<?php echo form_input($input_friend1);?><Br/><br/>

		<?php echo form_label('Friend Email 2:','friend2');?><br/>
		<?php echo form_input($input_friend2);?><Br/><br/>
		
		<?php echo form_label('Friend Email 3:','friend3');?><br/>
		<?php echo form_input($input_friend3);?><Br/><br/>

		<?php echo form_label('Friend Email 4:','friend4');?><br/>
		<?php echo form_input($input_friend4);?><Br/><br/>

		<?php echo form_label('Friend Email 5:','friend5');?><br/>
		<?php echo form_input($input_friend5);?><Br/><br/>

		<?php echo form_label('Personal Message (if any):','personal_message');?><br/>
		<?php echo form_textarea($input_textarea);?><Br/><br/>

		<?php echo form_submit($tellafriend_button);?><Br/><br/>
		
		<?php echo form_close();?>
	</div>
	
</body>
</html>