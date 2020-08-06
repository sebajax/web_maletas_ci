<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Libraries\JwtToken;

class Home extends BaseController {
	
	use ResponseTrait;

	public function index() {
		$token = JwtToken::setToken();
		$data = [
			'token' => $token
		];
		echo view('templates/header');
		echo view('home', $data);
		echo view('templates/footer');
	}

	public function sendMessage() {
		//Validate Request
		//Send Email
		//Send Succes or Fail message feedback
		return $this->respond($this->request->getPost());
	}

}