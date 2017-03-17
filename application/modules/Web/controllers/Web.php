<?php

class Web extends MY_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('Modules2/Agent');
		$this->load->model('Modules2/Policy');

	}

	function index(){

		$manager = $this->Agent->getManager();
		$agent = $this->Agent->getAgent();
		$client = $this->Agent->getClient();

		// print_r($agent);

		// print_r($manager);
		$data = array(
			'title'=>'Golden Sea',
			'homepageheader'=>'homepageheader header-collapse',
			'manager'=>$manager,
			'agent'=>$agent,
			'client'=>$client
		);
	$this->load->view('Default/header', $data);
	$this->load->view('Default/dashboard');	
	$this->load->view('index');
	
	}

	function TotalPolicy(){

		$agent = $this->Agent->getAgent();

		$data = array(
			'title'=>'Total Agent Policy',
			'homepageheader'=>'homepageheader header-collapse',
			'agent'=>$agent,

		);
	$this->load->view('Default/header', $data);
	$this->load->view('Default/dashboard');	
	$this->load->view('TotalPolicy');
	
	}


	function table(){

		$data = array(
			'title'=>'Tables',
			'homepageheader'=>'homepageheader header-collapse'

		);
	$this->load->view('Default/header', $data);
	$this->load->view('Default/dashboard');	
	$this->load->view('tables');
	

	}

	function form(){

		$data = array(
			'title'=>'Tables',
			'homepageheader'=>'homepageheader header-collapse'

		);
	$this->load->view('Default/header', $data);
	$this->load->view('Default/dashboard');	
	$this->load->view('forms');
	

	}

	function element(){

		$data = array(
			'title'=>'Bootstrap Element',
			'homepageheader'=>'homepageheader header-collapse'

		);
	$this->load->view('Default/header', $data);
	$this->load->view('Default/dashboard');	
	$this->load->view('elements');
	

	}

	function grid(){

		$data = array(
			'title'=>'Bootstrap Grid',
			'homepageheader'=>'homepageheader header-collapse'

		);
	$this->load->view('Default/header', $data);
	$this->load->view('Default/dashboard');	
	$this->load->view('grids');
	

	}

}