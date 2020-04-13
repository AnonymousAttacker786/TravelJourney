<?php

class Category_model extends CI_Model {

    public function save($record) {
        $this->db->insert('category', $record);
    }
    public function update($record, $category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->update('category', $record);
    }

    public function get_all() {
        $this->db->from('category');
        $this->db->join('going_to', 'category.going_to_id = going_to.going_to_id');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($category_id) {
        $this->db->where('category_id', $category_id);
        $query = $this->db->get('category');
        return $query->row();
    }

    public function get_data() {
        $this->db->from('going_to');
    }
     public function delete($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('category');
    }
}
