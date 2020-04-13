<?php

class Tour_package extends CI_Controller {

    public function list_() {
        $result['tour_package'] = $this->Tour_package_model->get_all();
        
        $this->load->view('header');
        
        $this->load->view('tour_package_list', $result);
        $this->load->view('footer');
    }

    public function detail($tour_package_id) {

        $result['tour_package'] = $this->Tour_package_model->get_detail_by_id($tour_package_id);
        $result['tour_package_places'] = $this->Tour_package_places_model->get_by_tour_package_id($tour_package_id);
        $result['tour_package_inclusion'] = $this->Tour_package_inclusion_model->get_by_tour_package_id($tour_package_id);
        $result['tour_package_exclusion'] = $this->Tour_package_exclusion_model->get_by_tour_package_id($tour_package_id);
        $result['tour_dates_pickup_location'] = $this->Tour_dates_pickup_location_model->get_by_tour_package_id($tour_package_id);
        $result['tour_dates_drop_location'] = $this->Tour_dates_drop_location_model->get_by_tour_package_id($tour_package_id);
        $result['tour_date'] = $this->Tour_date_model->get_by_tour_package_id($tour_package_id);
        $result['tour_package_itinerary'] = $this->Tour_package_itinerary_model->get_by_tour_package_id($tour_package_id);
       
        $this->load->view('header');
        $this->load->view('tour_package_detail', $result);
        $this->load->view('footer');
    }

}
