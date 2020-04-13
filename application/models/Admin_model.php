<?php

class Admin_model extends CI_model {
  
    
     public function validate($email_id,$password)
     {
         $this->db->where(array('email_id' => $email_id,'password' => $password));
         $query = $this->db->get('admin_login');
         return $query->row();
     }
    
}
