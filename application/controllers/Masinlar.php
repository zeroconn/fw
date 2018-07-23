<?php

class Masinlar extends CI_Controller{

	public function index(){
		//echo "Masinlarin indexi :))";
		$this->load->view('masin');
	}

	public function bacariq(){
		//echo "Masinlar minik vasitesidi";
		$this->load->view('bacariq');
	}

	public function teker(){
		echo "This is teker page :))";
	}
}