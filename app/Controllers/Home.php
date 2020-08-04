<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController {
	
	use ResponseTrait;

	public function index() {
		echo view('templates/header');
		echo view('home');
		echo view('templates/footer');
	}

	public function sendMessage() {
		if ($this->request->isAJAX()) {
            log_message("debug", "es ajax");
        }else {
			log_message("debug", "NO es ajax");
		}
		return $this->respond($this->request->getPost());
	}

}