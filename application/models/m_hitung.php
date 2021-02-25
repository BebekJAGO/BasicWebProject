<?php

class M_hitung extends CI_Model {
    public function get_Data (){
        return $this->db->get('sppn')->result_array();
    }
    public function hitungtktw1(){
        $this->db->select_sum('TOTAL');
        $this->db->select('TOTAL');
        $this->db->from('tktw1');
        return $this->db->get()->result();
        // print_r($query->result_array()); 

        // $result = mysql_query('SELECT SUM(TOTAL) AS total_pertw FROM tktw1'); 
        // $row = mysql_fetch_assoc($result); 
        // $sum = $row['total_tktw1'];
        // $this->db->select('TOTAL');
        // $this->db->SUM
        // $this->db->from('sppn');
        // $this->db->where('NUPTK',$keyword);
        // return $this->db->get()->result();

        // $query = "SELECT * FROM tktw1";
        // $query_run = mysql_query($query);

        // $qty= 0;
        // while ($num = mysql_fetch_assoc ($query_run)) {
        // $qty += $num['TOTAL'];
        // $this->db->from('sppn');
        // return $qty;
        // }   

        // $result = mysql_query('SELECT SUM(value) AS value_sum FROM codes'); 
        // $row = mysql_fetch_assoc($result); 
        // $sum = $row['value_sum'];
    }
}
?>