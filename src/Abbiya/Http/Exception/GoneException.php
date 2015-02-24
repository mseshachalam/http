<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;
use Symfony\Component\HttpFoundation\Response;

class GoneException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Gone', Exception $previous = null, $code = 0)
    {
        parent::__construct(Response::HTTP_GONE, $message, $previous, [], $code);
    }
}
