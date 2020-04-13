<?php

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("file_upload_helper");
    }

    public function index() {
        $result['going_to_list'] = $this->Going_to_model->get_all();
        $result['category_list'] = $this->Category_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/category_list', $result);
        $this->load->view('admin/footer');
    }

    public function save() {

        $category_name = $this->input->post('category_name');
        $going_to_id = $this->input->post('going_to_id');
        //$image = $this->input->post('image');

        $tour_category_image = upload_tour_category_image('image');

        if ($tour_category_image) {

            $record = array('category_name' => $category_name, 'going_to_id' => $going_to_id, 'image' => $tour_category_image);
            $this->Category_model->save($record);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been Inserted');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be Insert. Please try again later');
        }
       
        redirect(base_url() . 'admin/category');
    }
     public function edit($category_id) {

        $result['category'] = $this->Category_model->get_by_id($category_id);
        $result['going_to_list'] = $this->Going_to_model->get_all();
       
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/category_list_edit', $result);
        $this->load->view('admin/footer');
    }

    public function update() {

        $category_id = $this->input->post('category_id');
        $going_to_id = $this->input->post('going_to_id');
       
        $category_name = $this->input->post('category_name');
        $record = array('category_name' => $category_name,'going_to_id' => $going_to_id);
        $this->Category_model->update($record, $category_id,$going_to_id);
        
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be update. Please try again later');
        }
        
        redirect(base_url() . 'admin/category');
    }

    public function delete($category_id) {

        $this->Category_model->delete($category_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/category');
    }


}
