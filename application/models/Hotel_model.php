<?php

class Hotel_model extends CI_Model{
    
    public function save($record) {
        $this->db->insert('hotel', $record);
    }
     public function get_all() {
        $query = $this->db->get('hotel');
        return $query->result();
    }
    public function get_by_id($hotel_id) {
        $this->db->where('hotel_id', $hotel_id);
        $query = $this->db->get('hotel');
        return $query->row();
    }
    public function update($record, $hotel_id) {
        $this->db->where('hotel_id', $hotel_id);
        $this->db->update('hotel', $record);
    }
    public function delete($hotel_id) {
        $this->db->where('hotel_id', $hotel_id);
        $this->db->delete('hotel');
    }



}
