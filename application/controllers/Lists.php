<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lists extends CI_Controller{

    public function listsaham(){
        $perusahaan = $this->mymodel->getall('perusahaan');
        $arrjson[]="";
        foreach ($perusahaan as $key => $value) {

            $cek = $this->mymodel->withquery('SELECT * FROM '.strtolower($value->table_name).' order by tanggal desc limit 1','row');
            $cek = json_decode(json_encode($cek), true);
            $data[] = array(
                'id_perusahaan'   => $value->id_perusahaan,
                'name_perusahaan' => $value->nama_perusahaan,
                'table_name'   => $value->table_name,
                'tanggal' => $cek['Tanggal'],
                'open' => $cek['Buka'],
                'high' => $cek['High'], 
                'low' => $cek['Low'],  
                'close' => $cek['Tutup']  
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
                'table_name'   => $value->table_name,
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
        $saham = strtolower($saham);
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
        $data = $this->mymodel->getalllimitdesc($saham,$page,$config['per_page'],'id');
        $json = json_encode($data);
        $result['data'] = $json;
        $result["links"] = $this->pagination->create_links();
    
        $this->load->view("detail/saham",$result);
    }

    public function detaildevided($saham){
        $saham = strtolower($saham);
        $test = $this->mymodel->withquery('SELECT table_name FROM information_schema.tables where table_schema="mio_olap"
			and table_name = "'.$saham.'_div"','row');
        if(!empty($test)){
            $cek = $this->mymodel->withquery('SELECT * FROM '.$saham.'_div order by Tanggal asc','result');
        
            $cek2 = $this->mymodel->withquery('SELECT * FROM perusahaan where table_name = "'.$saham.'" ','row');
            $detail = $this->mymodel->withquery('SELECT * FROM div_detail where id_perusahaan = "'.$cek2->id_perusahaan.'" ','row');
            
            $this->load->library('pagination');
            $config['base_url'] = base_url().'/lists/detaildeviden/'.$saham;
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
            $data = $this->mymodel->getalllimitdesc($saham."_div",$page,$config['per_page'],"Tanggal");
            $json = json_encode($data);
            $result['data'] = $json;
            $result["links"] = $this->pagination->create_links();
            $result['detail'] = $detail;
    
        }
        else{
            $data[] = array(
                'id' => '0',
                'Tanggal' => '1000-01-01',
                'Dividends' => '0'
            );
            $detail = new stdClass();
            $detail->min_div = '0';
            $detail->avg_div='0';
            $detail->max_div='0';
            
            //print_r(json_encode($data));
            $result['data'] = json_encode($data);
            $result["links"] = "";
            $result['detail'] = $detail;
        }
        
        $this->load->view("detail/deviden",$result);
    }

    public function combine($saham){
       //Saham
        $saham = strtolower($saham);
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
        $data = $this->mymodel->getalllimitasc($saham,$page,$config['per_page'],'id');
        $json = json_encode($data);
        $result['data'] = $json;
        $result["links"] = $this->pagination->create_links();
            
        //Deviden
        $saham = strtolower($saham);
        $test = $this->mymodel->withquery('SELECT table_name FROM information_schema.tables where table_schema="olap"
        and table_name = "'.$saham.'_div"','row');
        if(!empty($test)){
            $cek = $this->mymodel->withquery('SELECT * FROM '.$saham.'_div order by Tanggal asc','result');
        
            $cek2 = $this->mymodel->withquery('SELECT * FROM perusahaan where table_name = "'.$saham.'" ','row');
            $detail = $this->mymodel->withquery('SELECT * FROM div_detail where id_perusahaan = "'.$cek2->id_perusahaan.'" ','row');
            
            $this->load->library('pagination');
            $config['base_url'] = base_url().'/lists/detaildeviden/'.$saham;
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
            $data = $this->mymodel->getalllimitdesc($saham."_div",$page,$config['per_page'],"Tanggal");
            $json = json_encode($data);
            $result['data2'] = $json;
            $result["links2"] = $this->pagination->create_links();
            $result['detail2'] = $detail;
    
        }
        else{
            $data[] = array(
                'id' => '0',
                'Tanggal' => '1000-01-01',
                'Dividends' => '0'
            );
            $detail = new stdClass();
            $detail->min_div = '0';
            $detail->avg_div='0';
            $detail->max_div='0';
            
            //print_r(json_encode($data));
            $result['data2'] = json_encode($data);
            $result["links2"] = "";
            $result['detail2'] = $detail;
        }


        $this->load->view("detail/combine",$result);
    }

    public function getChartDataSaham(){
        $saham = $this->input->post("saham");
        $saham = strtolower($saham);
        $cek = $this->mymodel->withquery('select
        (select date_format(tanggal,"%Y") from '.$saham.' order by tanggal asc limit 1)  as "first_year",
        (select date_format(tanggal,"%Y") from '.$saham.' order by tanggal desc limit 1) as "last_year",
        (select (last_year-first_year)) as "diff"','result');
        foreach($cek as $key=>$value){
            $first_year = $value->first_year;
            $last_year = $value->last_year;
            $diff = $value->diff;
        }
        for($i = $first_year;$i <= $last_year;$i++){
            $cek2 = $this->mymodel->withquery("SELECT date_format(tanggal,'%Y-%m-%d') as 'tanggal',date_format(tanggal,'%Y') as 'year', Buka, Tutup FROM $saham WHERE year(tanggal) = $i and month(tanggal) = '12' order by tanggal desc limit 1" ,"result");        
            foreach($cek2 as $key2=>$value2){
                $val[] = array(
                    'year' => $value2->year,
                    'open' => $value2->Buka,
                    'close' => $value2->Tutup
                );
            }
            $json = json_encode($val);
        }
        echo $json;
    }

    public function getChartDataDeviden(){
        $saham = $this->input->post("saham");
        $saham = strtolower($saham);
        $test = $this->mymodel->withquery('SELECT table_name FROM information_schema.tables where table_schema="mio_olap"
			and table_name = "'.$saham.'_div"','row');
        if(!empty($test)){
            $cek = $this->mymodel->withquery('SELECT * FROM '.$saham.'_div order by Tanggal asc','result');
            foreach($cek as $key=>$value){
                $val[] = array(
                    'year' => date('Y',strtotime($value->Tanggal)),
                    'deviden' => $value->Dividends,
                );
            }
            $json = json_encode($val);
            echo $json;    
        }
    }
}