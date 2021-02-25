<?php

class C_totalpertw extends CI_Controller {
    
    public function index (){
        $this->load->view('v_hitungpertw');
        $this->load->model('m_home');
        $data['tktw1total'] = $this->m_home->hitungtktw1();
    }
    public function totaltktw1()
    {
        $this->load->model('m_home');
        $data['tktw1total']=$this->m_home->hitungtktw1();
        $this->load->view('v_hitungpertw',$data);
    }
    
}