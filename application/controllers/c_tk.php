<?php

class C_tk extends CI_Controller {
    
    public function index (){
        $this->load->model('M_home');
        $data['sppn']= $this->m_home->get_data();

        $this->load->view('v_searchtk', $data);
    }
    public function searchtk(){
        $keyword = $this->input->post('keyword');
        $data['sppn']=$this->m_home->searchtktw1($keyword);
        $data['tw2']=$this->m_home->searchtktw2($keyword);
        $data['tw3']=$this->m_home->searchtktw3($keyword);
        $data['tw4']=$this->m_home->searchtktw4($keyword);
        $this->load->view('v_sppn', $data);
    }
    public function searchtktw2(){
        $keyword = $this->input->post('keyword');
        $data['sppn']=$this->m_home->searchtktw2($keyword);
        $this->load->view('v_sppn', $data);
    }
    public function searchtktw3(){
        $keyword = $this->input->post('keyword');
        $data['sppn']=$this->m_home->searchtktw3($keyword);
        $this->load->view('v_sppn', $data);
    }
    public function searchtktw4(){
        $keyword = $this->input->post('keyword');
        $data['sppn']=$this->m_home->searchtktw4($keyword);
        $this->load->view('v_sppn', $data);
    }
    public function totaltktw()
    {
        $this->load->model('m_home');
        $data['tktw1total']=$this->m_home->hitungtktw1();

        $this->load->model('m_home');
        $data['tktw2total']=$this->m_home->hitungtktw2();

        $this->load->model('m_home');
        $data['tktw3total']=$this->m_home->hitungtktw3();

        $this->load->model('m_home');
        $data['tktw4total']=$this->m_home->hitungtktw4();

        $this->load->view('v_totalhitungtk',$data);
    }
    public function importtw1(){
        
    }
}
