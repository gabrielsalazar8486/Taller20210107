<?php

declare(strict_types=1);

namespace Assistant\Dictionary\Model;

final class Dictionary
{
    private $words = [
        'saludos' => [
            'hola',
            'hey',
            'como estas',
            'saludo'
        ],
        'ayuda' => [
            '!',
            'help',
            'ayuda',
            'necesito'
        ]
    ];

    private $responses = [
        'saludos' => [
            'hola, ¿que tal?',
            '¿cómo vas?',
            'hola mundo :)'
        ],
        'ayuda' => [
            'danos un momento y te ayudamos',
            'espera un segundo',
            'ya llamamos al encargado'
        ]
    ];

    public function responses(): array
    {
        return $this->responses;
    }

    public function words(): array
    {
        return $this->words;
    }

}