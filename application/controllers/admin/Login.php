<?php

class Login extends CI_Controller {

    public function index() {
        $this->load->view('admin/login');
    }
    public function validate() {
        $email_id = $this->input->post('email_id');
        $password = $this->input->post('password');

        $row = $this->Admin_model->validate($email_id, $password);

        if ($row) {
            $this->session->set_userdata('admin_id', $row->admin_id);
            $this->session->set_userdata('email_id', $email_id);
            redirect(base_url() . 'admin/dashboard');
        } else {
            $this->session->set_flashdata('error', "Invalid Email or Password !!!");
            redirect(base_url() . 'admin/login');
        }
    }

}
