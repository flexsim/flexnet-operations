<?php

namespace Flexsim\FlexnetOperations\Exceptions;

use Exception;

class FailedOperation extends Exception
{
    public function __construct(public string $reason)
    {
        parent::__construct("Flexnet Operations Failure: {$this->reason}");
    }
}
