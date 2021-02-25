<?php

class C_kepsek extends CI_Controller {
    
    public function index (){
        $this->load->model('M_home');
        $data['sppn']= $this->m_home->get_data();

        $this->load->view('v_searchkepsek', $data);
    }
    public function searchkepsek(){
        $keyword = $this->input->post('keyword');
        $data['sppn']=$this->m_home->searchkepsektw1($keyword);
        $data['tw2']=$this->m_home->searchkepsektw2($keyword);
        $data['tw3']=$this->m_home->searchkepsektw3($keyword);
        $data['tw4']=$this->m_home->searchkepsektw4($keyword);
        $this->load->view('v_sppn', $data);
    }
    public function totalkepsektw()
    {
        $this->load->model('m_home');
        $data['kepsektw1total']=$this->m_home->hitungkepsektw1();

        $this->load->model('m_home');
        $data['kepsektw2total']=$this->m_home->hitungkepsektw2();

        $this->load->model('m_home');
        $data['kepsektw3total']=$this->m_home->hitungkepsektw3();

        $this->load->model('m_home');
        $data['kepsektw4total']=$this->m_home->hitungkepsektw4();

        $this->load->view('v_totalhitungkepsek',$data);
    }
}
