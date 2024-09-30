<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
		if (isset($_SESSION['user_id'])) {

			$data['products'] =$this->db->count_all('products');
			$data['projects'] = $this->db->count_all('projects');
			$data['services'] = $this->db->count_all('services');
			$data['gallery'] = $this->db->count_all('gallery');
			$this->load->view('admin/dashboard', $data);

		}
		else{
			redirect('admin/login');
		}
		
	}
}

?>
