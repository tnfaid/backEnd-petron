<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestModel extends  CI_Model{


	function __construct()
	{
		parent::__construct();
	}

	function getALL() {
		$query = $this->db->get("CMS_News");
		return $query->result();
	}
}

?>