<?php
class Bookings_model extends CI_Model {
    public function create_booking($data) {
        return $this->db->insert('bookings', $data);
    }

    public function get_bookings_by_user($user_id) {
        return $this->db->get_where('bookings', ['user_id' => $user_id])->result();
    }
}
?>
