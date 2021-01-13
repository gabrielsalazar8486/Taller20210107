<?php

declare(strict_types=1);

namespace App\Assistant\Domain;

use App\Dictionary\Domain\Dictionary;

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