<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('delhi/first');
	}
	public function iphone_repair_gurugram(){
		$this->load->view('gurgaon/iphone-repair-gurgaon');
	}
}
