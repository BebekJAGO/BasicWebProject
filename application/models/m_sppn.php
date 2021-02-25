<?php

class M_sppn extends CI_Model {
    public function get_Data (){

        return $this->db->get('sppn')->result_array();
    }
}
