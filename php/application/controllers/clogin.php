<?php 
	
	class CLogin extends Controller{
	
		public function __construct(){
			
			parent::Controller();
			
			
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->model('muser','m_user');
			$this->load->library('session');
			
				
		}
			
		public function index(){
			
			//e2 ung maglload ng login_form na page
 
			$this->load->view('vlogin');
			

		}
		
		public function authenticate(){
			
			if($this->_submit_validate()===FALSE){
			
				return $this->index();
			}
			else{	
					if($this->input->post('username')){
					
						$username = $this->input->post('username');
						$password = $this->input->post('password');
				
						if($row = $this->m_user->verifyUser($username,$password)){
							
								
							//3. passing the user record to the userdetail key 
							
							$data['userDetail'] = $row->result();
							
							//4. assigning the session data to $_SESSION array
							
							foreach($data['userDetail'] as $UserItem){
								$_SESSION['user_id'] = $UserItem->user_id;
								$_SESSION['username'] = $UserItem->username;
					
							}
								if ($_SESSION['user_id'] > 0 && $UserItem->position == 'admin'){
									
									redirect('cuser/displayUsers',$this->session->set_userdata('user_id',$UserItem->user_id.' '.$UserItem->firstname.' '.$UserItem->lastname));
								}
								else{
								
									redirect('cuser/displayClientPage',$this->session->set_userdata('user_id',$UserItem->user_id.' '.$UserItem->firstname.' '.$UserItem->lastname));								
								}
						}
						else{
							$this->session->set_flashdata('error','Invalid username or password');	
							redirect('clogin/authenticate','refresh');
						}
					}
							
			}
		}
		
		public function logout(){
			
			//individual deletion of session information
			
			$this->session->set_flashdata('error','You have been logged out!');
			$this->session->unset_userdata('user_id');
			redirect('clogin/authenticate','refresh');
		}
		
		private function _submit_validate(){
			
			//validate mo ung mga inputs ng addproducts form 
			
			$this->form_validation->set_rules('username', 'Username','trim|required|min_length[1]|max_length[50]|xss_clean');
		
			$this->form_validation->set_rules('password', 'Password','trim|required|min_length[1]|max_length[1000]|xss_clean');

			
		return $this->form_validation->run();
			
		}
	}
?>
