<?php

declare(strict_types = 1);

namespace Nylas\Exceptions;

/**
 * Request Failed Or Payment Failed
 */
class RequestFailedException extends NylasException
{
    protected $code = 402;

    protected $message = 'Parameters were valid but the request failed. Or, a credit card must be added to your Organization.';
}
