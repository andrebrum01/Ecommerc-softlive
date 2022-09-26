<?php

namespace Middlewares;

use Core\iRequest;
use Core\iResponse;
use Core\Curl;

class AuthAdmin {
    public static function getUser(iRequest $request, iResponse $response){
        $url = 'http://192.168.0.119/ecommerce/server/account';
        $token = $_COOKIE["token"];


        $objCurl = new Curl();
        $data = $objCurl->JWT($url,$token);
        $objCurl->close();

        $response_data = json_decode($data, true);
        $request->bridge["user"] = $response_data["user"];
    }
    public static function session(iRequest $request, iResponse $response)
    {
        $url = 'http://192.168.0.119/ecommerce/server/account';
        $token = $_COOKIE["token"];


        $objCurl = new Curl();
        $data = $objCurl->JWT($url,$token);
        $objCurl->close();

        $response_data = json_decode($data, true);
        
        $isAdmin = $response_data["user"]["admin"];
        $request->bridge["user"] = $response_data["user"];

        if(!$token)
            $response->redirect("loginPage");
        else if(!$isAdmin)
            $response->redirect("homePage");

    }

}