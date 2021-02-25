<?php

class C_jenjang extends CI_Controller {
    
    public function index (){
        $this->load->model('m_jenjang');
        $data['dikdascontoh']= $this->m_jenjang->get_data();

        $this->load->view('v_jenjang', $data);
    }
    public function skeyword(){
        $key = $this->input->post('NUPTK');
        $data['posts'] = $this->m_jenjang->search($key);
        $this->load->view('skeyview',$data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
