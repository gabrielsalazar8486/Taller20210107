<?php

declare(strict_types=1);

namespace Assistant\Assistant\Application;

use Assistant\Assistant\Model\Assistant;
use Assistant\Shared\ValueObjects\StringValueObject;

final class AssistantResponder
{
    private $message;
    private $assistant;

    public function __construct(StringValueObject $message)
    {
        $this->message      = $message;
        $this->assistant    = new Assistant();
    }

    public function __invoke(): string
    {
        return $this->response();
    }

    private function response(): string
    {
        $this->searchResponseFromCategory('saludos');
    }

    private function searchResponseFromCategory(string $category): string
    {
        $categories = $this->assistant->dictionary()->words()[$category];

        foreach ($categories as $category) {
            if (strpos($category, $this->message) !== false)
                $this->randomResponseByCategory($category);
        }
    }

    private function randomResponseByCategory(string $category): string
    {
        $responses = $this->assistant->dictionary()->responses()[$category];
        $randomNumber = rand(0, count($responses));

        return $responses[$randomNumber];
    }
}