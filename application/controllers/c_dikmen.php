<?php

class C_dikmen extends CI_Controller {
    
    public function index (){
        $this->load->model('M_home');
        $data['sppn']= $this->m_home->get_data();

        $this->load->view('v_searchdikmen', $data);
    }
    public function searchdikmen(){
        $keyword = $this->input->post('keyword');
        $data['sppn']=$this->m_home->searchdikmentw1($keyword);
        $data['tw2']=$this->m_home->searchdikmentw2($keyword);
        $data['tw3']=$this->m_home->searchdikmentw3($keyword);
        $data['tw4']=$this->m_home->searchdikmentw4($keyword);
        $this->load->view('v_sppn', $data);
    }
    public function totaldikmentw()
    {
        $this->load->model('m_home');
        $data['dikmentw1total']=$this->m_home->hitungdikmentw1();

        $this->load->model('m_home');
        $data['dikmentw2total']=$this->m_home->hitungdikmentw2();

        $this->load->model('m_home');
        $data['dikmentw3total']=$this->m_home->hitungdikmentw3();

        $this->load->model('m_home');
        $data['dikmentw4total']=$this->m_home->hitungdikmentw4();

        $this->load->view('v_totalhitungdikmen',$data);
    }
}
