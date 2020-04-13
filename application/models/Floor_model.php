<?php


class Floor_model extends CI_Model{
   
    
    public function save($record) {
        $this->db->insert('floor', $record);
    }
    public function get_all() {
        $query = $this->db->get('floor');
        return $query->result();
    }
    public function get_by_id($floor_id) {
        $this->db->where('floor_id', $floor_id);
        $query = $this->db->get('floor');
        return $query->row();
    }

    public function update($record, $floor_id) {
        $this->db->where('floor_id', $floor_id);
        $this->db->update('floor', $record);
    }
    public function delete($floor_id) {
        $this->db->where('floor_id', $floor_id);
        $this->db->delete('floor');
    }
    
    
}
