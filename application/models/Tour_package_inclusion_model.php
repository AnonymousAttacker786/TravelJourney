<?php

class Tour_package_inclusion_model extends CI_Model {

    public function save($tour_package_inclusion) {
        $this->db->insert_batch('tour_package_inclusion', $tour_package_inclusion);
    }
    public function update($record, $tour_package_inclusion_id) {
        $this->db->where('tour_package_inclusion_id', $tour_package_inclusion_id);
        $this->db->update('tour_package_inclusion', $record);
     }

     public function get_by_tour_package_id($tour_package_id) {
        $this->db->where('tour_package_id', $tour_package_id);
        $query = $this->db->get('tour_package_inclusion');
        return $query->result();
    }
    public function get_all() {
        $this->db->from('tour_package_inclusion');
        $this->db->join('tour_package', 'tour_package_inclusion.tour_package_id = tour_package.tour_package_id');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($tour_package_inclusion_id) {
        $this->db->select('tour_package_inclusion.tour_package_inclusion_id,tour_package_inclusion.tour_package_id,tour_package_inclusion.title');
        $this->db->where('tour_package_inclusion.tour_package_inclusion_id', $tour_package_inclusion_id);
        $this->db->from('tour_package_inclusion');
        $this->db->join('tour_package', 'tour_package_inclusion.tour_package_id = tour_package.tour_package_id');
        
        $query = $this->db->get();
        return $query->row();
    }
     public function delete($tour_package_inclusion_id) {
        $this->db->where('tour_package_inclusion_id', $tour_package_inclusion_id);
        $this->db->delete('tour_package_inclusion');
    }
    
}
