<?php

class Tour_dates_pickup_location_model extends CI_Model {

    public function save($tour_dates_pickup_location) {
        $this->db->insert_batch('tour_dates_pickup_location', $tour_dates_pickup_location);
    }
    public function update($record, $tour_date_pickup_location_id) {
        $this->db->where('tour_date_pickup_location_id', $tour_date_pickup_location_id);
        $this->db->update('tour_dates_pickup_location', $record);
     }
    public function get_by_tour_package_id($tour_package_id) {
        $this->db->where('tour_package_id', $tour_package_id);
        $query = $this->db->get('tour_dates_pickup_location');
        return $query->result();
    }
    public function get_all() {
        $this->db->from('tour_dates_pickup_location');
        $this->db->join('tour_package', 'tour_dates_pickup_location.tour_package_id = tour_package.tour_package_id');
        $query = $this->db->get();
        return $query->result();
    }
     public function delete($tour_date_pickup_location_id) {
        $this->db->where('tour_date_pickup_location_id', $tour_date_pickup_location_id);
        $this->db->delete('tour_dates_pickup_location');
    }
     public function get_by_id($tour_date_pickup_location_id) {
        $this->db->select('tour_dates_pickup_location.tour_date_pickup_location_id,tour_dates_pickup_location.tour_package_id,tour_dates_pickup_location.pickup_location');
        $this->db->where('tour_dates_pickup_location.tour_date_pickup_location_id', $tour_date_pickup_location_id);
        $this->db->from('tour_dates_pickup_location');
        $this->db->join('tour_package', 'tour_dates_pickup_location.tour_package_id = tour_package.tour_package_id');
        
        $query = $this->db->get();
        return $query->row();
    }
    


}
