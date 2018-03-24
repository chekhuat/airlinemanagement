<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class CustomerRelationshipModel extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function index() 
	{
		
	}

	public function search($content) {
		$sql = "SELECT * FROM practice WHERE destination = '".$content['destination']."'";
		return $this->db->query($sql)->result();
	}
}