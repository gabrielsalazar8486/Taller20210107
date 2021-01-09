<?php

declare(strict_types=1);

final class StringValueObject
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function value()
    {
        if (empty($this->text))
            throw new InvalidArgumentException("El texto no puede estar vacio");

        return $this->text;
    }
}