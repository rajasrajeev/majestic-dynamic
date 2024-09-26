<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
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
			$this->load->view('admin/clients/list');
		}
		else{
			redirect('admin/login');
		}
		
	}

	public function create() {
		$this->load->view('admin/clients/create');
	}

	public function get_clients() {
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
  
  
		$query = $this->db->query("
				  SELECT 
				  		`clients`.`id`,
					  	`clients`.`image`
				  FROM 
					  	`clients`
				  ORDER BY
					  	`clients`.`created_at`
				  ASC
			  ");
  
		  
		$data = [];
  
		foreach($query->result() as $r => $value) {
			$data[] = array(
				$r+1,
				$value->image,
				$value->id
		   );
			 
		}
  
  
		$result = array(
				 "draw" => $draw,
				  "recordsTotal" => $query->num_rows(),
				  "recordsFiltered" => $query->num_rows(),
				  "data" => $data
			  );
  
  
		echo json_encode($result);
		exit();
	  }

	  public function addclients_post() {
		$this->load->library('upload');

		$config['upload_path'] = FCPATH . 'uploads/clients/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = 5046;
		$config['max_width'] = 5046;
		$config['max_height'] = 5046;

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			// Load the view with the error
			$this->load->view('admin/clients/create', $error);
		} else {
			$data = $this->upload->data();
			$sport_data = array(
				'image' => "uploads/clients/".$data['file_name']
			);

			// Save the sport data to the database
			$this->db->insert('clients', $sport_data);
			
			// Redirect or load success view
			redirect('admin/clients');
		}
	  }

	  public function edit($id) {
		$query = $this->db->query("
				  SELECT 
				  		`clients`.`id`,
					  	`clients`.`image`
				  FROM 
					  	`clients`
				  WHERE	
				  		`clients`.`id` = $id
			  ");
		$data['clients'] = $query->row_array();
		$this->load->view('admin/clients/edit', $data);
	  }

	  public function updateclients_post() {
		$this->load->library('upload');
	
		$clients_id = $this->input->post('id');
	
		// Set upload configurations
		$config['upload_path'] = FCPATH . 'uploads/clients/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = 5046;
		$config['max_width'] = 5046;
		$config['max_height'] = 5046;
	
		$this->upload->initialize($config);
	
		$clients_data = array(
		);
	
		if ($this->upload->do_upload('image')) {
			// If an image is uploaded, update the image path
			$data = $this->upload->data();
			$clients_data['image'] = "uploads/clients/" . $data['file_name'];
		} else {
			// If the image upload fails, check if it's because no file was selected
			if ($this->upload->display_errors() !== '<p>You did not select a file to upload.</p>') {
				// Load the view with the error if there's an actual upload error
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/clients/edit', $error);
				return;
			}
			// No file selected, do not update the image path
		}
	
		// Update the clients data in the database
		$this->db->where('id', $clients_id);
		$this->db->update('clients', $clients_data);
	
		// Redirect to the clients list or load a success view
		redirect('admin/clients');
	}
	

	  public function delete_clients($id) {
		$this->db->where('id', $id);
		$this->db->delete('clients');
		redirect('admin/clients');
	  }
}

?>
