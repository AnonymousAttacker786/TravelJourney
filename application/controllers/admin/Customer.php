<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author anand
 */
class Customer extends CI_Controller {

    
     public function index() {
            $result['sign_up'] = $this->Customer_model->get_all();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/all_user',$result);
            $this->load->view('admin/footer');
    }
     public function add() {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/add_new_user');
            $this->load->view('admin/footer');
    }
    
    public function save() {


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
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been Inserted');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be Insert. Please try again later');
        }
       
        redirect(base_url() . 'admin/customer');
    }
     public function edit($cust_id) {

        $result['user_detail'] = $this->Customer_model->get_by_id($cust_id);
         
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_user_detail', $result);
        $this->load->view('admin/footer');
    }
     public function update() {

        $cust_id = $this->input->post('cust_id');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $mo_no = $this->input->post('mo_no');
        $email_id = $this->input->post('email_id');
        $password = $this->input->post('password');
       
        $sign_up = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'mo_no' => $mo_no,
            'email_id' => $email_id,
            'password ' => $password,
        );

        $this->Customer_model->update($sign_up, $cust_id);


        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/customer');
    }
    public function delete($cust_id) {

        $this->Customer_model->delete($cust_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/customer');
    }
  
    
    
    
}
