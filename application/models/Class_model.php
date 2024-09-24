<?php
class Class_model extends CI_Model {

    public function get_all_classes() {
		$this->db->select('classes.*, programs.title as program_name');
		$this->db->from('classes');
		$this->db->join('programs', 'classes.program_id = programs.id');
		return $this->db->get()->result();
    }

    public function get_class_with_trainer($id) {
        $this->db->select('classes.*, users.username as trainer_name')
                 ->from('classes')
                 ->join('users', 'classes.coach_name = users.id')
                 ->where('classes.id', $id);
        return $this->db->get()->row();
    }
    public function get_coach_by_id($id) {
		$this->db->select('classes.*, programs.title as program_title');
		$this->db->from('classes');
		$this->db->join('programs', 'classes.program_id = programs.id');
		$this->db->where('classes.program_id', $id);
		return $this->db->get()->row();
    }
}
?>
