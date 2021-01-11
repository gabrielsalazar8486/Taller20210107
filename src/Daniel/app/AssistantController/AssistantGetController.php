<?php

declare(strict_types=1);

//namespace Taller\Daniel\app\AssistantController;

use Taller\Daniel\Assistant\Application\AssistantResponder;
use Taller\Daniel\Shared\Domain\ValueObjects\StringValueObject;

$response = '';
try{
    $message = new StringValueObject($_POST['message']);
    $assistantResponder = new AssistantResponder();
    $response = $assistantResponder->__invoke($message);
}catch (\Exception $e) {
    $response .= $e->getMessage();
}


echo json_encode($response);