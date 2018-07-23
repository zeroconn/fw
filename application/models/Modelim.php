<?php

class Modelim extends CI_Model{
	public function getir(){
		return $this->db->get("prob")->result();
	}
}