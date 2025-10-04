<?php
class HomeMessage_model extends CI_Model {
    public function get_message() {
        $query = $this->db->order_by('updated_at', 'DESC')->get('home_message', 1);
        if ($query->num_rows() > 0) {
            return $query->row()->message;
        }
        return '';
    }

    public function update_message($message) {
        // If a row exists, update it; else, insert new
        $query = $this->db->get('home_message', 1);
        if ($query->num_rows() > 0) {
            $this->db->set('message', $message);
            $this->db->set('updated_at', 'NOW()', false);
            return $this->db->update('home_message');
        } else {
            return $this->db->insert('home_message', ['message' => $message]);
        }
    }
}
