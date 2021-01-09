<?php

declare(strict_types=1);

final class EmptyArgumentException extends InvalidArgumentException
{
    private $argument;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}