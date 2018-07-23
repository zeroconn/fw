<?php

class Qeydiyyat extends CI_Controller{
	public function index(){
		$this->load->view('qeydiyyat');
	}

	public function istifadeci(){
		$ad = $this->input->post('ad');
		$soyad = $this->input->post('soyad');
		$olke = $this->input->post('olke');

		echo "Ad: ".$ad."<br>";
		echo "Soyad: ".$soyad."<br>";
		echo "Olke: ".$olke."<br>";
	}
}