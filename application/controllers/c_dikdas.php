<?php

class C_dikdas extends CI_Controller {
    
    public function index (){
        $this->load->model('M_home');
        $data['sppn']= $this->m_home->get_data();

        $this->load->view('v_searchdikdas', $data);
    }
    public function searchdikdas(){
        $keyword = $this->input->post('keyword');
        $data['sppn']=$this->m_home->searchdikdastw1($keyword);
        $data['tw2']=$this->m_home->searchdikdastw2($keyword);
        $data['tw3']=$this->m_home->searchdikdastw3($keyword);
        $data['tw4']=$this->m_home->searchdikdastw4($keyword);
        $this->load->view('v_sppn', $data);
    }
    public function totaldikdastw()
    {
        $this->load->model('m_home');
        $data['dikdastw1total']=$this->m_home->hitungdikdastw1();

        $this->load->model('m_home');
        $data['dikdastw2total']=$this->m_home->hitungdikdastw2();

        $this->load->model('m_home');
        $data['dikdastw3total']=$this->m_home->hitungdikdastw3();

        $this->load->model('m_home');
        $data['dikdastw4total']=$this->m_home->hitungdikdastw4();

        $this->load->view('v_totalhitungdikdas',$data);
    }
}
