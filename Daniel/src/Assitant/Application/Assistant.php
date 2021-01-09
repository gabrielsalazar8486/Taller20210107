<?php

declare(strict_types=1);

final class Assistant
{
    private $message;

    public function __construct(StringValueObject $message)
    {
        $this->message = $message;
    }

    public function __invoke(): string
    {
        return $this->response();
    }

    private function response(): string
    {

    }
}