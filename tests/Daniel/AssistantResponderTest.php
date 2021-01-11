<?php

declare(strict_types=1);

namespace Test\Daniel;

use PHPUnit\Framework\TestCase;
use Taller\Daniel\Assistant\Application\AssistantResponder;
use Taller\Daniel\Assistant\Domain\Assistant;
use Taller\Daniel\Shared\Domain\ValueObjects\StringValueObject;

final class AssistantResponderTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_answer_with_greetings()
    {
        $message = new StringValueObject("hola");
        $response = (new AssistantResponder())->__invoke($message);
        $assistant = new Assistant();

        $this->assertContains($response, $assistant->dictionary()->responses()['saludos']);
    }

    /**
     * @test
     */
    public function it_should_answer_with_help()
    {
        $message = new StringValueObject("ayuda");
        $response = (new AssistantResponder())->__invoke($message);
        $assistant = new Assistant();

        $this->assertContains($response, $assistant->dictionary()->responses()['ayuda']);
    }

    /**
     * @test
     */
    public function it_should_break_when_message_empty()
    {
        $this->expectException(\InvalidArgumentException::class);
        $message = new StringValueObject("qwerty");
        $response = (new AssistantResponder())->__invoke($message);
        $assistant = new Assistant();

        $this->assertContains($response, $assistant->dictionary()->responses()['ayuda']);
    }
}