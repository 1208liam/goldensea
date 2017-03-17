<?php

class Modules2 extends MY_Controller{




	function __construct(){
		parent::__construct();
		$this->load->model('Agent'); 

	}


	function addAgent(){

		$data = $this->input->post();
		
		$success = $this->Agent->addAgent($data);

		redirect('Web/index'); 
	}



	function addPolicy(){

		$data = $this->input->post();
		
		$success = $this->Agent->addPolicy($data);

		redirect('Web/index');
	}


	function addManager(){

		$data = $this->input->post();
		
		$success = $this->Agent->addManager($data);

		redirect('Web/index');
	}


	function addClient(){

		$data = $this->input->post();
		
		$success = $this->Agent->addClient($data);

		redirect('Web/index');
	}


	function getAgents($agentid){


		$success = $this->Agent->getAgents($agentid);

		echo $success;

	}




}

?>