    <?php

class Customer_model extends CI_Model {
    
    public function save($sign_up)
    {
        $this->db->insert('sign_up',$sign_up);
    }
    public function update($sign_up, $cust_id) {
        $this->db->where('cust_id', $cust_id);
        $this->db->update('sign_up', $sign_up);
    }
      public function delete($cust_id) {
        $this->db->where('cust_id', $cust_id);
        $this->db->delete('sign_up');
    }
    public function get_all() {
         $this->db->from('sign_up');
        $query = $this->db->get();
        return $query->result();
     }
     public function get_by_id($cust_id) {
        $this->db->where('cust_id', $cust_id);
        $query = $this->db->get('sign_up');
        return $query->row();
    }

     public function validate($email_id,$password)
     {
         $this->db->where(array('email_id' => $email_id,'password' => $password));
         $query = $this->db->get('sign_up');
         return $query->row();
     }
     
             

    
    
}
