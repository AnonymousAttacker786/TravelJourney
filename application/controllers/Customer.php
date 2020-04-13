<?php

class Customer extends CI_Controller {

    public function index() {

        $this->load->view('header');
        $this->load->view('sign_up');
        $this->load->view('footer');
    }

    public function login() {

        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function save_sign_up() {


        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $mo_no = $this->input->post('mo_no');
        $email_id = $this->input->post('email_id');
        $password = $this->input->post('password');
        //$confirm_password = $this->input->post('confirm_password');


        $sign_up = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'mo_no' => $mo_no,
            'email_id' => $email_id,
            'password ' => $password,
                //'confirm_password' => $confirm_password,
        );

        $this->Customer_model->save($sign_up);
        redirect(base_url());
    }

    public function validate() {
        $email_id = $this->input->post('email_id');
        $password = $this->input->post('password');

        $row = $this->Customer_model->validate($email_id, $password);

        if ($row) {
            $this->session->set_userdata('cust_id', $row->cust_id);
            $this->session->set_userdata('email_id', $email_id);
        
            redirect(base_url().'dashboard');
        } else {
            $this->session->set_flashdata('err', "Invalid Email or Password !!!");
            redirect(base_url() . 'Customer/login');
        }
    }

}
