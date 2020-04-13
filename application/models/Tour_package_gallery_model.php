<?php

class Tour_package_gallery_model extends CI_Model {

    public function save($tour_package_gallery) {
        $this->db->insert('tour_package_gallery', $tour_package_gallery);
    }

}
