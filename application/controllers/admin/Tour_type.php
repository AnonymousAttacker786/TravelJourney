<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tour_type
 *
 * @author anand
 */
class Tour_type extends CI_Controller{
  Public function index()
  {
        $result['tour_type'] = $this->Tour_type_model->get_all();
       
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_type',$result);
        $this->load->view('admin/footer');
  } 
  public function save() {

        $tour_type_name = $this->input->post('tour_type_name');
        
        $record = array('tour_type_name' => $tour_type_name);
        $this->Tour_type_model->save($record);
         if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been Inserted');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be Insert. Please try again later');
        }
       
        redirect(base_url() . 'admin/tour_type');
    }
     public function delete($tour_type_id) {

        $this->Tour_type_model->delete($tour_type_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/tour_type');
    }
    
  
}