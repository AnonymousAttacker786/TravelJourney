<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Room
 *
 * @author anand
 */
class Room extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper("file_upload_helper");
    }

    public function index()
    {
        $result['room'] = $this->Room_model->get_all();
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/room',$result);
        $this->load->view('admin/footer');
    }
    public function view($room_id) {

        $result['room'] = $this->Room_model->get_detail_by_id($room_id);
        $result['room_facility_list'] = $this->Room_facility_model->get_by_room_id($room_id);
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/room_view', $result);
        $this->load->view('admin/footer');
    }

    public function add_step1()
    {
        $result['hotel_list'] = $this->Hotel_model->get_all();
        $result['room_type_list'] = $this->Room_type_model->get_all();
        $result['floor_list'] = $this->Floor_model->get_all();
        $result['room_category_list'] = $this->Room_category_model->get_all();
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/add_new_room_step1',$result);
        $this->load->view('admin/footer');
    }
    public function add_step2()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/add_new_room_step2');
        $this->load->view('admin/footer');
    }
    
    public function save_step1() {

        $room_no = $this->input->post('room_no');
        $room_title = $this->input->post('room_title');
        $hotel_id = $this->input->post('hotel_id');
        $floor_id = $this->input->post('floor_id');
        $room_type_id = $this->input->post('room_type_id');
        $room_category_id = $this->input->post('room_category_id');
        $hotel_location = $this->input->post('hotel_location');
        $location_description = $this->input->post('location_description');
        $max_adult = $this->input->post('max_adult');
        $no_of_beds = $this->input->post('no_of_beds');
        $room_image = upload_room_image('room_image');
        $price_per_night= $this->input->post('price_per_night');
        $room_description= $this->input->post('room_description');
        if ($room_image) {

            $record = array(
                'room_no' => $room_no,
                'room_title' => $room_title, 
                'hotel_id' => $hotel_id, 
                'floor_id' => $floor_id, 
                'room_type_id' => $room_type_id, 
                'room_category_id' => $room_category_id, 
                'hotel_location' => $hotel_location, 
                'location_description' => $location_description, 
                'max_adult' => $max_adult, 
                'no_of_beds' => $no_of_beds, 
                'room_image' => $room_image,
                'price_per_night' => $price_per_night, 
                'room_description' => $room_description
               );
            $room_id = $this->Room_model->save($record);
            $this->session->set_userdata('room_id', $room_id);
       }
       if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been Inserted');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be Insert. Please try again later');
        }
       
        redirect(base_url() . 'admin/Room/add_step2');
    }
    public function save_step2() {

        $room_id = $this->session->userdata('room_id');
        $title = $this->input->post('title');

        for ($i = 0; $i < count($title); $i++) {
            $room_facility[] = array(
                'room_id' => $room_id,
                'title' => $title[$i],
            );
        }

        $this->Room_facility_model->save($room_facility);
       
        
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been Inserted');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be Insert. Please try again later');
        }
        redirect(base_url() . 'admin/Room');
    }
     public function room_edit($room_id) {

        $result['room'] = $this->Room_model->get_detail_by_id($room_id);
        $result['hotel_list'] = $this->Hotel_model->get_all();
        $result['room_type_list'] = $this->Room_type_model->get_all();
        $result['floor_list'] = $this->Floor_model->get_all();
        $result['room_category_list'] = $this->Room_category_model->get_all();
        
         $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_room', $result);
        $this->load->view('admin/footer');
    }
    public function update_room() {

        $room_id = $this->input->post('room_id');
        $room_no = $this->input->post('room_no');
        $room_title = $this->input->post('room_title');
        $hotel_id = $this->input->post('hotel_id');
        $floor_id = $this->input->post('floor_id');
        $room_type_id = $this->input->post('room_type_id');
        $room_category_id = $this->input->post('room_category_id');
        $hotel_location = $this->input->post('hotel_location');
        $location_description = $this->input->post('location_description');
        $max_adult = $this->input->post('max_adult');
        $no_of_beds = $this->input->post('no_of_beds');
        $price_per_night= $this->input->post('price_per_night');
        $room_description= $this->input->post('room_description');
      
            $record = array(
                'room_id' => $room_id,
                'room_no' => $room_no,
                'room_title' => $room_title, 
                'hotel_id' => $hotel_id, 
                'floor_id' => $floor_id, 
                'room_type_id' => $room_type_id, 
                'room_category_id' => $room_category_id, 
                'hotel_location' => $hotel_location, 
                'location_description' => $location_description, 
                'max_adult' => $max_adult, 
                'no_of_beds' => $no_of_beds, 
                'price_per_night' => $price_per_night, 
                'room_description' => $room_description 
                // 'image' => $tour_category_image
               );
         $this->Room_model->update($record, $room_id);


        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/Room');
    }
    public function delete($room_id) {

        $this->Room_model->delete($room_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/room');
    }
   
}
