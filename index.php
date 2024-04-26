<?php
require_once './vendor/autoload.php';
require_once './config/connection.php';
require_once './src/models/productoModel.php';
require_once './src/controllers/productoController.php';


use \FastRoute\Dispatcher as Dispatcher;

$rutas = require_once __DIR__ . '/config/routes.php';
$dispatch = FastRoute\simpleDispatcher(
    function(\FastRoute\RouteCollector $r) use ($rutas){
        foreach($rutas as $ruta){
            $r->addRoute($ruta['method'],$ruta['path'],$ruta['controller']);
        }
    }
);

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if(false !== $pos = strpos($uri,'?')){
    $uri = substr($uri,0,$pos);
}

$uri = rawurldecode($uri);
$informacionRuta = $dispatch->dispatch($httpMethod, $uri);

switch ($informacionRuta[0]) {

    case Dispatcher::FOUND:
        $explode = explode(':', $informacionRuta[1]);
        $accion = $explode[1];
        $controlador = $explode[0];
        $parametros = $informacionRuta[2];
        call_user_func([new $controlador, $accion], $parametros);
        break;

    case Dispatcher::NOT_FOUND:
        echo 'No encontrado';
        break;

}
?>