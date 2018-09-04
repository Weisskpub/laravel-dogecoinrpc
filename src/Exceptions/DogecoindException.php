<?php

namespace Weisskpub\Dogecoin\Exceptions;

use RuntimeException;

class DogecoindException extends RuntimeException
{
    /**
     * Construct new bitcoincashd exception.
     *
     * @param object $error
     *
     * @return void
     */
    public function __construct($error)
    {
        parent::__construct($error['message'], $error['code']);
    }
}
