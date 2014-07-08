<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CIndex extends CI_Controller
{
	
	public function index()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->library('googlemaps');
		$config['center'] = 'auto';
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();
		$data['content']= 'home';
		$this->load->view('template', $data);
	}
	
	public function about()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->library('googlemaps');
		$config['center'] = 'auto';
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();
		$data['content']= 'about';
		$this->load->view('template', $data);
	}
	
	public function faq()
	{
		$data['base'] = $this->config->item('base_url');
		$data['title']= 'The Philippine Newlong Corporation';
		$this->load->library('googlemaps');
		$config['center'] = 'auto';
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();
		$data['content']= 'faq';
		$this->load->view('template', $data);
	}

}

/* End of file cindex.php */
/* Location: ./application/controllers/cindex.php */
