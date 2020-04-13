<?php

class Going_to_model extends CI_Model {

    public function save($record) {
        $this->db->insert('going_to', $record);
    }
    
    public function update($record, $going_to_id) {
        $this->db->where('going_to_id', $going_to_id);
        $this->db->update('going_to', $record);
    }

    public function get_all() {
        $query = $this->db->get('going_to');
        return $query->result();
    }

    public function get_by_id($going_to_id) {
        $this->db->where('going_to_id', $going_to_id);
        $query = $this->db->get('going_to');
        return $query->row();
    }

    public function delete($going_to_id) {
        $this->db->where('going_to_id', $going_to_id);
        $this->db->delete('going_to');
    }

}
