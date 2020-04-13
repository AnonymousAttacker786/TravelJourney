<?php

class Room_type_model extends CI_model{
    
    
    public function save($record) {
        $this->db->insert('room_type', $record);
    }
    public function get_all() {
        $query = $this->db->get('room_type');
        return $query->result();
    }
    public function get_by_id($room_type_id) {
        $this->db->where('room_type_id', $room_type_id);
        $query = $this->db->get('room_type');
        return $query->row();
    }
    
    public function update($record, $room_type_id) {
        $this->db->where('room_type_id', $room_type_id);
        $this->db->update('room_type', $record);
    }
    public function delete($room_type_id) {
        $this->db->where('room_type_id', $room_type_id);
        $this->db->delete('room_type');
    }
    
    
}
