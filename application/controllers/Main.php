<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai');
	}

	public function index()
	{
		$param='1139/031794';
		$param2='1137/031794';
		$data['pegawai']=$this->M_pegawai->get_all_pegawai($param,$param2);
		//print_r($data['pegawai']);
		//die;
		$this->load->view('home',$data);
	}

	public function halo()
	{
		$id=$this->uri->segment(3);

		echo $id;

		die;

		$this->load->view('welcome_message');
	}


	public function cobasession(){
		$username='asdfgh';
		$this->session->set_userdata('username', $username);
		$data = $this->session->userdata('username');

		$username2='asdfgh';
		$this->session->set_flashdata('username2', $username2);
		$data2 = $this->session->flashdata('username2');
	}
}
