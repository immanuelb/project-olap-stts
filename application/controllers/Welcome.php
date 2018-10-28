<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$perusahaan = $this->mymodel->getall('perusahaan');
		print_r($perusahaan);
		foreach ($perusahaan as $key => $value) {
			$cek = $this->mymodel->withquery('SELECT table_name FROM information_schema.tables where table_schema="olap"
			and table_name = "'.$value->table_name.'_div"','row');
			if(!empty($cek)){
				$detail = $this->mymodel->withquery('select max(Dividends) as max,min(Dividends) as min, avg(Dividends) as avg from '.$value->table_name."_div",'row');			
				if (!empty($detail)) {
					$data = array('id_perusahaan' => $value->id_perusahaan,
					'min_div' =>$detail->min,'max_div' =>$detail->max, 'avg_div'=>$detail->avg,
					'dividend'=>true);
					$insert = $this->mymodel->insert('div_detail',$data);
				}
			}else {
					
				$data = array('id_perusahaan' => $value->id_perusahaan,
				'min_div' =>0,'max_div' =>0, 'avg_div'=>0,
				'dividend'=>false);
				$insert = $this->mymodel->insert('div_detail',$data);
			}
		}
	}

	public function replace(){
		$perusahaan = $this->mymodel->getall('perusahaan');
		//print_r($perusahaan);
		foreach ($perusahaan as $key => $value) {
			//$cek = $this->mymodel->withquery('SELECT table_name FROM information_schema.tables where table_schema="olap"','row');			
			$cek2 = $this->mymodel->withquery('SELECT id,tanggal FROM '.$value->table_name.' WHERE BUKA is NULL','result');
			foreach($cek2 as $key2 => $value2){
				$cek3 = $this->mymodel->withquery('SELECT * FROM '.$value->table_name.' WHERE id = '.(($value2->id)-1),'row');
				print_r($cek3);
				$data = array(
					'Buka' => $cek3->Buka,
					'High' => $cek3->High,
					'Low' => $cek3->Low,
					'Tutup' => $cek3->Tutup,
					'Adj_Close' => $cek3->Adj_Close,
					'Volume' => $cek3->Volume );
				$update = $this->mymodel->update($value->table_name,$data,'id',$value2->id);			
				//echo $value->table_name . "<br>"; //nama tabel
				//break;
			}
			//break;
		}
	}
}
