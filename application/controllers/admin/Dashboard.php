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
			/* # code...
			//die('Session Set'.$_SESSION['user_id']);
			$this->load->model('User_model');
			$usercode = $this->session->userdata('usercode');
			$data = $this->User_model->getDashboardData($usercode);
			// $sponsor_bonus = $this->User_model->calculateSponsorBonus('94475518','2024-02-26','2024-02-28');
			// print_r($sponsor_bonus);
			// die(); */
			$this->load->view('admin/dashboard');
		}
		else{
			redirect('admin/login');
		}
		
	}
}

?>
