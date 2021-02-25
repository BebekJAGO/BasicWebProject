<?php

class C_mainmenu extends CI_Controller {
    
    public function index (){
        $this->load->view('v_mainmenu');
        $this->load->model('m_home');
        $data['tktw1total'] = $this->m_home->hitungtktw1();
    }    
}