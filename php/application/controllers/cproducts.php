<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CProducts extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ('Administrator'!=$this->session->userdata('userlevel')
				&&'Salesincharges'!=$this->session->userdata('userlevel')
				&&'Accountant'!=$this->session->userdata('userlevel')
				&&'Stockclerk'!=$this->session->userdata('userlevel'))
		{
			$this->session->unset_userdata('userid');
			$this->session->unset_userdata('userlevel');
			header('Location: '.site_url(''));
		 	$this->session->set_flashdata('error',' You dont have privilage to access that page(You are not ADMIN)!');
		}
	}
	
	function products()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$data['content']= 'products';
		$this->load->view('template', $data);
	}
	

}
