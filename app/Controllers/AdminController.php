<?php

namespace App\Controllers;

use Core\iRequest;
use Core\iResponse;

class AdminController {

    public static function index(iRequest $request, iResponse $response)
    {
        return $response->status(200)->view("Admin/index", [
            "title"=> "Admin Ecommerc",
            "style"=> "pages/Admin/style@css",
            "styleComponent"=> "components/SideBarAdmin/style@css",
            // "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"]
        ],"AdminTemplate");
    }
    public static function compras(iRequest $request, iResponse $response)
    {
        return $response->status(200)->view("Admin/compras", [
            "title"=> "Admin Ecommerc",
            "style"=> "pages/Admin/style@css",
            "styleComponent"=> "components/SideBarAdmin/style@css",
            // "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"]
        ],"AdminTemplate");
    }
    public static function estoque(iRequest $request, iResponse $response)
    {
        return $response->status(200)->view("Admin/estoque", [
            "title"=> "Admin Ecommerc",
            "style"=> "pages/Admin/style@css",
            "styleComponent"=> "components/SideBarAdmin/style@css",
            // "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"]
        ],"AdminTemplate");
    }
    public static function pedidos(iRequest $request, iResponse $response)
    {
        return $response->status(200)->view("Admin/pedidos", [
            "title"=> "Admin Ecommerc",
            "style"=> "pages/Admin/style@css",
            "styleComponent"=> "components/SideBarAdmin/style@css",
            // "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"]
        ],"AdminTemplate");
    }
    public static function product(iRequest $request, iResponse $response)
    {
        return $response->status(200)->view("Admin/product", [
            "title"=> "Admin Ecommerc",
            "style"=> "pages/Admin/style@css",
            "styleComponent"=> "components/SideBarAdmin/style@css",
            // "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"]
        ],"AdminTemplate");
    }
    public static function uploadBanner(iRequest $request, iResponse $response)
    {
        return $response->status(200)->view("Admin/uploadBanner", [
            "title"=> "Admin Ecommerc",
            "style"=> "pages/Admin/style@css",
            "styleComponent"=> "components/SideBarAdmin/style@css",
            // "ids"=>["OfertasProdutos","PrincipaisProdutos"],
            "user"=>$request->bridge["user"]
        ],"AdminTemplate");
    }

}