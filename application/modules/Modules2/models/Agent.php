<?php

class Agent extends CI_Model{




	function __construct(){
		parent::__construct();

	}


	function addAgent($data){


		$sql = "insert into agent (FirstName,MiddleName,LastName,ContactNumber,Email, ManagerID)values(?,?,?,?,?,?)";

		$query = $this->db->query($sql,array($data['fname'],$data['mname'],$data['lname'],$data['cnumber'],$data['email'],$data['um']));


		if($query){

			return 'True';

		}
		else{

			return 'false';
		}
	}


	function addPolicy($data){


		$sql = "insert into policy (Product,ClientId,Premium,Pamount,Mode, AgentID)values(?,?,?,?,?,?)";

		$query = $this->db->query($sql,array($data['pname'],$data['clientPick'],$data['premium'],$data['pamount'],$data['mode'],$data['agentPick']));


		if($query){

			return 'True';

		}
		else{

			return 'false';
		}
	}

	function addManager($data){


		$sql = "insert into manager (FirstName,MiddleName,LastName,ContactNumber,Email)values(?,?,?,?,?)";

		$query = $this->db->query($sql,array($data['fname'],$data['mname'],$data['lname'],$data['cnumber'],$data['email'],));


		if($query){

			return 'True';

		}
		else{

			return 'false';
		}
	}

	function addClient($data){


		$sql = "insert into client (cFirstName,cMiddleName,cLastName,ContactNumber,Email)values(?,?,?,?,?)";

		$query = $this->db->query($sql,array($data['fname'],$data['mname'],$data['lname'],$data['cnumber'],$data['email'],));


		if($query){

			return 'True';

		}
		else{

			return 'false';
		}
	}


	function getManager(){

		$sql = "select * from manager";
		$query = $this->db->query($sql);

		if($query->num_rows()>0){

			$row = $query->result_array();

			return $row;
		}
		
	}


	function getAgent(){

		$sql = "select * from agent";
		$query = $this->db->query($sql);

		if($query->num_rows()>0){

			$row = $query->result_array();

			return $row;
		}
		
	}

	function getClient(){

		$sql = "select * from client ";
		$query = $this->db->query($sql);

		if($query->num_rows()>0){

			$row = $query->result_array();

			return $row;
		}
		
	}



	function getAgents($agentid){

		$this->db->select('*');
		$this->db->from('agent');
		$this->db->join('policy','policy.AgentID = agent.AgentID');
		$this->db->join('client','client.ClientID = policy.ClientID');
		$this->db->where('agent.AgentID',$agentid);
		$query = $this->db->get();


		if($query->num_rows()>0){

			$row = $query->result();

			return json_encode($row);
		}
	}
}

?>