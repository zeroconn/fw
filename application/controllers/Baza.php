<?php

class Baza extends CI_Controller{
	public function index(){
		// $coxlu = $this->db->get('prob')->result();
		// $tek = $this->db->get('prob')->row();
		// echo "<pre>";
		// print_r($tek);
		// echo "</pre>";

		// $melumat = array(
		// 	'nese'=>$coxlu
		// );

		// foreach ($coxlu as $cox):
		// 	echo $cox->ad."<hr>";
		// endforeach;
		$coxlu = $this->db->where('id>',2)->where('id<',5)->get('prob')->result();
		//birden cox sert qoya bilerik
		echo "<pre>";
		print_r($coxlu);
		echo "</pre>";
	}

	public function axtar(){
		$nese = $this->db->like('ad','alvise')->get('prob')->result();
		echo "<pre>";
		print_r($nese);
		echo "</pre>";
	}

	public function sirala(){
		$nese = $this->db->order_by('id','desc')->get('prob')->result();
	
		echo "<pre>";
		print_r($nese);
		echo "</pre>";
	}

	public function limitle(){
		//limit(9) nece dene info getirmek istediyimizi gosteririk

		$nese = $this->db->limit(5)->get('prob')->result();
		echo $this->db->last_query();
		echo "<pre>";
		print_r($nese);
		echo "</pre>";
	}

	public function heftebecer(){
		//qarisiq kod)))
		$nese = $this
		->db
		->where('id>',0)
		->like('ad','alvise')
		->order_by('id','desc')
		->limit(2)
		->get('prob')
		->result();

		//echo $this->db->last_query();
		echo "<pre>";
		print_r($nese);
		echo "</pre>";
	}

	public function qeyd(){
		// insert etme

		// viewde bir form aciriq
		//base_url("form/yaddas"); action qismi

		//controller de yaddas funksiyasi yaziriq

		$ad = $this->input->post("ad");

		$info = array("ad"=>$ad);

		$yaddasa_ver = $this->db->insert("prob",$info);

		return $yaddasa_ver;
	}

	public function rasim(){
		$this->load->view('qeyd');
	}

	public function goster(){
		// Model qaydasi
		// Controllerde

		$this->load->model("Modelim");

		$netice = $this->Modelim->getir();

		echo "<pre>";
		print_r($netice);
		echo "</pre>";
	}

	public function maraqli(){
		seir();
		echo "<hr>";
		echo hesabla(16,24);
	}
}