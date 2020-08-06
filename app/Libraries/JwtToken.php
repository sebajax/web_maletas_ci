<?php namespace App\Libraries;

use \Firebase\JWT\JWT;

class JwtToken {

    private static $encrypt = ['HS256'];

    public static function setToken() {
        $key = env("jwt.key");
        $expire     = time() + 60; // Adding 60 seconds
        $payload = array(
			"iss" => site_url(),
			"aud" => site_url(),
			"iat" => time(),
            "nbf" => time(),
            "exp" => $expire
        );
        try {
            return JWT::encode($payload, $key);
        }catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public static function getToken($token) {
        $key = env('jwt.key');
        try {
            $data = JWT::decode($token, $key, self::$encrypt);
            if(!empty($data) && !is_null($data))
                return true;
            else
                return false;
        }catch(\Exception $e) {
            return false;
        }
    }
}