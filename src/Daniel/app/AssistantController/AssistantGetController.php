<?php

declare(strict_types=1);

require __DIR__.'/../../vendor/autoload.php';

use App\Assistant\Application\AssistantResponder;
use App\Shared\Domain\ValueObjects\StringValueObject;

try{
    $message = new StringValueObject($_POST['message']);
    $assistantResponder = new AssistantResponder();
    $response = $assistantResponder->__invoke($message);
}catch (InvalidArgumentException $e) {
    $response = $e->getMessage();
}

$response = [
    'message'   => $response
];

echo json_encode($response);