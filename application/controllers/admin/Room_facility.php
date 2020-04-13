<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Room_facility
 *
 * @author anand
 */
class Room_facility extends CI_Controller {
    
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/room_facility');
        $this->load->view('admin/footer');
    }
    public function edit($room_facility_id,$room_id) {

      
        $result['room_facility'] = $this->Room_facility_model->get_by_id($room_facility_id);
         $result['room'] = $this->Room_model->get_detail_by_id($room_id);
    
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_room_facility', $result);
        $this->load->view('admin/footer');
    }
    public function update() {

        $room_facility_id = $this->input->post('room_facility_id');
        $title = $this->input->post('title');
        $record = array(
            'title' => $title
        );
        
        $this->Room_facility_model->update($record, $room_facility_id);


        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/room');
    }

    public function delete($room_facility_id) {

        $this->Room_facility_model->delete($room_facility_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/room');
    }
   
    
}
