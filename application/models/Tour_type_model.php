<?php


class Tour_type_model extends CI_Model {

  public function save($record) {
        $this->db->insert('tour_type', $record);
    }

    public function get_all() {
        $query = $this->db->get('tour_type');
        return $query->result();
    }
     public function delete($tour_type_id) {
        $this->db->where('tour_type_id', $tour_type_id);
        $this->db->delete('tour_type');
    }
    public function get_by_id($tour_type_id) {
        $this->db->where('tour_type_id', $tour_type_id);
        $query = $this->db->get('tour_type');
        return $query->row();
    }

    
    
}
