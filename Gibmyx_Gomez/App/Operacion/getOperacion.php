<?php

declare(strict_types=1);

namespace App\Operacion;

final class getOperacion
{
    private $request;

    public function __contrusct(array $request)
    {
        $this->request = $request;
    }

    public function __invoke()
    {
        $operadores = [
          "+",
          "-",
          "*",
          "/"
        ];

        $repuesta =  [
            'operacion' => random_int ( 1 , 100) ." {$operadores[random_int ( 0 , 3)]} ". random_int ( 1 , 100)
        ];

        exit(json_encode($repuesta));
    }
}