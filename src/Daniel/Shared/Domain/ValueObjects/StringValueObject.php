<?php

declare(strict_types=1);

namespace Taller\Daniel\Shared\Domain\ValueObjects;

final class StringValueObject
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $this->setText($text);
    }

    private function setText(string $text)
    {
        if (empty($text))
            throw new \InvalidArgumentException("El valor no puede estar vacio");

        return $text;
    }

    public function value(): string
    {
        return $this->text;
    }

}