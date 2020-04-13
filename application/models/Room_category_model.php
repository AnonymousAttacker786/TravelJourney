<?php


class Room_category_model extends CI_Model{
    
    public function save($record) {
        $this->db->insert('room_category', $record);
    }
      public function get_all() {
        $this->db->from('room_category');
        $this->db->join('room_type', 'room_category.room_type_id = room_type.room_type_id');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($room_category_id) {
        $this->db->where('room_category_id', $room_category_id);
        $query = $this->db->get('room_category');
        return $query->row();
    }
    public function update($record, $room_category_id) {
        $this->db->where('room_category_id', $room_category_id);
        $this->db->update('room_category', $record);
    }
    public function delete($room_category_id) {
        $this->db->where('room_category_id', $room_category_id);
        $this->db->delete('room_category');
    }


   
    
    
}
