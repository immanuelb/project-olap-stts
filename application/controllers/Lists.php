<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lists extends CI_Controller{

    public function listsaham(){
        $perusahaan = $this->mymodel->getall('perusahaan');
        $arrjson[]="";
        foreach ($perusahaan as $key => $value) {
            $cek = $this->mymodel->withquery('SELECT * FROM '.$value->table_name.' order by tanggal desc limit 1','row');
            $data[] = array(
                'id_perusahaan'   => $value->id_perusahaan,
                'name_perusahaan' => $value->nama_perusahaan,
                'table_name'   => $value->table_name,
                'tanggal' => $cek->Tanggal,
                'open' => $cek->Buka,
                'high' => $cek->High, 
                'low' => $cek->Low,  
                'close' => $cek->Tutup  
            );
            $json = json_encode($data);
            $result['data'] = $json;
        }

        $this->load->view("list/listsaham",$result);
    }


    public function listdeviden(){
        $perusahaan = $this->mymodel->getall('perusahaan');
        $arrjson[]="";
        foreach ($perusahaan as $key => $value) {
            $cek = $this->mymodel->withquery('SELECT * FROM div_detail where id_perusahaan = "'.$value->id_perusahaan.'" ','row');
            $data[] = array(
                'id_perusahaan'   => $value->id_perusahaan,
                'name_perusahaan' => $value->nama_perusahaan,
                'min_div' => $cek->min_div,
                'avg_div' => $cek->avg_div,
                'max_div' => $cek->max_div, 
                'dividend' => $cek->dividend,  
            );

            $json = json_encode($data);
            $result['data'] = $json;
        }
        $this->load->view("list/listdeviden",$result);
    }

    public function detailsaham($saham){
        
        $this->load->view("detail/saham",$result);
    }
}