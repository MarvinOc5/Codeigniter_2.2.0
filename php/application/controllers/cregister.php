<?php
			
	class CRegister extends Controller{
	
		public function __construct(){
			
			parent::Controller();
			
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->library('pagination');	
			$this->load->model('muser','m_user');
			$this->load->library('session');
			
			$config['upload_path'] = './assets/';
			$config['allowed_types'] = 'gif|jpg|png';
			
			$this->load->library('upload', $config);	
			
		
		}
		
		
		public function registerUser(){
			
			if($this->_submit_validate()===FALSE){
				
			
				
				$data['title'] = 'Register';
				
				// 1. display registration form
				$this->load->view('vregister',$data);
				return;
			}
			
			else{ 
			
			// 2. get the inputs	
			
				if(!$this->upload->do_upload('image')){
					$this->upload->display_errors();
					exit();
				}
					$image = $this->upload->data();
				
				if ($image['file_name']){
				
					$data['image'] = $image['file_name'];
				}
				
				$data['username'] = $this->input->post('username');
				$data['password'] = $this->input->post('password');
				$data['passcnf'] = $this->input->post('passcnf');
				$data['lastname'] = $this->input->post('lastname');
				$data['firstname'] = $this->input->post('firstname');
				$data['contact'] = $this->input->post('contact');
				$data['gender'] = $this->input->post('gender');
			
			//	4. call model to save input to database table
			
				$this->m_user->insertUser($data);
		
			
			// 	5. confirmation of registration
			
				$this->session->set_flashdata('message','Registration Successfull');
			
				redirect('cregister/registerUser');
				}		
		}

		private function _submit_validate(){
			
			//validate mo ung mga inputs ng addproducts form 
			
			$this->form_validation->set_rules('username', 'Username','trim|required|min_length[1]|max_length[50]|xss_clean');
		
			$this->form_validation->set_rules('password', 'Password','trim|required|min_length[1]|max_length[1000]|xss_clean');

			$this->form_validation->set_rules('lastname', 'Lastname','trim|required|min_length[1]|max_length[1000]|xss_clean');
		
			$this->form_validation->set_rules('firstname', 'Firstname','trim|required|max_length[50]|xss_clean');
		
			$this->form_validation->set_rules('gender', 'Gender','trim|required|max_length[500]|xss_clean');
			
			$this->form_validation->set_rules('contact', 'Contact Number','trim|required|max_length[500]|xss_clean');
			
		return $this->form_validation->run();
			
		}

	}
?>
