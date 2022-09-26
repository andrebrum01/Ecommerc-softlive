<?php

require_once __DIR__."/../config.php";
require_once __DIR__."/../vendor/autoload.php";

$router = new Core\Router("App", APP_URL);

$router->static("/pages", "app/Views/pages", ["js", "css"]);
$router->static("/assets", "app/Views/assets", ["js", "css"]);
$router->static("/components", "app/Views/components", ["js", "css"]);
$router->static("/src", "app/src", ["svg","png","jpg","jpge"]);

// Login Pages
$router->get("/Login","LoginController::index")
->name("loginPage");

// Products Pages
$router->get("/","PageController::index")
->name("homePage")
->middlewares(["AuthAdmin::getUser"]);

// Administrador
$router->get("/admin/dashboard","AdminController::index")
->name("dashBoardPage")
->middlewares(["AuthAdmin::session"]);

$router->get("/admin/compras","AdminController::compras")
->name("comprasPage")
->middlewares(["AuthAdmin::session"]);

$router->get("/admin/estoque","AdminController::estoque")
->name("estoquePage")
->middlewares(["AuthAdmin::session"]);

$router->get("/admin/pedidos","AdminController::pedidos")
->name("pedidosPage")
->middlewares(["AuthAdmin::session"]);

$router->get("/admin/product","AdminController::product")
->name("productPage")
->middlewares(["AuthAdmin::session"]);

$router->get("/admin/desgin","AdminController::uploadBanner")
->name("designPage")
->middlewares(["AuthAdmin::session"]);


$router->dispatch("ErrorController::index");