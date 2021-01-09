<?php

declare(strict_types=1);

namespace Assistant\Assistant\Model;

use Assistant\Dictionary\Model\Dictionary;

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