<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	//  location page function start -------------------------------------
	public function index()
	{
		$this->load->view('delhi/first');
	}
	public function iphone_repair_gurugram(){
		$this->load->view('gurgaon/iphone-repair-gurgaon');
	}
	//  seed page function start -------------------------------------
	public function seed(){
		$this->load->view('seed/seed.php');
	}
}
