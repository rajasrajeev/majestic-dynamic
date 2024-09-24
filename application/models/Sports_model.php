<?php
class Sports_model extends CI_Model {
    public function get_all_sports() {
        return $this->db->get('programs')->result();
    }

    public function get_sport_by_id($id) {
        return $this->db->get_where('programs', ['id' => $id])->row();
    }
    public function get_class($id) {
        return $this->db->get_where('classes', ['program_id' => $id])->row();
    }
}
?>
