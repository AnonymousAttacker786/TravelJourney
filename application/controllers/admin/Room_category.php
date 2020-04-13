<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Room_category
 *
 * @author anand
 */
class Room_category extends CI_Controller {

    public function index() {
        
        $result['room_type_list'] = $this->Room_type_model->get_all();
        $result['room_category_list'] = $this->Room_category_model->get_all();
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/room_category',$result);
        $this->load->view('admin/footer');
    }
     public function save() {

        $room_category = $this->input->post('room_category');
        $room_type_id = $this->input->post('room_type_id');
      
        $record = array(
            
          'room_category' => $room_category,
          'room_type_id' => $room_type_id
          );
          $this->Room_category_model->save($record);
           if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been Inserted');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be Insert. Please try again later');
        }
       
          redirect(base_url() . 'admin/Room_category');
    }
     public function edit($room_category_id) {

        $result['room_category'] = $this->Room_category_model->get_by_id($room_category_id);
        $result['room_type_list'] = $this->Room_type_model->get_all();
       
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_room_category', $result);
        $this->load->view('admin/footer');
    }

    public function update() {

        $room_category_id = $this->input->post('room_category_id');
        $room_type_id = $this->input->post('room_type_id');
       
        $room_category = $this->input->post('room_category');
        $record = array(
            'room_category' => $room_category,
            'room_type_id' => $room_type_id);
        $this->Room_category_model->update($record, $room_category_id,$room_type_id);
        
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be update. Please try again later');
        }
        
        redirect(base_url() . 'admin/room_category');
    }

    public function delete($room_category_id) {

        $this->Room_category_model->delete($room_category_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/room_category');
    }

    
    
    
}
