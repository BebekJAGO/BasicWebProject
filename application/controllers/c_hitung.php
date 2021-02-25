<?php

class C_X extends CI_Controller {
    
    public function index (){
        $this->load->view('v_hitungpertw');
    }

    public function testfun()
    {
        $data['total_tktw1']=$this->m_home->hitungtktw1();
        $this->load->view('v_hitungpertw');
    }     
}
