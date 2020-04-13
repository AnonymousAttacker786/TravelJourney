<?php
class Floor extends CI_Controller {

     public function index()
    {
        $result['floor_list'] = $this->Floor_model->get_all();
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/Floor',$result);
        $this->load->view('admin/footer');
    }
     public function save() {

        $floor_no = $this->input->post('floor_no');
        $floor_name = $this->input->post('floor_name');
        $record = array(
            'floor_no' => $floor_no,
            'floor_name' => $floor_name
         );
        $this->Floor_model->save($record);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been Inserted');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be Insert. Please try again later');
        }
        
        redirect(base_url() . 'admin/Floor');
    }
    public function edit($floor_id) {

        $result['floor'] = $this->Floor_model->get_by_id($floor_id);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_floor', $result);
        $this->load->view('admin/footer');
    }

    public function update() {

        $floor_id = $this->input->post('floor_id');
        $floor_no = $this->input->post('floor_no');
        $floor_name = $this->input->post('floor_name');
        
        $record = array(
            'floor_no' => $floor_no,
            'floor_name' => $floor_name,
            
            );
        $this->Floor_model->update($record, $floor_id);
        
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be update. Please try again later');
        }
        redirect(base_url() . 'admin/floor');

    }

    public function delete($floor_id) {

        $this->Floor_model->delete($floor_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/floor');
    }

    
}
