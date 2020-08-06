<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Libraries\JwtToken;
use Config\Services;

class BeforeRequest implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null) {
        $ip = $request->getIPAddress();
		//if (!$request->isSecure())
            //force_https();
        
        if(!$request->isValidIP($ip) || !Services::request()->isAJAX() || !Services::request()->hasHeader('Authorization')) {
            return Services::response()->setStatusCode(401);
        }
		
        $authHeader = Services::request()->getHeader('Authorization');
        list($token) = sscanf( $authHeader, 'Authorization: Bearer %s');
        if(!JwtToken::getToken($token)) {
            return Services::response()->setStatusCode(401);
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        // Do something here
    }
}