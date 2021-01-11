<?php

declare(strict_types=1);

namespace Taller\Daniel\Assistant\Application;

use Taller\Daniel\Assistant\Domain\Assistant;
use Taller\Daniel\Shared\Domain\ValueObjects\StringValueObject;

final class AssistantResponder
{
    private $assistant;

    public function __construct()
    {
        $this->assistant    = new Assistant();
    }

    public function __invoke(StringValueObject $message): string
    {
        $categories = $this->assistant->dictionary()->categories();

        foreach ($categories as $category) {
            $response = $this->searchResponseFromCategory($category, $message);

            if ($response)
                return $response;
        }

        throw new \InvalidArgumentException('No entiendo lo que quiere decir');
    }

    /**
     * @return string|void
     */
    private function searchResponseFromCategory(string $category, StringValueObject $message)
    {
        $wordsFromCategory = $this->assistant->dictionary()->words()[$category];

        foreach ($wordsFromCategory as $word) {
            if (strpos($message->value(), $word) !== false)
                return $this->randomResponseByCategory($category);
        }
    }

    private function randomResponseByCategory(string $category): string
    {
        $responses = $this->assistant->dictionary()->responses()[$category];
        $randomNumber = rand(0, count($responses)-1);

        return $responses[$randomNumber];
    }
}