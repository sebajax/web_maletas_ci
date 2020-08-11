<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class BeforeRequest implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null) {
        // Loading needed services
        $jwt = service('jwt');
        $req = service('request');
        $res = service('response');

        $ip = $request->getIPAddress();
        
        // Request validation
        if(!$req->isValidIP($ip) || !$req->isAJAX() || !$req->hasHeader('Authorization')) {
            return $res->setStatusCode(401);
        }
        
        // Token validation
        $authHeader = $req->getHeader('Authorization');
        list($token) = sscanf( $authHeader, 'Authorization: Bearer %s');
        if(!$jwt->getToken($token)) {
            return $res->setStatusCode(401);
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        // Do something here
    }
}