<?php

namespace App\Controllers;

use Core\iRequest;
use Core\iResponse;

class LoginController {

    public static function index(iRequest $request, iResponse $response)
    {
        return $response->status(200)->view("Login/index", [
            "title"=> "Login in Ecommerc",
            "style"=> "pages/Login/style@css",
        ],"loginTemplate");
    }

}