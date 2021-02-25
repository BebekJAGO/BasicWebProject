<?php

class M_home extends CI_Model {
    public function get_Data (){
        return $this->db->get('sppn')->result_array();
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('sppn');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchtktw1($keyword){
        $this->db->select('*');
        $this->db->from('tktw1');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchtktw2($keyword){
        $this->db->select('*');
        $this->db->from('tktw2');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchtktw3($keyword){
        $this->db->select('*');
        $this->db->from('tktw3');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchtktw4($keyword){
        $this->db->select('*');
        $this->db->from('tktw4');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchkepsektw1($keyword){
        $this->db->select('*');
        $this->db->from('kepsektw1');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchkepsektw2($keyword){
        $this->db->select('*');
        $this->db->from('kepsektw2');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchkepsektw3($keyword){
        $this->db->select('*');
        $this->db->from('kepsektw3');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchkepsektw4($keyword){
        $this->db->select('*');
        $this->db->from('kepsektw4');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchdikdastw1($keyword){
        $this->db->select('*');
        $this->db->from('dikdastw1');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchdikdastw2($keyword){
        $this->db->select('*');
        $this->db->from('dikdastw2');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchdikdastw3($keyword){
        $this->db->select('*');
        $this->db->from('dikdastw3');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchdikdastw4($keyword){
        $this->db->select('*');
        $this->db->from('dikdastw4');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchdikmentw1($keyword){
        $this->db->select('*');
        $this->db->from('dikmentw1');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchdikmentw2($keyword){
        $this->db->select('*');
        $this->db->from('dikmentw2');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchdikmentw3($keyword){
        $this->db->select('*');
        $this->db->from('dikmentw3');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function searchdikmentw4($keyword){
        $this->db->select('*');
        $this->db->from('dikmentw4');
        $this->db->where('NUPTK',$keyword);
        return $this->db->get()->result();
    }
    public function hitungtktw1(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW1 FROM tktw1";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW1;
    }
    public function hitungtktw2(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW2 FROM tktw2";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW2;
    }
    public function hitungtktw3(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW3 FROM tktw3";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW3;
    }
    public function hitungtktw4(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW4 FROM tktw4";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW4;
    }
    public function hitungkepsektw1(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW1 FROM kepsektw1";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW1;
    }
    public function hitungkepsektw2(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW2 FROM kepsektw2";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW2;
    }
    public function hitungkepsektw3(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW3 FROM kepsektw3";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW3;
    }
    public function hitungkepsektw4(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW4 FROM kepsektw4";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW4;
    }
    public function hitungdikdastw1(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW1 FROM dikdastw1";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW1;
    }
    public function hitungdikdastw2(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW2 FROM dikdastw2";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW2;
    }
    public function hitungdikdastw3(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW3 FROM dikdastw3";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW3;
    }
    public function hitungdikdastw4(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW4 FROM dikdastw4";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW4;
    }
    public function hitungdikmentw1(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW1 FROM dikmentw1";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW1;
    }
    public function hitungdikmentw2(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW2 FROM dikmentw2";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW2;
    }
    public function hitungdikmentw3(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW3 FROM dikmentw3";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW3;
    }
    public function hitungdikmentw4(){
        $sql = "SELECT sum(TOTAL) as TOTALTKTW4 FROM dikmentw4";
        $result = $this->db->query($sql);
        return $result->row()->TOTALTKTW4;
    }
}