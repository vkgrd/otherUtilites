<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function index()
	{
		$this->load->view('header');
		$this->load->view('header-nav');
		$this->load->view('main-content');
		$this->load->view('footer-nav');
		$this->load->view('footer');
	}

}