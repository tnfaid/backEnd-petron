<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaCtrl extends CI_Controller {
	public function index(){
		// $this->load->model('restModel');
		// $arr = $this->restModel->getAll();
		// echo json_encode($arr);
	}

	public function signin() {
		$method = $_SERVER['REQUEST_METHOD'];
		if($method!='POST'){
			json_output(404, array('status'=> 400, 'message' => 'Bad Request.'));
		}
		else {

		}

		// $method = $_SERVER['REQUEST_METHOD'];
		// if ($method != 'POST') {
		// 	json_output(400, array('status' => 400, 'message' => 'Bad Request.' ));
		// } else {
		// 	$check_auth_client = $this->AuthModel->check_auth_client();
		// 	if($check_auth_client == true){

		// 	}
		// }
	}

}

?>