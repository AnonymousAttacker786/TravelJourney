<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact_us
 *
 * @author anand
 */
class Contact_us extends CI_Controller{
    
        public function index() {
                $this->load->view('header');
                $this->load->view('contact_us');
                $this->load->view('footer');
    }

    
}
