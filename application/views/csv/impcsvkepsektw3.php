<?php

class impcsvkepsektw3 extends mysqli
{
    private $state_csv = false;
    public function __construct()
    {
        parent::__construct("localhost","root","","sppn");
        if ($this->connect_error){
            echo "Fail to connect to database : ". $this->connect_error;
        }
    }

    public function importkepsektw3($file){
        $file = fopen($file,'r');

        while ($row = fgetcsv($file) ){
            // print "<pre>";
            // print_r($row);
            // print"</pre>";
            $value = "'". implode("','", $row) ."'";
            // echo $value;
            $q = "INSERT INTO kepsektw3(NO,NUPTK,NRG,NAMA,TEMPAT_LAHIR,TANGGAL_LAHIR,TEMPAT_TUGAS,KECAMATAN,KABKOT,PROVINSI,NAMA_BANK,NO_REK,NAMA_REK,TOTAL,STATUS) VALUES (". $value .")";
            // echo $q;
            if ($this->query($q) ){
                $this->state_csv = true;
            }else{
                $this->state_csv = false;
                echo $this->error;
            }
        }

        if ($this->state_csv) {
            echo "Insert Success";
        }else{
            echo "Something went wrong";
        }
    }
}