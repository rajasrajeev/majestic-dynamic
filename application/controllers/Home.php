<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$data = $this->load_data();
		
		// Load any success messages from flashdata
		$data['success_message'] = $this->session->flashdata('success_message');
		
		$this->load->view('landing/index', $data);
	}

	public function subscribe_now() {
		$data = array(
			'email' => $this->input->post('email')
		);
		$this->db->insert('subscribe', $data);

		// Set flashdata for success message
		$this->session->set_flashdata('success_message', 'Email subscribed successfully. We will contact you through email.');

		// Reload data for products, projects, services
		$data = $this->load_data();

		// Redirect to the landing page to show the message
		redirect(base_url());
	}

	public function get_in_touch() {
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message')
		);
		$this->db->insert('get_in_touch', $data);

		// Set flashdata for success message
		$this->session->set_flashdata('success_message', 'Your message has been sent successfully. We will contact you shortly.');

		// Reload data for products, projects, services
		$data = $this->load_data();

		// Redirect to the landing page to show the message
		redirect(base_url());
	}

	// Helper function to load common data
	private function load_data() {
		$data = array();

		$this->db->limit(6);
		$query = $this->db->get('products');
		$data['products'] = $query->result_array();

		$this->db->limit(6);
		$query = $this->db->get('projects');
		$data['projects'] = $query->result_array();

		$query = $this->db->get('services');
		$data['services'] = $query->result_array();

		return $data;
	}
}


?>
