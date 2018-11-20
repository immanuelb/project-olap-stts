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
 public function web($value='')
 {
	 header('Access-Control-Allow-Origin: *'); 
	 	$this->load->view('web');
 }
	public function index()
	{
		//$this->load->view('welcome_message');
		$perusahaan = $this->mymodel->getall('perusahaan');
		//print_r($perusahaan);
		$arrjson[]="";
		foreach ($perusahaan as $key => $value) {
			$cek = $this->mymodel->withquery('SELECT table_name FROM information_schema.tables where table_schema="olap"
			and table_name = "'.$value->table_name.'_div"','row');

			$cek2 = $this->mymodel->withquery('SELECT * FROM '.$value->table_name.' order by tanggal desc limit 1','row');
			//insert to div detail tabel
			/*if(!empty($cek)){
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
			}*/
			/*foreach($cek2 as $key2 => $value2){
				$data[] = array(
					'ID' => $value2->Id,
					'Tanggal' => $value2->Tanggal,
					'Buka' => $value2->Buka,
					'High' => $value2->High,
					'Low' => $value2->Low,
					'Tutup' => $value2->Tutup,
					'Adj_Close' => $value2->Adj_Close,
					'Volume' => $value2->Volume );
			}*/
			$json = json_encode($cek2);
			array_push($arrjson,$json);
		}
		print_r($arrjson);
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

	public function getdiffyear(){
		$perusahaan = $this->mymodel->getall('perusahaan');
		
		foreach ($perusahaan as $key => $value) {
			$cek = $this->mymodel->withquery('select
			(select date_format(tanggal,"%Y") from '.$value->table_name.' order by tanggal asc limit 1)  as "first_year",
			(select date_format(tanggal,"%Y") from '.$value->table_name.' order by tanggal desc limit 1) as "last_year",
			(select (last_year-first_year)) as "diff"','result');
			//echo $value->table_name." ";
			foreach($cek as $key2 => $value2){
				$data[] = array(
					'id_perusahaan'   => $value->id_perusahaan,
					'table_name'   => $value->table_name,   
					'first_year'   => $value2->first_year, 
					'last_year'   => $value2->last_year,
					//'diff'   => $value2->diff,
				);
			}	
		}
		$json = json_encode($data);
		//echo $json;
		$this->getCloseEveryYear($json);
	}

	public function getCloseEveryYear($json){
		$json = json_decode($json);
		foreach ($json as $key => $value) {
			$initialTutup = 0;
			$firstClose = 0;
			$lastClose = 0;
			$data2 = [];
			for($i=($value->first_year);$i<=($value->last_year);$i++){
				//echo $value->table_name;
				//echo $value->first_year;
				$cek = $this->mymodel->withquery("SELECT date_format(tanggal,'%Y-%m-%d') as 'tanggal',date_format(tanggal,'%Y') as 'year', Tutup FROM ".$value->table_name." WHERE year(tanggal) = '".$i."' and month(tanggal) = '12' order by tanggal desc limit 1" ,"result");
				foreach($cek as $key2 => $value2){
					if($i == ($value->first_year)){ $firstClose = ($value2->Tutup); }
					if($i == ($value->last_year-1)){ $lastClose = ($value2->Tutup); }

					if($initialTutup == 0){$initialTutup = $value2->Tutup; }

					$diff = ceil(($value2->Tutup) - ($initialTutup));
					$close = ceil($value2->Tutup);
					$data2[] = array(
						'year'   => $i, 
						'close'   => $close,
						'diff' => $diff,
						'percentage' => round($diff * 100 / ceil($initialTutup),2 )
					);
					//Insert to table close_detail
					/*$datainsert = array('id_perusahaan' => $value->id_perusahaan,
					'year' => $i, 'close' => $close,
					'diff' => $diff, 'percentage' => round($diff * 100 / ceil($initialTutup),2 )
					);
					$insert = $this->mymodel->insert('close_detail',$datainsert);*/
				}
				$initialTutup = $value2->Tutup;
			}	
			$data[] = array(
				'id_perusahaan'   => $value->id_perusahaan,
				'table_name'   => $value->table_name,
				'firstClose' => ceil($firstClose),
				'lastClose' => ceil($lastClose),
				'percentage' => ceil((($lastClose-$firstClose)/$firstClose)*100), 
				'data' => $data2,  
			);
			//Insert to table close
			/*$datainsert = array('id_perusahaan' => $value->id_perusahaan,
			'table_name' => $value->table_name, 'firstClose' => ceil($firstClose),
			'lastClose' => ceil($lastClose), 'percentage' => ceil((($lastClose-$firstClose)/$firstClose)*100),
			);
			$insert = $this->mymodel->insert('close',$datainsert);*/

			$json = json_encode($data);
			$result['data'] = $json;
		}
		echo $result['data'];
	}

	public function filter($dividends,$rangefirstClose,$rangeendClose,$limit){
		//avg best percentage 
		$cek2 = $this->mymodel->withquery('select sum(percentage) as "total" from close where 1','result');
			
	}

	public function filter2(){
		//avg best percentage 
		$total = $this->mymodel->withquery('select sum(percentage) as "total" from close where 1','row');
		$bestpercetage = ceil($total->total/45);

		//contoh filter
		$dividend = 1; //1/0
		$rangefirstClose = 1000;
		$rangeendClose = 2000; 
		$limit = 3;

		$get = $this->mymodel->withquery('select c.table_name,c.lastClose 
		from close c, div_detail d 
		where d.id_perusahaan = c.id_perusahaan and c.lastClose >= '.$rangefirstClose.' 
		and c.lastClose <= '.$rangeendClose.' and d.dividend = '.$dividend.' and c.percentage >= '.$bestpercetage.' 
		limit '.$limit.'  ','result');
		
		foreach($get as $key => $value){
			$data[] = array(
				'table_name'   => $value->table_name,
				'lastClose' => $value->lastClose,
			);
			$json = json_encode($data);
		}
		echo $json;

	}


}
