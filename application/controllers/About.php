<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->db->limit(6);
		$query = $this->db->get('clients');
		$data['clients'] = $query->result_array();

		$this->db->limit(6);
		$query = $this->db->get('products');
		$data['products'] = $query->result_array();

		$query = $this->db->get('services');
		$data['services'] = $query->result_array();
		$this->load->view('landing/about', $data);
	}
}

?>
