<?php

declare(strict_types=1);

namespace Taller\Daniel\Assistant\Domain;

use Taller\Daniel\Dictionary\Domain\Dictionary;

final class Assistant
{
    private $dictionary;

    public function __construct()
    {
        $this->dictionary = new Dictionary();
    }

    public function dictionary(): Dictionary
    {
        return $this->dictionary;
    }

}