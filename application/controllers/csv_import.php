<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv_import extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('csv_import_model');
        $this->load->library('csvimport');
    }

    function index()
    {
        $this->load->view('csv_import');
    }

    function load_data()
    {
        $result = $this->csv_import_model->select();
        $output = '
        <h3 align = "center">Imported CSV Files </h3>
        <div class="table-responsive">
            <table class ="table table-bordered table-striped">
                <tr>
                    <th>NO</th>
                    <th>NUPTK</th>
                    <th>NRG</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TEMPAT TUGAS</th>
                    <th>KECAMATAN</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>PROVINSI</th>
                    <th>NAMA BANK</th>
                    <th>NO. REKENING</th>
                    <th>NAMA REKENING</th>
                    <th>TOTAL</th>
                    <th>STATUS</th>
                </tr>
        ';
        $count = 0;
        if($result->num_rows() > 0)
        {
            foreach($result->result() as $row)
            {
               $count = $count + 1;
               $output .= '
               <tr>
                    <td>'.$count.'</td>
                    <td>'.$row->NO.'</td>
                    <td>'.$row->NUPTK.'</td>
                    <td>'.$row->NRG.'</td>
                    <td>'.$row->NAMA.'</td>
                    <td>'.$row->TEMPAT_LAHIR.'</td>
                    <td>'.$row->TEMPAT_TUGAS.'</td>
                    <td>'.$row->KECAMATAN.'</td>
                    <td>'.$row->KABKOT.'</td>
                    <td>'.$row->PROVINSI.'</td>
                    <td>'.$row->NAMA_BANK.'</td>
                    <td>'.$row->NO_REK.'</td>
                    <td>'.$row->NAMA_REK.'</td>
                    <td>'.$row->TOTAL.'</td>
                    <td>'.$row->STATUS.'</td>
               </tr>
               ';
            }
        }
        else
        {
            $output .= '
            <tr>
                <td colspan="5" align="center">Data not Available</td>
            </tr>
            ';
        }

    $output .= '</table></div>';
    echo $output;
    }

    function import()
    {
        $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach($file_data as $row)
        {
            $data[] = array(
                'NO' => $row["NO"],
                'NUPTK' => $row["NUPTK"],
                'NRG' => $row["NRG"],
                'NAMA' => $row["NAMA"],
                'TEMPAT_LAHIR' => $row["TEMPAT LAHIR"],
                'TANGGAL_LAHIR' => $row["TANGGAL LAHIR"],
                'TEMPAT_TUGAS' => $row["TEMPAT TUGAS"],
                'KECAMATAN' => $row["KECAMATAN"],
                'KABKOT' => $row["KABUPATEN/KOTA"],
                'PROVINSI' => $row["PROVINSI"],
                'NAMA_BANK' => $row["NAMA BANK"],
                'NO_REK' => $row["NO. REKENING"],
                'NAMA_REK' => $row["NAMA REKENING"],
                'TOTAL' => $row["TOTAL"],
                'STATUS' => $row["STATUS"]
            );
        }
        $this->csv_import_model->insert($data);
    }
}