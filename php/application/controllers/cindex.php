<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CIndex extends CI_Controller
{
	
	public function index()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$data['content']= 'home';
		$data['url']= 'cindex/index';
		$this->load->view('template', $data);
	}
	
	public	function Register()
	{
		if($this->_submit_register()===FALSE)
		{	
			if ('Administrator'!=$this->session->userdata('userlevel'))
			{
				header('Location: '.site_url('/cindex/template'));
				$this->session->set_flashdata('error',' You dont have privilage to access that page!');
			}
			$data['base'] = $this->config->item('base_url');
			$data['title']= 'Register Account';
			$this->load->view('template',$data);
			return;
		}			
		else
		{
			$data['companyid']=$this->input->post('companyid');
			$data['username']=$this->input->post('username');
			$data['password']=do_hash($this->input->post('password'));
			$data['firstname']=$this->input->post('firstname');
			$data['lastname']=$this->input->post('lastname');
			$data['gender']=$this->input->post('gender');
			$data['email']=$this->input->post('email');
			$data['userlevel']=$this->input->post('userlevel');
			$this->usermodel->adduser($data);
			$this->session->set_flashdata('message','Registration Successful!');
			redirect('cindex/register');
		}		
	}

}

/* End of file cindex.php */
/* Location: ./application/controllers/cindex.php */
