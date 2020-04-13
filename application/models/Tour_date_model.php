<?php

class Tour_date_model extends CI_Model {

    public function save($tour_date) {
        $this->db->insert_batch('tour_date', $tour_date);
    }
    public function update($record, $tour_date_id) {
        $this->db->where('tour_date_id', $tour_date_id);
        $this->db->update('tour_date', $record);
        
     }
     public function get_all() {
        $this->db->from('tour_date');
        $this->db->join('tour_package', 'tour_date.tour_package_id = tour_package.tour_package_id');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_by_tour_package_id($tour_package_id) {
        $this->db->where('tour_package_id', $tour_package_id);
        $query = $this->db->get('tour_date');
        return $query->result();
    }
     public function get_by_id($tour_date_id) {
        $this->db->select('tour_date.tour_date_id,tour_date.tour_package_id,tour_date.departure_date,tour_date.arrival_date');
        $this->db->where('tour_date.tour_date_id', $tour_date_id);
        $this->db->from('tour_date');
        $this->db->join('tour_package', 'tour_date.tour_package_id = tour_package.tour_package_id');
        
        $query = $this->db->get();
        return $query->row();
    }
    public function delete($tour_date_id) {
        $this->db->where('tour_date_id', $tour_date_id);
        $this->db->delete('tour_date');
    }

}
