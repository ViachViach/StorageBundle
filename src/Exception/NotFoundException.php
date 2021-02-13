<?php

declare(strict_types=1);

namespace ViachViach\Storage\Exception;

use ViachViach\Storage\Enum\Response;

class NotFoundException extends AbstractException
{
    public function __construct(string $message="")
    {
        parent::__construct($message, Response::HTTP_NOT_FOUND);
    }
}
