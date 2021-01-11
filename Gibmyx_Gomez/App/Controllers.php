<?php

require __DIR__.'/../vendor/autoload.php';

use App\Operacion\getOperacion;
use App\Resultado\getResultado;

header("Content-Type: application/json");
$request = json_decode(file_get_contents('php://input'), true);

$class = [
    "obtener_operacion" => getOperacion::class,
    "validar_resultado_operacion" => getResultado::class,
];

$tipo_peticion = isset($request['tipo_peticion']) && !empty($request['tipo_peticion']) ? $request['tipo_peticion'] : '';

try {

    if(key_exists($tipo_peticion, $class))
         (new $class[$tipo_peticion]())->__invoke($request);

}catch (\Exception $e){
    echo $e->getMessage();
    exit();
}
