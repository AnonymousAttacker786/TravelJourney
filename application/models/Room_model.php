<?php
class Room_model extends CI_Model {
    
     public function save($record) {
        $this->db->insert('room', $record);
        return $this->db->insert_id();
    }
     public function update($record, $room_id) {
        $this->db->where('room_id', $room_id);
        $this->db->update('room', $record);
        
      }

    public function get_all() {
        $this->db->select('room.room_id,room.room_category_id,room.room_type_id,room.room_no,room.room_title,room.hotel_location,room.location_description,room.max_adult,room.no_of_beds,room.price_per_night,room.room_description,room.room_image,floor.floor_no,floor.floor_name,hotel.hotel_name,room_type.room_type,floor.floor_name,room_category.room_category');
        $this->db->from('room');
        $this->db->join('hotel', 'room.hotel_id = hotel.hotel_id');
        $this->db->join('room_category', 'room.room_category_id = room_category.room_category_id');
        $this->db->join('room_type', 'room.room_type_id = room_type.room_type_id');
        $this->db->join('floor', 'room.floor_id = floor.floor_id');
        
        $query = $this->db->get();
        return $query->result();
    }
    public function get_detail_by_id($room_id) {
       
        $this->db->select('room.room_id,room.room_no,room.room_title,room.max_adult,room.no_of_beds,room.price_per_night,room.room_description,room.room_image,floor.floor_no,floor.floor_name,hotel.hotel_name,room.hotel_location,room.location_description,room_type.room_type,floor.floor_name,room_category.room_category,floor.floor_id,hotel.hotel_id,room_category.room_category_id,room_type.room_type_id');
        $this->db->where('room.room_id', $room_id);
        $this->db->from('room');
        $this->db->join('hotel', 'room.hotel_id = hotel.hotel_id');
        $this->db->join('room_category', 'room.room_category_id = room_category.room_category_id');
        $this->db->join('room_type', 'room.room_type_id = room_type.room_type_id');
        $this->db->join('floor', 'room.floor_id = floor.floor_id');
        
        $query = $this->db->get();
        return $query->row();
    }
    public function get_by_search($hotel_location,$room_category_id,$room_type_id,$max_adult,$price_per_night) {
       
         $this->db->select('room.room_id,room.room_no,room.room_title,room.max_adult,room.no_of_beds,room.price_per_night,room.room_description,room.room_image,floor.floor_no,floor.floor_name,hotel.hotel_name,room.hotel_location,room.location_description,room_type.room_type,floor.floor_name,room_category.room_category,floor.floor_id,hotel.hotel_id,room_category.room_category_id,room_type.room_type_id');
        $this->db->where('room.hotel_location',$hotel_location);
        $this->db->where('room.room_category_id',$room_category_id);
        $this->db->where('room.room_type_id',$room_type_id);
        $this->db->where('room.max_adult',$max_adult);
        $this->db->where('room.price_per_night',$price_per_night);
        $this->db->from('room');
        $this->db->join('hotel', 'room.hotel_id = hotel.hotel_id');
        $this->db->join('room_category', 'room.room_category_id = room_category.room_category_id');
        $this->db->join('room_type', 'room.room_type_id = room_type.room_type_id');
        $this->db->join('floor', 'room.floor_id = floor.floor_id');
        
        $query = $this->db->get();
        return $query->result();

    }
    
     public function delete($room_id) {
        $this->db->where('room_id', $room_id);
        $this->db->delete('room');
    }




    
}
