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
        $cek = $this->mymodel->withquery('SELECT * FROM '.$saham.' ','result');
        
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/Lists/detailsaham/'.$saham;
        $config['total_rows'] = count($cek);
        $config['per_page'] = 20;
        $config["uri_segment"] = 4;
        
        $config['full_tag_open'] = '<div class="box-footer clearfix"><ul class="pagination pagination-sm pull-right">';
        $config['full_tag_close'] = '</ul></div>';
        
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li><a class="current">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data = $this->mymodel->getalllimitasc($saham,$page,$config['per_page'],1);
        $json = json_encode($data);
        $result['data'] = $json;
        $result["links"] = $this->pagination->create_links();
    
        $this->load->view("detail/saham",$result);
    }
}