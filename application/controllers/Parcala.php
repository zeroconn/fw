<?php

class Parcala extends CI_Controller{
	public function index(){
		$this->load->view('header');
		$this->load->view('center');
		$this->load->view('footer');
	}

	public function salam($ad){
		echo "Salam ay ".$ad;
	}
}