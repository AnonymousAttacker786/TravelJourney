<?php

class Hotel extends CI_Controller {
   
     public function index()
    {
        $result['hotel_list'] = $this->Hotel_model->get_all();
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/hotel',$result);
        $this->load->view('admin/footer');
    }
    public function save() {

        $hotel_name = $this->input->post('hotel_name');
        $record = array(
            'hotel_name' => $hotel_name,
                
         );
        $this->Hotel_model->save($record);
        
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been Inserted');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be Insert. Please try again later');
        }
       
        redirect(base_url() . 'admin/Hotel');
    }
     public function edit($hotel_id) {

        $result['hotel'] = $this->Hotel_model->get_by_id($hotel_id);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_hotel', $result);
        $this->load->view('admin/footer');
    }

    public function update() {

        $hotel_id = $this->input->post('hotel_id');
        $hotel_name = $this->input->post('hotel_name');
        $record = array(
            'hotel_name' => $hotel_name);
        
        $this->Hotel_model->update($record, $hotel_id);
        
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be update. Please try again later');
        }
        redirect(base_url() . 'admin/hotel');

    }
    public function delete($hotel_id) {

        $this->Hotel_model->delete($hotel_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/hotel');
    }


   
    
    
}
