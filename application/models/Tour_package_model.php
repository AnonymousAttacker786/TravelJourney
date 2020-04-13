<?php

class Tour_package_model extends CI_Model {

    public function save($tour_package) {
        $this->db->insert('tour_package', $tour_package);
        return $this->db->insert_id();
    }

    public function update($record, $tour_package_id) {
        $this->db->where('tour_package_id', $tour_package_id);
        $this->db->update('tour_package', $record);
        
      }

    public function get_all() {
        $this->db->select('tour_package.tour_package_id, tour_package.tour_package_name, tour_package.description, tour_package.image, category.category_name, going_to.going_to_title, tour_type.tour_type_name,tour_package.price_per_person,tour_package.price_per_child,tour_package.origin,tour_package.no_of_days,tour_type.tour_type_name');
        $this->db->from('tour_package');
        $this->db->join('going_to', 'tour_package.going_to_id = going_to.going_to_id');
        $this->db->join('category', 'tour_package.category_id = category.category_id');
        $this->db->join('tour_type', 'tour_package.tour_type_id = tour_type.tour_type_id');
        $query = $this->db->get();

        //$query = $this->db->query('select * from tour_package,category,going_to WHERE going_to.going_to_id = category.category_id  AND tour_package.tour_package_id = going_to.going_to_id');
        return $query->result();
    }

    public function get_detail_by_id($tour_package_id) {
        $this->db->select('tour_package.tour_package_id,tour_package.tour_package_name, tour_package.description, tour_package.image as tour_package_image, category.category_name, going_to.going_to_id, going_to.going_to_title,category.category_id,tour_type.tour_type_id,tour_type.tour_type_name,tour_package.price_per_person,tour_package.price_per_child,tour_package.origin,tour_package.no_of_days');
        $this->db->where('tour_package.tour_package_id', $tour_package_id);
        $this->db->from('tour_package');
        $this->db->join('going_to', 'tour_package.going_to_id = going_to.going_to_id');
        $this->db->join('category', 'tour_package.category_id = category.category_id');
        $this->db->join('tour_type', 'tour_package.tour_type_id = tour_type.tour_type_id');

        $query = $this->db->get();
        return $query->row();
    }

    public function delete($tour_package_id) {
        $this->db->where('tour_package_id', $tour_package_id);
        $this->db->delete('tour_package');
    }

}
