<?php

declare(strict_types=1);

namespace App\Resultado;

final class getResultado
{
    private $request;

    public function __contrusct(array $request)
    {
        $this->request = $request;
    }

    public function __invoke(array $request)
    {


        $valor_original=0;

        $operacion = isset($request['operacion']) && !empty($request['operacion']) ? $request['operacion'] : '';
        $resultado = isset($request['resultado']) && !empty($request['resultado']) ? $request['resultado'] : '';

        if (preg_match("/[0-9\+\-\*\/\^\(\)]/",$operacion)) {
            eval("\$valor_original = $operacion;");
        }

        $repuesta = [
            'resultado' =>  round((float) $resultado, 2),
            'valor_original' =>   round((float) $valor_original, 2),
            'es_igual' =>  round($resultado, 2) == round($valor_original, 2),
        ];
        exit(json_encode($repuesta));
    }
}