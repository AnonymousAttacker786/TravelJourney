<?php

class Going_to extends CI_Controller {

    public function index() {
        $result['going_to_list'] = $this->Going_to_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/going_to', $result);
        $this->load->view('admin/footer');
    }

    public function save() {

        $going_to_title = $this->input->post('going_to_title');
        $record = array('Going_to_title' => $going_to_title);
        
        $this->Going_to_model->save($record);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been Inserted');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be Insert. Please try again later');
        }
       
        redirect(base_url() . 'admin/going_to');
    }

    public function edit($going_to_id) {

        $result['going_to'] = $this->Going_to_model->get_by_id($going_to_id);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/going_to_edit', $result);
        $this->load->view('admin/footer');
    }

    public function update() {

        $going_to_id = $this->input->post('going_to_id');
        $going_to_title = $this->input->post('going_to_title');
        $record = array('Going_to_title' => $going_to_title);
        $this->Going_to_model->update($record, $going_to_id);
        
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be update. Please try again later');
        }
        redirect(base_url() . 'admin/going_to');

    }

    public function delete($going_to_id) {

        $this->Going_to_model->delete($going_to_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/going_to');
    }

}
