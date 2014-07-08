<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CProducts extends CI_Controller
{
	
	public function products()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$data['content']= 'products';
		$this->load->view('template', $data);
	}
	

}
