<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function sub() {
		$this->load->view('admin/users/sub');
	}
	public function touch() {
		$this->load->view('admin/users/touch');
	}
	public function get_sub() {
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
  
  
		$query = $this->db->query("
				  SELECT 
				  		`subscribe`.`id`,
					 	`subscribe`.`email`,
					 	`subscribe`.`created_at`
				  FROM 
					  	`subscribe`
				  ORDER BY
					  	`subscribe`.`created_at`
				  ASC
			  ");
  
		  
		$data = [];
  
		foreach($query->result() as $r => $value) {
			$formatted_date = date('d M Y, h:i A', strtotime($value->created_at));
			$data[] = array(
				$r+1,
				$value->email,
				$formatted_date
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
	public function get_touch() {
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
  
  
		$query = $this->db->query("
				  SELECT 
				  		`get_in_touch`.`id`,
					 	`get_in_touch`.`name`,
					 	`get_in_touch`.`email`,
					 	`get_in_touch`.`message`,
					 	`get_in_touch`.`created_at`
				  FROM 
					  	`get_in_touch`
				  ORDER BY
					  	`get_in_touch`.`created_at`
				  ASC
			  ");
  
		  
		$data = [];
  
		foreach($query->result() as $r => $value) {
			$formatted_date = date('d M Y, h:i A', strtotime($value->created_at));
			$data[] = array(
				$r+1,
				$value->name,
				$value->email,
				$value->message,
				$formatted_date
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
}
