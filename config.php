<?php

define("ROOT", __DIR__);
define("IN_PRODUCTION", false);

define("APP_URL", "http://192.168.0.202/ecommerc");
define("SERVER_URL", "http://192.168.0.119/ecommerce/server/");
define("UPLOAD_URL", "http://192.168.0.119/ecommerce/server/uploads/");

define("DB_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "example",
    "username" => "root",
    "password" => "",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
    ],
]);