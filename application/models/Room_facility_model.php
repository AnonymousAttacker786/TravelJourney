<?php

class Room_facility_model extends CI_model{
    
    public function save($room_facility) {
        $this->db->insert_batch('room_facility', $room_facility);
    }
    public function get_all() {
        $this->db->from('room_facility');
        $this->db->join('room', 'room_facility.room_id = room.room_id');
        $query = $this->db->get();
        return $query->result();
    }
      public function get_by_id($room_facility_id) {
        $this->db->select('room_facility.room_facility_id,room_facility.room_id,room_facility.title');
        $this->db->where('room_facility.room_facility_id', $room_facility_id);
        $this->db->from('room_facility');
        $this->db->join('room', 'room_facility.room_id = room.room_id');
        
        $query = $this->db->get();
        return $query->row();
    }
     public function get_by_room_id($room_id) {
        $this->db->where('room_id', $room_id);
        $query = $this->db->get('room_facility');
        return $query->result();
    }
    public function update($record, $room_facility_id) {
        $this->db->where('room_facility_id', $room_facility_id);
        $this->db->update('room_facility', $record);
        
     }
    public function delete($room_facility_id) {
        $this->db->where('room_facility_id', $room_facility_id);
        $this->db->delete('room_facility');
    }
   
}
