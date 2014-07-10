<?php

class Tellafriend extends Controller
{
	
	function Tellafriend()
	{
		parent::Controller();
		$this->load->library('validation');

	}
	
	function index()
	{
		$this->load->view('view_tellafriend');
	}
	
	function send()
	{
		$config_rules = array(
								'sender_name' => 'required|xss_clean|min_length[5]',
								'sender_email'	=>	'required|valid_email|xss_clean',
								'friend1'	=>	'required|valid_email|xss_clean',
								'friend2'	=>	'valid_email|xss_clean',
								'friend3'	=>	'valid_email|xss_clean',
								'friend4'	=>	'valid_email|xss_clean',
								'friend5'	=>	'valid_email|xss_clean',
								'personal'	=>	'xss_clean'
			
			);
			$this->validation->set_rules($config_rules);
			if($this->validation->run()==FALSE)
			{
				$this->load->view('view_tellafriend');
			}
			else
			{
				
				$configmail = array(
										'protocol' => 'mail',
										'charset'	=> 'iso-8859-1',
										'wordwrap'	=> 'TRUE'
										
					
					);
					
					$this->email->initialize($configmail);

				
				$this->email->clear();
				$this->email->from($this->input->post('sender_email'),$this->input->post('sender_name'));
				
				if($this->input->post('friend2')!="")
				{
					$this->email->to($this->input->post('friend1'),$this->input->post('friend2'));
				}
				else
				{
					$this->email->to($this->input->post('friend1'));
				}
				$this->email->subject('Designerfoo.com - Recommended Tutorial TellAFriend');
				if($this->input->post('personal')!="")
				{
					$this->email->message($this->input->post('personal'));
				}
				else
				{
					$this->email->message('Your friend recommended us using our TellAFriendFrom');
				}
				
				if($this->email->send())
				{
					$this->load->view('view_tellafriendsuccess');
				}
				else
				{
					$data = array(
									'erroremail' => 'Your Mail Wasn\'t Sent.'
						);
					$this->load->view('view_tellafriend',$data);
				}
			}
		
	}
}


