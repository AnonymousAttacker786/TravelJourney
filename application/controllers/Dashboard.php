<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author anand
 */
class Dashboard extends CI_Controller{
    
    
    public function index()
    {
                $this->load->view('header');
                $this->load->view('dashboard');
                $this->load->view('footer');
     }
    
}  
