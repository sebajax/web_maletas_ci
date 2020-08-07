<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController {
	
	use ResponseTrait;

	public function index() {
		$jwt = service('jwt');
		$data = [
			'token' => $jwt->setToken()
		];
		echo view('templates/header');
		echo view('home', $data);
		echo view('templates/footer');
	}

	public function sendMessage() {
		//Validate Request
		//Store info in DB
		//Send Email
		//Send Succes or Fail message feedback
		$data = array(
			'response' => $this->request->getPost()
		);
		return $this->respond($data);
	}

}