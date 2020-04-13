<?php


class Room extends CI_Controller{

   public function list_() {
        $result['room'] = $this->Room_model->get_all();

        $this->load->view('header');
        $this->load->view('room_list', $result);
        $this->load->view('footer');
    }
    public function detail($room_id) {

        $result['room'] = $this->Room_model->get_detail_by_id($room_id);
        $result['room_facility'] = $this->Room_facility_model->get_by_room_id($room_id);
        $this->load->view('header');
        $this->load->view('room_details', $result);
        $this->load->view('footer');
    }
    public function custome_search() {

        $result['room'] = $this->Room_model->get_all();
        
        $this->load->view('header');
        $this->load->view('custome_search_room',$result);
        $this->load->view('footer');   
        
    }
     public function search($hotel_location,$room_category_id,$room_type_id,$max_adult,$price_per_night) {

        $result['room'] = $this->Room_model->get_by_search($hotel_location,$room_category_id,$room_type_id,$max_adult,$price_per_night);
        $this->load->view('header');
        $this->load->view('room_list', $result);
        $this->load->view('footer');
    }
   
}
