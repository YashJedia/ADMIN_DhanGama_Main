<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeMessage extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('HomeMessage_model');
    }

    // GET: Fetch current home message
    public function get() {
        $message = $this->HomeMessage_model->get_message();
        echo json_encode(['message' => $message]);
    }

    // POST: Update home message
    public function update() {
        $new_message = $this->input->post('message');
        if ($this->HomeMessage_model->update_message($new_message)) {
            echo json_encode(['status' => 'success', 'message' => $new_message]);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
}
