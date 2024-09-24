<?php
class User_model extends CI_Model {
    public function get_user_by_id($id) {
        return $this->db->get_where('users', ['id' => $id])->row();
    }
}
?>
