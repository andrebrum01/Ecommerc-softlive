<?php

namespace App\Controllers;

use Core\iRequest;
use Core\iResponse;

class PageController {

    public static function index(iRequest $request, iResponse $response)
    {
        return $response
        ->status(200)
        ->view("Home/index", [
            "title"=> "Ecommerc",
            "style"=> "pages/Home/style@css",
            "styleComponent"=> "components/ItemProduct/style@css",
            "styleComponentNavbar"=> "components/NavBar/style@css",
            "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"] ?? null
        ], "layoutTemplate");
    }

    public static function product(iRequest $request, iResponse $response)
    {
        return $response
        ->status(200)
        ->view("Home/product", [
            "title"=> "Ecommerc Product",
            "style"=> "pages/Home/style@css",
            "styleComponent"=> "components/ItemProduct/style@css",
            "styleComponentNavbar"=> "components/NavBar/style@css",
            "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"] ?? null
        ], "layoutTemplate");
    }

    public static function carrinho(iRequest $request, iResponse $response)
    {
        return $response
        ->status(200)
        ->view("Home/carrinho", [
            "title"=> "Ecommerc Product",
            "style"=> "pages/Home/style@css",
            "styleComponent"=> "components/ItemProduct/style@css",
            "styleComponentNavbar"=> "components/NavBar/style@css",
            "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"] ?? null
        ], "layoutTemplate");
    }

    public static function categoria(iRequest $request, iResponse $response)
    {
        return $response
        ->status(200)
        ->view("Home/categoria", [
            "title"=> "Ecommerc Product",
            "style"=> "pages/Home/style@css",
            "styleComponent"=> "components/ItemProduct/style@css",
            "styleComponentNavbar"=> "components/NavBar/style@css",
            "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"] ?? null
        ], "layoutTemplate");
    }

}