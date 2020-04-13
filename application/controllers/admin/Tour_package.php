<?php

class Tour_package extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("file_upload_helper");
    }

    public function index() {

        $result['tour_package'] = $this->Tour_package_model->get_all();

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_list', $result);
        $this->load->view('admin/footer');
    }

    public function view($tour_package_id) {

        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
        $result['tour_date_list'] = $this->Tour_date_model->get_by_tour_package_id($tour_package_id);
        $result['tour_pickup_location_list'] = $this->Tour_dates_pickup_location_model->get_by_tour_package_id($tour_package_id);
        $result['tour_drop_location_list'] = $this->Tour_dates_drop_location_model->get_by_tour_package_id($tour_package_id);
        $result['tour_package_places_list'] = $this->Tour_package_places_model->get_by_tour_package_id($tour_package_id);
        $result['tour_package_inclusion_list'] = $this->Tour_package_inclusion_model->get_by_tour_package_id($tour_package_id);
        $result['tour_package_exclusion_list'] = $this->Tour_package_exclusion_model->get_by_tour_package_id($tour_package_id);
        $result['tour_package_itinerary_list'] = $this->Tour_package_itinerary_model->get_by_tour_package_id($tour_package_id);
        
      
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_view', $result);
        $this->load->view('admin/footer');
    }

    public function add_step1() {

        $result['going_to_list'] = $this->Going_to_model->get_all();
        $result['category_list'] = $this->Category_model->get_all();
        $result['tour_type_list'] = $this->Tour_type_model->get_all();

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_add_step1', $result);
        $this->load->view('admin/footer');
    }

    public function save_step1() {

        $tour_package_name = $this->input->post('tour_package_name');
        $description = $this->input->post('description');
        $price_per_person = $this->input->post('price_per_person');
        $price_per_child = $this->input->post('price_per_child');
        $no_of_days = $this->input->post('no_of_days');
        $origin = $this->input->post('origin');
        $going_to_id = $this->input->post('going_to_id');
        $category_id = $this->input->post('category_id');
        $tour_type_id = $this->input->post('tour_type_id');

        //  $image = $this->input->post('image');
        $specific_for = $this->input->post('specific_for');


        $tour_package_image = upload_tour_package_image('image');

        if ($tour_package_image) {
            $tour_package = array(
                'tour_package_name' => $tour_package_name,
                'description' => $description,
                'price_per_person' => $price_per_person,
                'price_per_child' => $price_per_child,
                'no_of_days' => $no_of_days,
                'origin' => $origin,
                'going_to_id' => $going_to_id,
                'category_id' => $category_id,
                'tour_type_id' => $tour_type_id,
                'specific_for' => $specific_for,
                'image' => $tour_package_image,
                'created_at' => date('Y-m-d')
            );

            $tour_package_id = $this->Tour_package_model->save($tour_package);
            $this->session->set_userdata('tour_package_id', $tour_package_id);
        }
        
        redirect(base_url() . 'admin/tour_package/add_step2');
    }

    public function tour_package_edit($tour_package_id) {

        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
        $result['going_to_list'] = $this->Going_to_model->get_all();
        $result['category_list'] = $this->Category_model->get_all();
        $result['tour_type_list'] = $this->Tour_type_model->get_all();

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_tour_package', $result);
        $this->load->view('admin/footer');
    }
    public function tour_date_edit($tour_date_id ,$tour_package_id) {

        $result['tour_date_list'] = $this->Tour_date_model->get_by_id($tour_date_id);
        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
       
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_tour_date', $result);
        $this->load->view('admin/footer');
    }
    public function tour_pickup_location_edit($tour_date_pickup_location_id ,$tour_package_id) {

        $result['tour_dates_pickup_location'] = $this->Tour_dates_pickup_location_model->get_by_id($tour_date_pickup_location_id);
        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
       
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_tour_dates_pickup_location', $result);
        $this->load->view('admin/footer');
    }
    public function tour_drop_location_edit($tour_date_drop_location_id ,$tour_package_id) {

        $result['tour_dates_drop_location'] = $this->Tour_dates_drop_location_model->get_by_id($tour_date_drop_location_id);
        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
      
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_tour_dates_drop_location', $result);
        $this->load->view('admin/footer');
    }
     public function tour_package_places_edit($tour_package_place_id ,$tour_package_id) {

        $result['tour_package_places'] = $this->Tour_package_places_model->get_by_id($tour_package_place_id);
        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
      
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_tour_package_places', $result);
        $this->load->view('admin/footer');
    }
     public function tour_package_inclusion_edit($tour_package_inclusion_id ,$tour_package_id) {

        $result['tour_package_inclusion'] = $this->Tour_package_inclusion_model->get_by_id($tour_package_inclusion_id);
        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
      
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_tour_package_inclusion', $result);
        $this->load->view('admin/footer');
    }
    public function tour_package_exclusion_edit($tour_package_exclusion_id ,$tour_package_id) {

        $result['tour_package_exclusion'] = $this->Tour_package_exclusion_model->get_by_id($tour_package_exclusion_id);
        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
      
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_tour_package_exclusion', $result);
        $this->load->view('admin/footer');
    }
    public function tour_package_itinerary_edit($tour_package_itinerary_id ,$tour_package_id) {

        $result['tour_package_itinerary'] = $this->Tour_package_itinerary_model->get_by_id($tour_package_itinerary_id);
        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
      
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_tour_package_itinerary', $result);
        $this->load->view('admin/footer');
    }
     public function update_tour_package() {

        $tour_package_id = $this->input->post('tour_package_id');
        $category_id = $this->input->post('category_id');
        $going_to_id = $this->input->post('going_to_id');
        $tour_type_id = $this->input->post('tour_type_id');

        $tour_package_name = $this->input->post('tour_package_name');
        $description = $this->input->post('description');
        $price_per_person = $this->input->post('price_per_person');
        $price_per_child = $this->input->post('price_per_child');
        $origin = $this->input->post('origin');
        $no_of_days = $this->input->post('no_of_days');


        $record = array(
            'tour_package_name' => $tour_package_name,
            'description' => $description,
            'price_per_person' => $price_per_person,
            'price_per_child' => $price_per_child,
            'no_of_days' => $no_of_days,
            'origin' => $origin,
            'going_to_id' => $going_to_id,
            'category_id' => $category_id,
            'tour_type_id' => $tour_type_id
        );
        $this->Tour_package_model->update($record, $tour_package_id);


        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/tour_package/index');
    }
      public function update_tour_date() {

        $tour_date_id = $this->input->post('tour_date_id');
        $departure_date = $this->input->post('departure_date');
        $arrival_date = $this->input->post('arrival_date');


        $record = array(
            'departure_date' => $departure_date,
            'arrival_date' => $arrival_date
        );
        
        $this->Tour_date_model->update($record, $tour_date_id);


        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/tour_package/index');
    }
     public function update_tour_pickup_location() {

        $tour_date_pickup_location_id = $this->input->post('tour_date_pickup_location_id');
        $pickup_location = $this->input->post('pickup_location');
        
        $record = array(
            'pickup_location' => $pickup_location
          );
       
        $this->Tour_dates_pickup_location_model->update($record, $tour_date_pickup_location_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/tour_package/index');
    }
    public function update_tour_drop_location() {

        $tour_date_drop_location_id = $this->input->post('tour_date_drop_location_id');
        $drop_location = $this->input->post('drop_location');
        $record = array(
            'drop_location' => $drop_location
          );
       
        $this->Tour_dates_drop_location_model->update($record, $tour_date_drop_location_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/tour_package/index');
    }
    public function update_tour_package_places() {

        $tour_package_place_id = $this->input->post('tour_package_place_id');
        $title = $this->input->post('title');
        $record = array(
            'title' => $title
          );
       
        $this->Tour_package_places_model->update($record, $tour_package_place_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/tour_package/index');
    }
     public function update_tour_package_inclusion() {

        $tour_package_inclusion_id = $this->input->post('tour_package_inclusion_id');
        $title = $this->input->post('title');
        $record = array(
            'title' => $title
          );
       
        $this->Tour_package_inclusion_model->update($record, $tour_package_inclusion_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/tour_package/index');
    }
     public function update_tour_package_exclusion() {

        $tour_package_exclusion_id = $this->input->post('tour_package_exclusion_id');
        $title = $this->input->post('title');
        $record = array(
            'title' => $title
          );
       
        $this->Tour_package_exclusion_model->update($record, $tour_package_exclusion_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/tour_package/index');
    }
    public function update_tour_package_itinerary() {

        $tour_package_itinerary_id = $this->input->post('tour_package_itinerary_id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $record = array(
            'title' => $title,
            'description' => $description
          );
       
        $this->Tour_package_itinerary_model->update($record, $tour_package_itinerary_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been update successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be updated. Please try again later');
        }

        redirect(base_url() . 'admin/tour_package/index');
    }
    public function save_step2() {
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        //print_r($from_date);
        //print_r($to_date);

        $tour_package_id = $this->session->userdata('tour_package_id');
        //echo $tour_package_id;
        //$tour_date = array();
        for ($i = 0; $i < count($from_date); $i++) {
            $tour_date[] = array(
                'tour_package_id' => $tour_package_id,
                'departure_date' => $from_date[$i],
                'arrival_date' => $to_date[$i],
            );
            //$tour_date[$i]['tour_package_id'] = $tour_package_id;
            //$tour_date[$i]['from_date'] = $from_date[$i];
            //$tour_date[$i]['to_date'] = $to_date[$i];
        }

        $this->Tour_date_model->save($tour_date);
        redirect(base_url() . 'admin/tour_package/add_step3');
    }

    public function save_step3() {

        $tour_package_id = $this->session->userdata('tour_package_id');
        $pickup_location = $this->input->post('pickup_location');

        for ($i = 0; $i < count($pickup_location); $i++) {
            $tour_dates_pickup_location[] = array(
                'tour_package_id' => $tour_package_id,
                'pickup_location' => $pickup_location[$i],
            );
        }

        $this->Tour_dates_pickup_location_model->save($tour_dates_pickup_location);
        redirect(base_url() . 'admin/tour_package/add_step4');
    }

    public function save_step4() {

        $tour_package_id = $this->session->userdata('tour_package_id');
        $drop_location = $this->input->post('drop_location');
        for ($i = 0; $i < count($drop_location); $i++) {
            $tour_dates_drop_location[] = array(
                'tour_package_id' => $tour_package_id,
                'drop_location' => $drop_location[$i],
            );
        }

        $this->Tour_dates_drop_location_model->save($tour_dates_drop_location);
        redirect(base_url() . 'admin/tour_package/add_step5');
    }

    public function save_step5() {
        $tour_package_id = $this->session->userdata('tour_package_id');
        $title = $this->input->post('title');

        for ($i = 0; $i < count($title); $i++) {
            $tour_package_places[] = array(
                'tour_package_id' => $tour_package_id,
                'title' => $title[$i],
            );
        }
        $this->Tour_package_places_model->save($tour_package_places);
        redirect(base_url() . 'admin/tour_package/add_step6');
    }

    public function save_step6() {
        $tour_package_id = $this->session->userdata('tour_package_id');
        $title = $this->input->post('title');


        for ($i = 0; $i < count($title); $i++) {
            $tour_package_inclusion[] = array(
                'tour_package_id' => $tour_package_id,
                'title' => $title[$i],
            );
        }

        $this->Tour_package_inclusion_model->save($tour_package_inclusion);
        redirect(base_url() . 'admin/tour_package/add_step7');
    }

    public function save_step7() {
        $tour_package_id = $this->session->userdata('tour_package_id');
        $title = $this->input->post('title');


        for ($i = 0; $i < count($title); $i++) {
            $tour_package_exclusion[] = array(
                'tour_package_id' => $tour_package_id,
                'title' => $title[$i],
            );
        }
        $this->Tour_package_exclusion_model->save($tour_package_exclusion);
        redirect(base_url() . 'admin/tour_package/add_step8');
    }

    public function save_step8() {
        $tour_package_id = $this->session->userdata('tour_package_id');
        $title = $this->input->post('title');

        $description = $this->input->post('description');

        for ($i = 0; $i < count($title); $i++) {
            $tour_package_itinerary[] = array(
                'tour_package_id' => $tour_package_id,
                'title' => $title[$i],
                'description' => $description[$i],
            );
        }
        $this->Tour_package_itinerary_model->save($tour_package_itinerary);
        redirect(base_url() . 'admin/tour_package/add_step9');
    }

    public function save_step9() {
        $tour_package_id = $this->session->userdata('tour_package_id');

        $gallery_image = upload_gallery_image('image');
        if ($gallery_image) {
            $tour_package_gallery = array(
                'tour_package_id' => $tour_package_id,
                'image' => $gallery_image,
            );

            $this->Tour_package_gallery_model->save($tour_package_gallery);
        }
        redirect(base_url() . 'admin/tour_package/add_step9');
    }

    public function add_step2() {


        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_add_step2');
        $this->load->view('admin/footer');
    }

    public function add_step3() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_add_step3');
        $this->load->view('admin/footer');
    }

    public function add_step4() {

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_add_step4');
        $this->load->view('admin/footer');
    }

    public function add_step5() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_add_step5');
        $this->load->view('admin/footer');
    }

    public function add_step6() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_add_step6');
        $this->load->view('admin/footer');
    }

    public function add_step7() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_add_step7');
        $this->load->view('admin/footer');
    }

    public function add_step8() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_add_step8');
        $this->load->view('admin/footer');
    }

    public function add_step9() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tour_package_add_step9');
        $this->load->view('admin/footer');
    }

    public function delete($tour_package_id) {

        $this->Tour_package_model->delete($tour_package_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/tour_package/index');
    }
   public function delete_tour_date($tour_date_id) {

        $this->Tour_date_model->delete($tour_date_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/tour_package/index');
    }
    public function delete_tour_package_pickup_location($tour_date_pickup_location_id) {

        $this->Tour_dates_pickup_location_model->delete($tour_date_pickup_location_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/tour_package/index');
    }
    public function delete_tour_package_drop_location($tour_date_drop_location_id) {

        $this->Tour_dates_drop_location_model->delete($tour_date_drop_location_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/tour_package/index');
    }
    public function delete_tour_package_places($tour_package_place_id) {

        $this->Tour_package_places_model->delete($tour_package_place_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/tour_package/index');
    }
   public function delete_tour_package_inclusion($tour_package_inclusion_id) {

        $this->Tour_package_inclusion_model->delete($tour_package_inclusion_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/tour_package/index');
    }
    public function delete_tour_package_exclusion($tour_package_exclusion_id) {

        $this->Tour_package_exclusion_model->delete($tour_package_exclusion_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/tour_package/index');
    }   
    public function delete_tour_package_itinerary($tour_package_itinerary_id) {

        $this->Tour_package_itinerary_model->delete($tour_package_itinerary_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Record has been deleted successfully');
        } else {
            $this->session->set_flashdata('err', 'Record cannot be deleted. Please try again later');
        }
        redirect(base_url() . 'admin/tour_package/index');
    }   
    
    
    
    
}
