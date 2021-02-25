<?php

class C_db extends CI_Controller {
    
    public function index (){
        $this->load->model('M_home');
        $data['sppn']= $this->m_home->get_data();

        $this->load->view('v_jenjang', $data);
    }
    public function skeyword(){
        $key = $this->input->post('NUPTK');
        $data['posts'] = $this->m_home->search($key);
        $this->load->view('skeyview',$data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login'); 
    }
}
