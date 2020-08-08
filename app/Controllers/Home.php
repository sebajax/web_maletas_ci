<?php namespace App\Controllers;

use App\Models\HomeModel;
use CodeIgniter\API\ResponseTrait;
use Exception;

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
		if($this->request->getMethod() === 'post') {
			$validation = $this->validate([
                'nombre_completo' => 'required',
                'telefono'        => 'required',
                'email'			  => 'required|valid_email',
                'comentario' 	  => 'required' 
			]);
			if($validation) {
				//Store info in DB
				$homeModel = new HomeModel();
				$homeModel->insert($this->request->getPost());
				//Send Email
				try {
					$parser = \Config\Services::parser();
					$parser->setData($this->request->getPost());
					//$email = \Config\Services::email();
					//$email->setFrom('web@transportesoliveros.cl', $this->request->getVar('nombre_completo'));
					//$email->setTo('contacto@transportesoliveros.cl');
					//$email->setSubject('Contacto web');
					//$email->setMessage($parser->render('email/body'));
					//if($email->send(false)) {
						//var_dump($parser->render('email/body'));
						$data = array(
							'response' => $parser->render('email/body')
						);
						return $this->respond($data);
					//}else {
					//	return $this->failValidationError(ERROR_EMAIL);
					//}
				}catch(Exception $e) {
					return $this->fail(ERROR_EMAIL, 400);
				}
			}else {
				return $this->failValidationError($this->validator->listErrors());
			}
		}else {
			return $this->failValidationError(ERROR_GET_METHOD);
		}
	}
}