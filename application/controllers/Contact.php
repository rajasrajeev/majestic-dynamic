<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
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
		$this->load->view('landing/contact');
	}

	public function create() {
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message')
		);
	
		// Save the data to the database
		if ($this->db->insert('get_in_touch', $data)) {
			/* $name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$from = $email;
			$to = 'info@majesticuae.ae';
			$subject = 'New Contact Form Submission : Majestic Website';
		
			$body = "From: $name\n E-Mail: $email\n Message:\n $message";
		
			$headers = "From: ".$from;
			mail ($to, $subject, $body, $headers); */
			// Set flash message for success
			$this->session->set_flashdata('message', 'Your message has been submitted successfully.');
		} else {
			// Set flash message for failure
			$this->session->set_flashdata('message', 'There was an error submitting your message. Please try again.');
		}
	
		// Redirect back to the contact form page
		redirect('contact');
	}
}

?>
